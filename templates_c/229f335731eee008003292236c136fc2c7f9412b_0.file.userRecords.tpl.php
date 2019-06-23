<?php
/* Smarty version 3.1.33, created on 2019-06-23 23:53:26
  from 'D:\xamp\htdocs\clinicProject\app\views\userRecords.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0ff4d62dacd7_21409237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '229f335731eee008003292236c136fc2c7f9412b' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\userRecords.tpl',
      1 => 1561326804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0ff4d62dacd7_21409237 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['filtr']->value == 0) {?>
<div class="container">
      <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">ID użytkownika</th>
      <th scope="col">Imie</th>
      <th scope="col">Email</th>
      <th scope="col">Rola</th>
      <th scope="col">Status Konta</th>
      <th scope="col">Ostatnio Edytowane</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['record']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
    <tr><th><?php echo $_smarty_tpl->tpl_vars['r']->value["id_user"];?>
</th><td><?php echo $_smarty_tpl->tpl_vars['r']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['role'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['statusAccount'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['lastUpdate'];?>
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
/ctrl.php?action=generateViewUsers&page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['prev'];?>
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
/ctrl.php?action=generateViewUsers&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><span style="font-size:1.4rem;"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span></a>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <a class="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['next'] == 'disabled') {?>disabled<?php }?>"  href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php?action=generateViewUsers&page=<?php echo $_smarty_tpl->tpl_vars['paginator']->value['next'];?>
"><span style="font-size:0.9rem;"><i class="fa fa-arrow-right"></i></span></a>
                      </div>
                    </div>
                      <div class="col">
                      </div>
                    </div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['filtr']->value == 1) {?>
<div class="container">
      <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">ID użytkownika</th>
      <th scope="col">Imie</th>
      <th scope="col">Email</th>
      <th scope="col">Rola</th>
      <th scope="col">Status Konta</th>
      <th scope="col">Ostatnio Edytowane</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['record']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
    <tr><th><?php echo $_smarty_tpl->tpl_vars['r']->value["id_user"];?>
</th><td><?php echo $_smarty_tpl->tpl_vars['r']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['role'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['statusAccount'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['lastUpdate'];?>
</td></tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>
</div>
<?php }
}
}
