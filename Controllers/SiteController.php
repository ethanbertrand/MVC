<?php
    public function recherche() {
        require_once 'Models/CategorieModel.php';
        $catModel = new CategorieModel();
        $categories = $catModel->getAll();

        $resultats = [];

        if (!empty($_POST)) {
            $categorie = $_POST['categorie'];
            $motcle = $_POST['motcle'];

            $resultats = $this->model->recherche($categorie, $motcle);
        }

        return [
            'categories' => $categories,
            'resultats' => $resultats
        ];
    }
    public function adminValidation() {
    $this->requireAdmin();

    $sites = $this->model->getSitesEnAttente();
    return ['sites' => $sites];
    }

    public function valider() {
        $this->requireAdmin();
        $this->model->validerSite($_GET['id']);
        header("Location: index.php?page=site&action=adminValidation");
    }

    public function refuser() {
        $this->requireAdmin();
        $this->model->refuserSite($_GET['id']);
        header("Location: index.php?page=site&action=adminValidation");
    }

    private function requireAdmin() {
        if (!isset($_SESSION['user'])) {
            header("Location: index.php?page=utilisateur&action=login");
            exit;
        }

        require_once 'Models/RoleModel.php';
        $roleModel = new RoleModel();

        if (!$roleModel->isAdmin($_SESSION['user'])) {
            http_response_code(403);
            die("Accès interdit");
        }
    }