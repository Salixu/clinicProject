<?php namespace app\controllers;

   class registrationCtrl{
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
