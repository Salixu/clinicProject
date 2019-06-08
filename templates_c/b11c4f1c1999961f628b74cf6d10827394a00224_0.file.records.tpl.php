<?php
/* Smarty version 3.1.33, created on 2019-06-08 19:57:15
  from 'D:\xamp\htdocs\clinicProject\app\views\records.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfbf6fb7597a2_06780549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b11c4f1c1999961f628b74cf6d10827394a00224' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\records.tpl',
      1 => 1560016633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfbf6fb7597a2_06780549 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['szym']->value == 'dupa') {?>
<div class="col-sm">
  <table class="table table-borderless">
<thead>
  <tr>
    <th scope="col">godzina</th>
  </tr>
</thead>
<br>
<tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['record']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
  <tr><th scope="row"></th><td><b><?php echo $_smarty_tpl->tpl_vars['r']->value;?>
</b></td><td><button type="submit" class="btn btn-outline-info btn-lg">Zapisz</button></td></tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
</div>
<div>
  <?php } elseif ($_smarty_tpl->tpl_vars['szym']->value == 'lol') {?>
  <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
    <li><span class="redText"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</span></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
  <?php }
}
}
}
