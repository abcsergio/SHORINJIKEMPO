<?php

namespace App\Controller;

use DateTime;
use App\Entity\Article;
use App\Entity\Actualite;
use App\Entity\Categorie;
use App\Form\ArticleType;
use App\Form\ActualiteType;
use App\Form\CategorieType;
use App\Repository\ArticleRepository;
use App\Repository\ActualiteRepository;
use App\Repository\CategorieRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;



#[Route('/admin', name: 'admin_')]

class AdminController extends AbstractController
{
    #[Route('/categorie_add', name: 'app_categorie_add')]
    public function add(Request $request, CategorieRepository $repo, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
    {
        $form =$this->createForm(CategorieType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            //on recupere la saisie du formulaire
            $categoriesForm = $form->get('nom')->getData();

            //recupere chaque categorie séparé d'une virgule, et affecte ce dernier dans une ligne d'un tableau ( grâce à l'explode)
            $tab = explode(",", $categoriesForm);
            // dd($tab);

            foreach ($tab as $nom){
                $categorie = new Categorie();
                $categorie->setNom($nom);
                $slug = $slugger->slug($nom);
                $categorie->setSlug($slug);

                //persit l'objet $categorie
                $repo->save($categorie);
            }

            $manager = $doctrine->getManager();

            // permet d'envoyer les persist dans la BDD
            $manager->flush();

            return $this->redirectToRoute('admin_app_categories');
        }


        return $this->render('admin/categorie/formulaire.html.twig', [
            'formCategorie' => $form->createView()
        ]);
    }




    #[Route('/categories', name: 'app_categories')]

    public function showAll(CategorieRepository $repo)
     {
        $categories = $repo->findAll();

        return $this->render("admin/categorie/gestionCategorie.html.twig", [
            "categories" => $categories
        ]);
     }




     #[Route('/categorie_update_{slug}', name: 'app_categorie_update')] 

     public function update($slug, Request $request, CategorieRepository $repo, SluggerInterface $slugger)
    {
        $categorie = $repo->findOneBy(['slug' => $slug]);

        $form = $this->createForm(CategorieType::class, $categorie);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $slug = $slugger->slug($categorie->getNom());
            $categorie->setSlug($slug);

            $repo->save($categorie, 1);

            return $this->redirectToRoute('admin_app_categories');
        }

        return $this->render('admin/categorie/formulaire.html.twig', [
            'formCategorie' => $form->createView()
        ]);
    }




    #[Route('/categorie_delete_{slug}', name: 'app_categorie_delete')] 

    public function delete($slug, CategorieRepository $repo)
     {
         $categorie = $repo->findOneBy(['slug' => $slug]);
 
         $repo->remove($categorie, 1);
 
         return $this->redirectToRoute("admin_app_categories");
     }










     #[Route('/article_add', name: 'app_article_add')] 

     public function addArticle(Request $request, ArticleRepository $repo, SluggerInterface $slugger) 
    {
        $article = new Article();

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $file = $form->get('photoForm')->getData();

            if($file){

            $fileName = $slugger->slug($article->getTitre()) . uniqid() . '.' . $file->guessExtension();

            try{
                $file->move($this->getParameter('photos_article'), $fileName );

            }catch(FileException $e){
                
            }

            $article->setPhoto($fileName);

            }

            $article->setDateDeCreation(new DateTime("now"));
            
            $repo->save($article, 1);

            $this->addFlash("success", "l'article a bien été ajouté !");

            return $this->redirectToRoute('admin_app_articles_gestion');
        }

        return $this->render('admin/article/formulaire.html.twig', [
            'formArticle' => $form->createView()
        ]);
    }




    #[Route('/gestion_articles', name: 'app_articles_gestion')] 

    public function gestionArticles(ArticleRepository $repo)
     {
        $articles = $repo->findAll();

        return $this->render("admin/article/gestionArticle.html.twig", [
            'articles' => $articles
        ]);
     }




     #[Route('/details_article_{id<\d+>}', name: 'app_article_details')] 

     public function detailsArticle($id, ArticleRepository $repo)
    {
        $article = $repo->find($id);

        return $this->render('admin/article/detailsArticle.html.twig', [
            'article' => $article
        ]);
    }




    #[Route('/article_update_{id<\d+>}', name: 'app_article_update')] 

    public function updateArticle($id, ArticleRepository $repo, Request $request, SluggerInterface $slugger)
    {
        $article = $repo->find($id);

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $file = $form->get('photoForm')->getData();

            if($file)
            {
                $fileName = $slugger->slug($article->getTitre()) . uniqid() . '.' . $file->guessExtension();

                try{
                    $file->move($this->getParameter('photos_article'), $fileName );

                }catch(FileException $e){
                    //gestion des erreurs d'upload
                }
                $article->setPhoto($fileName);
            }

            $repo->save($article, 1);

            return $this->redirectToRoute('admin_app_articles_gestion');
        }

        return $this->render('admin/article/formulaire.html.twig', [
            'formArticle' => $form->createView()
        ]);
    }




    #[Route('/article_delete_{id<\d+>}', name: 'app_article_delete')] 

    public function deleteArticle($id, ArticleRepository $repo)
    {
        $article = $repo->find($id);
        
        $repo->remove($article, 1);

        $this->addFlash("success", "l'article a bien été supprimé !");

        return $this->redirectToRoute("admin_app_articles_gestion");
    }










    #[Route('/actualite_add', name: 'app_actualite_add')] 

     public function addActualite(Request $request, ActualiteRepository $repo, SluggerInterface $slugger) 
    {
        $actualite = new Actualite();

        $form = $this->createForm(ActualiteType::class, $actualite);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $file = $form->get('photoForm')->getData();

            if($file){

            $fileName = $slugger->slug($actualite->getTitre()) . uniqid() . '.' . $file->guessExtension();

            try{
                $file->move($this->getParameter('photos_article'), $fileName );

            }catch(FileException $e){
                
            }

            $actualite->setPhoto($fileName);

            }

            $actualite->setDateDeCreation(new DateTime("now"));
            
            $repo->save($actualite, 1);

            $this->addFlash("success", "l'actualité a bien été ajouté !");

            return $this->redirectToRoute('admin_app_actualites_gestion');
        }

        return $this->render('admin/actualite/formulaire.html.twig', [
            'formActualite' => $form->createView()
        ]);
    }




    #[Route('/gestion_actualites', name: 'app_actualites_gestion')] 

    public function gestionActualites(ActualiteRepository $repo)
     {
        $actualites = $repo->findAll();

        return $this->render("admin/actualite/gestionActualite.html.twig", [
            'actualites' => $actualites
        ]);
     }




     #[Route('/details_actualite_{id<\d+>}', name: 'app_actualite_details')] 

     public function detailsActualite($id, ActualiteRepository $repo)
    {
        $actualite = $repo->find($id);

        return $this->render('admin/actualite/detailsActualite.html.twig', [
            'actualite' => $actualite
        ]);
    }




    #[Route('/actualite_update_{id<\d+>}', name: 'app_actualite_update')] 

    public function updateActualite($id, ActualiteRepository $repo, Request $request, SluggerInterface $slugger)
    {
        $actualite = $repo->find($id);

        $form = $this->createForm(ActualiteType::class, $actualite);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $file = $form->get('photoForm')->getData();

            if($file)
            {
                $fileName = $slugger->slug($actualite->getTitre()) . uniqid() . '.' . $file->guessExtension();

                try{
                    $file->move($this->getParameter('photos_article'), $fileName );

                }catch(FileException $e){
                    //gestion des erreurs d'upload
                }
                $actualite->setPhoto($fileName);
            }

            $repo->save($actualite, 1);

            return $this->redirectToRoute('admin_app_actualites_gestion');
        }

        return $this->render('admin/actualite/formulaire.html.twig', [
            'formActualite' => $form->createView()
        ]);
    }




    #[Route('/actualite_delete_{id<\d+>}', name: 'app_actualite_delete')] 

    public function deleteActualite($id, ActualiteRepository $repo)
    {
        $actualite = $repo->find($id);
        
        $repo->remove($actualite, 1);

        $this->addFlash("success", "l'actualité a bien été supprimé !");

        return $this->redirectToRoute("admin_app_actualites_gestion");
    }




}
