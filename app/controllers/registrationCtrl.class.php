<?php
namespace app\controllers;

use app\forms\RegisterForm;

   class registrationCtrl{
     private $form;
     private $emails;

     public function __construct(){
       $this->form = new RegisterForm();
     }

     public function getParams(){
       $this->form->name = getFromRequest('name');
       $this->form->email = getFromRequest('email');
       $this->form->pass  = getFromRequest('pass');
       $this->form->passConfirm = getFromRequest('passConfirm');
     }

     public function validate(){
      $emails = getDB()->select("users",["email"],[
        "email" => "bartoszglanowski@gmail.com"
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

     public function action_CreateAccount(){
       $this->getParams();
       if ($this->validate() == true){
         getDB()->insert('users',[
           "name"     => $this->form->name,
           "email"    => $this->form->email,
           "hash(password)" => $this->form->pass
         ]);
         $this->generateViewTest();
       }else {
         $this->generateView();
       }

     }

     public function action_registrationShow(){
       $this->generateView();
     }
     public function generateView(){
       getSmarty()->assign('page_title', 'Formularz rejestracji');
       getSmarty()->assign('page_description', 'Panel rejestracji');
       getSmarty()->assign('form', $this->form);
       getSmarty()->display('registration.tpl');
     }
     public function generateViewTest(){
       getSmarty()->assign('page_title', 'Formularz rejestracji');
       getSmarty()->assign('page_description', 'Panel rejestracji');
       getSmarty()->assign('form', $this->form);
       getSmarty()->display('mainpageview.tpl');
     }
   }

?>
