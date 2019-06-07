<?php
/* Smarty version 3.1.33, created on 2019-06-07 13:33:01
  from 'D:\xamp\htdocs\clinicProject\app\views\bookvisit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfa4b6d30b939_25997117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79130b633961c588c9b3353b0a253ddc4b94d22a' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\bookvisit.tpl',
      1 => 1559906905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:records.tpl' => 1,
  ),
),false)) {
function content_5cfa4b6d30b939_25997117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15481242545cfa4b6d302958_80484364', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_15481242545cfa4b6d302958_80484364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15481242545cfa4b6d302958_80484364',
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
            </div>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row">
          <div class="col-lg-4">
            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/JaroslawOgórek.jpg" alt="Generic placeholder image" width="140" height="160">
            <h2>Certyfikaty</h2>
            <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
              <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/KalinaTrautzel.jpg" alt="Generic placeholder image" width="140" height="160">
              <h2>Certyfikaty</h2>
              <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/SzymonOleksy.jpg" alt="Generic placeholder image" width="140" height="160">
            <h2>Certyfikaty</h2>
            <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        </form>
        <div id="records">
          <?php $_smarty_tpl->_subTemplateRender("file:records.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
<?php
}
}
/* {/block 'content'} */
}
