<?php
/* Smarty version 3.1.33, created on 2019-06-08 17:14:28
  from 'D:\xamp\htdocs\clinicProject\app\views\records.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfbd0d46ebd66_02274621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b11c4f1c1999961f628b74cf6d10827394a00224' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\records.tpl',
      1 => 1560006865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfbd0d46ebd66_02274621 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['szym']->value != null) {?>
<div class="col-sm">
  <table class="table table-hover">
<thead>
  <tr>
    <th scope="col">godzina</th>
  </tr>
</thead>
<tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['record']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
  <tr><th scope="row"></th><td><?php echo $_smarty_tpl->tpl_vars['r']->value["time"];?>
</td></tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
</div>
<?php }
}
}
