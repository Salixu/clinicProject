<?php
/* Smarty version 3.1.33, created on 2019-05-21 13:54:49
  from 'D:\xamp\htdocs\clinicProject\app\views\loginview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce3e7091d1e76_42017823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c739b8d65fb27a916df269bf743ddc18fa561f7' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\loginview.tpl',
      1 => 1558439681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce3e7091d1e76_42017823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10869956795ce3e7091c5966_43548943', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "navbar.tpl");
}
/* {block 'content'} */
class Block_10869956795ce3e7091c5966_43548943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10869956795ce3e7091c5966_43548943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
loginShow">
      <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
              <hr>
          </div>
      </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Adres email</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="jankowalski@mail.com" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Haslo</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="pass" minlength ="8"class="form-control" id="pass"
                               placeholder="Haslo" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!--<i class="fa fa-close"> </i>-->
                        </span>
                </div>
            </div>
        </div>
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
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Zaloguj</button>
            </div>
        </div>
    </form>
</div>
<?php
}
}
/* {/block 'content'} */
}
