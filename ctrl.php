<?php
  require_once 'init.php';

  getRouter()->setDefaultRoute('calcShow');
  getRouter()->setLoginRoute('login');
  getRouter()->addRoute('bankShowRecords', 'BankCtrl',  ['user','admin']);
  getRouter()->addRoute('bankShow',    'BankCtrl',  ['user','admin']);
  getRouter()->addRoute('bankCompute', 'BankCtrl',  ['user','admin']);
  getRouter()->addRoute('calcShow',    'CalcCtrl',  ['user','admin']);
  getRouter()->addRoute('calcCompute', 'CalcCtrl',  ['user','admin']);
  getRouter()->addRoute('login',       'LoginCtrl');
  getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);


  getRouter()->go();

 ?>
