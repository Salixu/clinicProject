<?php
/* Smarty version 3.1.33, created on 2019-06-07 18:42:09
  from 'D:\xamp\htdocs\clinicProject\app\views\loggedview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfa93e1607cb1_24476336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '299116742fba1d247121d42dca66aace9c35a40f' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\loggedview.tpl',
      1 => 1559925726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfa93e1607cb1_24476336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5074080985cfa93e15ff378_61999265', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_5074080985cfa93e15ff378_61999265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5074080985cfa93e15ff378_61999265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['res']->value == 'user') {?>

  <hr class="featurette-divider">
    <div class="container">
      <h1 class="display-4"><span class ="test2"><b>Panel użytkownika</b></span></h1>
  <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
  Aliquam sed tellus sed eros lobortis sollicitudin ac vel sapien.
  </b></div>
  <hr class="featurette-divider">
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <img  src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/form.png" alt="Generic placeholder image" width="70" height="70">
          <h2>Ustal wizytę</h2>
          <p><a class="btn btn-secondary buttony" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showVisit" role="button">Wypelnij formularz &raquo;</a></p>
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
          <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/appointment.svg" alt="Generic placeholder image" width="70" height="70">
          <h2>Twoje wizyty</h2>
          <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
        </div>
      </div>
    </div>
    <hr class="featurette-divider">
      <div class="container marketing">
        <div class="row">
          <div class="col-lg-4">
            <img  src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/gear.svg" alt="Generic placeholder image" width="70" height="70">
            <h2>Edytuj profil</h2>
            <p><a class="btn btn-secondary buttony" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
profileUpdate" role="button">Edytuj &raquo;</a></p>
          </div>
          <div class="col-lg-4">
          </div>
        </div>
      </div>
        <hr class="featurette-divider">
  <footer class="container">
  <p class="float-right"></p>
  <p>&copy; <b>2019 Bartosz Glanowski</b></p>

<?php } elseif ($_smarty_tpl->tpl_vars['res']->value == 'recep') {?>

<hr class="featurette-divider">
  <div class="container">
    <h1 class="display-4"><span class ="test2"><b>Panel administratora</b></span></h1>
<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aliquam sed tellus sed eros lobortis sollicitudin ac vel sapien.
</b></div>
  </div>
<hr class="featurette-divider">

<footer class="container">
<p class="float-right"></p>
<p>&copy; <b>2019 Bartosz Glanowski</b></p>

<?php } elseif ($_smarty_tpl->tpl_vars['res']->value == 'doctor') {?>

<hr class="featurette-divider">
  <div class="container">
    <h1 class="display-4"><span class ="test2"><b>Panel administratora</b></span></h1>
<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aliquam sed tellus sed eros lobortis sollicitudin ac vel sapien.
</b></div>
  </div>
<hr class="featurette-divider">

<footer class="container">
<p class="float-right"></p>
<p>&copy; <b>2019 Bartosz Glanowski</b></p>

<?php } elseif ($_smarty_tpl->tpl_vars['res']->value == 'admin') {?>

<hr class="featurette-divider">
  <div class="container">
    <h1 class="display-4"><span class ="test2"><b>Panel Lekarza</b></span></h1>
<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aliquam sed tellus sed eros lobortis sollicitudin ac vel sapien.
</b></div>
  </div>
<hr class="featurette-divider">

<footer class="container">
<p class="float-right"></p>
<p>&copy; <b>2019 Bartosz Glanowski</b></p>

<?php }
}
}
/* {/block 'content'} */
}
