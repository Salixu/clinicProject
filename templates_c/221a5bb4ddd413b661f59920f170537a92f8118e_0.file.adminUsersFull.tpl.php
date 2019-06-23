<?php
/* Smarty version 3.1.33, created on 2019-06-23 23:53:10
  from 'D:\xamp\htdocs\clinicProject\app\views\adminUsersFull.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0ff4c684c5b9_77904403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '221a5bb4ddd413b661f59920f170537a92f8118e' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\adminUsersFull.tpl',
      1 => 1561326788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:userRecords.tpl' => 1,
  ),
),false)) {
function content_5d0ff4c684c5b9_77904403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_696177215d0ff4c68459f5_21139923', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_696177215d0ff4c68459f5_21139923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_696177215d0ff4c68459f5_21139923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<br>
<hr>
<div class="container">
<form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
searchUser','userRecords'); return false;">
	<div class="row">
			<div class="col-md-6">
					<div class="form-group">
							<div class="input-group mb-2 mr-sm-2 mb-sm-0">
									<div class="input-group-addon" style="width: 2.6rem"></div>
									<input type="text" name="name" class="form-control" id="name" required autofocus>
							</div>
					</div>
			</div>
			<div class="col-md-3">
				<button type="onsubmit" class="btn btn-success"> Wyszukaj</button>
			</div>
	</div>
	</form>
<br>
</div>

<div id="userRecords">
<?php $_smarty_tpl->_subTemplateRender("file:userRecords.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php
}
}
/* {/block 'content'} */
}
