<?php
namespace app\controllers;

use app\forms\ContactForm;
use app\forms\messageForm;

class contactCtrl{
  public function __construct(){
    $this->form = new ContactForm();
    $this->message = new messageForm();
  }

  public function getParams(){
    $this->form->email = getFromRequest('email');
    $this->form->adress  = getFromRequest('adress');
    $this->form->phone_number  = getFromRequest('phone_number');
    $this->message->name = getFromRequest('name');
    $this->message->email = getFromRequest('email');
    $this->message->topic = getFromRequest('topic');
    $this->message->message = getFromRequest('message');
  }

  public function action_contactpageShow(){
    $records = getDB()->select("contact", [
      "email",
      "adress",
      "phone_number"
    ],[
      "id_contact" => '0'
    ]);
    getSmarty()->assign('records', $records);
    $this->generateViewContact();
  }

  public function messageValidation(){
    $this->getParams();
    if (strlen($this->message->message) > 1024){
      getMessages()->addError("Zbyt dluga wiadomosc.");
      return false;
    }
    return true;
  }

  public function action_sendMessage(){
    $this->getParams();
    if ($this->messageValidation()){
       getDB()->insert("messages",[
         "name" => $this->message->name,
         "email" => $this->message->email,
         "topic" => $this->message->topic,
         "message" => $this->message->message
       ]);
       $this->action_contactpageShow();
    }else{
      $this->action_contactpageShow();
    }
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
    getSmarty()->assign('form', $this->form);
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
