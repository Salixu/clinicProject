<?php namespace app\controllers;

class contactCtrl{
public function action_contactpageShow(){
  $this->generateViewContact();
}

public function action_contactpageShowAdmin(){
  $this->generateViewContactAdmin();
}

public function action_editcontactpage(){

}

public function generateViewContact(){
  getSmarty()->assign('page_title', 'Kontakt');
  getSmarty()->assign('page_description', 'Panel rejestracji');
  getSmarty()->display('contactView.tpl');
}

public function generateViewContactAdmin(){
  getSmarty()->assign('page_title', 'Kontakt');
  getSmarty()->assign('page_description', 'Panel rejestracji');
  getSmarty()->assign('res', $_SESSION['role']);
  getSmarty()->display('contactViewAdmin.tpl');
}
}

?>
