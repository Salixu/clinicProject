<?php
namespace app\controllers;
use app\forms\visitForm;

class visitCtrl{
  public $szym = null;
  public $doc;
  public $isDoc;
  public function __construct(){
    $this->form = new visitForm();
    $this->form->date = null;
    $this->form->doc = null;
    $this->form->treat = null;
  }

  public function getParams(){
    $this->form->date = getFromRequest('date');
    $this->form->spec = $_POST['spec'];
    $this->form->treat = $_POST['treat'];
  }

  public function action_showVisit(){
    $this->generateView();
  }

  public function validate(){
    if ($this->form->date == null || $this->form->doc == null || $this->form->treat == null){
      if ($this->form->date == null){
        getMessages()->addError("Wybierz date");
        return false;
      }
    return true;
  }
}

  public function load_data(){
     $this->doc = getDB()->get("users", ["id_user"], [
       'name' => $this->form->spec
   ]);
     $this->isDoc = getDB()->select("visit", ["time"],[
     "AND" => [
       'dateVisit' => $this->form->date,
       'id_doctor' => $this->doc
     ]
   ]);
   }

  public function action_bookVisit(){
    $this->getParams();
    if ($this->validate() == true){
    $this->record = getDB()->get("hours",[
      "10",
      "11",
      "12",
      "13",
      "14",
      "15",
      "16",
      "17",
      "18",
    ],[
      'id_contact' => '0'
    ]);
    $this->szym = 'dupa';
    getSmarty()->assign('szym', $this->szym);
    getSmarty()->assign('record', $this->record);
    getSmarty()->display('records.tpl');
  }else{
    $this->record = null;
    $this->szym = 'lol';
    getSmarty()->assign('szym', $this->szym);
    getSmarty()->assign('record', $this->record);
    getSmarty()->display('records.tpl');
  }
  }

  public function action_bookingVisit(){

  }

  public function generateView(){
    getSmarty()->assign('page_title', 'RemediumDente');
    getSmarty()->assign('page_description', 'RemediumDente');
    getSmarty()->assign('res', $_SESSION['role']);
    getSmarty()->assign('szym', $this->szym);
    getSmarty()->display('bookvisit.tpl');
  }
}
?>
