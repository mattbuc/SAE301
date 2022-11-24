<?php

namespace App\Controller;

use App\Entity\Manifestation;
use App\Repository\ManifestationRepository;
use App\Repository\LieuRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManifestationController extends AbstractController
{
    #[Route('/manifestation', name: 'app_manifestation')]
    public function manifestation( ManifestationRepository $manifestationRepository, LieuRepository $lieuRepository)
    {

        $manifestations = $manifestationRepository->findAll();

        $lieux = $lieuRepository->findAll();

        return $this->render('manifestation/index.html.twig', [
            'Manifestations' => $manifestations,
            'Lieux' => $lieux,
        ]);
    }
}
