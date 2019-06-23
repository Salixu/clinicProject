<?php
/* Smarty version 3.1.33, created on 2019-06-23 20:01:19
  from 'D:\xamp\htdocs\clinicProject\app\views\recepVisits.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0fbe6fdd2fa2_02990006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94a950166d3bd1bcad28566b2ef35da08cedd0c2' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\recepVisits.tpl',
      1 => 1561312863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fbe6fdd2fa2_02990006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15129690755d0fbe6fdb8362_61642856', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_15129690755d0fbe6fdb8362_61642856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15129690755d0fbe6fdb8362_61642856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<br>


<?php if ($_smarty_tpl->tpl_vars['check']->value == 'upcoming') {?>
<div class="container">
      <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Zabieg</th>
      <th scope="col">Godzina</th>
      <th scope="col">Pacjent</th>
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
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['id_doctor'];?>
</td><td><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
acceptVisit&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id_visit'];?>
" method="POST"><button type="submit" class="btn btn-success btn-sm">Potwierdz wizyte</button></form></td><td><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
declinceVisit&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id_visit'];?>
" method="POST"><button type="submit" class="btn btn-danger btn-sm">Anuluj wizyte</button></form></td></tr>
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
/ctrl.php?action=upcomingVisitsRecep&page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['prev'];?>
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
/ctrl.php?action=upcomingVisitsRecep&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><span style="font-size:1.4rem;"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span></a>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <a class="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['next'] == 'disabled') {?>disabled<?php }?>"  href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php?action=upcomingVisitsRecep&page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['next'];?>
"><span style="font-size:0.9rem;"><i class="fa fa-arrow-right"></i></span></a>
                      </div>
                    </div>
                      <div class="col">
                      </div>
                    </div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['check']->value == 'done') {?>
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
$_prefixVariable2 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['paginator']->value['active'] == $_prefixVariable2) {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
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
<?php }
}
}
/* {/block 'content'} */
}
