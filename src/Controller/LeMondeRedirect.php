<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class LeMondeRedirect extends AbstractController
{
    /**
     * @Route("/lemonde", name="app_lemonde_redirect")
     */
    public function redirectLeMonde(): RedirectResponse
    {
        return $this->redirect('https://www.lemonde.fr');
    }
}
