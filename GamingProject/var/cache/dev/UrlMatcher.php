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
        '/equipe' => [[['_route' => 'app_equipe_index', '_controller' => 'App\\Controller\\EquipeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/equipe/afficheFront' => [[['_route' => 'affiche_front', '_controller' => 'App\\Controller\\EquipeController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/equipe/front' => [[['_route' => 'equipe_front', '_controller' => 'App\\Controller\\EquipeController::new1'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipe/new' => [[['_route' => 'app_equipe_new', '_controller' => 'App\\Controller\\EquipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participation' => [[['_route' => 'app_participation_index', '_controller' => 'App\\Controller\\ParticipationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participation/new' => [[['_route' => 'app_participation_new', '_controller' => 'App\\Controller\\ParticipationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tournois/searchTournaments' => [[['_route' => 'searchTournaments', '_controller' => 'App\\Controller\\TournoisController::searchStudentx'], null, null, null, false, false, null]],
        '/tournois/stat' => [[['_route' => 'stat', '_controller' => 'App\\Controller\\TournoisController::stat'], null, null, null, false, false, null]],
        '/tournois' => [[['_route' => 'app_tournois_index', '_controller' => 'App\\Controller\\TournoisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tournois/participation' => [[['_route' => 'Affiche_Participation', '_controller' => 'App\\Controller\\TournoisController::Affiche_Participation'], null, ['GET' => 0], null, false, false, null]],
        '/tournois/front' => [[['_route' => 'front', '_controller' => 'App\\Controller\\TournoisController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/tournois/pdf' => [[['_route' => 'tournois_pdf', '_controller' => 'App\\Controller\\TournoisController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/tournois/new' => [[['_route' => 'app_tournois_new', '_controller' => 'App\\Controller\\TournoisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/equipe/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
                .'|/participation/([^/]++)(?'
                    .'|(*:244)'
                    .'|/edit(*:257)'
                    .'|(*:265)'
                .')'
                .'|/tournois/(?'
                    .'|bracket/([^/]++)(*:303)'
                    .'|p(?'
                        .'|articipants/([^/]++)(*:335)'
                        .'|/([^/]++)/([^/]++)(*:361)'
                    .')'
                    .'|([^/]++)(*:378)'
                    .'|edit/([^/]++)(*:399)'
                    .'|([^/]++)(*:415)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => 'app_equipe_show', '_controller' => 'App\\Controller\\EquipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'app_equipe_edit', '_controller' => 'App\\Controller\\EquipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'app_equipe_delete', '_controller' => 'App\\Controller\\EquipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        244 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        257 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        265 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        303 => [[['_route' => 'bracket', '_controller' => 'App\\Controller\\TournoisController::bracket'], ['id'], ['GET' => 0], null, false, true, null]],
        335 => [[['_route' => 'participants', '_controller' => 'App\\Controller\\TournoisController::participants'], ['id'], ['GET' => 0], null, false, true, null]],
        361 => [[['_route' => 'participer', '_controller' => 'App\\Controller\\TournoisController::participer'], ['id', 'id2'], ['GET' => 0], null, false, true, null]],
        378 => [[['_route' => 'app_tournois_show', '_controller' => 'App\\Controller\\TournoisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        399 => [[['_route' => 'app_tournois_edit', '_controller' => 'App\\Controller\\TournoisController::edit2'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        415 => [
            [['_route' => 'app_tournois_delete', '_controller' => 'App\\Controller\\TournoisController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
