<?php
/* Smarty version 3.1.33, created on 2019-05-27 10:17:55
  from 'D:\xamp\htdocs\clinicProject\app\views\contactView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceb9d33684c87_23665179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d4fb73277de7f42f05527a1695eb81614a56773' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\contactView.tpl',
      1 => 1558945073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceb9d33684c87_23665179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9744186645ceb9d336800a0_89819354', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "navbar.tpl");
}
/* {block 'content'} */
class Block_9744186645ceb9d336800a0_89819354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9744186645ceb9d336800a0_89819354',
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
            <form class="form-horizontal" role="form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logged">
              <div class="row">
                  <div class="col-md-0"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              one of three columns
              </form>
          </div>
          <div class="col-sm">
          </div>
          <div class="col-sm">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
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
