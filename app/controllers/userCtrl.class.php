<?php
namespace app\controllers;
use app\forms\userProfileForm;

class userCtrl{
  public function __construct(){
    $this->form = new userProfileForm();
  }

  public function getParams(){
    $this->form->name = getFromRequest('name');
    $this->form->email = getFromRequest('email');
    $this->form->phone_number = getFromRequest('phone_number');
  }

  public function action_userprofileShow(){
    $records = getDB()->get("users", [
      "name",
      "email",
      "phone_number"
    ],[
      "id_user" => $_SESSION['id_user']
    ]);
    $this->form->name = $records['name'];
    $this->form->email = $records['email'];
    $this->form->phone_number = $records['phone_number'];
    getSmarty()->assign('records', $records);
    $this->generateView();
  }


  public function action_userprofileUpdate(){
    $this->getParams();
    getDB()->update('users',[
      "name" => $this->form->name,
      "phone_number" => $this->form->phone_number
    ],[
      "id_user" => $_SESSION['id_user']
    ]);
    $this->generateView();
  }
  public function generateView(){
    getSmarty()->assign('page_title', 'Panel użytkownika');
    getSmarty()->assign('page_description', 'Panel użytkownika');
    getSmarty()->assign('form', $this->form);
    getSmarty()->assign('res', $_SESSION['role']);
    getSmarty()->display('userProfile.tpl');
  }
}
 ?>
