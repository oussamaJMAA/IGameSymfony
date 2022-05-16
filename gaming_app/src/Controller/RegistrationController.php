<?php

namespace App\Controller;

use App\Entity\User;
use Vonage\Insights\Basic;
use App\Security\EmailVerifier;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Symfony\Component\Mime\Address;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setJavaPassword($form->get('plainPassword')->getData());
           // $user->setImage("C:\Users\oussa\Desktop\avatar.png");
            // encode the plain password
            $user->setPassword(
            $userPasswordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $user->setGender($form->get('gender')->getData());
            $user->setRoles(array('ROLE_USER'));
            $user->setRole("client");
        
            $entityManager->persist($user);
            $entityManager->flush();
            $basic  = new \Vonage\Client\Credentials\Basic("102cf1ff", "SVb9jmUTD2J95EB1");
            $client = new \Vonage\Client($basic);
            $message = $client->message()->send([
                'to' => '21655919740',
                'from' => 'iGame',
                'text' => 'Welcome to our platform! Enjoy playing tournaments and checking the news of your favorite games!'
            ]);

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('jemaaoussama64@gmail.com', 'iGame'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email

            //return $this->redirect($request->getUri());
            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/verify/email", name="app_verify_email")
     */
    public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    
        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success1', 'Your email address has been verified.');

        return $this->redirectToRoute('home');
    }
        /**
     * @Route("/jsonregister", name="json_register")
     */
    public function register2(Request $request, UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $entityManager,NormalizerInterface $Normalizer,UserRepository $userRepository): Response
    {

        if (! filter_var($request->get('E'),FILTER_VALIDATE_EMAIL)){
            return new Response("invalid email !");
        }
        $u =$userRepository->findOneBy(['username'=>$request->get('U')]);
        if($u){
            return new Response("Account already exists!");
        }
        $user = new User();
        $user->setEmail($request->get('E'));
       $user->setFirstname($request->get('F'));
       $user->setLastname($request->get('L'));
        $user->setUsername($request->get('U'));
         $user->setRoles(array('ROLE_USER'));
        $user->setRole("client");
      
        // $user->setGender($request->get('G'));
      //  $user->setAddress($request->get('A'));
        $user->setPassword(
            $userPasswordEncoder->encodePassword(
                    $user,
                    $request->get('P')
                )
            );
            $user->setJavaPassword($request->get('P'));
          
      
        $entityManager->persist($user);
        $entityManager->flush();
        $basic  = new \Vonage\Client\Credentials\Basic("102cf1ff", "SVb9jmUTD2J95EB1");
        $client = new \Vonage\Client($basic);
        $message = $client->message()->send([
            'to' => '21655919740',
            'from' => 'iGame',
            'text' => 'Welcome to our platform! Enjoy playing tournaments and checking the news of your favorite games!'
        ]);

        // generate a signed url and email it to the user
        $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
            (new TemplatedEmail())
                ->from(new Address('jemaaoussama64@gmail.com', 'iGame'))
                ->to($user->getEmail())
                ->subject('Please Confirm your Email')
                ->htmlTemplate('registration/confirmation_email.html.twig')
        );
        
         $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'post: read']);
    
            return new Response ("Account created successfully".json_encode($jsonContent));
       
    }


    /**
     * @Route("/jsonSignin", name="json_signin")
     */
    public function Signin2(Request $request, EntityManagerInterface $entityManager,NormalizerInterface $Normalizer,UserRepository $userRepository)
    {

      
          $user =$userRepository->findOneBy(['username'=>$request->get('U')]);
      if($user){
          if(password_verify($request->get('P'),$user->getPassword())){
            $serializer=new Serializer([new ObjectNormalizer()]);
            $formatted=$serializer->normalize($user);
            
          //  return new JsonResponse ($formatted);
           if($user->getRole()=="client"){
            return new Response("client");
           }
           else   if($user->getRole()=="admin"){
            return new JsonResponse ($formatted);
           }
          }
          else{
            return new Response("passowrd not found");
      }
    }else {
        return new Response("user not found");
    }
    
    }

/**
 *  @Route("/jsonEdit", name="json_edit")
 */
public function JsonEdit (Request $request, UserPasswordEncoderInterface $passwordEncoder,NormalizerInterface $Normalizer){
    $id=$request->get("I");
    $username=$request->query->get("U");
    $password =$request->query->get("P");
    $email=$request->query->get("E");
    $em=$this->getDoctrine()->getManager();
    $user=$em->getRepository(User::class)->find($id);
    if($request->files->get("image")!= null){
        $file-$request->files->get("image");
        $fileName=$file->getClientOriginalName();
$file->move($fileName);
$user->setImage($fileName);
    }
    $user->setEmail($email);
    $user->setUsername($username);
    $user->setPassword(
        $passwordEncoder->encodePassword(
                $user,
                $password
            )
        );


        $em->persist($user);
        $em->flush();
        
         $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'post: read']);
    
            return new Response ("Account edited successfully".json_encode($jsonContent));

}
    }

