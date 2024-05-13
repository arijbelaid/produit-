<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InscriptionnController extends AbstractController
{
    #[Route('/inscriptionn', name: 'app_inscriptionn')]
    public function index(): Response
    {
        return $this->render('inscriptionn/index.html.twig', [
            'controller_name' => 'InscriptionnController',
        ]);
    }
}
