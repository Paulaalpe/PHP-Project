<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route(path: "/",  name: 'home')]
    public function index()
    {
        // return new Response("Entré en MIs Parkings");
        return $this->render('/home.html.twig');
    }

}