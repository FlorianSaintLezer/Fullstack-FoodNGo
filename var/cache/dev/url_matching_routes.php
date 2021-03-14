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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/comments' => [[['_route' => 'admin_comments', '_controller' => 'App\\Controller\\AdminCommentsController::comments'], null, null, null, true, false, null]],
        '/admin/comments/add' => [[['_route' => 'admin_comments_add', '_controller' => 'App\\Controller\\AdminCommentsController::modification'], null, null, null, false, false, null]],
        '/adminhome' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\AdminRecipesController::index'], null, null, null, false, false, null]],
        '/admin/recipes' => [[['_route' => 'admin_recipes', '_controller' => 'App\\Controller\\AdminRecipesController::recipes'], null, null, null, true, false, null]],
        '/admin/recipes/creation' => [[['_route' => 'admin_recipes_add', '_controller' => 'App\\Controller\\AdminRecipesController::modification'], null, null, null, false, false, null]],
        '/signin' => [[['_route' => 'signin', '_controller' => 'App\\Controller\\AdminSecuController::signin'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\AdminSecuController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\AdminSecuController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\RecipesController::home'], null, null, null, false, false, null]],
        '/recipes' => [[['_route' => 'recipes', '_controller' => 'App\\Controller\\RecipesController::recipes'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\UsersController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/editpassword' => [[['_route' => 'edit_password', '_controller' => 'App\\Controller\\UsersController::editPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|comments/([^/]++)(?'
                        .'|(*:199)'
                    .')'
                    .'|recipes/([^/]++)(?'
                        .'|(*:227)'
                    .')'
                .')'
                .'|/recipes/(?'
                    .'|([^/]++)(*:257)'
                    .'|category/([^/]++)(*:282)'
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
        199 => [
            [['_route' => 'admin_comments_edit', '_controller' => 'App\\Controller\\AdminCommentsController::modification'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin_comments_delete', '_controller' => 'App\\Controller\\AdminCommentsController::suppression'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        227 => [
            [['_route' => 'admin_recipes_edit', '_controller' => 'App\\Controller\\AdminRecipesController::modification'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin_recipes_delete', '_controller' => 'App\\Controller\\AdminRecipesController::suppression'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        257 => [[['_route' => 'show_recipe', '_controller' => 'App\\Controller\\RecipesController::showRecipe'], ['id'], null, null, false, true, null]],
        282 => [
            [['_route' => 'filterCategory', '_controller' => 'App\\Controller\\RecipesController::filterCategory'], ['category'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
