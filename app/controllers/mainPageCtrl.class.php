<?php namespace app\controllers;

class mainPageCtrl{
  public function action_mainpageShow(){
    $this->generateView();
  }

  public function generateView(){
    getSmarty()->assign('page_title', 'Strona glowna');
    getSmarty()->assign('page_description', 'Panel rejestracji');
    getSmarty()->display('mainpageview.tpl');
}

public function action_contactpageShow(){
  $this->generateViewContact();
}

public function generateViewContact(){
  getSmarty()->assign('page_title', 'Kontakt');
  getSmarty()->assign('page_description', 'Panel rejestracji');
  getSmarty()->assign('contactView.tpl');
}
}
?>
