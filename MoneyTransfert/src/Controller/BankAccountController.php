<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Depot;
use App\Entity\Tarifs;
use App\Form\DepotType;
use App\Entity\Recepteur;
use App\Entity\Expediteur;
use App\Entity\Partenaire;
use App\Entity\BankAccount;
use App\Entity\Transaction;
use App\Form\RecepteurType;
use App\Form\ExpediteurType;
use App\Form\BankAccountType;
use App\Form\TransactionType;
use App\Repository\DepotRepository;
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
use App\Repository\TransactionRepository;

/**
 * @Route("/api")
 */
class BankAccountController extends AbstractController
{
    /**
     * @Route("/", name="bankAccountIndex", methods={"GET"})
     */
    public function index(BankAccountRepository $bankAccountRepository): Response
    {
        return $this->render('bank_account/index.html.twig', [
            'bank_accounts' => $bankAccountRepository->findAll(),
        ]);
    }

    /**
     * @Route("/bankAccount/ajout", name="bankAccountAjout", methods={"POST","GET"})
     * isGranted("ROLES_ADMINPARTENAIRE")
     */
    public function ajout(Request $request,SerializerInterface $serializer, EntityManagerInterface $entityManager,ValidatorInterface $validator): Response
    {
        
       
            $bankAccount = new BankAccount();
            $form = $this->createForm(BankAccountType::class, $bankAccount);
            $form->handleRequest($request);
            $values=json_decode($request->getContent());
            $form->submit($values);
            $partenaire=$this->getDoctrine()->getManager()->getRepository(Partenaire::class)->find($values->partenaire);
            $ninea=$partenaire->getNinea();
            $random=random_int(100,1000000);
            $numeroCompte=$random.''.$ninea;
            $bankAccount->setNumeroCompte($numeroCompte);
            $bankAccount->setSolde($values->solde);
            $bankAccount->setPartenaire($partenaire);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($bankAccount);
            $entityManager->flush();
        return new Response('nouveau compte ajouté', Response::HTTP_CREATED);
}

    /**
     * @Route("/bankAccount/{id}", name="bankAccountShow", methods={"GET"})
     * isGranted("ROLES_ADMINPARTENAIRE")
     */
    public function show(BankAccount $bankAcc,BankAccountRepository $bankARepo,SerializerInterface $serializer): Response
    {
        $bankAcc= $bankARepo->find($bankAcc->getId());
        $data = $serializer->serialize($bankAcc, 'json');
        return new Response($data, 200, [
            'Content-Type' => 'application/json'
        ]);
    }

    /**
     * @Route("/bankAccount/{id}/edit", name="BankAEdit", methods={"GET","POST"})
     * isGranted("ROLES_ADMINPARTENAIRE")
     */
    
    public function edit(Request $request, BankAccount $bankA,SerializerInterface $serializer,ValidatorInterface $validator,
                         EntityManagerInterface $entityManager): Response
    {
        $data=[];
        $bankA = $entityManager->getRepository(BankAccount::class)->find($bankA->getId());
        $encoders = [new JsonEncoder()];
            $normalizers = [
                (new ObjectNormalizer())
                    ->setIgnoredAttributes([
                        //'updateAt'
                    ])
            ];
            $serializer = new Serializer($normalizers, $encoders);
            $jsonObject = $serializer->serialize($bankA, 'json', [
                'circular_reference_handler' => function ($object) {
                    return $object->getId();
                }
            ]);

        $data = json_decode($jsonObject,true);
        $values=json_decode($request->getContent());
        foreach ($data as $key => $value){
         
            if($key!="id" && !empty($value)) {

                $bankA->setSolde($values->solde);
               
            }
        }
        $errors = $validator->validate($bankA);
        if(count($errors)) {
            $errors = $serializer->serialize($errors, 'json');
            return new Response($errors, 500, [
                'Content-Type' => 'application/json'
            ]);
        }
        $entityManager->flush();
        $data = [
            'status' => 200,
            'message' => 'Le solde a bien été mis à jour'
        ];
        return new JsonResponse($data);
 
    }

     /**
     * @Rest\Get("/bankAccount", name="compteList")
     * isGranted("ROLES_ADMINPARTENAIRE")
     */
    public function listAction(SerializerInterface $serializer):Response
    {
        $compte = $this->getDoctrine()->getRepository('App:BankAccount')->findAll();
        $encoders = [new JsonEncoder()];
            $normalizers = [
                (new ObjectNormalizer())
                    ->setIgnoredAttributes([
                        //'updateAt'
                    ])
            ];
            $serializer = new Serializer($normalizers, $encoders);
            $jsonObject = $serializer->serialize($compte, 'json', [
                'circular_reference_handler' => function ($object) {
                    return $object->getId();
                }
            ]);
        return new Response($jsonObject, 200, [
            'Content-Type' => 'application/json'
        ]);
    }

    #####################################################################################################
    #####################################################################################################

      /**
     * @Route("/depot/ajout", name="depotAjout", methods={"POST"})
     * isGranted("ROLES_CAISSIER")
     */
    public function new(Request $request): Response
    {
        $depot = new Depot();
        $values=json_decode($request->getContent());
        $caissier=$this->getDoctrine()->getManager()->getRepository(User::class)->find($values->caissier);
        $compteId=$caissier->getBankAccount();
        $compte=$this->getDoctrine()->getManager()->getRepository(BankAccount::class)->find($compteId);
        $depot->setCaissier($caissier);
        $depot->setBankAccount($compte);
        $depot->setDateDepot(new \DateTime('now'));
        $depot->setMontant($values->montant);
        $solde=$compte->getSolde() + $depot->getMontant();
        $compte->setSolde($solde);
        $form = $this->createForm(DepotType::class, $depot);
        $form->handleRequest($request);
        $form->submit($values);
        $form = $this->createForm(BankAccountType::class, $compte);
        $form->handleRequest($request);
        $form->submit($values);
            $entityManager = $this->getDoctrine()->getManager();
            $em= $this->getDoctrine()->getManager();
            $entityManager->persist($depot);
            $em->persist($compte);
            $em->flush();
            $entityManager->flush();

           

        
        $data = [
            'status' => 201,
            'message' => 'dépot ajouté'
        ];

        return new JsonResponse($data, 201);
    }

    ######################################################################################################
    ######################################################################################################

    /**
     * @Route("/transaction/envoie", name="transaction", methods={"POST"})
     */

     public function envoie(Request $request,EntityManagerInterface $entityManager):Response
     {
     ##############################################################################################
     ################################ Infos Expediteur ##############################################
        $values=$request->request->all();
        print_r($values);
        $exp=new Expediteur();
        $form = $this->createForm(ExpediteurType::class, $exp);
        $form->handleRequest($request);
        $form->submit($values);
        $entityManager->persist($exp);
     ##############################################################################################
     ################################ Infos Recepteur ##############################################
        $recep= new Recepteur();
        $form = $this->createForm(RecepteurType::class, $recep);
        $form->handleRequest($request);
        $form->submit($values);
        $entityManager->persist($recep);
     #################################################################################################
     ################################ Infos Transaction ##############################################
        $transact=new Transaction();
        $form = $this->createForm(TransactionType::class, $transact);
        $transact->setDateTransaction(new \DateTime('now'));
        $form->handleRequest($request);
        $form->submit($values);
        
        
        
        $montant=$values["montant"];
        $tarif=$entityManager->getRepository(Tarifs::class)->findAll();
             $data=[];
            $encoders = [new JsonEncoder()];
            $normalizers = [
                (new ObjectNormalizer())
                    ->setIgnoredAttributes([
                        'updated_at'
                    ])
            ];
            $serializer = new Serializer($normalizers, $encoders);
            $jsonObject = $serializer->serialize($tarif, 'json', [
                'circular_reference_handler' => function ($object) {
                    return $object->getId();
                }
            ]);

        $data = json_decode($jsonObject,true);
            foreach ($data as $key) {
                if($montant >= $key["borneInferieure"] && $montant <= $key["borneSuperieure"]){
                    $transact->setFrais($key["valeur"]);
                    break;
                }
            }
            $frais=$transact->getFrais();
            $gain=($frais*40)/100;
            $taxeEtat=($frais*30)/100;
            $comPart=($frais*10)/100;
            $transact->setGain($gain);
            $transact->setTaxeEtat($taxeEtat);
            $transact->setCommissionPartenaire($comPart);
            $transact->setType("envoie");
            $transact->setDateEnvoie(new \DateTime('now'));
            
            $transact->setExpediteur($exp);
            $transact->setRecepteur($recep);
            $random=random_int(100,1000000);
            $user=$this->getUser();
            $transact->setUser($user);
            $code=$random.''.$montant;
            $transact->setCode($code);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($transact);
            $entityManager->flush();



        $data = [
            'status' => 201,
            'message' => 'Envoie effectuée'
        ];
        return new JsonResponse($data, 201);
     }

     /**
     * @Route("/transaction/retrait", name="transactionRetrait", methods={"POST"})
     */

    public function retrait(Request $request,EntityManagerInterface $entityManager,TransactionRepository $tranRepo):Response{

        $values=json_decode($request->getContent());
        $transact=new Transaction();
        $transaction=$tranRepo->findOneByCode($values->code);
        if($transaction==NULL){
            $data = [
                'status' => 201,
                'message' => 'Code invalide'
            ];
        }
        else{
            $transact->setExpediteur($transaction->getExpediteur());
            $transact->setRecepteur($transaction->getRecepteur());
            $transact->setMontant($transaction->getMontant());
            $transact->setCode($values->code);
            $user=$this->getUser();
            $transact->setUser($user);
            $frais=$transaction->getFrais();
            $comPart=($frais*20)/100;
            $transact->setCommissionPartenaire($comPart);
            $transact->setType("retrait");
            $transact->setDateRetrait(new \DateTime('now'));
            $transact->setDateTransaction(new \DateTime('now'));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($transact);
            $entityManager->flush();
            $data = [
                'status' => 201,
                'message' => 'Retrait effectuée'
            ];
        }
        
        return new JsonResponse($data, 201);
    }

    /**
     * @Rest\Get("/usersOp", name="userListOp")
     */

    public function listUserOp(TransactionRepository $transactRepo,SerializerInterface $serializer){
        $transact=$transactRepo->findUserOp();
        $data = $serializer->serialize($transact, 'json');
       return new Response($data, 200, [
           'Content-Type' => 'application/json'
       ]);
        
    }

}
