<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Entity\Partenaire;
use App\Entity\BankAccount;
use App\Repository\UserRepository;
use App\Repository\PartenaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\BankAccountRepository;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Lexik\Bundle\JWTAuthenticationBundle\Encoder\JWTEncoderInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/api")
 */
class SecurityController extends AbstractController
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
      $this->passwordEncoder = $passwordEncoder;
    }
    
    
     /**
     * @Route("/register", name="register", methods={"POST"})
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager, 
                            PartenaireRepository $partenaireRepo,SerializerInterface $serializer, ValidatorInterface $validator):Response
    {
        $user = new User();
        $errors=[];
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $values=$request->request->all();
        $form->submit($values);
        $image=$request->files->all()['imageName'];
        $uti=$this->getUser();
       $idPart= $uti->getPartenaire();
       $errorsAssert = $validator->validate($user);
       if(count($errorsAssert)>0) {

          $err = $serializer->serialize($errorsAssert, 'json');
          
           return new Response($err, 500, [
               'content_type '=> 'application/json',
           ]);
       }
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            
            $user->setImageFile($image);
            $entityManager = $this->getDoctrine()->getManager();
            $profil=$values["profil"];
            $roles=[];
            if($profil=="admin"){
                $roles=["ROLE_ADMIN"];
            }
            elseif ($profil=="user") {
                $roles=["ROLE_USERPART"];
            }
            elseif ($profil=="partenaire" || $profil=="adminPartenaire") {
                $roles=["ROLE_ADMINPARTENAIRE"];
            }
            elseif ($profil=="caissier") {
                $roles=["ROLE_CAISSIER"];
            }
            $user->setRoles($roles);
            $user->setPartenaire($idPart);
            $user->setStatus("débloqué");
           
            //die();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
       
                $data = [
                    'status' => 201,
                    'message' => 'L\'utilisateur a été créé'
                ];
                return new JsonResponse($data, 201);
    }

    /**
     * @Route("/user/passwordReset", name="passwordChange", methods={"POST"})
     */
    public function passwordReset(Request $request, UserRepository $userRepo,UserPasswordEncoderInterface $passwordEncoder){
        $utilisateur = new User();
        $form = $this->createForm(UserType::class, $utilisateur);
        $form->handleRequest($request);
        $values=$request->request->all();
        $form->submit($values);
        $utilisateur=$userRepo->findOneByUsername($values["username"]);
        $utilisateur->setPassword(
            $passwordEncoder->encodePassword(
                $utilisateur,
                $form->get('password')->getData()
            )
        );
        $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
       
                $data = [
                    'status' => 201,
                    'message' => 'mot de pass modifié'
                ];

                return new JsonResponse($data, 201);
    }

    /**
     * @Route("/updateImage/{id}", name="uploadImage", methods={"POST"})
     */
    public function updateImage(Request $request, UserRepository $userRepo,User $user){
        $user=$userRepo->find($user->getId());
        $image=$request->files->all()['imageName'];
        $user->setImageFile($image);
        $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
       
                $data = [
                    'status' => 201,
                    'message' => 'image ajouté'
                ];

                return new JsonResponse($data, 201);
    }

    /**
     * @Route("/logina", name="login", methods={"POST"})
     */
   /*  public function login(Request $request)
    {
        $user = $this->getUser();
        return $this->json([
            'username' => $user->getUsername(),
            'roles' => $user->getRoles()
        ]);
    } */

     /**
     * @Rest\Get("/user/users", name="usersList")
     */
    public function listAction(SerializerInterface $serializer):Response
    {
        $users = $this->getDoctrine()->getRepository('App:User')->findAll();
        $encoders = [new JsonEncoder()];
            $normalizers = [
                (new ObjectNormalizer())
                    ->setIgnoredAttributes([
                        'updated_at'
                    ])
            ];
            $serializer = new Serializer($normalizers, $encoders);
            $jsonObject = $serializer->serialize($users, 'json', [
                'circular_reference_handler' => function ($object) {
                    return $object->getId();
                }
            ]);
            
        return new Response($jsonObject, 200, [
            'content_type' => 'application/json'
        ]);
    }

     /**
     * @Route("/users/{id}/edit", name="usersEdit", methods={"GET","POST"})
     */
    
    public function edit(Request $request,UserPasswordEncoderInterface $passwordEncoder, User $user,SerializerInterface $serializer,ValidatorInterface $validator,
                         EntityManagerInterface $entityManager,UserRepository $userRepo): Response
    {
        $values=$request->request->all();
        $entityManager = $this->getDoctrine()->getManager();
        $user = $userRepo->findOneByUsername($values["username"]);
        
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $form->submit($values);
        $user->setPassword(
            $passwordEncoder->encodePassword(
                $user,
                $form->get('password')->getData()
            )
        );
        if($user->getProfil()!="caissier" || $user->getProfil()!="adminPartenaire"){
            $compte=$entityManager->getRepository(BankAccount::class)->find($values["compteId"]);
            
            $user->setBankAccount($compte);
            $compte->setNombreUsers($compte->getNombreUsers()+1);
        }
        
       
        $errors = $validator->validate($user);
        if(count($errors)) {
            $errors = $serializer->serialize($errors, 'json');
            return new Response($errors, 500, [
                'content_type' => 'application/json'
            ]);
        }
        $entityManager->persist($user);
        $entityManager->persist($compte);
        $entityManager->flush();
        $data = [
            'status' => 200,
            'message' => 'L \'utilisateur a bien été mis à jour'
        ];
        return new JsonResponse($data);
 
    }
    
    /**
     * @Route("/users/bloquer", name="userBlock", methods={"GET","POST"})
     */
    public function userBloquer(Request $request, UserRepository $userRepo,EntityManagerInterface $entityManager): Response
    {
        $tableUsers=$this->getDoctrine()->getRepository('App:User')->countByUsername();
        $values = $request->request->all();
        $user=$userRepo->findOneByUsername($values["username"]);
        echo $user->getStatus();
        if($user->getProfil()=="admin" && $tableUsers<=1){

                  $data = [
                    'status' => 200,
                    'message' => 'Il n\'y à qu\'un super-administrateur dans le système une fois bloquer 
                    la plateforme risque de ne plus fonctionner'
                ];
                return new JsonResponse($data);
        }
        else{
            if($user->getStatus()=="bloqué"){
            
                if($user->getProfil()=="admin"){
                    $user->setRoles(["ROLE_ADMIN"]);
                }
                elseif ($user->getProfil()=="user") {
                    $user->setRoles(["ROLE_USER"]);
                }
                elseif ($user->getProfil()=="adminPartenaire") {
                    $user->setRoles(["ROLE_ADMINPARTENAIRE"]);
                }
                $user->setStatus("debloqué");

                $entityManager->flush();
                $data = [
                    'status' => 200,
                    'message' => 'utilisateur debloqué'
                ];
                return new JsonResponse($data);
                
            }
            else {
                $user->setStatus("bloqué");
                $user->setRoles(["ROLE_USERLOCK"]);

                $entityManager->flush();
                $data = [
                    'status' => 200,
                    'message' => 'utilisateur bloqué'
                ];
                return new JsonResponse($data);
            }
        }
    }


     /**
     * @Route("/users/show/{id}", name="userShow", methods={"GET"})
     */
    public function show(User $user,UserRepository $userRepo,SerializerInterface $serializer)
    {
         
         $user= $userRepo->find($user->getId());
        $encoders = [new JsonEncoder()];
        $normalizers = [
            (new ObjectNormalizer())
                ->setIgnoredAttributes([
                    'updated_at'
                ])
        ];
        $serializer = new Serializer($normalizers, $encoders);
        $jsonObject = $serializer->serialize($user, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }
        ]);
        return new Response($jsonObject, 200, [
            'Content-Type' => 'application/json'
        ]);

    }

     /**
     * @Route("/login", name="login", methods={"POST"})
     * @param JWTEncoderInterface $JWTEncoder
     * @throws \Lexik\Bundle\JWTAuthenticationBundle\Exception\JWTEncodeFailureException
     */
    public function log(Request $request, JWTEncoderInterface  $JWTEncoder)
    { 
   
       $values = json_decode($request->getContent());
        $username   = $values->username; 
        $password   = $values->password; 
            $repo = $this->getDoctrine()->getRepository(User::class);
            $user = $repo-> findOneBy(['username' => $username]);
            if(!$user){
                $data = [
                    'code' => 'ko',
                    'message' => 'Username incorrect'
                ];
                return new JsonResponse($data);
            }

            $isValid = $this->passwordEncoder
            ->isPasswordValid($user, $password);
            if(!$isValid){
                $data = [
                    'code' => 'ko',
                    'message' => 'Mot de passe incorect'
                ];
                return new JsonResponse($data);
            }
            if($user->getStatus()=="bloqué"){
                return new JsonResponse($this->json([
                    'code' => 'ko',
                    'message' => 'ACCÈS REFUSÉ veuillez-contacter l\'administrateur!'
                ]));
            }
            $token = $JWTEncoder->encode([
                'username' => $user->getUsername(),
                'roles'=>$user->getRoles(),
                'exp' => time() + 86400 // 1 day expiration
            ]);

            return $this->json([
                'token' => $token
            ]);
    }

     /**
     * @Route("/users/PartenaireUsers", name="PartenaireUsers", methods={"GET","POST"})
     */
    public function partenaireUsers(SerializerInterface $serializer, Request $request,UserRepository $userRepo):Response{
       
        $user=$this->getUser();
        $idPart=$user->getPartenaire();
        $users = $this->getDoctrine()->getRepository('App:User')->findBy(['partenaire'=>$idPart]);
        $encoders = [new JsonEncoder()];
            $normalizers = [
                (new ObjectNormalizer())
                    ->setIgnoredAttributes([
                        'updated_at'
                    ])
            ];
            $serializer = new Serializer($normalizers, $encoders);
            $jsonObject = $serializer->serialize($users, 'json', [
                'circular_reference_handler' => function ($object) {
                    return $object->getId();
                }
            ]);
        return new Response($jsonObject, 200, [
            'Content-Type' => 'application/json'
        ]);
    }
 }