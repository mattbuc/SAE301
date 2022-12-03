<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TerminerController extends AbstractController
{
    #[Route('/terminer', name: 'app_terminer')]
    public function index(): Response
    {
        return $this->render('terminer/index.html.twig', [
            'controller_name' => 'TerminerController',
        ]);
    }
}
