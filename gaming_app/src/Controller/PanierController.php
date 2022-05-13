<?php

namespace App\Controller;


use App\Repository\SujetRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\ProduitRepository;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="cart_index")
     */
    public function index(SessionInterface $session, ProduitRepository $produitRepository)
    {

        $panier = $session->get('panier', []);

        $panierWithData = [];

        foreach ($panier as $id => $quantity) {
            $panierWithData[] = [
                'produit' => $produitRepository->find($id),
                'quantity' => $quantity
            ];
        }

        $total = 0;

        foreach ($panierWithData as $couple) {
            $total += $couple['produit']->getPrix() * $couple['quantity'];
        }

        return $this->render('panier/index.html.twig', [
            "items" => $panierWithData,
            "total" => $total,
            "session" =>$session
        ]);
    }

    /**
     * @Route("/ajouter/{id}", name="cart_add")
     */
    public function add($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);

        if (empty($panier[$id])) {
            $panier[$id] = 0;
        }
        $panier[$id]++;
        $session->set('panier', $panier);
        return $this->redirectToRoute("cart_index");
    }

    /**
     * @Route("/supprimer/{id}", name="cart_remove")
     */
    public function remove($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }
        $session->set('panier', $panier);

        return $this->redirectToRoute('cart_index');
    }

    /**
     * @Route("/panier/produit/payment", name="paymentproduit", methods={"GET","POST"})
     */
    public function payment(ProduitRepository $produitRepository,SessionInterface $session,PaginatorInterface $paginator,Request $request): Response
    {
        $panier = $session->get('panier', []);

        $panierWithData = [];

        foreach ($panier as $id => $quantity) {
            $panierWithData[] = [
                'produit' => $produitRepository->find($id),
                'quantity' => $quantity
            ];
        }

        $total = 0;
        $name="";
        foreach ($panierWithData as $couple) {
            $total += $couple['produit']->getPrix() * $couple['quantity'];
            $name =$name." ".$couple['produit']->getNom();
        }
        $total=$total*100;

        \Stripe\Stripe::setApiKey('sk_test_51IUVCeDOtKIVPgbZHfUUWuAj4QGDWhVHABQBdjk2BvteUm2rJqnzFMEHJfsemgLp1NygIkIHN8gMPELlYthE3eWC00H35Rjw12');
        header('Content-Type: application/json');
        $YOUR_DOMAIN = 'http://localhost:8000';
        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'unit_amount' => $total,
                    'product_data' => [
                        'name' => $name,
                        'images' => ["https://www.autourdesvoyages.com/wp-content/uploads/agence-voyage.jpg"],
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success',[],UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error',[],UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
        return new JsonResponse(['id' => $checkout_session->id]);
    }

    /**
     * @Route("/panier/addMobile", name="add_cart_mobile")
     */
    public function addToCartMobile(Request $request, SessionInterface $session): JsonResponse
    {

        $id = $request->query->get('id');
        $panier = $session->get('panier', []);

        if (empty($panier[$id])) {
            $panier[$id] = 0;
        }
        $panier[$id]++;
        $session->set('panier', $panier);
        return new JsonResponse('added to cart');

    }

    /**
     * @Route("/panier/showMobile", name="show_cart_mobile")
     */
    public function showCartMobile( SessionInterface $session, ProduitRepository $produitRepository): Response
    {

        $panier = $session->get('panier', []);

        $panierWithData = [];

        foreach ($panier as $id => $quantity) {
            $panierWithData[] = [
                'id'=>$produitRepository->find($id)->getId(),
                'produitImage'=>$produitRepository->find($id)->getImage(),
                'produitName' => $produitRepository->find($id)->getNom(),
                'produitPrix' => $produitRepository->find($id)->getPrix(),
                'quantity' => $quantity,
                'total' =>$produitRepository->find($id)->getPrix() * $quantity
            ];
        }
        return new Response(json_encode($panierWithData));

    }

    /**
     * @Route("/panier/deleteMobile", name="delete_cart_mobile")
     */
    public function deleteMobile(Request $request, SessionInterface $session)
    {
        $id = $request->query->get('id');
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }
        $session->set('panier', $panier);
        return new JsonResponse('deleted from cart');
    }


}
