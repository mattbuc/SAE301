<?php

namespace App\Controller;

use App\Repository\LieuRepository;
use App\Repository\ManifestationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LieuController extends AbstractController
{
    #[Route('/lieu', name: 'app_lieu')]
    public function manifestation( lieuRepository $lieuRepository)
    {

        $lieux = $lieuRepository->findAll();

        return $this->render('lieu/index.html.twig', [
            'Lieux' => $lieux,
        ]);
    }
}
