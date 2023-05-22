<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/actualite' => [[['_route' => 'app_actualite', '_controller' => 'App\\Controller\\ActualiteController::showAll'], null, null, null, false, false, null]],
        '/admin/categorie_add' => [[['_route' => 'admin_app_categorie_add', '_controller' => 'App\\Controller\\AdminController::add'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin_app_categories', '_controller' => 'App\\Controller\\AdminController::showAll'], null, null, null, false, false, null]],
        '/admin/article_add' => [[['_route' => 'admin_app_article_add', '_controller' => 'App\\Controller\\AdminController::addArticle'], null, null, null, false, false, null]],
        '/admin/gestion_articles' => [[['_route' => 'admin_app_articles_gestion', '_controller' => 'App\\Controller\\AdminController::gestionArticles'], null, null, null, false, false, null]],
        '/admin/actualite_add' => [[['_route' => 'admin_app_actualite_add', '_controller' => 'App\\Controller\\AdminController::addActualite'], null, null, null, false, false, null]],
        '/admin/gestion_actualites' => [[['_route' => 'admin_app_actualites_gestion', '_controller' => 'App\\Controller\\AdminController::gestionActualites'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'app_articles', '_controller' => 'App\\Controller\\ArticleController::showAll'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/cours' => [[['_route' => 'app_cours', '_controller' => 'App\\Controller\\CoursController::index'], null, null, null, false, false, null]],
        '/historique' => [[['_route' => 'app_historique', '_controller' => 'App\\Controller\\HistoriqueController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/informations' => [[['_route' => 'app_informations', '_controller' => 'App\\Controller\\InformationsController::index'], null, null, null, false, false, null]],
        '/mentions' => [[['_route' => 'app_mentions', '_controller' => 'App\\Controller\\MentionsController::index'], null, null, null, false, false, null]],
        '/professeur' => [[['_route' => 'app_professeur', '_controller' => 'App\\Controller\\ProfesseurController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|ctualite/(\\d+)(*:26)'
                    .'|dmin/(?'
                        .'|categorie_(?'
                            .'|update_([^/]++)(*:69)'
                            .'|delete_([^/]++)(*:91)'
                        .')'
                        .'|details_a(?'
                            .'|rticle_(\\d+)(*:123)'
                            .'|ctualite_(\\d+)(*:145)'
                        .')'
                        .'|a(?'
                            .'|rticle_(?'
                                .'|update_(\\d+)(*:180)'
                                .'|delete_(\\d+)(*:200)'
                            .')'
                            .'|ctualite_(?'
                                .'|update_(\\d+)(*:233)'
                                .'|delete_(\\d+)(*:253)'
                            .')'
                        .')'
                    .')'
                    .'|rticle(?'
                        .'|s/([^/]++)(*:283)'
                        .'|/(\\d+)(*:297)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'app_actualite_show', '_controller' => 'App\\Controller\\ActualiteController::show'], ['id'], null, null, false, true, null]],
        69 => [[['_route' => 'admin_app_categorie_update', '_controller' => 'App\\Controller\\AdminController::update'], ['slug'], null, null, false, true, null]],
        91 => [[['_route' => 'admin_app_categorie_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['slug'], null, null, false, true, null]],
        123 => [[['_route' => 'admin_app_article_details', '_controller' => 'App\\Controller\\AdminController::detailsArticle'], ['id'], null, null, false, true, null]],
        145 => [[['_route' => 'admin_app_actualite_details', '_controller' => 'App\\Controller\\AdminController::detailsActualite'], ['id'], null, null, false, true, null]],
        180 => [[['_route' => 'admin_app_article_update', '_controller' => 'App\\Controller\\AdminController::updateArticle'], ['id'], null, null, false, true, null]],
        200 => [[['_route' => 'admin_app_article_delete', '_controller' => 'App\\Controller\\AdminController::deleteArticle'], ['id'], null, null, false, true, null]],
        233 => [[['_route' => 'admin_app_actualite_update', '_controller' => 'App\\Controller\\AdminController::updateActualite'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'admin_app_actualite_delete', '_controller' => 'App\\Controller\\AdminController::deleteActualite'], ['id'], null, null, false, true, null]],
        283 => [[['_route' => 'app_articles_categorie', '_controller' => 'App\\Controller\\ArticleController::showByCategorie'], ['slug'], null, null, false, true, null]],
        297 => [
            [['_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
