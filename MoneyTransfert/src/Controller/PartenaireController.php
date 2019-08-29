<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
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
use App\Entity\Depot;

/**
 * @Route("/api")
 */
class PartenaireController extends AbstractController
{
    /**
     * @Route("/", name="partenaireIndex", methods={"GET"})
     */
    public function index(PartenaireRepository $partenaireRepository,EntityManagerInterface $entityManager)
    {
         // Configure Dompdf according to your needs
         $pdfOptions = new Options();
         $pdfOptions->set('defaultFont', 'Arial');
         
         // Instantiate Dompdf with our options
         $dompdf = new Dompdf($pdfOptions);
         $date= new \DateTime('now');
         // Retrieve the HTML generated in our twig file
         $part=$entityManager->getRepository(Partenaire::class)->findById();
         $html = $this->renderView('partenaire/contrat.html.twig', [
            'partenaires' => $part,
            'dateContrat'=> $date
        ]);
         
         // Load HTML to Dompdf
         $dompdf->loadHtml($html);
         
         // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
         $dompdf->setPaper('A4', 'portrait');
 
         // Render the HTML as PDF
         $dompdf->render();
 
         // Output the generated PDF to Browser (force download)
         $dompdf->stream("listePartenaire.pdf", [
             "Attachment" => false
         ]);
    }

    /**
     * @Route("/partenaire/ajout", name="PartenaireAjout", methods={"POST","GET"})
     */
    public function ajout(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager,ValidatorInterface $validator): Response
    {       
            $Partenaire=new Partenaire();
            $form = $this->createForm(PartenaireType::class, $Partenaire);
            $form->handleRequest($request);
            $values=$request->request->all();
            $form->submit($values);
            $entityManager = $this->getDoctrine()->getManager();
           
            $entityManager->persist($Partenaire);
            

            $errors = $validator->validate($Partenaire);
        if(count($errors)) {
            $errors = $serializer->serialize($errors, 'json');
            return new Response($errors, 500, [
                'Content-Type' => 'application/json'
            ]);
        }
             /**
             * Ajout d'un compte
             */
            $compte =new BankAccount();
            $form = $this->createForm(BankAccountType::class, $compte);
            $form->handleRequest($request);
            $form->submit($values);
            $random=random_int(100,1000000);
            $numeroCompte=$random.''.$values["ninea"];
           // $part=$entityManager->getRepository(Partenaire::class)->findOneByNinea($values["ninea"]);
            $compte->setNombreUsers(1);
            $compte->setNumeroCompte($numeroCompte);
            $compte->setPartenaire($Partenaire);
            $entityManager->persist($compte);

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
                        $form->get('password')->getData()
                    )
                );
                
                $user->setImageFile($image);
                $user->setProfil("adminPartenaire");
                $user->setRoles(["ADMIN_PARTENAIRE"]);
                $user->setStatus("débloqué");
                //$part=$entityManager->getRepository(Partenaire::class)->findOneByNinea($values["ninea"]);
                $user->setPartenaire($Partenaire);
                $user->setBankAccount($compte);
                $entityManager->persist($user);
                
            
            $entityManager->flush();
            $data = [
                'status' => 201,
                'message' => 'partenaire ajouté'
            ];
    
            return new JsonResponse($data, 201);
}

    /**
     * @Route("/show/{id}", name="PartenaireShow", methods={"GET"})
     */
    public function show(Partenaire $partenaire,PartenaireRepository $partenaireRepo,SerializerInterface $serializer)
    {
         
         $partenaire= $partenaireRepo->find($partenaire->getId());
        $encoders = [new JsonEncoder()];
        $normalizers = [
            (new ObjectNormalizer())
                ->setIgnoredAttributes([
                    'updated_at'
                ])
        ];
        $serializer = new Serializer($normalizers, $encoders);
        $jsonObject = $serializer->serialize($partenaire, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }
        ]);
        return new Response($jsonObject, 200, [
            'Content-Type' => 'application/json'
        ]);

    }

    /**
     * @Route("/{id}/edit", name="adminPartenaireEdit", methods={"GET","POST"})
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
                        'updated_at'
                    ])
            ];
            $serializer = new Serializer($normalizers, $encoders);
            $jsonObject = $serializer->serialize($partenaire, 'json', [
                'circular_reference_handler' => function ($object) {
                    return $object->getId();
                }
            ]);
            $form = $this->createForm(PartenaireType::class, $partenaire);
            $form->handleRequest($request);
            $values=$request->request->all();
            $form->submit($values);
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
            'message' => 'Le partenaire a bien été mis à jour'
        ];
        return new JsonResponse($data);
 
    }

    /**
     * @Rest\Get("/partenaire/partenaires", name="partenaireList")
     */
    public function listAction(SerializerInterface $serializer):Response
    {
        $partenaire = $this->getDoctrine()->getRepository('App:Partenaire')->findAll();
        $encoders = [new JsonEncoder()];
            $normalizers = [
                (new ObjectNormalizer())
                    ->setIgnoredAttributes([
                        'updated_at'
                    ])
            ];
            $serializer = new Serializer($normalizers, $encoders);
            $jsonObject = $serializer->serialize($partenaire, 'json', [
                'circular_reference_handler' => function ($object) {
                    return $object->getId();
                }
            ]);
        return new Response($jsonObject, 200, [
            'Content-Type' => 'application/json'
        ]);
        
    }

    /**
     * @Rest\Get("/partenaireOp", name="partenaireListOp")
     */

     public function listPartOp(PartenaireRepository $partenaireRepo,SerializerInterface $serializer){
         $partenaire=$partenaireRepo->findPartOp();
         $data = $serializer->serialize($partenaire, 'json');
        return new Response($data, 200, [
            'Content-Type' => 'application/json'
        ]);
         
     }

     /**
     * @Route("/bloquer", name="partenairelocked", methods={"GET","POST"})
     */
    public function partenaireBloquer(Request $request, PartenaireRepository $partRepo,EntityManagerInterface $entityManager): Response
    {
        $values = json_decode($request->getContent());
        $part=$partRepo->findOneByNinea($values->ninea);
        
            if($part->getStatus()=="inactif"){
                $part->setStatus("actif");
                $id=$part->getId();
                $stmt=$this->getDoctrine()->getRepository('App:User')->findById($id);
                $i=0;
                while ($donnees=$stmt->fetchAll()) {
                   while ($i<sizeof($donnees)) {
                    $users=$this->getDoctrine()->getRepository('App:User')->findOneByUsername($donnees[$i]["username"]);
                    print_r($donnees[$i]["username"]);
                    $users->setStatus("debloqué");
                    $entityManager->persist($users);
                    $entityManager->flush();
                    $i=$i+1;
                   }
                }
                $entityManager->flush();
                $data = [
                    'status' => 200,
                    'message' => 'partenaire debloqué'
                ];
                
                return new JsonResponse($data);
                
            }
            else {
                $part->setStatus("inactif");
                $entityManager->flush();
                $id=$part->getId();
                $stmt=$this->getDoctrine()->getRepository('App:User')->findById($id);
                $i=0;
                while ($donnees=$stmt->fetchAll()) {
                   while ($i<sizeof($donnees)) {
                    $users=$this->getDoctrine()->getRepository('App:User')->findOneByUsername($donnees[$i]["username"]);
                    print_r($donnees[$i]["username"]);
                    $users->setStatus("bloqué");
                    $entityManager->persist($users);
                    $entityManager->flush();
                    $i=$i+1;
                   }
                }
                $data = [
                    'status' => 200,
                    'message' => 'partenaire bloqué'
                ];
                return new JsonResponse($data);
            }
    }

}
