<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    #[Route('/articles', name: 'app_articles')]
    public function showAll(ArticleRepository $repo, CategorieRepository $repoCat): Response
    {

        $articles = $repo->findAll();
        $categories = $repoCat->findAll();

        return $this->render('article/allArticles.html.twig', [
            'articles' => $articles,
            'categories' => $categories
        ]);
    }


    #[Route('/articles/{slug}', name: 'app_articles_categorie')]
    public function showByCategorie(CategorieRepository $repo, $slug)
    {

        //on recupere la catégorie sur laquelle on a cliqué dont le slug se trouve dans la route
        $categorie = $repo->findOneBy(['slug' => $slug]);

        // on recupere toutes les categories pour les afficher dans le menu de la page
        $categories = $repo->findAll();

        return $this->render('article/allArticles.html.twig', [
            'categories' => $categories,
            'articles' => $categorie->getArticles()
        ]);
    }


    #[Route('/article/{id<\d+>}', name: 'app_article_show')]
    public function show($id, ArticleRepository $repo)
    {
        $article = $repo->find($id);

        return $this->render('article/show.html.twig', [
            'article' => $article
        ]);
    }
}
