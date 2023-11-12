<?php

// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Routing\Annotation\Route;

class News extends AbstractController
{
    /**
     * @Route("/news-from-lemonde", name="app_news_from_lemonde")
     */
    public function showNewsFromLeMonde(): Response
    {
        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', 'https://www.lemonde.fr/international/live/2023/11/12/en-direct-guerre-israel-hamas-l-union-europeenne-condamne-l-utilisation-par-le-hamas-d-hopitaux-et-de-civils-comme-boucliers-humains_6199500_3210.html');
        $content = $response->getContent();
        // You can now parse $content and display relevant information
        return new Response($content);
    }
}
