<?php
namespace app\controllers;

use app\forms\ContactForm;

class contactCtrl{
  public $dbcount;
  public function __construct(){
    $this->form = new ContactForm();
  }

  public function getParams(){
    $this->form->email = getFromRequest('email');
    $this->form->adress  = getFromRequest('adress');
    $this->form->phone_number  = getFromRequest('phone_number');
  }

  public function action_contactpageShow(){
    $this->generateViewContact();
  }

  public function action_contactSave(){
    $this->getParams();
    getDB()->update("contact", [
      "email" => $this->form->email,
      "adress" => $this->form->adress,
      "phone_number" => $this->form->phone_number
    ],[
      "id_contact" => '0'
    ]);
    $this->generateViewContactAdmin();
  }

  public function action_editcontactpage(){
    $record = getDB()->get("contact", "*",[
      "id_contact" => '0'
    ]);
    $this->form->email = $record['email'];
    $this->form->adress = $record['adress'];
    $this->form->phone_number = $record['phone_number'];

    $this->generateViewContactAdmin();
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
    getSmarty()->assign('form', $this->form);
    getSmarty()->display('contactViewAdmin.tpl');
  }
}

?>
