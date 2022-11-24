<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfoPratiqueController extends AbstractController
{
    #[Route('/infoPratique', name: 'app_infopratique')]
    public function index(): Response
    {
        return $this->render('infoPratique/index.html.twig', [
            'controller_name' => 'InfoPratiqueController',
        ]);
    }
}
