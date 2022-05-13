<?php

namespace App\Controller;

use App\Entity\Bracket;
use App\Form\BracketType;
use App\Repository\BracketRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/bracket")
 */
class BracketController extends AbstractController
{
    /**
     * @Route("/", name="app_bracket_index", methods={"GET"})
     */
    public function index(BracketRepository $bracketRepository): Response
    {

        return $this->render('tournois/frontBracket.html.twig', [
            'brackets' => $bracketRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_bracket_new", methods={"GET", "POST"})
     */
    public function new(Request $request, BracketRepository $bracketRepository): Response
    {
        $bracket = new Bracket();
        $form = $this->createForm(BracketType::class, $bracket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bracketRepository->add($bracket);
            return $this->redirectToRoute('app_bracket_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bracket/new.html.twig', [
            'bracket' => $bracket,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_bracket_show", methods={"GET"})
     */
    public function show(Bracket $bracket): Response
    {
        return $this->render('bracket/show.html.twig', [
            'bracket' => $bracket,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_bracket_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Bracket $bracket, BracketRepository $bracketRepository): Response
    {
        $form = $this->createForm(BracketType::class, $bracket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bracketRepository->add($bracket);
            return $this->redirectToRoute('app_bracket_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bracket/edit.html.twig', [
            'bracket' => $bracket,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_bracket_delete", methods={"POST"})
     */
    public function delete(Request $request, Bracket $bracket, BracketRepository $bracketRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bracket->getId(), $request->request->get('_token'))) {
            $bracketRepository->remove($bracket);
        }

        return $this->redirectToRoute('app_bracket_index', [], Response::HTTP_SEE_OTHER);
    }
}
