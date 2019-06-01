<?php
/* Smarty version 3.1.33, created on 2019-06-01 21:31:07
  from 'D:\xamp\htdocs\clinicProject\app\views\loggedview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf2d27bee46c8_67651796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '299116742fba1d247121d42dca66aace9c35a40f' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\loggedview.tpl',
      1 => 1559417463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf2d27bee46c8_67651796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11846139475cf2d27bed88f9_68757986', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "loggednavbar.tpl");
}
/* {block 'content'} */
class Block_11846139475cf2d27bed88f9_68757986 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11846139475cf2d27bed88f9_68757986',
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
registrationShow" role="button">Wypelnij formularz &raquo;</a></p>
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
registrationShow" role="button">Edytuj &raquo;</a></p>
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
  <div class="container marketing">
    <div class="row">
      <div class="col-lg-4">
        <img  src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/form.png" alt="Generic placeholder image" width="70" height="70">
        <h2>Zostań naszym pacjentem</h2>
        <p>Stwórz konto poprzez wypelnienie formularza rejestracji, magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary buttony" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registrationShow" role="button">Wypelnij formularz &raquo;</a></p>
      </div>
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/certificate1.png" alt="Generic placeholder image" width="70" height="70">
        <h2>Certyfikaty</h2>
        <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
      </div>
    </div>
    <hr class="featurette-divider">
</div>
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
  <div class="container marketing">
    <div class="row">
      <div class="col-lg-4">
        <img  src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/form.png" alt="Generic placeholder image" width="70" height="70">
        <h2>Zostań naszym pacjentem</h2>
        <p>Stwórz konto poprzez wypelnienie formularza rejestracji, magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary buttony" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registrationShow" role="button">Wypelnij formularz &raquo;</a></p>
      </div>
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/certificate1.png" alt="Generic placeholder image" width="70" height="70">
        <h2>Certyfikaty</h2>
        <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
      </div>
    </div>
    <hr class="featurette-divider">
</div>
<footer class="container">
<p class="float-right"></p>
<p>&copy; <b>2019 Bartosz Glanowski</b></p>

<?php } elseif ($_smarty_tpl->tpl_vars['res']->value == 'admin') {?>

<hr class="featurette-divider">
  <div class="container">
    <h1 class="display-4"><span class ="test2"><b>Panel administratora</b></span></h1>
<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aliquam sed tellus sed eros lobortis sollicitudin ac vel sapien.
</b></div>
  </div>
<hr class="featurette-divider">
  <div class="container marketing">
    <div class="row">
      <div class="col-lg-4">
        <img  src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/form.png" alt="Generic placeholder image" width="70" height="70">
        <h2>Zostań naszym pacjentem</h2>
        <p>Stwórz konto poprzez wypelnienie formularza rejestracji, magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary buttony" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registrationShow" role="button">Wypelnij formularz &raquo;</a></p>
      </div>
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4">
        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/certificate1.png" alt="Generic placeholder image" width="70" height="70">
        <h2>Certyfikaty</h2>
        <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary buttony" href="https://www.mynextmove.org/profile/ext/cert/29-1021.00" target="_blank" role="button">Sprawdź! &raquo;</a></p>
      </div>
    </div>
    <hr class="featurette-divider">
</div>
<footer class="container">
<p class="float-right"></p>
<p>&copy; <b>2019 Bartosz Glanowski</b></p>

<?php }
}
}
/* {/block 'content'} */
}
