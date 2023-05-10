<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\ActualiteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(ActualiteRepository $repo): Response
    {

        $actualites = $repo->findBy([], ["id" => "DESC"], 5); //on récupère les 10 derniers articles et on les affiche

        return $this->render('home/index.html.twig', [
            'actualites' => $actualites
        ]);
    }
}
