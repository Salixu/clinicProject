<?php
/* Smarty version 3.1.33, created on 2019-05-23 21:14:15
  from 'D:\xamp\htdocs\clinicProject\app\views\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce6f107098f69_38037857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d13751b4472b8512b8b0d3a73f1e8e27698d6f1' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\templates\\navbar.tpl',
      1 => 1558638852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce6f107098f69_38037857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" type = "text/css" href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/bootstrap.css">
<link rel="stylesheet" type = "text/css" href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/css.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
  </head>
  <body>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light navbar-transparent backgroundcolor">
          <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/tooth.png" width="45" height="45" class="d-inline-block align-top" alt="">
          <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
mainPageshow"><span class = "test">RemediumDente</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbarFontSize">
              <li class="nav-item paddingRight">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow"><b>Zaloguj się</b></a>
              </li>
              <li class="nav-item paddingRight">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registrationShow"><b>Zarejestruj się</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><b>Kontakt</b></a>
              </li>
            </ul>
          </div>
        </nav>
    <div class = "container">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9109718845ce6f107098230_16886555', 'content');
?>

    </div>
    <?php echo '<script'; ?>
>
      $(document).ready(function(){
        $('select').formSelect();
      });
    <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
/* {block 'content'} */
class Block_9109718845ce6f107098230_16886555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9109718845ce6f107098230_16886555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Domyslna tresc zawartosci <?php
}
}
/* {/block 'content'} */
}
