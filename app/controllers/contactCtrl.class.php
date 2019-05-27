<?php namespace app\controllers;

class contactCtrl{
public function action_contactpageShow(){
  $this->generateViewContact();
}

public function generateViewContact(){
  getSmarty()->assign('page_title', 'Kontakt');
  getSmarty()->assign('page_description', 'Panel rejestracji');
  getSmarty()->display('contactView.tpl');
}
}

?>
