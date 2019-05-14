<?php
namespace app\controllers;

use app\forms\RegisterForm;

   class registrationCtrl{
     private $form;

     public function __construct(){
       $this->form = new RegisterForm();
     }

     public function getParams(){
       $this->form->name = getFromRequest('name');
       $this->form->surname = getFromRequest('surname');
       $this->form->email = getFromRequest('email');
       $this->form->pass  = getFromRequest('pass');
       $this->form->passConfirm = getFromRequest('passConfirm');
     }

     public function validate(){
      if($this->form->pass != $this->form->passConfirm){
         getMessages()->addError('Hasla się nie zgadzają');
         return false;
     }else{
      return 1;
    }
     }

     public function action_CreateAccount(){
       $this->getParams();

       if ($this->validate()){
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
