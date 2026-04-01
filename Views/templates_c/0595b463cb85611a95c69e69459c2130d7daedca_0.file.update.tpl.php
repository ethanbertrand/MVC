<?php
/* Smarty version 4.1.0, created on 2026-04-01 13:35:55
  from 'C:\Users\bertrand2\Desktop\Annuaire\demo-MVC\Views\templates\categorie\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69cd1f3b324761_58699487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0595b463cb85611a95c69e69459c2130d7daedca' => 
    array (
      0 => 'C:\\Users\\bertrand2\\Desktop\\Annuaire\\demo-MVC\\Views\\templates\\categorie\\update.tpl',
      1 => 1775047678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cd1f3b324761_58699487 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
</p>

<form action="index.php?page=categorie&action=update" method="post">
    <input type="hidden" name="id"  id="id" value="<?php echo $_smarty_tpl->tpl_vars['vue']->value['categorie'][0]['id'];?>
" /> 
    <input type="text" name="Libelle" placeholder="Votre libelle" id="Libelle" value="<?php echo $_smarty_tpl->tpl_vars['vue']->value['categorie'][0]['libelle'];?>
" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form>
<?php }
}
