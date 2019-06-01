<?php
/* Smarty version 3.1.33, created on 2019-06-01 12:43:14
  from 'D:\xamp\htdocs\clinicProject\app\views\contactView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf256c25790d8_62577108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d4fb73277de7f42f05527a1695eb81614a56773' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\contactView.tpl',
      1 => 1559385792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf256c25790d8_62577108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14628742895cf256c2562895_56497035', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "navbar.tpl");
}
/* {block 'content'} */
class Block_14628742895cf256c2562895_56497035 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14628742895cf256c2562895_56497035',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <form  method="POST" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
sendMessage">
      <div class="container">
        <div class="row">
          <div class="col-sm">
              <div class="row">
                  <div class="col-md-0">
                  </div>
                  <div class="col-md-12">
                      <hr>
                      <b>Dane Kontakowe:</b>
                      <hr>
                  </div>
              </div>
              <thead>
                <tr>
                  <th scope="col"><b>Email: </b></th>
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
                  <th scope="col"><b>Adress: </b></th>
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
                <div class="col-md-0"></div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <b>Formularz Kontaktowy: </b>
            <div class="row">
                <div class="col-md-0"></div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <form class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
CreateAccount">
              <div class="row">
                  <div class="col-sm">
                      <label for="name">Imię: </label>
                  </div>
                      <div>
                          <div>
                              <input type="text" name="name" class="form-control" id="name"
                                     placeholder="Imie" required autofocus>
                          </div>
                      </div>
              </div>
              <div class="row">
                  <div class="col-md-0"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm">
                      <label for="name">Adres email: </label>
                  </div>
                      <div>
                          <div>
                              <input type="text" name="email" class="form-control" id="name"
                                     placeholder="adres email" required autofocus>
                          </div>
                      </div>
              </div>
              <div class="row">
                  <div class="col-md-0"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm">
                      <label for="name">Temat: </label>
                  </div>
                      <div>
                          <div>
                              <input type="text" name="topic" class="form-control" id="name"
                                     placeholder="Temat" required autofocus>
                          </div>
                      </div>
              </div>
              <div class="row">
                  <div class="col-md-0"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              Napisz do nas!<div class="md-form">
                <textarea id="form7" class="lg-textarea form-control" name="message" rows="2"></textarea>
              </div><br>
              <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
                <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
                <li><span><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</span></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
              <?php }?>
                <div class="row">
                    <div class="col-md-0"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success"><i class="fas fa-envelope"></i> Wyślij</button>
                    </div>
                </div>
            </form>
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
