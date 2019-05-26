<?php
/* Smarty version 3.1.33, created on 2019-05-24 11:43:04
  from 'D:\xamp\htdocs\clinicProject\app\views\contactView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce7bca81d2138_92100984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d4fb73277de7f42f05527a1695eb81614a56773' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\contactView.tpl',
      1 => 1558690981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce7bca81d2138_92100984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6667556555ce7bca81cd675_41891585', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "navbar.tpl");
}
/* {block 'content'} */
class Block_6667556555ce7bca81cd675_41891585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6667556555ce7bca81cd675_41891585',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <form  method="POST" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
CreateAccount">
      <div class="container">
        <div class="row">
          <div class="col-sm">
          One of three columns
          </div>
          <div class="col-sm">
          </div>
          <div class="col-sm">
          One of three columns
          </div>
        </div>
      </div>
    </form>
</div>
<?php
}
}
/* {/block 'content'} */
}
