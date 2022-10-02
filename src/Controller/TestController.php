<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="app_test")
     */
    public function index(): Response
    {
        $people = array (array('id'=>'1','nom'=>'fatma','email'=>'fatma@gmail.com'),array('id'=>'2','nom'=>'Helmi','email'=>'helmi@gmail.com'));
        //$people =[];
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'valeur1'=>'val1',
            'p'=>$people,
        ]);
    }
}
