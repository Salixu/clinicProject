<?php
/* Smarty version 3.1.33, created on 2019-06-01 19:02:03
  from 'D:\xamp\htdocs\clinicProject\app\views\errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf2af8bc68b21_38345645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e2e71688b7e3a4d318036df8216e53e57df897d' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\errors.tpl',
      1 => 1559408302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf2af8bc68b21_38345645 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
  <ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
  <li><span><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</span></li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
}
