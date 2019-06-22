<?php
/* Smarty version 3.1.33, created on 2019-06-22 17:09:07
  from 'D:\xamp\htdocs\clinicProject\app\views\userVisitGlobal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0e4493844cf7_67867947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f25e9a11fc4051ecd3b4361f7d4a87323dfb3f5e' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\userVisitGlobal.tpl',
      1 => 1561216138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0e4493844cf7_67867947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8272668725d0e44938441c0_30109629', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_8272668725d0e44938441c0_30109629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8272668725d0e44938441c0_30109629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
  <div class="row">
    <div class="col visitsAllign">
      <hr class="featurette-divider">
      <button type="submit" class="btn btn-warning">Nadchodzące wizyty</button>
    </div>
    <div class="col visitsAllign">
      <hr class="featurette-divider">
      <button type="button" class="btn btn-success">Zakończone wizyty</button>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
