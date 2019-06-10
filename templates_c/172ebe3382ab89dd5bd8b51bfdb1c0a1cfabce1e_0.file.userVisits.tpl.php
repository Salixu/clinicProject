<?php
/* Smarty version 3.1.33, created on 2019-06-10 16:03:52
  from 'D:\xamp\htdocs\clinicProject\app\views\userVisits.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfe6348924fb4_26749349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '172ebe3382ab89dd5bd8b51bfdb1c0a1cfabce1e' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\userVisits.tpl',
      1 => 1560173533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfe6348924fb4_26749349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19338488595cfe6348534621_96507090', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_19338488595cfe6348534621_96507090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19338488595cfe6348534621_96507090',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="container">
        <div class="row right-align">
                    <ul class="pagination">
                        <li class="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['prev'] == 'disabled') {?>disabled<?php } else { ?>waves-effect<?php }?>">
                            <a href="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['prev'] == 'disabled') {?>#<?php } else {
echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/client?page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['prev'];
}?>">
                                <i class="material-icons">chevron_left</i>
                            </a>
                        </li>

                        <?php if ($_smarty_tpl->tpl_vars['paginator']->value['first'] != 'disabled') {?>
                        <li class="waves-effect paginatorEdge">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/client?page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['first'];?>
"><?php echo $_smarty_tpl->tpl_vars['paginator']->value['first'];?>
</a>
                        </li>
                        <?php }?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginator']->value['steps'], 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['paginator']->value['active']) {?>active<?php } else { ?>waves-effect<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/client?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                        </li>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php if ($_smarty_tpl->tpl_vars['paginator']->value['last'] != 'disabled') {?>
                        <li class="waves-effect paginatorEdge">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/client?page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['last'];?>
"><?php echo $_smarty_tpl->tpl_vars['paginator']->value['last'];?>

                                </a>
                        </li>
                        <?php }?>


                        <li class="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['next'] == 'disabled') {?>disabled<?php } else { ?>waves-effect<?php }?>">
                            <a href="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['next'] == 'disabled') {?>#<?php } else {
echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/client?page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['next'];
}?>">
                                <i class="material-icons">chevron_right</i>
                            </a>
                        </li>
                    </ul>
                </div>
        </div>
<?php
}
}
/* {/block 'content'} */
}
