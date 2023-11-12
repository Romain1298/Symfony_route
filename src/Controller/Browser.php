<?php

// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class Browser extends AbstractController
{
    /**
     * @Route("/browser-info", name="app_browser_info")
     */
    public function showBrowserInfo(Request $request): Response
    {
        $userAgent = $request->headers->get('User-Agent');
        return new Response("User Agent: $userAgent");
    }
}
