<?php

namespace App\Controller;

use DateTime;
use Exception;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\User;
use App\Entity\Produit;
use App\Entity\Commande;
use App\Form\CommandeType;
use Symfony\Component\Mime\Email;
use App\Repository\ProduitRepository;
use App\Repository\CommandeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\BarChart;

/**
 * @Route("/commande")
 */
class CommandeController extends AbstractController
{
    /**
     * @Route("/mobile/edit",name="edit_mobile_order")
     */
    public function editMobile(Request $request)
    {
        $id = $request->query->get("id");

        $cmd = $this->getDoctrine()->getRepository(Commande::class)->findOneBy(['id' => $id]);
        $cmd->setEtat("terminé");
        try {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return new JsonResponse("order edited");
        } catch (Exception $e) {
            return new JsonResponse("error while editing order");
        }
    }

    /**
     * @Route("/", name="commande_index", methods={"GET"})
     */
    public function index(CommandeRepository $commandeRepository, SessionInterface $session): Response
    {

        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
            "session" => $session,
        ]);
    }

    /**
     * @Route("/back", name="commande_indexssss", methods={"GET"})
     */
    public function indexxxxx(CommandeRepository $commandeRepository): Response
    {

        return $this->render('commande/commandeback.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new{idproduit}", name="commande_new", methods={"GET","POST"})
     */
    public function new(Request $request, $idproduit, MailerInterface $mailer): Response
    {
        $commande = new Commande();
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(produit::class)->find($idproduit);
        $commande->addProduit($produit);
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $commande->setEtat("En cours");
            $prix = $produit->getPrix() * $commande->getNbproduit();
            $commande->setPrixtotale($prix);
            $produit->setQuantite(($produit->getQuantite()) - $commande->getNbproduit());
            $commande->setUser($this->getUser());
            /*
            $message = (new Swift_Message('Commande'))
                ->setFrom('taabaniesprit@gmail.com')
                ->setTo('mariem.boughanmi@esprit.tn')
                ->setBody($produit->getNom() . "commande passée");
            $mailer->send($message);

*/
            $email = (new Email())
            ->from('roukaia70@gmail.com')
            ->to($this->getUser()->getEmail())
            ->subject('Commande')
            ->text('Sending emails is fun again!')
            ->html($produit->getNom() . "commande passée avec succcé");
            $mailer->send($email);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commande);
            $entityManager->flush();

           
        return $this->render('commande/users_commande.html.twig', [
            'commande' => $commande,
            'user'=>$this->getUser()
           
        ]);
        }

        return $this->render('commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/paniercommande/new", name="paniercommande", methods={"GET","POST"})
     */
    public function paniercommande(Request $request, $idproduit, MailerInterface $mailer): Response
    {
        $commande = new Commande();
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(produit::class)->find($idproduit);
        $commande->addProduit($produit);
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $commande->setEtat("En cours");
            $prix = $produit->getPrix() * $commande->getNbproduit();
            $commande->setPrixtotale($prix);
            $produit->setQuantite(($produit->getQuantite()) - $commande->getNbproduit());
            if ($produit->getQuantite() < 10) {
                $email = (new Email())
                ->from('roukaia70@gmail.com')
                ->to('mariem.boughanmi@esprit.tn')
                ->subject('produit')
                ->text('Sending emails is fun again!')
                ->html($produit->getNom() . " va epuise il vous reste " . $produit->getQuantite());
                $mailer->send($email);

            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commande);
            $entityManager->flush();

            return $this->redirectToRoute('commande_index');
        }

        return $this->render('commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commande_show", methods={"GET"})
     */
    public function show(Commande $commande): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="commande_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Commande $commande): Response
    {
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('commande_indexssss');
        }

        return $this->render('commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commande_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Commande $commande): Response
    {
        if ($this->isCsrfTokenValid('delete' . $commande->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($commande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('commande_index');
    }

    /**
     * @Route("/stat/commande",name="statistiquesss")
     */
    public function statistiques(ProduitRepository $produitRepository, CommandeRepository $commandeRepository): Response
    {
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
        return $this->render('commande/Stat.html.twig',
            array('piechart' => $bar, 'nbs' => $nbs));

    }

    /**
     * @Route( "/a/commande", name="pdf" ,methods={"GET"})
     */
    public function generate_pdf(CommandeRepository $commandeRepository)
    {
        $options = new Options();
        $options->set('defaultFont', 'Roboto');
        $dompdf = new Dompdf($options);
        $commande = $commandeRepository->findAll();
        $html = $this->renderView('commande/pdf.html.twig', [
            'commandes' => $commande,
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("testpdf.pdf", [
            "Attachment" => true
        ]);
    }

    /**
     * @Route("/etatesit/{id}", name="etaaaat", methods={"GET", "POST"})
     */
    public function etatedit(Request $request, $id): Response
    {
        $commande = new Commande();
        $commande = $this->getDoctrine()->getRepository(Commande::class)->find($id);

        $commande->setEtat("Terminé");
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($commande);
        $entityManager->flush();

        return $this->redirectToRoute('commande_indexssss', [], Response::HTTP_SEE_OTHER);

    }


    /**
     * @Route("/mobile/getAllProducts",name="get_mobile_prods")
     */
    public function showProds(): Response
    {
        $product = $this->getDoctrine()->getRepository(Produit::class)->findAll();
        $productsList = [];
        foreach ($product as $cat) {
            $productsList[] = [
                'id' => $cat->getId(),
                'nom' => $cat->getNom(),
                'prix' => $cat->getPrix(),
                'image' => $cat->getImage(),
                'quantite' => $cat->getQuantite(),
            ];
        }
        return new Response(json_encode($productsList));
    }

    /**
     * @Route("/mobile/add", name="add_mobile_cmd")
     * @throws Exception
     */
    public function addCmd(Request $request, SessionInterface $session, ProduitRepository $produitRepository)
    {
        $id = $request->query->get("id");

        $nbr = $request->query->get("nbr");
        $date = $request->query->get("date");
        $newDate = new DateTime($date);
        $method = $request->query->get('method');
        $cmd = new Commande();
        if ($id == 0) {
            $panier = $session->get('panier', []);

            $panierWithData = [];

            foreach ($panier as $id => $quantity) {
                $panierWithData[] = [
                    'produit' => $produitRepository->find($id),
                    'quantity' => $quantity
                ];
            }
            $total = 0;
            $quantite = 0;

            foreach ($panierWithData as $couple) {
                $total += $couple['produit']->getPrix() * $couple['quantity'];
                $quantite += $couple['quantity'];
            }
            $cmd->setDate($newDate);
            $cmd->setNbproduit($quantite);
            $cmd->setEtat("En cours");
            $cmd->setPrixtotale($total);
        } else {
            $produit = $this->getDoctrine()->getRepository(Produit::class)->findOneBy(["id" => $id]);
            $cmd->addProduit($produit);
            $cmd->setDate($newDate);
            $cmd->setNbproduit($nbr);
            $cmd->setEtat("En cours");
            $prix = $produit->getPrix() * $cmd->getNbproduit();
            $cmd->setPrixtotale($prix);
            $produit->setQuantite(($produit->getQuantite()) - $cmd->getNbproduit());
        }
        $cmd->setMethodedepaiement($method);


        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cmd);
            $em->flush();
            return new JsonResponse("cmd added");
        } catch (Exception $e) {
            return new JsonResponse("error while adding cmd : " . $e->getMessage());
        }
    }

    /**
     * @Route("/mobile/showAll", name="get_mobile_cmds")
     */
    public function showAll()
    {
        $cmds = $this->getDoctrine()->getRepository(Commande::class)->findAll();
        $cmdsList = [];
        foreach ($cmds as $cat) {
            $cmdsList[] = [
                'id' => $cat->getId(),
                'nb' => $cat->getNbproduit(),
                'date' => $cat->getDate()->format('y-m-d'),
                'method' => $cat->getMethodedepaiement(),
                'etat' => $cat->getEtat(),
                'total' => $cat->getPrixtotale(),
            ];
        }
        return new Response(json_encode($cmdsList));
    }



    /**
     * @Route("/mobile/delete", name="delete_mobile_order")
     */
    public function deleteOrder(Request $request)
    {
        $id = $request->query->get('id');
        $cmd = $this->getDoctrine()->getRepository(Commande::class)->findOneBy(['id' => $id]);

        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cmd);
            $em->flush();
            return new JsonResponse("Order deleted successfully");
        } catch (Exception $e) {
            return new JsonResponse("error on " . $e->getMessage());
        }
    }

}
