<?php
/* Smarty version 3.1.33, created on 2019-06-23 13:52:14
  from 'D:\xamp\htdocs\clinicProject\app\views\userVisitsDone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0f67ee1c3f34_89222045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fb6b9772a116bc6ce57273df791b0d8b39aa5fa' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\userVisitsDone.tpl',
      1 => 1561290392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0f67ee1c3f34_89222045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7766727755d0f67ee1b1830_64712657', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "userVisitGlobal.tpl");
}
/* {block 'content'} */
class Block_7766727755d0f67ee1b1830_64712657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7766727755d0f67ee1b1830_64712657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<br>
<div class="container">
  <div class="row">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
upcomingVisits" method="POST">
    <div class="col-sm visitsAllign">

      <button type="submit" class="btn btn-warning">Nadchodzące wizyty</button>
    </div>
  </form>
  <div class="col-sm">

  </div>
  <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
doneVisits" method="POST">
    <div class="col-sm visitsAllign">

      <button type="button" class="btn btn-success">Zakończone wizyty</button>
    </div>
    </form>
  </div>
</div>
<br>
<div class="container">
      <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Zabieg</th>
      <th scope="col">Godzina</th>
      <th scope="col">Specjalista</th>
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
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['id_doctor'];?>
</td></tr>
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
/ctrl.php?action=doneVisits&page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['prev'];?>
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
/ctrl.php?action=doneVisits&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><span style="font-size:1.4rem;"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span></a>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <a class="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['next'] == 'disabled') {?>disabled<?php }?>"  href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php?action=doneVisits&page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['next'];?>
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
