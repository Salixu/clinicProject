<?php namespace app\controllers;

   class registartionCtrl{
     public function action_registrationShow(){
       $this->generateView();
     }
     public function generateView(){
       getSmarty()->assign('page_title', 'Formularz rejestracji');
       getSmarty()->assign('page_description', 'Panel rejestracji');
       getSmarty()->assign('active', 'register');
       getSmarty()->display('registration.tpl');
     }
   }

?>
