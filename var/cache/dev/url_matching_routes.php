<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|ctualite/(\\d+)(*:188)'
                    .'|dmin/(?'
                        .'|categorie_(?'
                            .'|update_([^/]++)(*:232)'
                            .'|delete_([^/]++)(*:255)'
                        .')'
                        .'|details_a(?'
                            .'|rticle_(\\d+)(*:288)'
                            .'|ctualite_(\\d+)(*:310)'
                        .')'
                        .'|a(?'
                            .'|rticle_(?'
                                .'|update_(\\d+)(*:345)'
                                .'|delete_(\\d+)(*:365)'
                            .')'
                            .'|ctualite_(?'
                                .'|update_(\\d+)(*:398)'
                                .'|delete_(\\d+)(*:418)'
                            .')'
                        .')'
                    .')'
                    .'|rticle(?'
                        .'|s/([^/]++)(*:448)'
                        .'|/(\\d+)(*:462)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => 'app_actualite_show', '_controller' => 'App\\Controller\\ActualiteController::show'], ['id'], null, null, false, true, null]],
        232 => [[['_route' => 'admin_app_categorie_update', '_controller' => 'App\\Controller\\AdminController::update'], ['slug'], null, null, false, true, null]],
        255 => [[['_route' => 'admin_app_categorie_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['slug'], null, null, false, true, null]],
        288 => [[['_route' => 'admin_app_article_details', '_controller' => 'App\\Controller\\AdminController::detailsArticle'], ['id'], null, null, false, true, null]],
        310 => [[['_route' => 'admin_app_actualite_details', '_controller' => 'App\\Controller\\AdminController::detailsActualite'], ['id'], null, null, false, true, null]],
        345 => [[['_route' => 'admin_app_article_update', '_controller' => 'App\\Controller\\AdminController::updateArticle'], ['id'], null, null, false, true, null]],
        365 => [[['_route' => 'admin_app_article_delete', '_controller' => 'App\\Controller\\AdminController::deleteArticle'], ['id'], null, null, false, true, null]],
        398 => [[['_route' => 'admin_app_actualite_update', '_controller' => 'App\\Controller\\AdminController::updateActualite'], ['id'], null, null, false, true, null]],
        418 => [[['_route' => 'admin_app_actualite_delete', '_controller' => 'App\\Controller\\AdminController::deleteActualite'], ['id'], null, null, false, true, null]],
        448 => [[['_route' => 'app_articles_categorie', '_controller' => 'App\\Controller\\ArticleController::showByCategorie'], ['slug'], null, null, false, true, null]],
        462 => [
            [['_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
