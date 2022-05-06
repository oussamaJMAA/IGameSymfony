<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Publication;
use App\Entity\Comment;
use App\Repository\PublicationRepository;
use App\Repository\CommentRepository;
use DateTime;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;
use app\Form\CommentFormType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Validator\Constraints\DateTime as ConstraintsDateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class BlogController extends AbstractController
{

    /**
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
     * @Route("/admin", name="admin")
     */
    public function admin(): Response
    {
        
        return $this->render('admin_template/base.html.twig');
    }
     /**
     * @Route("/front", name="front")
     */
    public function front(PublicationRepository $repo, PaginatorInterface $paginator,Request $request): Response
     {
        $publications = $repo->findAll();
        $comment = $repo->findAll();
        $pub =  $paginator->paginate($publications,$request->query->getInt('page',1),2);
        return $this->render('front_template/baseFront.html.twig',[
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
            ->add('image')
            ->getForm();



        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (!$publication->getId()) {
                $publication->setCreatedAt(new \DateTimeImmutable());
            }




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
    public function showw(Publication $publication)
    {

        return $this->render('front_template/blog.html.twig', [
            'publication' => $publication
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

  


}
