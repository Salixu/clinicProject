<?php
namespace app\controllers;
use app\forms\visitForm;

class visitCtrl{
  public function __construct(){
    $this->form = new visitForm();
  }

  public function getParams(){
    $this->name = getFromRequest('Szymon');
  }
  public function action_showVisit(){
    $this->generateView();
  }

  public function action_bookVisit(){
    getSmarty()->assign('szym', $this->form->name);
    getSmarty()->display('records.tpl');
  }

  public function generateView(){
    getSmarty()->assign('page_title', 'RemediumDente');
    getSmarty()->assign('page_description', 'RemediumDente');
    getSmarty()->assign('res', $_SESSION['role']);
    getSmarty()->display('bookvisit.tpl');
  }
}
?>
