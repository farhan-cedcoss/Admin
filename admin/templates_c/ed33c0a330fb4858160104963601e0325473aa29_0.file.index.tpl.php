<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-27 05:52:36
  from '/opt/lampp/htdocs/smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d8694440003_51960539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed33c0a330fb4858160104963601e0325473aa29' => 
    array (
      0 => '/opt/lampp/htdocs/smarty/templates/index.tpl',
      1 => 1585284746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d8694440003_51960539 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'p', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
?>

	<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = <?php echo $_smarty_tpl->tpl_vars['p']->value;?>
 </br>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Contacts']->value, 'q', false, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value => $_smarty_tpl->tpl_vars['q']->value) {
?>

	<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
 = <?php echo $_smarty_tpl->tpl_vars['q']->value;?>
 </br>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_assignInScope('x', 10);
$_smarty_tpl->_assignInScope('y', 20);
$_smarty_tpl->_assignInScope('foo', $_smarty_tpl->tpl_vars['x']->value+$_smarty_tpl->tpl_vars['y']->value);
echo $_smarty_tpl->tpl_vars['foo']->value;?>

<?php echo basename($_smarty_tpl->source->filepath);?>



<?php }
}
