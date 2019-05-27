<?php
namespace app\controllers;

use app\forms\LoginForm;
use app\transfer\LoggedTransfer;
use app\transfer\User;

class loginCtrl{
  private $form;
  private $emails;
  private $hash;
  private $role;

  public function __construct(){
    $this->form = new LoginForm();
    $this->result = new LoggedTransfer();
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
      $this->generateView3();
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
    $role = getDB()->get("users", "role",[
      "email" => $this->form->email
    ]);
     if ($emails == $this->form->email && password_verify($this->form->pass, $hash)){
       $this->result->logged = $role;
       $user = new User($this->form->email, $role);
       $_SESSION[$role] = serialize($user);
       addRole($user->role);
       return true;
     }else{
       getMessages()->addError("Niepoprawny login lub haslo");
      return false;
    }
  }

  public function action_logout(){
    session_destroy();
    $this->generateView2();
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
  public function generateView3(){
    getSmarty()->assign('page_title', 'Panel logowania');
    getSmarty()->assign('page_description', 'Panel logowania');
    getSmarty()->assign('form', $this->form);
    getSmarty()->assign('res', $this->result);
    getSmarty()->display('loggedview.tpl');
  }
}
 ?>
