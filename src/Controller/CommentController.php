<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Publication;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/comment")
 */
class CommentController extends AbstractController
{
    /**
     * @Route("/", name="app_comment_index", methods={"GET"})
     */
    public function index(CommentRepository $commentRepository, PaginatorInterface $paginator,Request $request): Response
    {

    $comments = $this->getDoctrine()
    ->getRepository(Comment::class)
    ->findAll();
    $commentss = $paginator->paginate($comments,$request->query->getInt('page',1),2);
        return $this->render('comment/index.html.twig', [
            'comments' => $commentss,
        ]);
    }

    /**
     * @Route("/new", name="app_comment_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CommentRepository $commentRepository): Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$comment->getId()) {
                $comment->setCreatedAt(new \DateTimeImmutable());
            }
            $commentRepository->add($comment);
            
            $user = "User";

        $basic  = new \Nexmo\Client\Credentials\Basic('88952883', 'SDoQDilbLEI5NqmM');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' => '21623035323',
            'from' => 'IGAME',
            'text' => 'someone has commented on your post!'
        ]);
            return $this->redirectToRoute('app_comment_index', [], Response::HTTP_SEE_OTHER);

        }

        return $this->render('comment/new.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
        
     
    }

    /**
     * @Route("/{id}", name="app_comment_show", methods={"GET"})
     */
    public function show(Comment $comment): Response
    {
        return $this->render('comment/show.html.twig', [
            'comment' => $comment,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_comment_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Comment $comment, CommentRepository $commentRepository): Response
    {
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $commentRepository->add($comment);
            return $this->redirectToRoute('app_comment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('comment/edit.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_comment_delete", methods={"POST"})
     */
    public function delete(Request $request, Comment $comment, CommentRepository $commentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$comment->getId(), $request->request->get('_token'))) {
            $commentRepository->remove($comment);
        }

        return $this->redirectToRoute('app_comment_index', [], Response::HTTP_SEE_OTHER);
    }

    /** 
     * @Route("/asearch",name="ajax_search",methods={"GET"})
     * return Mixed
     */
    
    public function searchAction(Request $request ,CommentRepository  $repository)
    {
        dd(1);
        $em = $this->getDoctrine()->getManager();
        $requestString =$request->query->get('q');
          dd($requestString);
        $posts =  $repository->findByAuteur($requestString);
        dd($posts);
        if(!$posts) {
            $result['posts']['error'] = "Aucun Comment avec ce nom :( ";
        } else {
            $result['posts'] = $this->getRealEntities($posts);
        }
        return new Response(json_encode($result));
        
    }


    public function getRealEntities($posts)
    {
       dd($posts);

        foreach ($posts as $key => $value){
            //dd($value['cv']);
            $realEntities[$value['id']] = [$value['contenu']];
        }

        return $realEntities;
    }

  
}
