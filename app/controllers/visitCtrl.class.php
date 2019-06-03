<?php
namespace app\controllers;

class visitCtrl{
  public function __construct(){
  }

  public function action_showVisit(){
    $this->generateView();
  }

  public function action_bookVisit(){
    getSmarty()->display('bookvisit.tpl');
  }

  public function generateView(){
    getSmarty()->assign('page_title', 'RemediumDente');
    getSmarty()->assign('page_description', 'RemediumDente');
    getSmarty()->assign('res', $_SESSION['role']);
    getSmarty()->display('bookvisit.tpl');
  }
}
?>
