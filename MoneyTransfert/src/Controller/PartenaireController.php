<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Entity\Partenaire;
use App\Entity\BankAccount;
use App\Form\PartenaireType;
use App\Form\BankAccountType;
use App\Repository\PartenaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/api")
 */
class PartenaireController extends AbstractController
{
    /**
     * @Route("/", name="partenaireIndex", methods={"GET"})
     */
    public function index(PartenaireRepository $partenaireRepository): Response
    {
        return $this->render('partenaire/index.html.twig', [
            'partenaires' => $partenaireRepository->findAll(),
        ]);
    }

    /**
     * @Route("/partenaire/ajout", name="PartenaireAjout", methods={"POST","GET"})
     */
    public function ajout(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager,ValidatorInterface $validator): Response
    {       
            $values=$request->request->all();
            $Partenaire=new Partenaire();
            $entityManager = $this->getDoctrine()->getManager();
            $Partenaire->setRaisonSocial($values["raisonSocial"]);
            $Partenaire->setNomComplet($values["nomComplet"]);
            $Partenaire->setAdresse($values["adresse"]);
            $Partenaire->setTelephone($values["telephone"]);
            $Partenaire->setEmail($values["email"]);
            $Partenaire->setNinea($values["ninea"]);

            $form = $this->createForm(PartenaireType::class, $Partenaire);
            $form->handleRequest($request);
           
            $errors = $validator->validate($Partenaire);
        if(count($errors)) {
            $errors = $serializer->serialize($errors, 'json');
            return new Response($errors, 500, [
                'Content-Type' => 'application/json'
            ]);
        }
            $entityManager->persist($Partenaire);
            $entityManager->flush();
            /**
             * Ajout d'un admin partenaire
             */
            $user = new User();
            $form = $this->createForm(UserType::class, $user);
            $form->handleRequest($request);
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
                $user->setProfil("adminPartenaire");
                $user->setRoles(["ADMIN_PARTENAIRE"]);
                $user->setStatus("débloqué");
                $part=$entityManager->getRepository(Partenaire::class)->findOneByNinea($values["ninea"]);
                $user->setPartenaire($part);
                $entityManager->persist($user);
                
             /**
             * Ajout d'un compte
             */
            $compte =new BankAccount();
            $form = $this->createForm(BankAccountType::class, $compte);
            $form->handleRequest($request);
            $random=random_int(100,1000000);
            $numeroCompte=$random.''.$values["ninea"];
            $part=$entityManager->getRepository(Partenaire::class)->findOneByNinea($values["ninea"]);
            $compte->setNumeroCompte($numeroCompte);
            $compte->setSolde($values["solde"]);
            $compte->setPartenaire($part);
            $entityManager->persist($compte);

            $entityManager->flush();
            $data = [
                'status' => 201,
                'message' => 'partenaire ajouté'
            ];
    
            return new JsonResponse($data, 201);
}

    /**
     * @Route("/partenaire/{id}", name="PartenaireShow", methods={"GET"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function show(Partenaire $partenaire,PartenaireRepository $partenaireRepo,SerializerInterface $serializer): Response
    {
        $partenaire= $partenaireRepo->find($partenaire->getId());
        $data = $serializer->serialize($partenaire, 'json');
        return new Response($data, 200, [
            'Content-Type' => 'application/json'
        ]);
    }

    /**
     * @Route("/{id}/edit", name="adminPartenaireEdit", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN")
     */
    
    public function edit(Request $request, Partenaire $partenaire,SerializerInterface $serializer,ValidatorInterface $validator,
                         EntityManagerInterface $entityManager): Response
    {
        $data=[];
        $partenaire = $entityManager->getRepository(Partenaire::class)->find($partenaire->getId());
        $encoders = [new JsonEncoder()];
            $normalizers = [
                (new ObjectNormalizer())
                    ->setIgnoredAttributes([
                        //'updateAt'
                    ])
            ];
            $serializer = new Serializer($normalizers, $encoders);
            $jsonObject = $serializer->serialize($partenaire, 'json', [
                'circular_reference_handler' => function ($object) {
                    return $object->getId();
                }
            ]);

        $data = json_decode($jsonObject,true);
        $values = json_decode($request->getContent());
        foreach ($data as $key => $value){
         
            if($key!="id" && !empty($value)) {
                if($key=="matriculePartenaire"){
                    $partenaire->setMatriculePartenaire($values->matricule);
                }
                elseif ($key=="nomComplet") {
                    $partenaire->setNomComplet($values->nomComplet);
                }
               
                elseif ($key=="ninea") {
                    $partenaire->setNinea($values->ninea);
                }
                elseif ($key=="adresse") {
                    $partenaire->setAdresse($values->adresse);
                }
                elseif ($key=="telephone") {
                    $partenaire->setTelephone($values->telephone);
                }
                elseif ($key=="email") {
                    $partenaire->setEmail($values->email);
                }
                elseif ($key=="status") {
                    $partenaire->setStatus($values->status);
                }
               
            }
        }
        $errors = $validator->validate($partenaire);
        if(count($errors)) {
            $errors = $serializer->serialize($errors, 'json');
            return new Response($errors, 500, [
                'Content-Type' => 'application/json'
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
     * @Rest\Get("/partenaire", name="partenaireList")
     */
    public function listAction(SerializerInterface $serializer):Response
    {
        $users = $this->getDoctrine()->getRepository('App:Partenaire')->findAll();
        $encoders = [new JsonEncoder()];
            $normalizers = [
                (new ObjectNormalizer())
                    ->setIgnoredAttributes([
                        //'updateAt'
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
