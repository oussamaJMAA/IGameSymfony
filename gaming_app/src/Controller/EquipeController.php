<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Form\EquipeType;
use App\Form\EquipeFrontType;
use App\Security\EmailVerifier;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

/**
 * @Route("/equipe")
 */
class EquipeController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }
    /**
     * @Route("/", name="app_equipe_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $equipes = $entityManager
            ->getRepository(Equipe::class)
            ->findAll();

        return $this->render('equipe/index.html.twig', [
            'equipes' => $equipes,
        ]);
    }
 
    /**
     * @Route("/newequipe/json", name="app_equipe_json", methods={"GET", "POST"})
     */
    public function new_json( EntityManagerInterface $entityManager,MailerInterface $mailer,NormalizerInterface $Normalizer,Request $request )
    {
       
$em = $this->getDoctrine()->getManager();
$tournois = new Equipe();
$tournois->setNomEquipe($request->get('N'));
$tournois->setMembres($request->get('M'));

$email = (new Email())
            
->from('roukaia70@gmail.com')
->to('jemaaoussama64@gmail.com')
->subject('Added to a team')
->text('Sending emails is fun again!')
->html('<p>Welcome to our application! , you are added in a team</p>');
$mailer->send($email);

$basic  = new \Vonage\Client\Credentials\Basic("102cf1ff", "SVb9jmUTD2J95EB1");
            $client = new \Vonage\Client($basic);
            $message = $client->message()->send([
                'to' => '21655919740',
                'from' => 'iGame',
                'text' => 'Welcome to our platform! Enjoy playing tournaments and checking the news of your favorite games!'
            ]);

$em->persist($tournois);
$em->flush();
$jsonContent = $Normalizer->normalize($tournois,'json',['groups'=>'post:read']);
return new Response(json_encode($jsonContent));
        
    }
     /**
     * @Route("/afficheFront", name="affiche_front", methods={"GET"})
     */
    public function index2(EntityManagerInterface $entityManager): Response
    {  if ($this->getUser()->getIsVerified()){
        $equipes = $entityManager
            ->getRepository(Equipe::class)
            ->getCurrentEquipe();

        return $this->render('equipe/afficheFront.html.twig', [
            'equipes' => $equipes,
        ]);
    }
        else {
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $this->getUser(),
            (new TemplatedEmail())
                ->from(new Address('jemaaoussama64@gmail.com', 'iGame'))
                ->to($this->getUser()->getEmail())
                ->subject('Please Confirm your Email')
                ->htmlTemplate('registration/confirmation_email.html.twig')
        );
            return $this->render('user/verify_alert.html.twig', [
           'userUsername'=> $this->getUser()->getUsername()
            ]);
    
          }
    }
     /**
     * @Route("/jsonequipe", name="json_display", methods={"GET"})
     */
    public function affichage_equipe_json(EntityManagerInterface $entityManager,NormalizerInterface $Normalizer): Response
    {
        $equipes = $entityManager
            ->getRepository(Equipe::class)
            ->findAll();

            $jsonContent = $Normalizer->normalize($equipes, 'json', ['groups'=>'post: read']);
    
            return new Response (json_encode($jsonContent));
    }
    
 /**
     * @Route("/front", name="equipe_front", methods={"GET", "POST"})
     */
    public function new1(Request $request, EntityManagerInterface $entityManager,MailerInterface $mailer): Response
    {   if ($this->getUser()->getIsVerified()){
        $equipe = new Equipe();
        $form = $this->createForm(EquipeType::class, $equipe);
        $form->handleRequest($request);
if( $this->getUser()->getEquipe()){
    return $this->render('equipe/ajoutEquipe.html.twig', [
        'equipe' => $equipe,
        'form' => $form->createView(),
     'warning'=>0
    ]);}
    else{
        if ($form->isSubmitted() && $form->isValid()) {
            $user=$this->getUser();
            $entityManager->persist($equipe);
            $entityManager->flush();
            $user->setEquipe($equipe);
            $entityManager->persist($user);
            $entityManager->flush();
  return $this->redirectToRoute('affiche_front', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipe/ajoutEquipe.html.twig', [
            'equipe' => $equipe,
            'form' => $form->createView(),
            'warning'=>1
        ]);
    }
}
    else {
        $this->emailVerifier->sendEmailConfirmation('app_verify_email', $this->getUser(),
        (new TemplatedEmail())
            ->from(new Address('jemaaoussama64@gmail.com', 'iGame'))
            ->to($this->getUser()->getEmail())
            ->subject('Please Confirm your Email')
            ->htmlTemplate('registration/confirmation_email.html.twig')
    );
        return $this->render('user/verify_alert.html.twig', [
       'userUsername'=> $this->getUser()->getUsername()
        ]);

      }
    }

    /**
     * @Route("/new", name="app_equipe_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,MailerInterface $mailer): Response
    {
        $equipe = new Equipe();
        $form = $this->createForm(EquipeType::class, $equipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($equipe);
            $entityManager->flush();
            $email = (new Email())
            
            ->from('roukaia70@gmail.com')
            ->to('roukaia.khelifi@esprit.tn')
                                           
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Equipe Ajouté')
            ->text('AAAAA')
            ->html($this->renderview('tournois/validation.html.twig',[ 'name'=> 'roukaia']));
            $mailer->send($email);
            return $this->redirectToRoute('app_equipe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipe/new.html.twig', [
            'equipe' => $equipe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_equipe_show", methods={"GET"})
     */
    public function show(Equipe $equipe): Response
    {
        return $this->render('equipe/show.html.twig', [
            'equipe' => $equipe,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_equipe_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Equipe $equipe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EquipeType::class, $equipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_equipe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipe/edit.html.twig', [
            'equipe' => $equipe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_equipe_delete", methods={"POST"})
     */
    public function delete(Request $request, Equipe $equipe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$equipe->getId(), $request->request->get('_token'))) {
            $entityManager->remove($equipe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_equipe_index', [], Response::HTTP_SEE_OTHER);
    }

      /**
     * @Route("/equipedelete/{id}", name="app_equipe_delete_json", methods={"POST","GET"})
     */
    public function delete_equipe_json(Request $request, Equipe $tournois, EntityManagerInterface $entityManager,$id,MailerInterface $mailer,NormalizerInterface $Normalizer): Response
    {
    
       $em = $this->getDoctrine()->getManager();
       $tournois = $em->getRepository(Equipe::class)->find($id);
       $em->remove($tournois);
       $em->flush();
       $jsonContent = $Normalizer->normalize($tournois,'json',['groups'=>'post:read']);
       return new Response("Tournois supprimé".json_encode($jsonContent));
    
    }
     /**
     * @Route("/EditE/{id}", name="edit_equipe_json")
     */
    public function EditEquipe2(Request $request,$id ,MailerInterface $mailer,NormalizerInterface $Normalizer)
    {  

      $em = $this->getDoctrine()->getManager();
 
      $usrRepo = $em->getRepository(Equipe::class);
      $user = $usrRepo->find($id);
    
      $user->setNomEquipe($request->get('N'));
      $user->setMembres($request->get('M'));
              
      $em->persist($user);
      $em->flush();
      $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'post: read']);
    
      return new Response ("team updated successfully".json_encode($jsonContent));
      
     
    }
}
