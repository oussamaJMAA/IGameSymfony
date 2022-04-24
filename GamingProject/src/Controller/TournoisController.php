<?php

namespace App\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;

use App\Entity\Tournois;
use App\Form\TournoisType;
use App\Entity\Participation;
use Symfony\Component\Mime\Email;
use App\Repository\TournoisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
/**
 * @Route("/tournois")
 */
class TournoisController extends AbstractController
{


    /**
     * @Route("/", name="app_tournois_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $tournois = $entityManager
            ->getRepository(Tournois::class)
            ->findAll();
            

        return $this->render('tournois/index.html.twig', [
            'tournois' => $tournois,
        ]);
    }

   
 /**
     * @Route("/participation", name="Affiche_Participation", methods={"GET"})
     */
    public function Affiche_Participation(EntityManagerInterface $entityManager): Response
    {
        $participations = $entityManager
        ->getRepository(Participation::class)
        ->findAll();

        return $this->render('tournois/participation.html.twig', [
            'participation' => $participations ,
        ]);
    }
    /**
     * @Route("/front", name="front", methods={"GET"})
     */
    public function index2(EntityManagerInterface $entityManager): Response
    {
        $tournois = $entityManager
            ->getRepository(Tournois::class)
            ->findAll();

            $a = $entityManager
            ->getRepository(Tournois::class)
            ->findAll();
$a=1;
        return $this->render('tournois/front.html.twig', [
            'tournois' => $tournois,
            'a'=>$a
        ]);
    }


    /**
     * @Route("/new", name="app_tournois_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $tournoi = new Tournois();
        $form = $this->createForm(TournoisType::class, $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tournoi);
            $entityManager->flush();
 
            return $this->redirectToRoute('app_tournois_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tournois/new.html.twig', [
            'tournoi' => $tournoi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_tournois_show", methods={"GET"})
     */
    public function show(Tournois $tournoi): Response
    {
        return $this->render('tournois/show.html.twig', [
            'tournoi' => $tournoi,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_tournois_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Tournois $tournoi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TournoisType::class, $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_tournois_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tournois/edit.html.twig', [
            'tournoi' => $tournoi,
            'form' => $form->createView(),
        ]);
    }
        /**
     * @Route("/edit/{id}", name="app_tournois_edit", methods={"GET", "POST"})
     */
    public function edit2(Request $request, Tournois $tournoi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TournoisType::class, $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_tournois_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tournois/edit.html.twig', [
            'tournoi' => $tournoi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_tournois_delete", methods={"POST"})
     */
    public function delete(Request $request, Tournois $tournoi, EntityManagerInterface $entityManager,$id,MailerInterface $mailer): Response
    {
    
        if ($this->isCsrfTokenValid('delete'.$tournoi->getId(), $request->request->get('_token'))) {
            $entityManager->remove($tournoi);
            $entityManager->flush();
        }

  return $this->redirectToRoute('app_tournois_index', [], Response::HTTP_SEE_OTHER);
      
    }




  
   
}
