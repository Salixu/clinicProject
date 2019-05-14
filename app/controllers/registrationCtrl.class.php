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
       if (! (isset ( $this->form->name ) && isset ( $this->form->pass ))) {
         // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
         return false;
       }else if ($this->form->pass == $this->form->passConfirm){
         return true;
       }
       else {
         getMessages()->addError('Hasla się nie zgadzają');
       return false;
     }
     }

     public function action_register(){
       $this->getParams();

       if ($this->validate()){
         $this->generateView();
       }
     }

     public function action_registrationShow(){
       $this->generateView();
     }
     public function generateView(){
       getSmarty()->assign('page_title', 'Formularz rejestracji');
       getSmarty()->assign('page_description', 'Panel rejestracji');
       getSmarty()->display('registration.tpl');
     }
   }

?>
