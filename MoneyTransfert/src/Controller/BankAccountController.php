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
use App\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

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
     */
    public function listAction(SerializerInterface $serializer):Response
    {
        $compte = $this->getDoctrine()->getRepository('App:BankAccount')->findAll();
        $encoders = [new JsonEncoder()];
            $normalizers = [
                (new ObjectNormalizer())
                    ->setIgnoredAttributes([
                        'updated_at'
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
     * @Route("/bankAccount/depot/ajout", name="depotAjout", methods={"POST"})
     */
    public function depot(Request $request,BankAccountRepository $bankARepo, ValidatorInterface $validator, SerializerInterface $serializer): Response
    {
        $depot = new Depot();
        $values=$request->request->all();
        $caissier=$this->getUser();
       $idCompte=$values["compte"];
       $compte=$bankARepo->find($idCompte);
        $depot->setCaissier($caissier);
        $depot->setBankAccount($compte);
        $depot->setDateDepot(new \DateTime('now'));
        $depot->setMontant($values["montant"]);
        $solde=$compte->getSolde() + $depot->getMontant();
        $compte->setSolde($solde);
        $form = $this->createForm(DepotType::class, $depot);
        $form->handleRequest($request);
        $form->submit($values);
        $errors = $validator->validate($depot);
        if(count($errors)) {
            $errors = $serializer->serialize($errors, 'json');
            
            return new Response($errors, 500, [
                'Content-Type' => 'application/json',
                'message'=>'La valeur minimum autorisée est 75000'
            ]);
        }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($depot);
            $entityManager->persist($compte);
            $entityManager->flush();

           

        
        $data = [
            'status' => 201,
            'message' => 'dépot ajouté'
        ];

        return new JsonResponse($data, 201);
    }

    /**
     * @Route("/bankAccount/partenaireCompte", name="BankAPartCompte", methods={"GET","POST"})
     */
    public function compteParte(SerializerInterface $serializer, Request $request,UserRepository $userRepo):Response{
        $values=$request->request->all();
        $user=$userRepo->findOneByUsername($values["username"]);
        $idPart=$user->getPartenaire();
        $compte = $this->getDoctrine()->getRepository('App:BankAccount')->findBy(['partenaire'=>$idPart]);
        $encoders = [new JsonEncoder()];
            $normalizers = [
                (new ObjectNormalizer())
                    ->setIgnoredAttributes([
                        'updated_at'
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
            $compte=$user->getBankAccount();
            $solde=$compte->getSolde()+$gain;
            $compte->setSolde($solde);
            $code=$random.''.$montant;
            $transact->setCode($code);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($transact);
            $entityManager->persist($compte);
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

        $values=$request->request->all();
        $transact=new Transaction();
        $nbCode=$tranRepo->countByCode($values["code"]);
        //var_dump($nbCode);die();
        $transaction=$tranRepo->findOneByCode($values["code"]);

        $transact->setExpediteur($transaction->getExpediteur());
            $transact->setRecepteur($transaction->getRecepteur());
            $transact->setMontant($transaction->getMontant());
            $transact->setCode($values["code"]);
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
       
        
        return new JsonResponse($data, 201);
    }

    /**
     * @Rest\Get("/usersOp", name="userListOp")
     */

    public function listUserOp(TransactionRepository $transactRepo,SerializerInterface $serializer){
        $user=$this->getUser();
        $part=$user->getPartenaire();
        $transact=$transactRepo->findUserOp($part->getId());
        $encoders = [new JsonEncoder()];
            $normalizers = [
                (new ObjectNormalizer())
                    ->setIgnoredAttributes([
                        'updated_at'
                    ])
            ];
            $serializer = new Serializer($normalizers, $encoders);
            $jsonObject = $serializer->serialize($transact, 'json', [
                'circular_reference_handler' => function ($object) {
                    return $object->getId();
                }
            ]);
        return new Response($jsonObject, 200, [
            'Content-Type' => 'application/json'
        ]);
        
    }

    /**
     * @Rest\Post("/recupBeneficiaire", name="recupBeneficiaire")
     */

    public function recupBeneficiaire(TransactionRepository $transactRepo,SerializerInterface $serializer, Request $request){
        $values=$request->request->all();
        $nbCode=$transactRepo->countByCode($values["code"]);
        
            if($nbCode>1){
                
                $lastCode=$transactRepo->findTransactCode($values["code"]);
                if($lastCode->getType()=="retrait"){
                    $data = [
                        'status' => 400,
                        'message' => 'Argent retiré'
                    ];
                }
                elseif($lastCode->getType()=="retourné"){
                    $data = [
                        'status' => 400,
                        'message' => 'Argent retourné'
                    ];
                    
                }
                return new JsonResponse($data,400);
            }
            elseif ($nbCode==1) {
                $transact=$transactRepo->findOneByCode($values["code"]);
                $beneficiaire=$transact->getRecepteur();
                $encoders = [new JsonEncoder()];
            $normalizers = [
                (new ObjectNormalizer())
                    ->setIgnoredAttributes([
                        'updated_at'
                    ])
            ];
            $serializer = new Serializer($normalizers, $encoders);
            $jsonObject = $serializer->serialize($beneficiaire, 'json', [
                'circular_reference_handler' => function ($object) {
                    return $object->getId();
                }
            ]);
            return new Response($jsonObject, 200, [
                'Content-Type' => 'application/json'
            ]);
            }

            else{
                $data = [
                    'status' => 400,
                    'message' => 'Code invalide'
                ];

                return new JsonResponse($data,400);
            }
        
       
    }

}
