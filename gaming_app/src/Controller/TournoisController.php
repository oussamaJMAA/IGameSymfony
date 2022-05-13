<?php

namespace App\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;

use App\Entity\Bracket;
use App\Entity\Tournois;
use App\Form\WinnersType;
use App\Form\TournoisType;
use App\Entity\Participation;
use App\Security\EmailVerifier;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use App\Repository\BracketRepository;

use App\Repository\TournoisRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ParticipationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
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

    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }
     
/**
 * @Route("/searchTournaments", name="searchTournaments")
 */
public function searchStudentx(Request $request,NormalizerInterface $Normalizer):Response
{
    $em = $this->getDoctrine()->getManager();
    $searchParameter = $request->get('tournois');
    if(strlen($searchParameter)==0)
    $tournois = $em->getRepository(Tournois::class)->findAll();
else
    $tournois = $em->getRepository(Tournois::class)->findByExampleField($searchParameter);
    $encoders = [new XmlEncoder(), new JsonEncoder()];
    $normalizers = [new ObjectNormalizer()];

    $serializer = new Serializer($normalizers, $encoders);
    $jsonContent = $serializer->serialize($tournois, 'json',['groups'=>'tournois',
        'circular_reference_handler' => function ($object) {
            return $object->getId();
        }

    ]);

    $response = new Response(json_encode($jsonContent));
    $response->headers->set('Content-Type', 'application/json; charset=utf-8');

    return $response;
}

/**
 * @Route("/stat", name="stat")
 */

public function stat(Request $request,EntityManagerInterface $entityManager,TournoisRepository $a):Response{
  
    $tournois = $entityManager
    ->getRepository(Tournois::class)
    ->count_tournois();
    $equipe = $entityManager
    ->getRepository(Tournois::class)
    ->count_equipes();
    $participations = $entityManager
    ->getRepository(Tournois::class)
    ->count_participation();

    return $this->render('tournois/dashboard.html.twig', [
        't' => $tournois,
         'e'=>$equipe, 
         'p'=>$participations,
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
    ]);

}


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
     * @Route("/tournois", name="app_tournois_json", methods={"GET"})
     */
    public function index_json(Request $request,EntityManagerInterface $entityManager,NormalizerInterface $Normalizer)
    {
        $tournois = $entityManager
            ->getRepository(Tournois::class)
            ->findAll();
            $jsonContent = $Normalizer->normalize($tournois,'json',['groups'=>'post:read']);
            return new Response(json_encode($jsonContent));

    }
    /**
     * @Route("/tournois/{id}", name="app_tournois_json_id", methods={"GET","POST"})
     */
    public function tournois_json_id(EntityManagerInterface $entityManager,NormalizerInterface $Normalizer,$id)
    {
        $tournois = $entityManager
            ->getRepository(Tournois::class)
            ->find($id);
            $jsonContent = $Normalizer->normalize($tournois,'json',['groups'=>'post:read']);
            return new Response(json_encode($jsonContent));

    }

      /**
     * @Route("/new/json", name="app_tournois_new_json", methods={"GET", "POST"})
     */
    public function new_json( EntityManagerInterface $entityManager,MailerInterface $mailer,NormalizerInterface $Normalizer,Request $request )
    {
      
$em = $this->getDoctrine()->getManager();
$tournois = new Tournois();
$tournois->setNomTournois($request->get('NomTournois'));
$tournois->setRecompense($request->get('recompense'));
$tournois->setId($request->get('id'));
$em->persist($tournois);
$em->flush();
$jsonContent = $Normalizer->normalize($tournois,'json',['groups'=>'post:read']);
return new Response(json_encode($jsonContent));
        
    }
   /**
     * @Route("/b/bracket/{id}", name="bracket", methods={"GET" , "POST"})
     */
    public function bracket(Request $request,EntityManagerInterface $entityManager,$id): Response
    {
        $tournois = $entityManager
            ->getRepository(Tournois::class)
            ->findAll();

            $p = $entityManager
            ->getRepository(Participation::class)
            ->names_participations($id);

if(count($p)==4){
$test = array_column($p, 'equipe_nom');

$bracket =  $entityManager
->getRepository(Bracket::class)
->names_from_bracket($test[0],$test[1]);

if(count($bracket)==0){

         $bracket1 = $entityManager
            ->getRepository(Bracket::class)
            ->remplir($test[0],$test[1]);

            $bracket2 = $entityManager
            ->getRepository(Bracket::class)
            ->remplir($test[2],$test[3]);

}

$form = $this->createForm(WinnersType::class);
$f1=new Bracket();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $b=$entityManager->getRepository(Bracket::class)->getBracket($form->get('team1')->getData());
           
         // dump($b);
          // dump($form->get('team1')->getData());
           //dump($form->get('team2')->getData());
        $b2=$entityManager->getRepository(Bracket::class)->getBracket($form->get('team2')->getData());

        if($b2->getEquipe1()==$form->get('team2')->getData()){
            $b2->setStatusTeam1("winner");
            $b2->setStatusTeam2("looser");
            
            
          }
          if($b2->getEquipe2()==$form->get('team2')->getData()){
            $b2->setStatusTeam2("winner");
            $b2->setStatusTeam1("looser");
          
          }
         
         
          if($b->getEquipe1()==$form->get('team1')->getData()){
            $b->setStatusTeam1("winner");
            $b->setStatusTeam2("looser");
        
          }
          if($b->getEquipe2()==$form->get('team1')->getData()){
            $b->setStatusTeam2("winner");
            $b->setStatusTeam1("looser");
          
          }
          $f1->setEquipe1($form->get('team1')->getData());
          $f1->setEquipe2($form->get('team2')->getData());

          if($f1->getEquipe1()==$form->get('winner')->getData()){
            $f1->setStatusTeam1("Final winner");
            $f1->setStatusTeam2("Final looser");
        
          }
          if($f1->getEquipe2()==$form->get('winner')->getData()){
            $f1->setStatusTeam2("Final winner");
            $f1->setStatusTeam1("Final looser");
          
          }
    
             $entityManager->persist($b);
             $entityManager->flush();
             $entityManager->persist($f1);
             $entityManager->flush();
             return $this->redirectToRoute('app_tournois_index');
         }
         $bracket_is_finished = $entityManager
            ->getRepository(Bracket::class)
            ->Final();

         if(count($bracket_is_finished)!=0){
             $a=1;
         }else{
             $a=2;
         }
         return $this->render('tournois/bracket.html.twig', [
            'tournois' => $tournois,
            'participation' => $p,
            'id'=>$id,
            'is_Final'=>$a,
     'not_available'=>0,
            'form'=>$form->createView()
                
        ]);
            
         } else{
             $not_available=1;
                return $this->render('tournois/bracket.html.twig', [
                    'tournois' => $tournois,
                    'participation' => $p,
                    'not_available'=>$not_available
                ]); }
           
    }
  /**
     * @Route("/s/bracket_search/{id}", name="bracket_search", methods={"GET" , "POST"})
     */
    public function bracket2(Request $request,EntityManagerInterface $entityManager,$id): Response
    {
        $tournois = $entityManager
            ->getRepository(Tournois::class)
            ->findAll();

            $p = $entityManager
            ->getRepository(Participation::class)
            ->names_participations($id);

if(count($p)==4){
$test = array_column($p, 'equipe_nom');

$bracket =  $entityManager
->getRepository(Bracket::class)
->names_from_bracket($test[0],$test[1]);

if(count($bracket)==0){

         $bracket1 = $entityManager
            ->getRepository(Bracket::class)
            ->remplir($test[0],$test[1]);

            $bracket2 = $entityManager
            ->getRepository(Bracket::class)
            ->remplir($test[2],$test[3]);

}

$form = $this->createForm(WinnersType::class);
$f1=new Bracket();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $b=$entityManager->getRepository(Bracket::class)->getBracket($form->get('team1')->getData());
           
         // dump($b);
          // dump($form->get('team1')->getData());
           //dump($form->get('team2')->getData());
        $b2=$entityManager->getRepository(Bracket::class)->getBracket($form->get('team2')->getData());

        if($b2->getEquipe1()==$form->get('team2')->getData()){
            $b2->setStatusTeam1("winner");
            $b2->setStatusTeam2("looser");
            
            
          }
          if($b2->getEquipe2()==$form->get('team2')->getData()){
            $b2->setStatusTeam2("winner");
            $b2->setStatusTeam1("looser");
          
          }
         
         
          if($b->getEquipe1()==$form->get('team1')->getData()){
            $b->setStatusTeam1("winner");
            $b->setStatusTeam2("looser");
        
          }
          if($b->getEquipe2()==$form->get('team1')->getData()){
            $b->setStatusTeam2("winner");
            $b->setStatusTeam1("looser");
          
          }
          $f1->setEquipe1($form->get('team1')->getData());
          $f1->setEquipe2($form->get('team2')->getData());

          if($f1->getEquipe1()==$form->get('winner')->getData()){
            $f1->setStatusTeam1("Final winner");
            $f1->setStatusTeam2("Final looser");
        
          }
          if($f1->getEquipe2()==$form->get('winner')->getData()){
            $f1->setStatusTeam2("Final winner");
            $f1->setStatusTeam1("Final looser");
          
          }
    
             $entityManager->persist($b);
             $entityManager->flush();
             $entityManager->persist($f1);
             $entityManager->flush();
             return $this->redirectToRoute('app_tournois_index');
         }
         $bracket_is_finished = $entityManager
            ->getRepository(Bracket::class)
            ->Final();

         if(count($bracket_is_finished)!=0){
             $a=1;
         }else{
             $a=2;
         }
         return $this->render('tournois/bracket.html.twig', [
            'tournois' => $tournois,
            'participation' => $p,
            'id'=>$id,
            'is_Final'=>$a,
     'not_available'=>0,
            'form'=>$form->createView()
                
        ]);
            
         } else{
             $not_available=1;
                return $this->render('tournois/bracket.html.twig', [
                    'tournois' => $tournois,
                    'participation' => $p,
                    'not_available'=>$not_available
                ]); }
           
    }

     /**
     * @Route("/frontBracket/{id}", name="Front_Bracket", methods={"GET"})
     */
    public function go_to_Front_Bracket(Request $request,EntityManagerInterface $entityManager,$id,BracketRepository $bracketRepository): Response
    {
      
        $p = $entityManager
            ->getRepository(Participation::class)
            ->names_participations($id);
$test =  $entityManager
->getRepository(Tournois::class)
->verif_bracket();

if(count($p)==4 && $test != null){
    
    return $this->render('tournois/frontBracket.html.twig', [
        'not_available' => 1 ,
        'brackets' => $bracketRepository->findAll(),
    ]);
}else{
    return $this->render('tournois/frontBracket.html.twig', [
        'not_available' => 0 ,
    ]);
}

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
     * @Route("/participants/{id}", name="participants", methods={"GET"})
     */
    public function participants(EntityManagerInterface $entityManager,$id): Response
    {
        $p = $entityManager
        ->getRepository(Participation::class)
        ->findByIdTournois($id);
        $tournois = $entityManager
        ->getRepository(Tournois::class)
        ->findAll();
        return $this->render('tournois/participants.html.twig', [
            'participants' => $p,
            'tournois' => $tournois,
        ]);
    }



    /**
     * @Route("/p/{id}", name="participer", methods={"GET"})
     */
    public function participer(EntityManagerInterface $entityManager,$id,MailerInterface $mailer,PaginatorInterface $paginator,Request $request ): Response
    {

        $test= $entityManager
        ->getRepository(Tournois::class)
        ->count_participants_tournois($id);
        $user = $entityManager
        ->getRepository(Tournois::class)
        ->verif_equipe_user($this->getUser()->getId());
     if($user==null && $test!=4){
        $tournois = $entityManager
        ->getRepository(Tournois::class)
        ->findAll();
        $donnes = $entityManager
        ->getRepository(Tournois::class)
        ->findAll();
     
        $tournois = $paginator->paginate(
            $donnes, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            2 // Nombre de résultats par page
        );
        return $this->render('tournois/front.html.twig', [
            'tournois' => $tournois,
            'warning2' => 1,
            'warning' => 0
        ]);

     }

   if($test==4 && $user!=null ){
    $tournois = $entityManager
    ->getRepository(Tournois::class)
    ->findAll();
    $donnes = $entityManager
    ->getRepository(Tournois::class)
    ->findAll();
 
    $tournois = $paginator->paginate(
        $donnes, // Requête contenant les données à paginer (ici nos articles)
        $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
        2 // Nombre de résultats par page
    );
    return $this->render('tournois/front.html.twig', [
        'tournois' => $tournois,
        'warning' => 1,
        'warning2' => 0
    ]);

   }
   if($test==4 && $user==null ){
    $tournois = $entityManager
    ->getRepository(Tournois::class)
    ->findAll();
    $donnes = $entityManager
    ->getRepository(Tournois::class)
    ->findAll();
 
    $tournois = $paginator->paginate(
        $donnes, // Requête contenant les données à paginer (ici nos articles)
        $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
        2 // Nombre de résultats par page
    );
    return $this->render('tournois/front.html.twig', [
        'tournois' => $tournois,
        'warning' => 1,
        'warning2' => 1
    ]);

   }
   else{

        $tournois = $entityManager
            ->getRepository(Tournois::class)
            ->participation($id,$this->getUser()->getId());


            $tournois = $entityManager
            ->getRepository(Tournois::class)
            ->findAll();
        
      $test = $entityManager
        ->getRepository(Tournois::class)
        ->participants($id);
$nom = $entityManager
->getRepository(Tournois::class)
->nom_tournois($id);

$nom_user = $entityManager
->getRepository(Tournois::class)
->nom_user($this->getUser()->getId());

$i = 0;
   $len = count($test);
   $code = rand(10,9999);  
         while ($i < $len)
        {

$email = (new Email())
        
->from('roukaia70@gmail.com')
->to(implode("",$test[$i]))

->subject('Participation Confirmed')
->text('AAAAA')
->html($this->renderview('tournois/validation_participation.html.twig',['nom'=>$nom,'code'=>$code]));
$mailer->send($email);
$i++;        
}


return $this->redirectToRoute('front', [], Response::HTTP_SEE_OTHER);
   }
   $donnes = $entityManager
   ->getRepository(Tournois::class)
   ->findAll();

   $tournois = $paginator->paginate(
       $donnes, // Requête contenant les données à paginer (ici nos articles)
       $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
       2 // Nombre de résultats par page
   );
        return $this->render('tournois/front.html.twig', [
            'tournois' => $tournois,
            'warning' => 0,
            'warning2' => 0
        ]);




    }
    
    /**
     * @Route("/front", name="front", methods={"GET"})
     */
    public function index2(EntityManagerInterface $entityManager,PaginatorInterface $paginator,Request $request): Response
    {       if ($this->getUser()->getIsVerified()){
        $donnes = $entityManager
            ->getRepository(Tournois::class)
            ->findAll();
        
            $tournois = $paginator->paginate(
                $donnes, // Requête contenant les données à paginer (ici nos articles)
                $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
                2 // Nombre de résultats par page
            );
          
 return $this->render('tournois/front.html.twig', [
    'tournois' => $tournois,
'warning' => 0,
'warning2'=>0
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
     * @Route("/pdf", name="tournois_pdf", methods={"GET"})
     */
    public function pdf(TournoisRepository $tournoisRepository)
    {
      
        $pdfOptions = new Options();
        
       // $pdfOptions->set('defaultFont', 'Arial');
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
    // Retrieve the HTML generated in our twig file

          $html = $this->renderView('tournois/pdf.html.twig', [
            'tournois' => $tournoisRepository->findAll(),
            
          ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        $customPaper = array(0,0,900,800);
        $dompdf->setPaper($customPaper);
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("Tournois.pdf", [
            "Attachment" => false,
            'isRemoteEnabled' => true,
            
        ]);
    }
       
      /**
     * @Route("/jsondelete/{id}", name="app_tournois_delete_json", methods={"POST","GET"})
     */
    public function delete_json(Request $request, Tournois $tournoi, EntityManagerInterface $entityManager,$id,MailerInterface $mailer,NormalizerInterface $Normalizer): Response
    {
    
       $em = $this->getDoctrine()->getManager();
       $tournois = $em->getRepository(Tournois::class)->find($id);
       $em->remove($tournois);
       $em->flush();
       $jsonContent = $Normalizer->normalize($tournois,'json',['groups'=>'post:read']);
       return new Response("Tournois supprimé".json_encode($jsonContent));
    
    }

    /**
     * @Route("/new", name="app_tournois_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,MailerInterface $mailer): Response
    {
        $tournoi = new Tournois();
        $form = $this->createForm(TournoisType::class, $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tournoi);
            $entityManager->flush();
 $email = (new Email())
            
            ->from('roukaia70@gmail.com')
            ->to('roukaia.khelifi@esprit.tn')
                                       
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)

            ->subject('Tournois Ajouté')
            ->text('AAAAA')
            ->html($this->renderview('tournois/validation.html.twig',[ 'name'=> 'roukaia']));
            $mailer->send($email);



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

 $tournois = $entityManager
        ->getRepository(Tournois::class)
        ->participants($id);
 $i = 0;
   $len = count($tournois);
         while ($i < $len)
        {
            $email = (new Email())
->from('roukaia70@gmail.com')
->to(implode("",$tournois[$i]))
->subject('Tournois Annulé')
->html($this->renderview('tournois/validation.html.twig',[ 'name'=> 'roukaia']));
$mailer->send($email);
     $i++;
        }

  return $this->redirectToRoute('app_tournois_index', [], Response::HTTP_SEE_OTHER);
      
    }
 /**
     * @Route("/delete_page/{id}", name="delete_search", methods={"POST","GET"})
     */
    public function delete2(Request $request, Tournois $tournoi, EntityManagerInterface $entityManager,$id,MailerInterface $mailer): Response
    {
    
     
            $entityManager->remove($tournoi);
            $entityManager->flush();
        

 $tournois = $entityManager
        ->getRepository(Tournois::class)
        ->participants($id);
 $i = 0;
   $len = count($tournois);
         while ($i < $len)
        {
            $email = (new Email())
->from('roukaia70@gmail.com')
->to(implode("",$tournois[$i]))
->subject('Tournois Annulé')
->html($this->renderview('tournois/validation.html.twig',[ 'name'=> 'roukaia']));
$mailer->send($email);
     $i++;
        }

  return $this->redirectToRoute('app_tournois_index', [], Response::HTTP_SEE_OTHER);
      
    }




  
   
}
