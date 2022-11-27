<?php

namespace App\Controller;

use App\Entity\Manifestation;
use App\Form\ManifestationType;
use App\Repository\ManifestationRepository;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ManifestationController extends AbstractController
{
    #[Route('/manifestation', name: 'manifestation')]
    public function allManifestation( ManifestationRepository $manifestationRepository, Request $request )
    {

        $form = $this->createForm(ManifestationType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $infoManifestation = $form->getData();

            $manifestationForm = $manifestationRepository->searchManifestation($infoManifestation);

            dd($manifestationForm);
        }

        $manifestations = $manifestationRepository->findAll();

        return $this->render('manifestation/index.html.twig', [
            'Manifestations' => $manifestations,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/manifestation/{id}', name: 'manifestation_detail')]
    public function afficherManifestation(ManifestationRepository $manifestationRepository, $id){

        $manifestation_id = $manifestationRepository->find($id);

        return $this->render('manifestation/manifestation_detail.html.twig', [
            'Manifestation' => $manifestation_id,
        ]);
    }
}
