<?php
/* Smarty version 4.1.0, created on 2026-04-08 13:35:59
  from 'C:\Users\bertrand2\Documents\demo-MVC\Views\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69d659bfa49150_52333076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6c249f6e9b05066a1acc4fea3fa49a7ce3f2714' => 
    array (
      0 => 'C:\\Users\\bertrand2\\Documents\\demo-MVC\\Views\\templates\\index.tpl',
      1 => 1775655345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69d659bfa49150_52333076 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['vue']->value["titre"];?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    </head>

    <body>

        <!-- Barre de tâches -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
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
            <h1><?php echo $_smarty_tpl->tpl_vars['vue']->value["titre"];?>
</h1>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['tpl']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>

    </body>
</html><?php }
}
