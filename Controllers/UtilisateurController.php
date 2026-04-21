<?php

class UtilisateurController {

    private $model;
    private $smarty;

    public function __construct() {
        require_once 'Models/UtilisateurModel.php';
        $this->model = new UtilisateurModel();

        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir('Views/templates/');
        $this->smarty->setCompileDir('Views/templates_c/');
    }

    public function inscription() {
        $this->smarty->display('Utilisateur/inscription.tpl');
    }

    public function register() {
        if (!empty($_POST['mail']) && !empty($_POST['mdp'])) {

            $mail = $_POST['mail'];
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

            $this->model->register($mail, $mdp);

            header("Location: index.php?page=utilisateur&action=login");
            exit;
        }

        $this->smarty->assign('error', 'Veuillez remplir tous les champs.');
        $this->smarty->display('Utilisateur/inscription.tpl');
    }

    public function login() {
        if (!empty($_POST['mail']) && !empty($_POST['mdp'])) {

            $user = $this->model->verifyLogin($_POST['mail']);

            if ($user && password_verify($_POST['mdp'], $user['mdp'])) {
                $_SESSION['user'] = $user['id'];
                header("Location: index.php?page=site&action=list");
                exit;
            }

            $this->smarty->assign('error', 'Identifiants incorrects');
        }

        $this->smarty->display('Utilisateur/login.tpl');
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?page=accueil");
        exit;
    }
}