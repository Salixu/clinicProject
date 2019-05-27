<?php
/* Smarty version 3.1.33, created on 2019-05-27 10:23:51
  from 'D:\xamp\htdocs\clinicProject\app\views\loginview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ceb9e972155f9_94618746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c739b8d65fb27a916df269bf743ddc18fa561f7' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\loginview.tpl',
      1 => 1558944860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceb9e972155f9_94618746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15528829205ceb9e97208965_33971181', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "navbar.tpl");
}
/* {block 'content'} */
class Block_15528829205ceb9e97208965_33971181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15528829205ceb9e97208965_33971181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logged">
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
                </div>
            </div>
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
