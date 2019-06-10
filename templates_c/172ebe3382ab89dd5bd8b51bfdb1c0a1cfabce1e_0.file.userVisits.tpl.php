<?php
/* Smarty version 3.1.33, created on 2019-06-10 23:30:13
  from 'D:\xamp\htdocs\clinicProject\app\views\userVisits.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfecbe59bc955_99241979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '172ebe3382ab89dd5bd8b51bfdb1c0a1cfabce1e' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\userVisits.tpl',
      1 => 1560202210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfecbe59bc955_99241979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4068788995cfecbe59abae7_11926419', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_4068788995cfecbe59abae7_11926419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4068788995cfecbe59abae7_11926419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
  <div class="col-sm">

    <div class="col-sm">
      <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">Zabieg</th>
      <th scope="col">Data</th>
      <th scope="col">Godzina</th>
      <th scope="col"> ID kurwa usera</th>
      <th scope="col"> ID zalogowanego kurwa usera</th>
      <th scope="col"> totalitems</th>

    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['record']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
    <tr><th scope="row"><?php echo $_smarty_tpl->tpl_vars['r']->value["treatment"];?>
</th><td><?php echo $_smarty_tpl->tpl_vars['r']->value["dateVisit"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['time'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['id_user'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td></tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>

                    <div class="col-sm">
                      <div class="pagination">
                        <a class="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['prev'] == 'disbaled') {?>disabled<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php?action=showUserVisits&page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['prev'];?>
">&laquo;</a>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginator']->value['steps'], 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                        <a class="<?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['paginator']->value['active'] == $_prefixVariable1) {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php?action=showUserVisits&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <a class="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['next'] == 'disabled') {?>disabled<?php }?>"  href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php?action=showUserVisits&page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['next'];?>
">&raquo;</a>
                      </div>
                  </div>
                </div>
            </div>
      </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
