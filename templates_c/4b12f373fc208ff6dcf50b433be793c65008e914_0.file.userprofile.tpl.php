<?php
/* Smarty version 3.1.33, created on 2019-06-01 20:44:03
  from 'D:\xamp\htdocs\clinicProject\app\views\userprofile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf2c77313db89_74944998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b12f373fc208ff6dcf50b433be793c65008e914' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\userprofile.tpl',
      1 => 1559414420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf2c77313db89_74944998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_648990775cf2c773137c17_77031304', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_648990775cf2c773137c17_77031304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_648990775cf2c773137c17_77031304',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="container">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
profileUpdate" method="POST">
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
" id="email"></input>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="form-group row">
                <label for="phone_number" class="col-2 col-form-label">Phone number</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="phone_number" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone_number;?>
" id="phone_number"></input>
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-12">
                          <hr>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-success"> Save</button>
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
