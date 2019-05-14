<?php namespace app\controllers;

class mainPageCtrl{
  public function action_mainpageShow(){
    $this->generateView();
  }

  public function generateView(){
    getSmarty()->assign('page_title', 'Formularz rejestracji');
    getSmarty()->assign('page_description', 'Panel rejestracji');
    getSmarty()->display('mainpageview.tpl');
}
}
?>
