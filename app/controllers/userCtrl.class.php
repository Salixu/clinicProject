<?php
namespace app\controllers;
use app\forms\userProfileForm;

class userCtrl{
  public function __construct(){
    $this->form = new userProfileForm();
  }

  public function action_profileUpdate(){
    $records = getDB()->select("users", [
      "name",
      "email",
      "phone_number"
    ],[
      "id_user" => $_SESSION['id_user']
    ]);
    $this->form->name = $records['name'];
    $this->form->email = $records['email'];
    $this->form->phone_number = $record['phone_number'];
    getSmarty()->assign('records', $records);
    $this->generateView();
  }
  public function generateView(){
    getSmarty()->assign('page_title', 'Panel logowania');
    getSmarty()->assign('page_description', 'Panel logowania');
    getSmarty()->assign('form', $this->form);
    getSmarty()->assign('res', $_SESSION['role']);
    getSmarty()->display('userprofile.tpl');
  }
}
 ?>
