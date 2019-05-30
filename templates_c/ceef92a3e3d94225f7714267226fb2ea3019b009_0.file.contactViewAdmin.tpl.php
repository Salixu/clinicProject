<?php
/* Smarty version 3.1.33, created on 2019-05-30 22:03:46
  from 'D:\xamp\htdocs\clinicProject\app\views\contactViewAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf03722669859_89382600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceef92a3e3d94225f7714267226fb2ea3019b009' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\contactViewAdmin.tpl',
      1 => 1559246515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf03722669859_89382600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7952560405cf03722668c75_70244552', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_7952560405cf03722668c75_70244552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7952560405cf03722668c75_70244552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
      <div class="container">
        <div class="row">
          <div class="col-sm">
              <div class="row">
                  <div class="col-md-0"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              one of three columns
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
</div>
<?php
}
}
/* {/block 'content'} */
}
