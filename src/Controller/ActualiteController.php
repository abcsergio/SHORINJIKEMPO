<?php

namespace App\Controller;

use App\Repository\ActualiteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActualiteController extends AbstractController
{
    #[Route('/actualite', name: 'app_actualite')]
    public function showAll(ActualiteRepository $repo, ): Response
    {

        $actualites = $repo->findAll();
       
        return $this->render('actualite/allActualites.html.twig', [
            'actualites' => $actualites,
            
        ]);
    }



    #[Route('/actualite/{id<\d+>}', name: 'app_actualite_show')]
    public function show($id, ActualiteRepository $repo)
    {
        $actualite = $repo->find($id);

        return $this->render('actualite/show.html.twig', [
            'actualite' => $actualite
        ]);
    }
}
