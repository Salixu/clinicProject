<?php
/* Smarty version 3.1.33, created on 2019-06-23 13:55:45
  from 'D:\xamp\htdocs\clinicProject\app\views\userVisitGlobal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0f68c17e7937_53090601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f25e9a11fc4051ecd3b4361f7d4a87323dfb3f5e' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\userVisitGlobal.tpl',
      1 => 1561290943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0f68c17e7937_53090601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17061545205d0f68c17e28c4_79348562', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_17061545205d0f68c17e28c4_79348562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17061545205d0f68c17e28c4_79348562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
  <div class="row">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
upcomingVisits" method="POST">
    <div class="col-sm visitsAllign">
      <hr class="featurette-divider">
      <button type="submit" class="btn btn-warning">Nadchodzące wizyty</button>
    </div>
  </form>
  <div class="col-sm">

  </div>
  <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
doneVisits" method="POST">
    <div class="col-sm visitsAllign">
      <hr class="featurette-divider">
      <button type="submit" class="btn btn-success">Zakończone wizyty</button>
    </div>
    </form>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
