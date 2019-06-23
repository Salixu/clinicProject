<?php
/* Smarty version 3.1.33, created on 2019-06-23 21:11:33
  from 'D:\xamp\htdocs\clinicProject\app\views\doctorVisits.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0fcee5935049_23788024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '691f42aa6a3f2e963e9907da060170a90a52f102' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\doctorVisits.tpl',
      1 => 1561317089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fcee5935049_23788024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2675443025d0fcee5921de3_77902324', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_2675443025d0fcee5921de3_77902324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2675443025d0fcee5921de3_77902324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<br>



<div class="container">
      <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Zabieg</th>
      <th scope="col">Godzina</th>
      <th scope="col">Pacjent</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['record']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
    <tr><th><?php echo $_smarty_tpl->tpl_vars['r']->value["dateVisit"];?>
</th><td><?php echo $_smarty_tpl->tpl_vars['r']->value["treatment"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['time'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
</td><td><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
acceptVisitFull&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id_visit'];?>
"  method="POST"><button type="submit" class="btn btn-success btn-sm">Zakończona</button></form></td></tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>

                      <div class="row">
                        <div class="col">
                        </div>
                      <div class="pagination">
                      <div class="col">
                        <a class="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['prev'] == 'disbaled') {?>disabled<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php?action=upcomingVisitsDoc&page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['prev'];?>
"><span style="font-size:0.9rem;"><i class="fa fa-arrow-left"></i></span></a>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginator']->value['steps'], 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
                        <a class="<?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['paginator']->value['active'] == $_prefixVariable1) {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php?action=upcomingVisitsDoc&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><span style="font-size:1.4rem;"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span></a>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <a class="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['next'] == 'disabled') {?>disabled<?php }?>"  href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php?action=upcomingVisitsDoc&page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['next'];?>
"><span style="font-size:0.9rem;"><i class="fa fa-arrow-right"></i></span></a>
                      </div>
                    </div>
                      <div class="col">
                      </div>
                    </div>
</div>

<?php
}
}
/* {/block 'content'} */
}
