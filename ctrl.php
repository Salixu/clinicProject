<?php
  require_once 'init.php';

  getRouter()->setDefaultRoute('mainPageShow');
  getRouter()->addRoute('registrationShow', 'registrationCtrl');
  getRouter()->addRoute('mainPageShow', 'mainPageCtrl');
  getRouter()->addRoute('CreateAccount', 'registrationCtrl');
  getRouter()->addRoute('loginShow', 'loginCtrl');
  getRouter()->addRoute('logged', 'loginCtrl');
  getRouter()->addRoute('contactpageShow', 'contactCtrl');
  getRouter()->addRoute('logout', 'loginCtrl', ['user','recep','doctor', 'admin']);
  getRouter()->addRoute('contactpageShowAdmin', 'contactCtrl', ['admin']);
  getRouter()->addRoute('editcontactpage', 'contactCtrl', ['admin']);
  getRouter()->addRoute('contactSave', 'contactCtrl', ['admin']);
  getRouter()->addRoute('sendMessage', 'contactCtrl');

  getRouter()->go();

 ?>
