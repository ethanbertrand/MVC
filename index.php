<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Chargement du moteur de template Smarty
require_once('libs/smarty/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'Views/templates/';
$smarty->compile_dir = 'Views/templates_c/';
$smarty->config_dir = 'Views/configs/';
$smarty->cache_dir = 'Views/cache/';

// Routeur (gestion des routes)
$page = isset($_GET['page']) ? $_GET['page'] : 'Accueil';

$pages = array(
    'categorie'   => 'CategoryController',
    'analyse'     => 'AnalyseController',
    'Accueil'     => 'HomeController',
    'utilisateur' => 'UtilisateurController',   
    ''            => 'HomeController'
    'avis' => 'AvisController',
    'signalement' => 'SignalementController',
);

$action = (isset($_GET['action'])) ? $_GET['action'] : 'list';

/**
 * Exemple d'utilisation :
 * index.php?page=categorie&action=list
 */
if (array_key_exists($page, $pages)) {

    require("Controllers/" . $pages[$page] . ".php");
    $ctrl = new $pages[$page]();

    if (method_exists($ctrl, $action)) {

        // La méthode du contrôleur renvoie un tableau associatif
        $smarty->assign('vue', $ctrl->{$action}());

        // Chemin du template Smarty
        $smarty->assign('tpl', $page . '/' . $action . '.tpl');

        // Affichage du template principal
        $smarty->display('index.tpl');

    } else {
        http_response_code(404);
        echo "Erreur 404 : action inconnue.";
    }

} else {
    http_response_code(404);
    echo "Erreur 404 : page inconnue.";
}