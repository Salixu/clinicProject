<?php
namespace app\controllers;

use app\forms\LoginForm;

class loginCtrl{
  private $form;
  private $emails;
  private $hash;

  public function __construct(){
    $this->form = new LoginForm();
  }

  public function getParams(){
    $this->form->email = getFromRequest('email');
    $this->form->pass  = getFromRequest('pass');
  }

  public function action_loginShow(){
    $this->generateView();
  }

  public function action_logged(){
    $this->getParams();
    if ($this->validate()){
      $this->generateView2();
    }else {
      $this->generateView();
    }
  }

  public function validate(){
    $emails = getDB()->get("users", "email",[
      "email" => $this->form->email
    ]);
    $hash = getDB()->get("users", "hash",[
      "email" => $this->form->email
    ]);
     if ($emails == $this->form->email && password_verify($this->form->pass, $hash)){
       return true;
     }else{
       getMessages()->addError("Niepoprawny login lub haslo");
      return false;
    }
  }



  public function generateView(){
    getSmarty()->assign('page_title', 'Panel logowania');
    getSmarty()->assign('page_description', 'Panel logowania');
    getSmarty()->assign('form', $this->form);
    getSmarty()->display('loginview.tpl');
  }
  public function generateView2(){
    getSmarty()->assign('page_title', 'Panel logowania');
    getSmarty()->assign('page_description', 'Panel logowania');
    getSmarty()->assign('form', $this->form);
    getSmarty()->display('mainpageview.tpl');
  }
}
 ?>
