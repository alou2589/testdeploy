<?php

namespace App\Controller\Test;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/test/accueil", name="test_accueil")
     */
    public function index(): Response
    {
        return $this->render('test/accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
}
