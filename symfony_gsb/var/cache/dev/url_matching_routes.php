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
        '/Visiteur/Connexion' => [[['_route' => 'app_VisiteurConnexion', '_controller' => 'App\\Controller\\VisiteurController::connexion'], null, null, null, false, false, null]],
        '/Visiteur/Connecter' => [[['_route' => 'app_VisiteurConnecter', '_controller' => 'App\\Controller\\VisiteurController::connecter'], null, null, null, false, false, null]],
        '/Visiteur/Deconnecter' => [[['_route' => 'app_VisiteurDeconnecter', '_controller' => 'App\\Controller\\VisiteurController::deconnecter'], null, null, null, false, false, null]],
        '/Visiteur/Accueil' => [[['_route' => 'app_VisiteurAccueil', '_controller' => 'App\\Controller\\VisiteurController::accueil'], null, null, null, false, false, null]],
        '/Visiteur/Consulter' => [[['_route' => 'app_VisiteurConsulterVue', '_controller' => 'App\\Controller\\VisiteurController::consulterVue'], null, null, null, false, false, null]],
        '/Visiteur/retourConsulter' => [[['_route' => 'app_VisiteurConsulterVueRetour', '_controller' => 'App\\Controller\\VisiteurController::retourConsulterVue'], null, null, null, false, false, null]],
        '/Visiteur/ConsulterResultat' => [[['_route' => 'app_VisiteurConsulter', '_controller' => 'App\\Controller\\VisiteurController::consulter'], null, null, null, false, false, null]],
        '/Visiteur/ConsulterResultatRetour' => [[['_route' => 'app_VisiteurConsulterRetour', '_controller' => 'App\\Controller\\VisiteurController::retourConsulter'], null, null, null, false, false, null]],
        '/Visiteur/FicheDeFrais' => [[['_route' => 'app_VisiteurFicheFraisVue', '_controller' => 'App\\Controller\\VisiteurController::ficheFraisVue'], null, null, null, false, false, null]],
        '/Visiteur/FicheDeFraisRetour' => [[['_route' => 'app_VisiteurFicheFraisVueRetour', '_controller' => 'App\\Controller\\VisiteurController::ficheFraisVueRetour'], null, null, null, false, false, null]],
        '/Visiteur/FicheDeFraisController' => [[['_route' => 'app_VisiteurFicheFrais', '_controller' => 'App\\Controller\\VisiteurController::ficheFrais'], null, null, null, false, false, null]],
        '/Visiteur/SupprimerFicheHorsForfait' => [[['_route' => 'app_SupprimerFicheHorsForfait', '_controller' => 'App\\Controller\\VisiteurController::supprimerFicheHorsForfait'], null, ['POST' => 0], null, false, false, null]],
        '/Comptable/Connexion' => [[['_route' => 'app_ComptableConnexion', '_controller' => 'App\\Controller\\ComptableController::connexion'], null, null, null, false, false, null]],
        '/Comptable/Connecter' => [[['_route' => 'app_ComptableConnecter', '_controller' => 'App\\Controller\\ComptableController::connecter'], null, null, null, false, false, null]],
        '/Comptable/Deconnecter' => [[['_route' => 'app_ComptableDeconnecter', '_controller' => 'App\\Controller\\ComptableController::deconnecter'], null, null, null, false, false, null]],
        '/Comptable/Accueil' => [[['_route' => 'app_ComptableAccueil', '_controller' => 'App\\Controller\\ComptableController::accueil'], null, null, null, false, false, null]],
        '/Comptable/FormulaireFicheFrais' => [[['_route' => 'app_ComptableFicheFormulaire', '_controller' => 'App\\Controller\\ComptableController::formulaireFicheFrais'], null, null, null, false, false, null]],
        '/Comptable/FormulaireValiderFicheFrais' => [[['_route' => 'app_ComptableFicheValideFormulaire', '_controller' => 'App\\Controller\\ComptableController::formulaireValiderFicheFrais'], null, null, null, false, false, null]],
        '/Comptable/SuivreFicheFrais' => [[['_route' => 'app_ComptableFiche', '_controller' => 'App\\Controller\\ComptableController::suivreFicheFrais'], null, null, null, false, false, null]],
        '/Comptable/SuivreFicheFrais/SuivreValide/Modifier' => [[['_route' => 'app_ComptableModifFiche', '_controller' => 'App\\Controller\\ComptableController::modif'], null, null, null, false, false, null]],
        '/Comptable/SuivreFicheFrais/SuivreValide/ModifierFicheFrais' => [[['_route' => 'app_ComptableModifierFiche', '_controller' => 'App\\Controller\\ComptableController::modifierFicheFrais'], null, null, null, false, false, null]],
        '/Comptable/SuivreFicheFrais/DetailFicheFrais' => [[['_route' => 'app_ComptableDetailFiche', '_controller' => 'App\\Controller\\ComptableController::detailFicheFrais'], null, null, null, false, false, null]],
        '/Comptable/SuivreFicheFrais/SuivreValide/Rembourser' => [[['_route' => 'app_ComptableRembourserFiche', '_controller' => 'App\\Controller\\ComptableController::rembourserFicheFrais'], null, null, null, false, false, null]],
        '/Comptable/SuivreFicheFrais/SuivreValide' => [[['_route' => 'app_ComptableSuivreFicheFraisValider', '_controller' => 'App\\Controller\\ComptableController::suivreFicheFraisValider'], null, null, null, false, false, null]],
        '/Comptable/SuivreFicheFrais/Valider' => [[['_route' => 'app_ComptableValiderLaFiche', '_controller' => 'App\\Controller\\ComptableController::validerFicheFrais'], null, null, null, false, false, null]],
        '/Comptable/Formulaire/Retour' => [[['_route' => 'app_ComptableRetourFormulaire', '_controller' => 'App\\Controller\\ComptableController::killFormulaire'], null, null, null, false, false, null]],
        '/Comptable/SuivreFicheFrais/DetailFicheFraisValider' => [[['_route' => 'app_ComptableDetailFicheValider', '_controller' => 'App\\Controller\\ComptableController::detailFicheFraisValider'], null, null, null, false, false, null]],
        '/Comptable/Formulaire/RetourDétail' => [[['_route' => 'app_ComptableRetourDetail', '_controller' => 'App\\Controller\\ComptableController::killDetail'], null, null, null, false, false, null]],
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
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
