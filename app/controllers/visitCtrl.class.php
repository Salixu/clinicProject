<?php
namespace app\controllers;
use app\forms\visitForm;

class visitCtrl{
  public $szym = null;
  public $doc;
  public $isDoc;
  public function __construct(){
    $this->form = new visitForm();
  }

  public function getParams(){
    $this->form->date = getFromRequest('date');
    $this->form->spec = $_POST['spec'];
    $this->form->treat = $_POST['treat'];
  }

  public function action_showVisit(){
    $this->generateView();
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
    $this->load_data();
    $this->szym = 'abc';
    getSmarty()->assign('szym', $this->szym);
    getSmarty()->assign('record', $this->isDoc);
    getSmarty()->display('records.tpl');
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
