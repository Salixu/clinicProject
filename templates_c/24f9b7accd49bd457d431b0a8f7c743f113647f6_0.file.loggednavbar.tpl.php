<?php
/* Smarty version 3.1.33, created on 2019-06-23 23:06:08
  from 'D:\xamp\htdocs\clinicProject\app\views\templates\loggednavbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0fe9c0149c42_66871455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24f9b7accd49bd457d431b0a8f7c743f113647f6' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\templates\\loggednavbar.tpl',
      1 => 1561323966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fe9c0149c42_66871455 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
  </head>
  <body class = "backgroundImage">
        <nav class="navbar sticky-top navbar-expand-lg navbar-light navbar-transparent backgroundcolor">
          <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/tooth.png" width="45" height="45" class="d-inline-block align-top" alt="">
          <a class="navbar-brand paddingRight" href="#"><span class = "test">RemediumDente</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <?php if ($_smarty_tpl->tpl_vars['res']->value == 'user') {?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbarFontSize">
              <li class="nav-item paddingRight">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showVisit"><b>Ustal wizytę</b></a>
              </li>
              <li class="nav-item paddingRight">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
generateViewVisits"><b>Wyświetl wizyty</b></a>
              </li>
              <li class="nav-item paddingRightLogout">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userprofileShow"><b>Edytuj profil</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout"><b>Wyloguj</b></a>
              </li>
            </ul>
          </div>

          <?php } elseif ($_smarty_tpl->tpl_vars['res']->value == 'recep') {?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbarFontSize">
              <li class="nav-item paddingRightLogout">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
upcomingVisitsRecep"><b>Wyswietl wizyty</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout"><b>Wyloguj</b></a>
              </li>
            </ul>
          </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['res']->value == 'doctor') {?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbarFontSize">
              <li class="nav-item paddingRightLogout">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
upcomingVisitsDoc"><b>Wizyty</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout"><b>Wyloguj</b></a>
              </li>
            </ul>
          </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['res']->value == 'admin') {?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbarFontSize">
              <li class="nav-item paddingRight">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
generateViewUsers"><b>Użytkownicy</b></a>
              </li>
              <li class="nav-item paddingRight">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
generateViewAddUser"><b>Dodaj konto</b></a>
              </li>
              <li class="nav-item paddingRightLogout">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
editcontactpage"><b>Kontakt</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout"><b>Wyloguj</b></a>
              </li>
            </ul>
          </div>
          <?php }?>
        </nav>
    <div class = "container">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16657735495d0fe9c01490d2_02534975', 'content');
?>

    </div>
  </body>
</html>
<?php }
/* {block 'content'} */
class Block_16657735495d0fe9c01490d2_02534975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16657735495d0fe9c01490d2_02534975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Domyslna tresc zawartosci <?php
}
}
/* {/block 'content'} */
}
