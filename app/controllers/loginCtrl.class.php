<?php
namespace app\controllers;
use app\forms\LoginForm;
class loginCtrl{

public function action_loginShow(){
  $this->generateView();
}

public function generateView(){
  getSmarty()->assign('page_title', 'Panel logowania');
  getSmarty()->assign('page_description', 'Panel logowania');
  getSmarty()->display('loginview.tpl');
}
}
 ?>
