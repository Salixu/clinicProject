<?php
/* Smarty version 3.1.33, created on 2019-05-31 00:38:38
  from 'D:\xamp\htdocs\clinicProject\app\views\contactViewAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf05b6e9addc2_36034351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceef92a3e3d94225f7714267226fb2ea3019b009' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\contactViewAdmin.tpl',
      1 => 1559255911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf05b6e9addc2_36034351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18891096475cf05b6e9a8338_68200544', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_18891096475cf05b6e9a8338_68200544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18891096475cf05b6e9a8338_68200544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="container">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
contactSave" method="POST">
          <div class="col-sm">
              <div class="row">
                  <div class="col-md-0"></div>
                  <div class="col-md-12">
                      <hr>
                  </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-2 col-form-label">Email</label>
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
                <label for="adress" class="col-2 col-form-label">Adress</label>
                <div class="col-10">
                  <input class="form-control" name="adress" type="text" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->adress;?>
" id="adress"></input>
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
