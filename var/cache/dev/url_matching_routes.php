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
        '/city' => [[['_route' => 'city_read', '_controller' => 'App\\Controller\\CityController::index'], null, ['GET' => 0], null, false, false, null]],
        '/country' => [
            [['_route' => 'country_read', '_controller' => 'App\\Controller\\CountryController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'country_create', '_controller' => 'App\\Controller\\CountryController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/resident' => [[['_route' => 'resident_read', '_controller' => 'App\\Controller\\ResidentController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/c(?'
                    .'|ity(?:/(\\d+))?(?'
                        .'|(*:190)'
                    .')'
                    .'|ountry(?:/(\\d+))?(?'
                        .'|(*:219)'
                    .')'
                .')'
                .'|/resident(?'
                    .'|(?:/(\\d+))?(?'
                        .'|(*:255)'
                    .')'
                    .'|/avgCity(?:/(\\d+))?(*:283)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        190 => [
            [['_route' => 'city_create', 'id' => '0', '_controller' => 'App\\Controller\\CityController::create'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'city_update', 'id' => '0', '_controller' => 'App\\Controller\\CityController::update'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'city_delete', 'id' => '0', '_controller' => 'App\\Controller\\CityController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        219 => [
            [['_route' => 'country_update', 'id' => '0', '_controller' => 'App\\Controller\\CountryController::update'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'country_delete', 'id' => '0', '_controller' => 'App\\Controller\\CountryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        255 => [
            [['_route' => 'resident_create', 'id' => '0', '_controller' => 'App\\Controller\\ResidentController::create'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'resident_update', 'id' => '0', '_controller' => 'App\\Controller\\ResidentController::update'], ['id'], ['PATCH' => 0], null, false, true, null],
        ],
        283 => [
            [['_route' => 'resident_delete', 'id' => '0', '_controller' => 'App\\Controller\\ResidentController::avgResidentAgeOf'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
