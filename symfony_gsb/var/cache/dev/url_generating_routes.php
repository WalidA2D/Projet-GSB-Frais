<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::index'], [], [['text', '/']], [], [], []],
    'app_VisiteurConnexion' => [[], ['_controller' => 'App\\Controller\\VisiteurController::connexion'], [], [['text', '/Visiteur/Connexion']], [], [], []],
    'app_VisiteurConnecter' => [[], ['_controller' => 'App\\Controller\\VisiteurController::connecter'], [], [['text', '/Visiteur/Connecter']], [], [], []],
    'app_VisiteurDeconnecter' => [[], ['_controller' => 'App\\Controller\\VisiteurController::deconnecter'], [], [['text', '/Visiteur/Deconnecter']], [], [], []],
    'app_VisiteurAccueil' => [[], ['_controller' => 'App\\Controller\\VisiteurController::accueil'], [], [['text', '/Visiteur/Accueil']], [], [], []],
    'app_VisiteurFicheFraisVue' => [[], ['_controller' => 'App\\Controller\\VisiteurController::ficheFraisVue'], [], [['text', '/Visiteur/FicheDeFrais']], [], [], []],
    'app_VisiteurFicheFrais' => [[], ['_controller' => 'App\\Controller\\VisiteurController::ficheFrais'], [], [['text', '/Visiteur/FicheDeFraisController']], [], [], []],
    'app_SupprimerFicheHorsForfait' => [[], ['_controller' => 'App\\Controller\\VisiteurController::supprimerFicheHorsForfait'], [], [['text', '/Visiteur/SupprimerFicheHorsForfait']], [], [], []],
    'app_ComptableConnexion' => [[], ['_controller' => 'App\\Controller\\ComptableController::connexion'], [], [['text', '/Comptable/Connexion']], [], [], []],
    'app_ComptableConnecter' => [[], ['_controller' => 'App\\Controller\\ComptableController::connecter'], [], [['text', '/Comptable/Connecter']], [], [], []],
    'app_ComptableDeconnecter' => [[], ['_controller' => 'App\\Controller\\ComptableController::deconnecter'], [], [['text', '/Comptable/Deconnecter']], [], [], []],
    'app_ComptableAccueil' => [[], ['_controller' => 'App\\Controller\\ComptableController::accueil'], [], [['text', '/Comptable/Accueil']], [], [], []],
    'app_ComptableFicheFormulaire' => [[], ['_controller' => 'App\\Controller\\ComptableController::formulaireFicheFrais'], [], [['text', '/Comptable/FormulaireFicheFrais']], [], [], []],
    'app_ComptableFicheValideFormulaire' => [[], ['_controller' => 'App\\Controller\\ComptableController::formulaireValiderFicheFrais'], [], [['text', '/Comptable/FormulaireValiderFicheFrais']], [], [], []],
    'app_ComptableFiche' => [[], ['_controller' => 'App\\Controller\\ComptableController::suivreFicheFrais'], [], [['text', '/Comptable/SuivreFicheFrais']], [], [], []],
    'app_ComptableModifFiche' => [[], ['_controller' => 'App\\Controller\\ComptableController::modif'], [], [['text', '/Comptable/SuivreFicheFrais/Modifier']], [], [], []],
    'app_ComptableModifierFiche' => [[], ['_controller' => 'App\\Controller\\ComptableController::modifierFicheFrais'], [], [['text', '/Comptable/SuivreFicheFrais/ModifierFicheFrais']], [], [], []],
    'app_ComptableDetailFiche' => [[], ['_controller' => 'App\\Controller\\ComptableController::detailFicheFrais'], [], [['text', '/Comptable/SuivreFicheFrais/DetailFicheFrais']], [], [], []],
    'app_ComptableRembourserFiche' => [[], ['_controller' => 'App\\Controller\\ComptableController::rembourserFicheFrais'], [], [['text', '/Comptable/SuivreFicheFrais/Rembourser']], [], [], []],
];