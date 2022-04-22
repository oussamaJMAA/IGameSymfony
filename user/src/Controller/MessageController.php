<?php

namespace App\Controller;

use App\Entity\Trash;
use App\Form\TestType;
use App\Entity\Message;
use App\Form\MessageType;
use App\Repository\TrashRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MessageController extends AbstractController
{
    /**
     * @Route("/admin/message", name="app_message")
     */
    public function index(Request $request,TrashRepository $t): Response
    {
        return $this->render('message/index.html.twig',[
            'countTrash'=>$t->findAll()
        ]);
    
    }
    /**
     * @Route("/admin/send", name="app_send")
     */
    public function send(Request $request): Response{
        $message=new Message();
   $form = $this->createForm(MessageType::class, $message);
   $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
$message->setSender($this->getUser());
$em=$this->getDoctrine()->getManager();
$em->persist($message);
$em->flush();
 $this->addFlash ("message", "Message envoyé avec succès.");
return $this->redirectToRoute("app_message");


    }
return $this->render('message/send.html.twig',[
    'form' =>$form->createView()
]);
    }

    * @Route("/admin/delete/{id}", name="delete_message")
    */
    public function delete_message(Message $message): Response{
        $trash=new Trash();
        $em = $this->getDoctrine()->getManager();
        $trash->setMessage($message->getMessage());
        $trash->setSenderId($message->getSender()->getUsername());
        $trash->setRecipientId($message->getRecipient()->getUsername());
        $em->persist($trash);
        $em->flush();
       
        $em->remove($message);
        $em->flush();
        return $this->redirectToRoute('app_message');
        }
    /** 
    * @Route("/admin/sent", name="sent")
    */
    public function sent(): Response{
        
        return $this->render('message/sent.html.twig');
        }

        /** 
    * @Route("/admin/read_sent/{id}", name="read_sent")
    */
    public function read_sent(Message $message): Response{
        $em = $this->getDoctrine()->getManager();
        $em->persist($message);
        $em->flush();
        return $this->render('message/read_sent.html.twig', compact("message"));
        }
    



  









}
