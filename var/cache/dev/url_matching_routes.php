<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/authors' => [
            [['_route' => 'app_author', '_controller' => 'App\\Controller\\AuthorController::getAllAuthors'], null, null, null, false, false, null],
            [['_route' => 'addAuthor', '_controller' => 'App\\Controller\\AuthorController::createAuthor'], null, ['POST' => 0], null, true, false, null],
        ],
        '/api/books' => [[['_route' => 'books', '_controller' => 'App\\Controller\\BookController::getAllBooks'], null, null, null, false, false, null]],
        '/d' => [[['_route' => 'postBook', '_controller' => 'App\\Controller\\BookController::montest'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|author/([^/]++)(?'
                        .'|(*:68)'
                    .')'
                    .'|books/([^/]++)(?'
                        .'|(*:93)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [
            [['_route' => 'detailAuthor', '_controller' => 'App\\Controller\\AuthorController::getAuthor'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'deleteAuthor', '_controller' => 'App\\Controller\\AuthorController::RemoveAuthor'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        93 => [
            [['_route' => 'detailbook', '_controller' => 'App\\Controller\\BookController::getOneBook'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'deleteBook', '_controller' => 'App\\Controller\\BookController::RemoveBook'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
