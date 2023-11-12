<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class helloWorldController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function helloWorld(): Response
    {
        return new Response('Hello World');
    }
}
