<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Depot;
use App\Form\DepotType;
use App\Entity\BankAccount;
use App\Form\BankAccountType;
use App\Repository\UserRepository;
use App\Repository\DepotRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/api")
 */
class DepotController extends AbstractController
{
    /**
     * @Route("/", name="depot_index", methods={"GET"})
     */
    public function index(DepotRepository $depotRepository): Response
    {
        return $this->render('depot/index.html.twig', [
            'depots' => $depotRepository->findAll(),
        ]);
    }

    /**
     * @Route("/depot/ajouts", name="depotAjouts", methods={"POST"})
     * isGranted("ROLES_CAISSIER")
     */
    public function new(Request $request): Response
    {
        $depot = new Depot();
        $values=json_decode($request->getContent());
        $caissier=$this->getDoctrine()->getManager()->getRepository(User::class)->find($values->caissier);
        $compte=$caissier->getBankAccount();
        $compte=$this->getDoctrine()->getManager()->getRepository(BankAccount::class)->find($compte);
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

    /**
     * @Route("/{id}", name="depot_show", methods={"GET"})
     */
    public function show(Depot $depot): Response
    {
        return $this->render('depot/show.html.twig', [
            'depot' => $depot,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="depot_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Depot $depot): Response
    {
        $form = $this->createForm(DepotType::class, $depot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('depot_index');
        }

        return $this->render('depot/edit.html.twig', [
            'depot' => $depot,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="depot_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Depot $depot): Response
    {
        if ($this->isCsrfTokenValid('delete'.$depot->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($depot);
            $entityManager->flush();
        }

        return $this->redirectToRoute('depot_index');
    }
}
