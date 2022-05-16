<?php

namespace App\Controller;

use DateTime;
use DateTimeImmutable;
use App\Entity\Comment;
use App\Entity\Publication;
use Doctrine\ORM\Mapping\Id;
use app\Form\CommentFormType;
use App\Form\ClientCommentType;
use App\Repository\CommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PublicationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Validator\Constraints\DateTime as ConstraintsDateTime;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\NotBlank;

class BlogController extends AbstractController
{

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_EDITOR')")
     * @Route("/frontBlog", name="frontBlog")
     */
    public function frontBlog(PublicationRepository $repo, PaginatorInterface $paginator,Request $request): Response
    {
        $publications = $repo->findAll();
        $comment = $repo->findAll();
        $pub =  $paginator->paginate($publications,$request->query->getInt('page',1),2);
        return $this->render('front_template/blog.html.twig',[
            'controller_name' => 'BlogController',
            'publications' => $pub
        ]);
    }
    /** 
    * @Route("/jsonblog", name="jsonblog")
    */
    public function jsonblog(PublicationRepository $repo,EntityManagerInterface $entityManager,NormalizerInterface $Normalizer){
        $publications = $repo->findAll();
        $jsonContent = $Normalizer->normalize($publications, 'json', ['groups'=>'post: read']);
    
        return new Response (json_encode($jsonContent));
    }


    /**
     * @Route("/admin", name="admin")
     */
    public function admin(): Response
    {
        
        return $this->render('admin_template/base.html.twig');
    }
     /**
     * @Route("/front/blog", name="front_blog")
     */
    public function front(PublicationRepository $repo, PaginatorInterface $paginator,Request $request): Response
     {
        $publications = $repo->findAll();
        $comment = $repo->findAll();
        $pub =  $paginator->paginate($publications,$request->query->getInt('page',1),2);
        return $this->render('blog/baseFront.html.twig',[
            'controller_name' => 'BlogController',
            'publications' => $pub
        ]);         
     }

   

    /**
     * @Route("/blog", name="blog")
     */
    public function index(PublicationRepository $repo, PaginatorInterface $paginator,Request $request): Response
    {

        $publications = $repo->findAll();
        $comment = $repo->findAll();
        $pub =  $paginator->paginate($publications,$request->query->getInt('page',1),2);
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'publications' => $pub
        ]);
    }

    /**
     * @Route("/", name="home")
     */

    public function home()
    {
        return $this->render('blog/home.html.twig', [
            'title' => "Bienvenue dans notre blog",
            'age' => 31,
        ]);
    }

    /**
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_EDITOR')")
     * @Route("/blog/new", name="blog_create")
     * @Route("/blog/{id}/edit" , name = "blof_edit")
     */
    public function form(Publication $publication = null, Request $request, EntityManagerInterface $manager)
    {

        if (!$publication) {

            $publication = new Publication;
        }


        $form = $this->createFormBuilder($publication)
            ->add('titre')
            ->add('contenu')
            ->add('image' , FileType::class, 
            array(
                'required'=>false,

                'attr' => array(
                    'accept' => "image/jpeg, image/png"
                ),
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a JPG or PNG',
                    ]),new NotBlank([
                        'message' => 'Please insert an image',
                    ]),
                    
                ]
            ),
        
        )
            ->getForm();



        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$publication->getId()) {
                $publication->setCreatedAt(new \DateTimeImmutable());
            }
            $file = $form->get('image')->getData();

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
                                             
                        // moves the file to the directory where brochures are stored
                       $file->move(
                            $this->getParameter('brochures_directory'),
                            $fileName
                        );


                        $publication->setImage($fileName);
            $manager->persist($publication);
            $manager->flush();

            return $this->redirectToRoute('blog_show', ['id' => $publication->getId()]);
        }


        return $this->render('blog/create.html.twig', [
            'formPublication' => $form->createView(),
            'editMode' =>  $publication->getId() !== null
        ]);
    }


  /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show(Publication $publication)
    {

        return $this->render('blog/show.html.twig', [
            'publication' => $publication
        ]);
    }

    /**
     * @Route("/frontBlog/{id}", name="frontBlogg")
     */
    public function showw(Publication $publication,Request $request,EntityManagerInterface $entityManager)
    {    $comment = new Comment();
        $form = $this->createForm(ClientCommentType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setPublication($publication);
            $comment->setContenu( $form->get('comment')->getData());
            $comment->setUser($this->getUser());
            $comment->setAuteur($this->getUser()->getUsername());
            $comment->setCreatedAt(new DateTimeImmutable() );
            $entityManager->persist($comment);
            $entityManager->flush();
            return $this->redirect($request->getUri());
        }
        return $this->render('blog/blog.html.twig', [
            'publication' => $publication,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/blog/show/{id}", name="delete_blog")
     */
    public function delete($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $publication = $entityManager->getRepository(Publication::class)->find($id);
        $entityManager->remove($publication);
        $entityManager->flush();

        return $this->redirectToRoute("blog");  
    }
    
    /**
     * @Route("/stat", name="stat")
     */
    public function ShowStat()
     {
        $entityManager = $this->getDoctrine()->getManager();
        $publication = $entityManager->getRepository(Publication::class)->findAll();
        $comment = $entityManager->getRepository(Comment::class)->findAll();
        $x= count($publication);
        $v= count($comment);
        dump($x);
        dump($v);

        return $this->render('blog/stat.html.twig', [
            'x' => $x,  'v' => $v
        ]);
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

}
