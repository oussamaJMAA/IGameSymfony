<?php

namespace App\Controller;

use App\Entity\Promotion;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/promotionn")
 */

class PromotionJSONController extends AbstractController
{
    /**
     * @Route("/allPromotions", name="app_promotion")
     */
    public function index(NormalizerInterface $normalizer): Response
    {
        $produits = $this->getDoctrine()->getManager()
            ->getRepository(Promotion::class)
            ->findAll();

        $jsonContent = $normalizer->normalize($produits,'json',['groups'=>'promotion']);

        return new JsonResponse($jsonContent);

    }

    /**
     * @Route("/detailPromotion", name="detail_Promotion")
     */

    public function detailPromotion(Request $request)
    {
        $id=$request->get("id");
        $em=$this->getDoctrine()->getManager();
        $promotion=$em->getRepository(Promotion::class)->find($id);
        $encoder= new JsonEncoder();
        $normalizer=new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object){
            return $object->getDescription;
        });
        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted= $serializer->normalize($promotion);

        return new JsonResponse($formatted);


    }

    /**
     * @Route("/addPromotion", name="add_promotion")
     */

    public function ajouterPromotionAction(Request $request){

        $promotion= new Promotion();
        $em = $this->getDoctrine()->getManager();
        $promotion->setNom($request->get("nom"));
        $promotion->setDate($request->get("date"));
        $promotion->setDatef($request->get("datef"));
        $promotion->setPrixPro($request->get("prixPro"));

        $em->persist($promotion);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($promotion,"json",['groups'=>'promotion']);
        return new JsonResponse($formatted);
    }


    /**
     * @Route("/updatePromotion", name="update_promotion")
     */

    public function modifierPromotionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $promotion = $this->getDoctrine()->getManager()
            ->getRepository(Promotion::class)
            ->find($request->get("id"));



        $promotion->setNom($request->get("nom"));
        $promotion->setDate($request->get("date"));
        $promotion->setPrixPro($request->get("prixPro"));
        $promotion->setDatef($request->get("datef"));

        $em->persist($promotion);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($promotion);
        return new JsonResponse("Promotion a ete modifiee avec success.");

    }


    /**
     * @Route("/delPromotion", name="delpromotion")
     */


    public function delPromotionoffre(Request $request,NormalizerInterface $normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $prom=$this->getDoctrine()->getRepository(Promotion::class)
            ->find($request->get("id"));
        $em->remove($prom);
        $em->flush();
        $jsonContent = $normalizer->normalize($prom,'json',['promotion'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }


}
