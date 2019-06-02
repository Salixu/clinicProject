<?php
/* Smarty version 3.1.33, created on 2019-06-02 16:10:18
  from 'D:\xamp\htdocs\clinicProject\app\views\bookvisit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf3d8cae489c4_49281953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79130b633961c588c9b3353b0a253ddc4b94d22a' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\bookvisit.tpl',
      1 => 1559484615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf3d8cae489c4_49281953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17787320415cf3d8cae44610_11884312', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_17787320415cf3d8cae44610_11884312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17787320415cf3d8cae44610_11884312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <form class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
CreateAccount">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name"></label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="date"><b>Wybierz dzień spotkania:</b></label>
                  <input id="date" type="date" name="date" value="date">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name"></label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="party"><b>Wybierz specjaliste: &nbsp &nbsp &nbsp &nbsp &nbsp</b></label>
                  <select>
                    <select>
                      <option style="background-image:url(form.png);">male</option>
                      <option style="background-image:url(ortho.png);">female</option>
                      <option style="background-image:url(form.png);">others</option>
                    </select>
                  </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Wyświetl możliwe terminy</button>
            </div>
        </div>
    </form>
</div>
<?php
}
}
/* {/block 'content'} */
}
