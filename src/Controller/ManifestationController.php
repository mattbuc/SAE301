<?php

namespace App\Controller;

use App\Form\ManifestationType;
use App\Repository\ManifestationRepository;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Routing\Annotation\Route;


class ManifestationController extends AbstractController
{
    #[Route('/manifestation', name: 'manifestation')]
    public function allManifestation( ManifestationRepository $manifestationRepository)
    {

        $manifestations = $manifestationRepository->findAll();

        return $this->render('manifestation/index.html.twig', [
            'Manifestations' => $manifestations,
        ]);
    }
    #[Route('/manifestation', name: 'search_manifestation')]
    public function searchManifestation (Request $request ) :Response
    {


        $searchManifestationForm = $this->createForm(ManifestationType::class);
        $searchManifestationForm->handleRequest($request);

            return $this->renderForm('manifestation/index.html.twig', ['search_form' => $searchManifestationForm]);
    }
}
