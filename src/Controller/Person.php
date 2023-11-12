<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Person extends AbstractController
{
    /**
     * @Route("/person/{nom}/{prenom}", name="app_person_info")
     */
    public function showPersonInfo($nom, $prenom): Response
    {
        return new Response("Nom : $nom, Prénom : $prenom");
    }
}
