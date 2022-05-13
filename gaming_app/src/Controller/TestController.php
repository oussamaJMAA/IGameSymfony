<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
   
  /** 
   * @Route("/test/ajax", name="hey") 
*/ 
public function ajaxAction(Request $request) {  
    $students = $this->getDoctrine() 
       ->getRepository(User::class) 
       ->findAll();  
       
    if ($request->isXmlHttpRequest() || $request->query->get('showJson') == 1) {  
       $jsonData = array();  
       $idx = 0;  
       foreach($students as $student) {  
          $temp = array(
             'name' => $student->getUsername(),  
             'address' => $student->getEmail(),  
          );   
          $jsonData[$idx++] = $temp;  
       } 
       return new JsonResponse($jsonData); 
    } else { 
       return $this->render('test/index.html.twig'); 
    } 
 }         
}
