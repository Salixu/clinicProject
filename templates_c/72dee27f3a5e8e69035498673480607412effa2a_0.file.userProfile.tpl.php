<?php
/* Smarty version 3.1.33, created on 2019-06-07 18:43:51
  from 'D:\xamp\htdocs\clinicProject\app\views\userProfile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfa94478070c9_20095358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72dee27f3a5e8e69035498673480607412effa2a' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\userProfile.tpl',
      1 => 1559925822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfa94478070c9_20095358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5278739125cfa94477f9478_98356078', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_5278739125cfa94477f9478_98356078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5278739125cfa94477f9478_98356078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="container">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userprofileUpdate" method="POST">
          <div class="col-sm">
              <div class="row">
                  <div class="col-md-0"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-2 col-form-label">Imie</label>
                <div class="col-10">
                  <input class="form-control" name="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
" id="name"></input>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="form-group row">
                <label for="adress" class="col-2 col-form-label">Email</label>
                <div class="col-10">
                  <input class="form-control" name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" id="email" readonly></input>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="form-group row">
                <label for="asddsa" class="col-2 col-form-label">Numer telefonu</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="phone_number" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone_number;?>
" id="phone_number"></input>
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-12">
                          <hr>
                      </div>
                  </div>
                  <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
                    <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
                    <li><span class="redText"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</span></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                  <?php }?>
                  <button type="submit" class="btn btn-success"> Zapisz</button>
                </div>
              </div>
          </div>
          <div class="col-sm">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-12">
                    <hr>
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
