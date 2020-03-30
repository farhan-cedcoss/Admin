<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-26 11:54:18
  from '/opt/lampp/htdocs/smarty/views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7c89dac11599_34609209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1150886547431709bbb42b8584a1e8ae86d600b9' => 
    array (
      0 => '/opt/lampp/htdocs/smarty/views/index.tpl',
      1 => 1585220054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7c89dac11599_34609209 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
