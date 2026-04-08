<?php
/* Smarty version 4.1.0, created on 2026-04-08 13:04:51
  from 'C:\Users\bertrand2\Documents\demo-MVC\Views\templates\categorie\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69d652732b50f4_99574278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4e1120d327c96a382c1df9613b50df97155b9b0' => 
    array (
      0 => 'C:\\Users\\bertrand2\\Documents\\demo-MVC\\Views\\templates\\categorie\\update.tpl',
      1 => 1775047678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69d652732b50f4_99574278 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
</p>

<form action="index.php?page=categorie&action=update" method="post">
    <input type="hidden" name="id"  id="id" value="<?php echo $_smarty_tpl->tpl_vars['vue']->value['categorie'][0]['id'];?>
" /> 
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" value="<?php echo $_smarty_tpl->tpl_vars['vue']->value['categorie'][0]['libelle'];?>
" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form>
<?php }
}
