<?php
/* Smarty version 3.1.33, created on 2019-06-03 22:15:32
  from 'D:\xamp\htdocs\clinicProject\app\views\records.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf57fe42ccc89_79438443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b11c4f1c1999961f628b74cf6d10827394a00224' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\records.tpl',
      1 => 1559592900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf57fe42ccc89_79438443 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['szym']->value == "szymon") {?>
<button type="button" class="btn btn-primary btn-lg">Large</button>
<?php } else { ?>
<button type="button" class="btn btn-primary btn-md">Medium</button>
<button type="button" class="btn btn-primary btn-sm">Small</button>
<button type="button" class="btn btn-primary btn-xs">XSmall</button>
<?php }
}
}
