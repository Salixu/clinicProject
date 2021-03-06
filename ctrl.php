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
  getRouter()->addRoute('userprofileUpdate', 'userCtrl', ['user']);
  getRouter()->addRoute('userprofileShow', 'userCtrl', ['user']);
  getRouter()->addRoute('bookVisit', 'visitCtrl', ['user']);
  getRouter()->addRoute('showVisit', 'visitCtrl', ['user']);
  getRouter()->addRoute('addUser', 'addUserCtrl', ['admin']);
  getRouter()->addRoute('generateViewAddUser', 'addUserCtrl', ['admin']);
  getRouter()->addRoute('bookingVisit', 'visitCtrl', ['user']);
  getRouter()->addRoute('showUserVisits', 'userVisits', ['user']);
  getRouter()->addRoute('upcomingVisits', 'userVisits', ['user']);
  getRouter()->addRoute('doneVisits', 'userVisits', ['user']);
  getRouter()->addRoute('generateViewVisits', 'userVisits', ['user']);
  getRouter()->addRoute('upcomingVisitsRecep', 'recepCtrl', ['recep']);
  getRouter()->addRoute('acceptVisit', 'recepCtrl', ['recep']);
  getRouter()->addRoute('declineVisit', 'recepCtrl', ['recep']);
  getRouter()->addRoute('upcomingVisitsDoc', 'doctorCtrl', ['doctor']);
  getRouter()->addRoute('acceptVisitFull', 'doctorCtrl', ['doctor']);
  getRouter()->addRoute('generateViewUsers', 'adminUsersCtrl', ['admin']);
  getRouter()->addRoute('searchUser', 'adminUsersCtrl', ['admin']);

  getRouter()->go();

 ?>
