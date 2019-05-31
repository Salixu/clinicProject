<?php
/* Smarty version 3.1.33, created on 2019-05-31 16:00:49
  from 'D:\xamp\htdocs\clinicProject\app\views\contactView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf133916fe107_67315292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d4fb73277de7f42f05527a1695eb81614a56773' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\contactView.tpl',
      1 => 1559311247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf133916fe107_67315292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5957307325cf133916efff6_87713515', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "navbar.tpl");
}
/* {block 'content'} */
class Block_5957307325cf133916efff6_87713515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5957307325cf133916efff6_87713515',
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
              <div class="row">
                  <div class="col-md-0">
                  </div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <thead>
                <tr>
                  <th scope="col"><b>email: </b></th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["email"];?>
</td></tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </tbody>
              <div class="row">
                  <div class="col-md-0">
                  </div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <thead>
                <tr>
                  <th scope="col"><b>adress: </b></th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["adress"];?>
</td></tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </tbody>
              <div class="row">
                  <div class="col-md-0">
                  </div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <thead>
                <tr>
                  <th scope="col"><b>Phone number: </b></th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["phone_number"];?>
</td></tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </tbody>
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
