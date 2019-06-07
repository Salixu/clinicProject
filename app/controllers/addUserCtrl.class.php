<?php
namespace app\controllers;
use app\forms\RegisterForm;

class addUserCtrl{
  public function __construct(){
    $this->form = new RegisterForm();
  }

  public function getParams(){
    $this->form->name = getFromRequest('name');
    $this->form->surname = getFromRequest('surname');
    $this->form->email = getFromRequest('email');
    $this->form->pass  = getFromRequest('pass');
    $this->form->passConfirm = getFromRequest('passConfirm');
    $this->form->role = $_POST['role'];
  }

  public function validate(){
   $emails = getDB()->select("users",["email"],[
     "email" => $this->form->email
   ]);
   if ($this->form->pass != $this->form->passConfirm){
      getMessages()->addError('Hasla się różnią');
      return false;
  }
  else if ($emails){
    getMessages()->addError('Taki adres email już istnieje');
    return false;
  }
  {
   return true;
 }
}

  public function action_addUser(){
    $this->getParams();
    $this->form->name = $this->form->name." ".$this->form->surname;
    if ($this->validate()){
      $this->form->pass = password_hash($this->form->pass, PASSWORD_DEFAULT);
      getDB()->insert('users',[
        "name"     => $this->form->name,
        "email"    => $this->form->email,
        "hash" => $this->form->pass,
        "role" => $this->form->role
      ]);
      getMessages()->addInfo('Pomyślnie utworzono konto');
      $this->generateView();
    }else {
      $this->generateView();
    }
  }

  public function action_generateViewAddUser(){
    $this->generateViewAddUser();
  }

  public function generateViewAddUser(){
    getSmarty()->assign('page_title', 'Dodaj użytkownika');
    getSmarty()->assign('page_description', 'Dodaj użytkownika');
    getSmarty()->assign('res', $_SESSION['role']);
    getSmarty()->display('addUser.tpl');
  }

  public function generateView(){
    getSmarty()->assign('page_title', 'Dodaj użytkownika');
    getSmarty()->assign('page_description', 'Dodaj użytkownika');
    getSmarty()->assign('res', $_SESSION['role']);
    getSmarty()->assign('form', $this->form);
    getSmarty()->display('addUser.tpl');
  }
}

 ?>
