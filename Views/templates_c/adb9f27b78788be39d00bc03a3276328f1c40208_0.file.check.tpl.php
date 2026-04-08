<?php
/* Smarty version 4.1.0, created on 2026-04-08 12:31:15
  from 'C:\Users\bertrand2\Desktop\Annuaire\demo-MVC\Views\templates\analyse\check.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69d64a93a634a3_84263868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adb9f27b78788be39d00bc03a3276328f1c40208' => 
    array (
      0 => 'C:\\Users\\bertrand2\\Desktop\\Annuaire\\demo-MVC\\Views\\templates\\analyse\\check.tpl',
      1 => 1775047678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69d64a93a634a3_84263868 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
<p>
<h2><?php echo $_smarty_tpl->tpl_vars['vue']->value['site'];?>
</h2>
<h3></h3>
<div>
    <table>
    <thead><tr>
    <td>Balise</td>
    <td>Valeur</td>
    <td>Info</td>
    </tr></thead>
    <tbody>
    <tr>
    <td>Titre</td>
    <td><?php echo $_smarty_tpl->tpl_vars['vue']->value['title'];?>
</td>
    <td>...</td>
    </tr>
    <tr><td>description</td>
    <td><?php echo $_smarty_tpl->tpl_vars['vue']->value['meta_desc'];?>
</td>
    <td>...</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vue']->value['Hx'], 'Hn', false, 'k');
$_smarty_tpl->tpl_vars['Hn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['Hn']->value) {
$_smarty_tpl->tpl_vars['Hn']->do_else = false;
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Hn']->value, 'val', false, 'n');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['n']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
        <tr>
        <td>H<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</td>            
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    </tbody>
    </table>
</div><?php }
}
