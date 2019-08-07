<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
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
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\BankAccount;

/**
 * @Route("/api")
 */
class SecurityController extends AbstractController
{
    
     /**
     * @Route("/register", name="register", methods={"POST"})
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager, SerializerInterface $serializer, ValidatorInterface $validator):Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $values=$request->request->all();
        $form->submit($values);
        $image=$request->files->all()['imageName'];
        
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            
            $user->setImageFile($image);
            $profil=$values["profil"];
            $roles=[];
            if($profil=="admin"){
                $roles=["ROLE_ADMIN"];
            }
            elseif ($profil=="user") {
                $roles=["ROLE_USER"];
            }
            elseif ($profil=="partenaire" || $profil=="adminPartenaire") {
                $roles=["ROLE_ADMINPARTENAIRE"];
            }
            elseif ($profil=="caissier") {
                $roles=["ROLE_CAISSIER"];
            }
            $user->setRoles($roles);
            $errors = $validator->validate($user);
            if(count($errors)) {
                $errors = $serializer->serialize($errors, 'json');
                return new Response($errors, 500, [
                    'content_type '=> 'application/json'
                ]);
            }

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
     * @Route("/login", name="login", methods={"POST"})
     */
    public function login(Request $request)
    {
        $user = $this->getUser();
        return $this->json([
            'username' => $user->getUsername(),
            'roles' => $user->getRoles()
        ]);
    }

     /**
     * @Rest\Get("/users", name="usersList")
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
    
    public function edit(Request $request, User $user,SerializerInterface $serializer,ValidatorInterface $validator,
                         EntityManagerInterface $entityManager): Response
    {
        $values=$request->request->all();
        $image=$request->files->all()['imageName'];
        $data=[];
        $username="username";
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($user->getId());
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

    $data = json_decode($jsonObject,true);
        foreach ($data as $key => $value){
         
            if($key!="id" && !empty($value)) {

                if ($key==$username) {
                    $user->setUsername($values["username"]);
                }
                elseif ($key=="plainPassword") {
                    $user->setPassWord($values["plainPassword"]);
                }
                elseif ($key=="profil") {
                    $user->setProfil($values["profil"]);
                }
                elseif ($key=="status") {
                    $user->setStatus($values["status"]);
                }
                elseif ($key=="nomComplet") {
                    $user->setNomComplet($values["nomComplet"]);
                }
                elseif ($key=="adresse") {
                    $user->setAdresse($values["adresse"]);
                }
                elseif ($key=="telephone") {
                    $user->setTelephone($values["telephone"]);
                }
                elseif ($key=="imageName") {
                    $user->setImageFile($image);
                }
               
            }
        }
        $errors = $validator->validate($user);
        if(count($errors)) {
            $errors = $serializer->serialize($errors, 'json');
            return new Response($errors, 500, [
                CONTENT => TYPE
            ]);
        }
        $entityManager->flush();
        $data = [
            'status' => 200,
            'message' => 'L \'utilisateur a bien été mis à jour'
        ];
        return new JsonResponse($data);
 
    }
    /**
     * @Route("/users/bloquer", name="userBlock", methods={"GET","POST"})
     *  @Route("/users/debloquer", name="userDeblock", methods={"GET","POST"})
     */
    public function userBloquer(Request $request, UserRepository $userRepo,EntityManagerInterface $entityManager): Response
    {
        $tableUsers=$this->getDoctrine()->getRepository('App:User')->countByUsername();
        $values = json_decode($request->getContent());
        $user=$userRepo->findOneByUsername($values->username);
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
}