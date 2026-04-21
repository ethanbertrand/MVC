<!DOCTYPE html>
<html>
    <head>
        <title>{$vue["titre"]}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>

        <!-- Barre de tâches -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <link rel="stylesheet" href="public/style.css">
            <div class="container-fluid">

                <a class="navbar-brand" href="index.php">Annuaire MVC</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuTop">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menuTop">
                    <ul class="navbar-nav me-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controleur=categorie&action=lister">Catégories</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controleur=site&action=lister">Sites</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controleur=utilisateur&action=lister">Utilisateurs</a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>

        <div class="container">
            <h1>{$vue["titre"]}</h1>
            {include file={$tpl}}
        </div>

    </body>
</html>