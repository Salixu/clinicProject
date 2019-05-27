<?php
  require_once 'init.php';

  getRouter()->setDefaultRoute('mainPageShow');
  getRouter()->addRoute('registrationShow', 'registrationCtrl', ['1']);
  getRouter()->addRoute('mainPageShow', 'mainPageCtrl');
  getRouter()->addRoute('CreateAccount', 'registrationCtrl');
  getRouter()->addRoute('loginShow', 'loginCtrl');
  getRouter()->addRoute('logged', 'loginCtrl');
  getRouter()->addRoute('contactpageShow', 'contactCtrl');

  getRouter()->go();

 ?>
