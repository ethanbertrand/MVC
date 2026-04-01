<?php
/* Smarty version 4.1.0, created on 2026-04-01 13:30:25
  from 'C:\Users\bertrand2\Desktop\Annuaire\demo-MVC\Views\templates\categorie\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69cd1df11d9360_29941719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20890ef7da5a9ae9138820e4c6a39642e672a828' => 
    array (
      0 => 'C:\\Users\\bertrand2\\Desktop\\Annuaire\\demo-MVC\\Views\\templates\\categorie\\add.tpl',
      1 => 1775047678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cd1df11d9360_29941719 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
</p>
<form action="index.php?page=categorie&action=insert" method="post">
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form><?php }
}
