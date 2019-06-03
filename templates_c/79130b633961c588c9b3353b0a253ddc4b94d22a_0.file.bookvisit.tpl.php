<?php
/* Smarty version 3.1.33, created on 2019-06-03 22:01:06
  from 'D:\xamp\htdocs\clinicProject\app\views\bookvisit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf57c827f50b3_78806906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79130b633961c588c9b3353b0a253ddc4b94d22a' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\bookvisit.tpl',
      1 => 1559592065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:records.tpl' => 1,
  ),
),false)) {
function content_5cf57c827f50b3_78806906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19643101485cf57c827ecf77_94780505', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_19643101485cf57c827ecf77_94780505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19643101485cf57c827ecf77_94780505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
      <form id="search-form" class="form-horizontal" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
bookVisit','records'); return false;">
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
                <div class="form-group">
                  <label for="date"><b>Wybierz specjaliste:</b></label>
                </div>
                <div> &nbsp <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/SzymonOleksy.jpg" alt="Paris" style="width:150px"> &nbsp &nbsp &nbsp
                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/JaroslawOgórek.jpg" alt="Paris" style="width:150px"> &nbsp &nbsp &nbsp
                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/KalinaTrautzel.jpg" alt="Paris" style="width:150px">
              &nbsp <input type="checkbox" name="Jaroslaw"> Dr Jaroslaw Ogórek &nbsp &nbsp  <input type="checkbox" name="Szymon"> Dr Szymon Oleksy &nbsp &nbsp &nbsp &nbsp <input type="checkbox" name="Kalina" value="Bike"> Dr Kalina Trautzel
            </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name"></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Wyświetl możliwe terminy</button>
            </div>
        </div>
        <div id="records">
          <?php $_smarty_tpl->_subTemplateRender("file:records.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </form>
</div>
</div>
<?php
}
}
/* {/block 'content'} */
}
