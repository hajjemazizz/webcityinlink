<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/profiledition' => [[['_route' => 'admin_account_edit', '_controller' => 'App\\Controller\\AdminAccountController::edit'], null, null, null, false, false, null]],
        '/admin/profil' => [[['_route' => 'admin_account_index', '_controller' => 'App\\Controller\\AdminAccountController::index'], null, null, null, false, false, null]],
        '/admin/tableau-de-bord' => [[['_route' => 'admin_dashboard_index', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/parametre' => [[['_route' => 'admin_parameter_index', '_controller' => 'App\\Controller\\AdminParameterController::edit'], null, null, null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateur/add' => [[['_route' => 'admin_user_add', '_controller' => 'App\\Controller\\AdminUserController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/en' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/pharmaciee' => [[['_route' => 'pharmacie_index', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::indexpharmacie'], null, ['GET' => 0], null, false, false, null]],
        '/medicament' => [[['_route' => 'app_medicament_index', '_controller' => 'App\\Controller\\MedicamentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/medicament/stat' => [[['_route' => 'app_medicament_stat', '_controller' => 'App\\Controller\\MedicamentController::stat'], null, ['GET' => 0], null, false, false, null]],
        '/medicament/new' => [[['_route' => 'app_medicament_new', '_controller' => 'App\\Controller\\MedicamentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/medicament/search' => [[['_route' => 'app_medicament_search', '_controller' => 'App\\Controller\\MedicamentController::search'], null, ['GET' => 0], null, false, false, null]],
        '/pharmacie' => [[['_route' => 'app_pharmacie_index', '_controller' => 'App\\Controller\\PharmacieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pharmacie/new' => [[['_route' => 'app_pharmacie_new', '_controller' => 'App\\Controller\\PharmacieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pharmacie/search' => [[['_route' => 'app_pharmacie_search', '_controller' => 'App\\Controller\\PharmacieController::search'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController1::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController1::verifyUserEmail'], null, null, null, false, false, null]],
        '/mot-de-passe' => [[['_route' => 'forgot_password', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/mot-de-passe/check-email' => [[['_route' => 'check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/connexion/succes' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\SecurityController::onLoginSuccess'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController1::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController1::logout'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/utilisateur(?'
                    .'|/([^/]++)(?'
                        .'|(*:40)'
                        .'|/edit(*:52)'
                    .')'
                    .'|([^/]++)/suppression(*:80)'
                .')'
                .'|/m(?'
                    .'|edicament/([^/]++)(?'
                        .'|(*:114)'
                        .'|/edit(*:127)'
                        .'|(*:135)'
                    .')'
                    .'|ot\\-de\\-passe/nouveau\\-mot\\-de\\-passe(?:/([^/]++))?(*:195)'
                .')'
                .'|/pharmacie/(?'
                    .'|pharmacie/([^/]++)/medicaments(*:248)'
                    .'|([^/]++)(?'
                        .'|(*:267)'
                        .'|/edit(*:280)'
                        .'|(*:288)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:326)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:365)'
                    .'|wdt/([^/]++)(*:385)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:431)'
                            .'|router(*:445)'
                            .'|exception(?'
                                .'|(*:465)'
                                .'|\\.css(*:478)'
                            .')'
                        .')'
                        .'|(*:488)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        52 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        80 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        114 => [[['_route' => 'app_medicament_show', '_controller' => 'App\\Controller\\MedicamentController::show'], ['idMedicament'], ['GET' => 0], null, false, true, null]],
        127 => [[['_route' => 'app_medicament_edit', '_controller' => 'App\\Controller\\MedicamentController::edit'], ['idMedicament'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        135 => [[['_route' => 'app_medicament_delete', '_controller' => 'App\\Controller\\MedicamentController::delete'], ['idMedicament'], ['POST' => 0], null, false, true, null]],
        195 => [[['_route' => 'reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::resetPassword'], ['token'], null, null, false, true, null]],
        248 => [[['_route' => 'show_medicaments', '_controller' => 'App\\Controller\\PharmacieController::showMedicaments'], ['id'], null, null, false, false, null]],
        267 => [[['_route' => 'app_pharmacie_show', '_controller' => 'App\\Controller\\PharmacieController::show'], ['idPharmacie'], ['GET' => 0], null, false, true, null]],
        280 => [[['_route' => 'app_pharmacie_edit', '_controller' => 'App\\Controller\\PharmacieController::edit'], ['idPharmacie'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        288 => [[['_route' => 'app_pharmacie_delete', '_controller' => 'App\\Controller\\PharmacieController::delete'], ['idPharmacie'], ['POST' => 0], null, false, true, null]],
        326 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        365 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        385 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        431 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        445 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        465 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        478 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        488 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
