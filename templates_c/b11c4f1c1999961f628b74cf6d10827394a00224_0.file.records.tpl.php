<?php
/* Smarty version 3.1.33, created on 2019-06-09 18:13:25
  from 'D:\xamp\htdocs\clinicProject\app\views\records.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfd30251ec6f0_51564568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b11c4f1c1999961f628b74cf6d10827394a00224' => 
    array (
      0 => 'D:\\xamp\\htdocs\\clinicProject\\app\\views\\records.tpl',
      1 => 1560096800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfd30251ec6f0_51564568 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['szym']->value == 'dupa') {?>
<form class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
bookingVisit">
<div class="col-sm">
  <div class="form-group">
    <label id="time" for="time"><b>Wybierz godzinę:</b></label>
    <select name="time">
      <option value="10-11" <?php if ($_smarty_tpl->tpl_vars['booked10']->value == 0) {?> disabled <?php }?>>10-11 <?php if ($_smarty_tpl->tpl_vars['booked10']->value == 0) {?> WYBIERZ INNĄ GODZINĘ <?php }?></option>
      <option value="11-12" <?php if ($_smarty_tpl->tpl_vars['booked11']->value == 0) {?> disabled <?php }?>>11-12 <?php if ($_smarty_tpl->tpl_vars['booked11']->value == 0) {?> WYBIERZ INNĄ GODZINĘ <?php }?></option>
      <option value="12-13" <?php if ($_smarty_tpl->tpl_vars['booked12']->value == 0) {?> disabled <?php }?>>12-13 <?php if ($_smarty_tpl->tpl_vars['booked12']->value == 0) {?> WYBIERZ INNĄ GODZINĘ <?php }?></option>
      <option value="13-14" <?php if ($_smarty_tpl->tpl_vars['booked13']->value == 0) {?> disabled <?php }?>>13-14 <?php if ($_smarty_tpl->tpl_vars['booked13']->value == 0) {?> WYBIERZ INNĄ GODZINĘ <?php }?></option>
      <option value="14-15" <?php if ($_smarty_tpl->tpl_vars['booked14']->value == 0) {?> disabled <?php }?>>14-15 <?php if ($_smarty_tpl->tpl_vars['booked14']->value == 0) {?> WYBIERZ INNĄ GODZINĘ <?php }?></option>
      <option value="15-16" <?php if ($_smarty_tpl->tpl_vars['booked15']->value == 0) {?> disabled <?php }?>>15-16 <?php if ($_smarty_tpl->tpl_vars['booked15']->value == 0) {?> WYBIERZ INNĄ GODZINĘ <?php }?></option>
      <option value="16-17" <?php if ($_smarty_tpl->tpl_vars['booked16']->value == 0) {?> disabled <?php }?>>16-17 <?php if ($_smarty_tpl->tpl_vars['booked16']->value == 0) {?> WYBIERZ INNĄ GODZINĘ <?php }?></option>
      <option value="17-18" <?php if ($_smarty_tpl->tpl_vars['booked17']->value == 0) {?> disabled <?php }?>>17-18 <?php if ($_smarty_tpl->tpl_vars['booked17']->value == 0) {?> WYBIERZ INNĄ GODZINĘ <?php }?></option>
    </select>
  </div>
    <button type="submit" class="btn btn-success"> Zapisz</button>
</div>
</form>

</div>
<div>
  <?php } elseif ($_smarty_tpl->tpl_vars['szym']->value == 'lol') {?>
  <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
    <li><span class="redText"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</span></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
  <?php }
}
}
}
