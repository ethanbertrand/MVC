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