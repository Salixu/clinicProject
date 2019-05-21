<?php
namespace app\controllers;

use app\forms\LoginForm;

class loginCtrl{
  private $form;

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

  public function validate(){
    if (! (isset ($this->form->email) && isset ($this->form->pass))){
    return false;
    }
    $emails = getDB()->select("user",["email"],[
      $this->form->email
    ]);
    //$hash = getDB()->select("user", [])
    if ($emails != $this->form->email){
      getMessages()->addError('Email lub haslo są nieprawidlowe');
    }
  }



  public function generateView(){
    getSmarty()->assign('page_title', 'Panel logowania');
    getSmarty()->assign('page_description', 'Panel logowania');
    getSmarty()->assign('form', $this->form);
    getSmarty()->display('loginview.tpl');
  }
}
 ?>
