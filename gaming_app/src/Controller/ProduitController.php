<?php

namespace App\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Entity\RechercheData;
use App\Security\EmailVerifier;
use App\Form\RechercherDataType;
use Symfony\Component\Mime\Email;
use phpDocumentor\Reflection\Type;
use Symfony\Component\Mime\Address;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler;

/**
 * @Route("/produit")
 */
class ProduitController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }
    /**
     * @Route("/", name="produit_index", methods={"GET"})
     */
    public function index(ProduitRepository $produitRepository,SessionInterface $session): Response
    {
        if ($this->getUser()->getIsVerified()){
        return $this->render('produit/index.html.twig',[
                'produits' => $produitRepository->orderbyprice(),
            "session"=>$session,
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
     * @Route("/backaffichage", name="produit_index_back", methods={"GET"})
     */
    public function index_back(ProduitRepository $produitRepository,SessionInterface $session): Response
    {
        return $this->render('produit/index_back.html.twig',[
                'produits' => $produitRepository->orderbyprice(),
            "session"=>$session,
        ]);
    }

    /**
     * @Route("/new", name="produit_new", methods={"GET","POST"})
     */
    public function new(Request $request,SessionInterface $session,MailerInterface $mailer): Response
    {

        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
$user=$this->getUser();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $produit->getImage();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('brochures_directory'),$filename);
            $produit->setImage($filename);
            $produit->setNbavis(0);
            $produit->setAvis(0);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($produit);
            $entityManager->flush();
            $email = (new Email())
      ->from('roukaia70@gmail.com')
      ->to($user->getEmail())
      ->subject('Product added')
      ->text('Sending emails is fun again!')
      ->html("<p>You have added a product</p>");
      $mailer->send($email);

            return $this->redirectToRoute('produit_index_back');
        }

        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
            "session"=>$session,
        ]);
    }

    /**
     * @Route("/{id}/produit", name="produit_show2", methods={"GET"})
     */
    public function show(Produit $produit,SessionInterface $session): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
            "session"=>$session,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="produit_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Produit $produit,SessionInterface $session): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);
       // $produit->setImage(null);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $produit->getImage();
            $filename = md5(uniqid()).'.'.$file->getExtension();
            $file->move($this->getParameter('brochures_directory'),$filename);
            $produit->setImage($filename);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('produit_index_back');
        }

        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
            "session"=>$session,
        ]);
    }

    /**
     * @Route("/{id}", name="produit_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Produit $produit,SessionInterface $session): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('produit_index_back');
    }
    /**
     * @Route("/afficherproduit/{id}", name="produit_show", methods={"GET"})
     */
    public function showPP(Produit $produit,$id): Response
    {
       $p=$this->getDoctrine()->getRepository(Produit::class)->find($id);

        return $this->render('produit/show.html.twig', [
            'produit' => $p,
        ]);
    }

    /**
     * @Route("/afficherproduitdown/p", name="produit_showww", methods={"GET"})
     */
    public function showPPP(Request $request,PaginatorInterface $paginator,SessionInterface $session): Response
    {
        //$p=$this->getDoctrine()->getRepository(Produit::class)->findAll();
        $produit = $this->getDoctrine()->getRepository(Produit::class)->orderbypricedown() ;
        $priceSearch = new RechercheData();
        $form = $this->createForm(RechercherDataType::class,$priceSearch);
        $produit = $paginator->paginate(
            $produit,
            $request->query->getInt('page',1) ,
            20
        ) ;
        return $this->render('produit/produitfront.html.twig', [
            'form' =>$form->createView(),
            'produits' => $produit,
            'session' => $session,
        ]);
    }


    /**
     * @param Request $request
     * @return Response
     * @Route ("/produitajax",name="searchrdvproduit")
     */
    public function searchrdv(Request $request,SessionInterface $session)
    {
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $requestString=$request->get('searchValue');
        $rdv = $repository->findrdvBydate($requestString);
        return $this->render('produit/produitajax.html.twig' ,[
            "produits"=>$rdv, "session"=>$session,
        ]);
    }
      /**
     * @param Request $request
     * @return Response
     * @Route ("/produitajax_back",name="searchrdvproduit2")
     */
    public function searchrdv_back(Request $request,SessionInterface $session)
    {
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $requestString=$request->get('searchValue');
        $rdv = $repository->findrdvBydate($requestString);
        return $this->render('produit/produitajax2.html.twig' ,[
            "produits"=>$rdv, "session"=>$session,
        ]);
    }


    /**
     * @param Request $request
     * @return Response
     * @Route ("/produitajaxxx",name="searchrdvzzproduit")
     */
    public function searchrdvvv(Request $request,SessionInterface $session)
    {
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $requestString=$request->get('searchValue');
        $rdv = $repository->findrdvByname($requestString);
        return $this->render('produit/produitajaxfront.html.twig' ,[
            "produits"=>$rdv,
            "session"=>$session,
        ]);
    }

    /**
     * @param EntityManagerInterface $manager
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     * @Route("/best",name="best")
     */
    public function back(EntityManagerInterface $manager,SessionInterface $session)
    {
        //   $user = $manager->createQuery('SELECT COUNT(u) FROM App\Entity\User u')->getSingleScalarResult();
        $produit= $manager->createQuery('SELECT COUNT(c) FROM App\Entity\Produit c')->getSingleScalarResult();
        $Commande = $manager->createQuery('SELECT COUNT(q) FROM App\Entity\Commande q')->getSingleScalarResult();
        $bestProduit = $manager->createQuery(
            'SELECT count(c) as Quantite ,a.Nom , a.Image
         FROM App\Entity\Commande c
         Join c.Produit a 
         GROUP BY a
         ORDER BY Quantite DESC'

        )
            ->setMaxResults(3)
            ->getResult();

        $worstProduit = $manager->createQuery(
            'SELECT count(c) as Quantite ,a.Nom , a.Image
         FROM App\Entity\Commande c
         Join c.Produit a 
         GROUP BY a
         ORDER BY Quantite ASC'

        )
            ->setMaxResults(3)
            ->getResult();
        return $this->render("produit/produitstat.html.twig",
            array(
                //    'user'=>$user,
                'produit'=>$produit,
                'commande'=>$Commande,
                'topproduit'=>$bestProduit,
                'worstproduit'=>$worstProduit,
                "session"=>$session,
            ));
    }

    /**
     * @Route("/indexMobileTrieee/x", name="produit_index_mobile")
     */
    public function indexMobile(ProduitRepository $produitRepository, NormalizerInterface $normalizer)
    {
        $produit = $produitRepository->orderbyprice();
        $json = $normalizer->normalize($produit, 'json', ['groups' => 'produit']);

        return new Response(json_encode($json));
    }



    /**
     * @Route("/indexMobile", name="produit_index_mobile")
     */
    public function indexMobileee(ProduitRepository $produitRepository, NormalizerInterface $normalizer)
    {
        $produit = $produitRepository->findAll();
        $json = $normalizer->normalize($produit, 'json', ['groups' => 'produit']);

        return new Response(json_encode($json));
    }
    /**
     * @Route("/newCategorieM", name="categorie_new-mobile")
     */
    public function newMobile(Request $request, NormalizerInterface $normalizer)
    {
        $em= $this->getDoctrine()->getManager();
        $categorie=new Categorie();
        $categorie->setNameCategorie($request->get('nameCategorie'));
        $categorie->setTag($request->get('tagC'));


        $em->persist($categorie);
        $em->flush();
        $json= $normalizer->normalize($categorie,'json',['groups'=>'categorie']);
        //return new Response( json_encode($json));
        return new Response('categorie ajoutée ');
    }



    /**
     * @Route("/UPMobile/aaa/{id}", name="Modifier")
     */

    public function Modifier(Request $request,NormalizerInterface $normalizer,$id) {

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)->find($id);
        $produit->setAvis($request->get('avis'));
        $produit->setNbavis($request->get('nbavis')) ;
        $em->persist($produit);
        $em->flush();
        $json= $normalizer->normalize($produit,'json',['groups'=>'commande']);
        //return new Response( json_encode($json));
        return new Response('produit Moifier ');

    }
/**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/pdf_produit", name="produit_pdf", methods={"GET"})
     */
    public function pdf(EntityManagerInterface $entityManager)
    {
        $produits = $entityManager
        ->getRepository(Produit::class)
        ->findAll();
        $pdfOptions = new Options();
        
       // $pdfOptions->set('defaultFont', 'Arial');
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
    // Retrieve the HTML generated in our twig file

          $html = $this->renderView('produit/produit_pdf.html.twig', [
            'produits' => $produits
            
          ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
    $dompdf->setPaper('letter', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("Products.pdf", [
            "Attachment" => false
        ]);
    }
}
