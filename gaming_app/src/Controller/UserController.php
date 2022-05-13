<?php

namespace App\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\User;
use App\Form\UserType;
use App\Entity\Archive;
use App\Entity\Comment;
use App\Entity\Commande;
use App\Entity\Tournois;
use App\Form\UploadType;
use App\Form\ContactType;
use App\Entity\Publication;
use App\Entity\FileUploader;
use Psr\Log\LoggerInterface;
use App\Form\ChangeEmailType;
use App\Form\ChangePhoneType;
use App\Form\NationalityType;
use App\Entity\ChangePassword;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManager;
use App\Form\ChangePasswordType;
use Symfony\Component\Mime\Email;
use App\Repository\GameRepository;
use App\Repository\UserRepository;
use App\Repository\TrashRepository;
use Symfony\Component\Mime\Address;
use App\Repository\ArchiveRepository;
use App\Repository\ProduitRepository;
use App\Repository\CategoryRepository;
use App\Repository\TournoisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FileUploadError;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
 
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }
     
    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_EDITOR')")
     * @Route("/", name="app_user_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager
            ->getRepository(User::class)
            ->findAll();


        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }
      /**
     * @Route("/users", name="app_user_index_json")
     */
    public function index2(EntityManagerInterface $entityManager,NormalizerInterface $Normalizer): Response
    {
        $users = $entityManager
            ->getRepository(User::class)
            ->findAll();
            

            $jsonContent = $Normalizer->normalize($users, 'json', ['groups'=>'post: read']);
    
            return new Response (json_encode($jsonContent));
    }
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/da/{id}", name="app_user_delete", methods={"POST","GET"})
     */
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {$a  = new Archive();
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $a->setUsername($user->getUsername());
            $a->setEmail($user->getEmail());
            $a->setGender($user->getGender());
            $a->setCreatedAt($user->getCreatedAt());
            $entityManager->persist($a);
            $entityManager->flush();
            $entityManager->remove($user);
            $entityManager->flush();
        

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
 
}

/**
 * @Route("/searchUser", name="searchUser")
 */
public function search(Request $request,NormalizerInterface $Normalizer):Response
{ $em = $this->getDoctrine()->getManager();
    $searchParameter = $request->get('username');
    if(strlen($searchParameter)==0)
    $users = $em->getRepository(User::class)->findAll();
else
    $users = $em->getRepository(User::class)->findByExampleField($searchParameter);
    $encoders = [new XmlEncoder(), new JsonEncoder()];
    $normalizers = [new ObjectNormalizer()];

    $serializer = new Serializer($normalizers, $encoders);
    $jsonContent = $serializer->serialize($users, 'json',['groups'=>'users',
        'circular_reference_handler' => function ($object) {
            return $object->getId();
        }

    ]);

    $response = new Response(json_encode($jsonContent));
    $response->headers->set('Content-Type', 'application/json; charset=utf-8');

    return $response;
}

    
    /**
     * @IsGranted("ROLE_USER")
     * @Route("/home", name="home")
     */
    public function homepage(Request $request,MailerInterface $mailer,EntityManagerInterface $em,ProduitRepository $produitRepository, GameRepository $gameRepository):Response{
// Displaying products from our store :


$games=$gameRepository->games(); 
$products=$produitRepository->products();

        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        $adminEmails=$em->getRepository(User::class)->adminEmails();
        $user=$this->getUser();
        if ($form->isSubmitted() && $form->isValid()) {
        foreach($adminEmails as $adminEmail){
            
      $email = (new Email())
        
      ->from($user->getEmail())
      ->to($adminEmail->getEmail())
      ->subject('Message')
      ->text('Sending emails is fun again!')
      ->html($this->renderview('user/contact.html.twig',['msg'=>  $form->get('message')->getData(),
    'username'=> $user->getUsername()
    ]));
      $mailer->send($email);
        }
        $this->addFlash('message2', 'Your message has been sent to our admins.');
        return $this->redirect($request->getUri());
            //return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('user/home.html.twig', [
            'contactF'=>$form->createView(),
            'games'=>$games,
            'products'=>$products
        
        ]);

    }
    /**
     * @Route("/Ohome",name="offline_home")
     */

     public function offline_home(){

        return $this->render('user/offline_home.html.twig');
     }
    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
     /**
      * @IsGranted("ROLE_USER")
     * @Route("/settings/{id}", name="app_user_settings", methods={"GET", "POST"})
     */
    public function settings(Request $request, UserPasswordEncoderInterface $passwordEncoder,$id){

        if ($this->getUser()->getIsVerified()){
        $changePasswordModel = new ChangePassword();
        $form = $this->createForm(ChangePasswordType::class, $changePasswordModel);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $user = $entityManager->find(User::class, $this->getUser()->getId());
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('newPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirect($request->getUri());
        }

        $form2 = $this->createForm(ChangeEmailType::class);
        $form2->handleRequest($request);
        if ($form2->isSubmitted() && $form2->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $user = $entityManager->find(User::class, $this->getUser()->getId());

            $user->setEmail( $form2->get('newEmail')->getData());
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirect($request->getUri());
        }
        $form3 = $this->createForm(ChangePhoneType::class);
        $form3->handleRequest($request);
        if ($form3->isSubmitted() && $form3->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $user = $entityManager->find(User::class, $this->getUser()->getId());

            $user->setPhone(intval($form3->get('newPhone')->getData()));
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirect($request->getUri());
        }
        $form4 = $this->createForm(NationalityType::class);
        $form4->handleRequest($request);
        if ($form4->isSubmitted() && $form4->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $user = $entityManager->find(User::class, $this->getUser()->getId());

            $user->setNationality($form4->get('Country')->getData());   
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirect($request->getUri());
        }
        
        $form5 = $this->createForm(UploadType::class);
        $form5->handleRequest($request);
        if ($form5->isSubmitted() && $form5->isValid()) {
      

          
            $file = $form5->get('photo')->getData();

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('brochures_directory'),
                $fileName
            );
            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->find(User::class, $this->getUser()->getId());
            $user->setImage($fileName);
           
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirect($request->getUri());
        }
        /*
        $nationality = $request->query->get("nat");
    if(!empty($nationality)){
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->find(User::class, $this->getUser()->getId());
        $user->setNationality($nationality); 
        $entityManager->persist($user);
        $entityManager->flush();
        
    }*/

        return $this->render('user/settings.html.twig', [
            'form' => $form->createView(),
            'form2' => $form2->createView(),
            'form3' => $form3->createView(),
            'form4'=>$form4->createView(),
            'form5'=>$form5->createView()
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
     *@Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_EDITOR')")
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboard(EntityManagerInterface $entityManager,UserRepository $a,ArchiveRepository $archive,TrashRepository $t,TournoisRepository $tr,GameRepository $gameRepository,CategoryRepository $categoryRepository){
       $admins=$entityManager->getRepository(User::class)->numberOfAdmins();
       $clients=$entityManager->getRepository(User::class)->numberOfClients();
       $editors=$entityManager->getRepository(User::class)->numberOfEditors();
       $males=$entityManager->getRepository(User::class)->numberOfMen();
       $females=$entityManager->getRepository(User::class)->numberOfWomen();
        $NumberOfUsers = $entityManager->getRepository(User::class)->countUser();


        $entityManager = $this->getDoctrine()->getManager();
        $publication = $entityManager->getRepository(Publication::class)->findAll();
        $comment = $entityManager->getRepository(Comment::class)->findAll();
        $x= count($publication);
        $v= count($comment);



        $p = $this->getDoctrine()->getRepository(Commande::class);
        $nbs = $p->getNb();


        $data = [['Etat', 'Nombre de commandes']];

        foreach ($nbs as $nb) {
            $data[] = array(
                $nb['prod'], $nb['com']);
        }
        $bar = new BarChart();
        $bar->getData()->setArrayToDataTable(
            $data
        );
        $bar->getOptions()->setTitle('Commande Etat');
        $bar->getOptions()->getTitleTextStyle()->setColor('#07600');
        $bar->getOptions()->getTitleTextStyle()->setFontSize(25);

        $tournois = $entityManager
        ->getRepository(Tournois::class)
        ->count_tournois();
        $equipe = $entityManager
        ->getRepository(Tournois::class)
        ->count_equipes();
        $participations = $entityManager
        ->getRepository(Tournois::class)
        ->count_participation();
        return $this->render('user/dashboard.html.twig',[

            'allUsers'=>$NumberOfUsers,
            'admins'=> $admins,
            'clients'=> $clients,
            'editors'=> $editors,
            'males'=> $males,
            'females'=> $females,
            'n1' => $a->count1(),
            'n2' => $a->count2(),
            'n3' => $a->count3(),
            'n4' => $a->count4(),
            'n5' => $a->count5(),
            'n6' => $a->count6(),
            'n7' => $a->count7(),
            'n8' => $a->count8(),
            'n9' => $a->count9(),
            'n10' => $a->count10(),
            'n11' => $a->count11(),
            'n12' => $a->count12(),
            'deleted'=> $archive->countDeletedAccounts(),
            'deletedM' => $t->countDeletedMessages(),
            't' => $tournois,
         'e'=>$equipe, 
         'p'=>$participations,
         'p1' => $tr->count1(),
         'p2' => $tr->count2(),
         'p3' => $tr->count3(),
         'p4' => $tr->count4(),
         'p5' => $tr->count5(),
         'p6' => $tr->count6(),
         'p7' => $tr->count7(),
         'p8' => $tr->count8(),
         'p9' => $tr->count9(),
         'p10' => $tr->count10(),
         'p11' => $tr->count11(),
         'p12' => $tr->count12(),
         'commentaires'=>$v,
         'publications'=>$x ,
         'nbrGames'=>$gameRepository->findAll(),
         'nbrCategories'=>$categoryRepository->findall(),
         'piechart' => $bar, 
         'nbs' => $nbs        

        ]);

    }
    
    /**
     * @IsGranted("ROLE_USER")
     * @Route("/new", name="app_user_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           $user->setRoles(array('ROLE_USER'));
        
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/register.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
   
 /**
     * @Route("/a/delete_after_search/{id}", name="delete_after_search", methods={"GET"})
     */
    public function delete_after_search(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {$a  = new Archive();
            $a->setUsername($user->getUsername());
            $a->setEmail($user->getEmail());
            $a->setGender($user->getGender());
            $a->setCreatedAt($user->getCreatedAt());
            $entityManager->persist($a);
            $entityManager->flush();
            $entityManager->remove($user);
            $entityManager->flush();
        

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    
 
}

    
   

    /** 
     * @IsGranted("ROLE_ADMIN")
     * @Route("/edit/{id}", name="app_user_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager,$id): Response
    {  $currentUser = $entityManager
            ->getRepository(User::class)
            ->find($id);
$currentUserImage=$currentUser->getImage();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if($user->getImage()){
            $file = $user->getImage();

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('brochures_directory'),
                $fileName
            );



            $user->setImage($fileName);
        }
        else{
            $user->setImage($currentUserImage);
        }
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/pdf", name="user_pdf", methods={"GET"})
     */
    public function pdf(EntityManagerInterface $entityManager)
    {
        $users = $entityManager
        ->getRepository(User::class)
        ->findAll();
        $pdfOptions = new Options();
        
       // $pdfOptions->set('defaultFont', 'Arial');
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
    // Retrieve the HTML generated in our twig file

          $html = $this->renderView('user/pdf.html.twig', [
            'users' => $users
            
          ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
    $dompdf->setPaper('letter', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("Users.pdf", [
            "Attachment" => false
        ]);
    }

    
   
     /**
      * 
     * @Route("/delete_user/{id}", name="delete_user")
     */
    public function deleteUser($id ,MailerInterface $mailer)
    {  

      $em = $this->getDoctrine()->getManager();
      $a = new Archive();
      $usrRepo = $em->getRepository(User::class);
      $user = $usrRepo->find($id);
      
      $email = (new Email())
            
      ->from('roukaia70@gmail.com')
      ->to($user->getEmail())
      ->subject('Account deleted')
      ->text('Sending emails is fun again!')
      ->html($this->renderview('user/mailer.html.twig',[ 'name'=> $user->getUsername()]));
      $mailer->send($email);
      
      $a->setUsername($user->getUsername());
            $a->setEmail($user->getEmail());
            $a->setGender($user->getGender());
            $a->setCreatedAt($user->getCreatedAt());
            $em->persist($a);
            $em->flush();
         
      $em->remove($user);
      $em->flush();

      return $this->redirectToRoute('app_login');
     
    }
    /**
      * 
     * @Route("/userD/{id}", name="delete_user_json")
     */
    public function deleteUser2($id ,NormalizerInterface $Normalizer)
    {  

      $em = $this->getDoctrine()->getManager();
      
      $usrRepo = $em->getRepository(User::class);
      $user =$usrRepo->findOneBy(['username'=>$id]);
     
      $em->remove($user);
      $em->flush();
      $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'post: read']);
    
      return new Response ("user deleted successfully".json_encode($jsonContent));
      
     
    }
      /**
      * 
     * @Route("/EditD/{id}", name="edit_user_json")
     */
    public function EditUser2(Request $request,$id ,MailerInterface $mailer,NormalizerInterface $Normalizer)
    {  

      $em = $this->getDoctrine()->getManager();
      $usrRepo = $em->getRepository(User::class);
      //$user = $usrRepo->findOne($id);
      $user =$usrRepo->findOneBy(['username'=>$id]);
      $user->setFirstname($request->get('F'));
      $user->setUsername($request->get('U'));        
      $em->persist($user);
      $em->flush();
      $jsonContent = $Normalizer->normalize($user, 'json', ['groups'=>'post: read']);
        
      return new Response ("user updated successfully".json_encode($jsonContent));
      
     
    }

/**
     * @Route("/error", name="error")
     */
    public function error(){
    
        return $this->render('security/error.html.twig');
    }
  /**
     * @Route("/adminLogin", name="loginbase")
     */
    public function loginAdmin(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
       

        // render your admin login page
        return $this->render('base.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
/**
     * @Route("/countdown", name="countt")
     */
    public function countdown(): Response
    {
      
       

        // render your admin login page
        return $this->render('user/countdown.html.twig');
    }
}