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
        '/admin' => [[['_route' => 'admin_dashboard_index', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/produit' => [[['_route' => 'admin_product_index', '_controller' => 'App\\Controller\\Admin\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/produit/ajouter' => [[['_route' => 'admin_product_new', '_controller' => 'App\\Controller\\Admin\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateur/creer-admin' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier/front/cart' => [[['_route' => 'front_cart_index', '_controller' => 'App\\Controller\\Front\\CartController::index'], null, ['GET' => 0], null, false, false, null]],
        '/panier/vider' => [[['_route' => 'front_cart_empty', '_controller' => 'App\\Controller\\Front\\CartController::empty'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'front_home_index', '_controller' => 'App\\Controller\\Front\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/conditions-du-site' => [[['_route' => 'front_home_terms_conditions', '_controller' => 'App\\Controller\\Front\\HomeController::terms'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'front_order_index', '_controller' => 'App\\Controller\\Front\\OrderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\Security\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\Security\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Security\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Security\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|categorie(?'
                        .'|(?:/([0-9]+))?(*:238)'
                        .'|/supprimer/([^/]++)(*:265)'
                    .')'
                    .'|produit/(?'
                        .'|detail/([A-Za-z0-9]+(?:-[A-Za-z0-9]+)*)(*:324)'
                        .'|modifier/([A-Za-z0-9]+(?:-[A-Za-z0-9]+)*)(*:373)'
                        .'|supprimer/([0-9]+)(*:399)'
                    .')'
                    .'|utilisateur/(?'
                        .'|detail/([^/]++)(*:438)'
                        .'|modifier/([^/]++)(*:463)'
                    .')'
                .')'
                .'|/panier/(?'
                    .'|ajouter/([0-9]+)(*:500)'
                    .'|diminuer/([0-9]+)(*:525)'
                    .'|supprimer/([0-9]+)(*:551)'
                .')'
                .'|/detail/([^/]++)(*:576)'
                .'|/commande/(?'
                    .'|confirmation/([1-9][0-9]*)(*:623)'
                    .'|validation/([1-9][0-9]*)(*:655)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        238 => [[['_route' => 'admin_category_index', 'id' => null, '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        265 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        324 => [[['_route' => 'admin_product_show', '_controller' => 'App\\Controller\\Admin\\ProductController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        373 => [[['_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        399 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        438 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        463 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        500 => [[['_route' => 'front_cart_add', '_controller' => 'App\\Controller\\Front\\CartController::add'], ['id'], ['GET' => 0], null, false, true, null]],
        525 => [[['_route' => 'front_cart_decrease', '_controller' => 'App\\Controller\\Front\\CartController::decrease'], ['id'], ['GET' => 0], null, false, true, null]],
        551 => [[['_route' => 'front_cart_remove', '_controller' => 'App\\Controller\\Front\\CartController::remove'], ['id'], ['GET' => 0], null, false, true, null]],
        576 => [[['_route' => 'front_home_show', '_controller' => 'App\\Controller\\Front\\HomeController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        623 => [[['_route' => 'front_order_confirmation', '_controller' => 'App\\Controller\\Front\\OrderController::confirmation'], ['id'], ['GET' => 0], null, false, true, null]],
        655 => [
            [['_route' => 'front_order_validated', '_controller' => 'App\\Controller\\Front\\OrderController::validated'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
