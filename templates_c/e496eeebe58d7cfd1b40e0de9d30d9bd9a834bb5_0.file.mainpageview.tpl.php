<?php
/* Smarty version 3.1.33, created on 2019-05-07 12:21:14
  from 'D:\xamp\htdocs\clinicProject\app\views\mainpageview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd15c1a62e592_58259678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e496eeebe58d7cfd1b40e0de9d30d9bd9a834bb5' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\mainpageview.tpl',
      1 => 1557224472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd15c1a62e592_58259678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18968750685cd15c1a6291f9_32540517', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "navbar.tpl");
}
/* {block 'content'} */
class Block_18968750685cd15c1a6291f9_32540517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18968750685cd15c1a6291f9_32540517',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- jumbotron -->
    <div class="jumbotron jumbotron1">
      <div class="container">
        <h1 class="display-4"><span class ="test2"><b>Klinika RemediumDente</b></span></h1>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aliquam sed tellus sed eros lobortis sollicitudin ac vel sapien.
Fusce efficitur nunc lectus, sit amet fermentum enim efficitur a.
Praesent eget tellus arcu. Sed ut nibh enim. Nam lobortis volutpat augue non pulvinar.
Aenean lacinia nisi in aliquet placerat. Sed volutpat non elit non egestas. Curabitur elementum
sollicitudin risus in vestibulum. Nam tempor risus mi, quis consequat felis interdum sed.
Fusce lobortis ultricies lorem a auctor. Sed euismod elementum ipsum, vel posuere sapien sagittis a.
Cras imperdiet mattis dolor nec condimentum.

Nunc faucibus porttitor ipsum, quis dapibus augue molestie et.
Quisque at tortor pellentesque, dapibus erat id, suscipit felis.
Proin id porta mauris. Curabitur ac placerat lacus, non euismod tellus.
In nec lorem ac arcu consequat malesuada eget sit amet augue. Praesent sed euismod nisl.
Aenean pharetra dapibus nibh. Duis sit amet consectetur lorem. Integer rhoncus quam erat, id iaculis metus.
        </div>
      </div>
<!-- konta -->
<hr class="featurette-divider">

      <div class="container marketing">

        <div class="row">
          <div class="col-lg-4">
            <img  src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/form.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Zostań naszym pacjentem</h2>
            <p>Stwórz konto poprzez wypelnienie formularza rejestracji, magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary buttony" href="#" role="button">Wypelnij formularz &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          </div>
          <div class="col-lg-4">
            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/certificate1.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Certyfikaty</h2>
            <p>W naszej klinice pracują specjalisci posiadający certyfikaty, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary buttony" href="#" role="button">Sprawdź! &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"><b>Stomatologia</b> nowatorskie leczenie prosto z wschodu</h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
               Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/dentist.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><b>Ortodoncja</b> nowatorskie leczenie prosto z zachodu</h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
              Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/ortho.jpg" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">
</div>



<footer class="container">
  <p class="float-right"><a href="#">Wróć na górę</a></p>
  <p>&copy; <b>2019 Bartosz Glanowski</b></p>
<?php
}
}
/* {/block 'content'} */
}
