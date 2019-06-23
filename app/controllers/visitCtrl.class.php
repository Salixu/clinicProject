<?php
namespace app\controllers;
use app\forms\visitForm;

class visitCtrl{
  public $szym = null;
  public $isDoc;
  public function __construct(){
    $this->form = new visitForm();
  }

  public function getParams(){
    $this->form->date = getFromRequest('date');
    $this->form->spec = $_POST['spec'];
    $this->form->treat = $_POST['treat'];
    $_SESSION['date'] = $this->form->date;
  }

  public function getParams2(){
    $this->form->time = $_POST['time'];
  }

  public function action_showVisit(){
    $this->generateView();
  }

  public function validate(){
    $this->getParams();
    if ($_SESSION['date'] == null){
        getMessages()->addError("Wybierz date");
        return false;
      }
    return true;
  }

  public function load_data(){
     $this->isDoc = getDB()->get("visit", "*",[
     "AND" => [
       'dateVisit' => $_SESSION['date'],
       'id_doctor' => $_SESSION['spec'],
       'time' => '10-11',
       'status' => '1'
     ]
   ]);
   if (is_array($this->isDoc)){
     return false;
   }else return true;
   }

   public function load_data11(){
      $this->isDoc = getDB()->get("visit", "*",[
      "AND" => [
        'dateVisit' => $_SESSION['date'],
        'id_doctor' => $_SESSION['spec'],
        'time' => '11-12',
        'status' => '1'
      ]
    ]);
    if (is_array($this->isDoc)){
      return false;
    }else return true;
    }

    public function load_data12(){
       $this->isDoc = getDB()->get("visit", "*",[
       "AND" => [
         'dateVisit' => $_SESSION['date'],
         'id_doctor' => $_SESSION['spec'],
         'time' => '12-13',
         'status' => '1'
       ]
     ]);
     if (is_array($this->isDoc)){
       return false;
     }else return true;
     }

     public function load_data13(){
        $this->isDoc = getDB()->get("visit", "*",[
        "AND" => [
          'dateVisit' => $_SESSION['date'],
          'id_doctor' => $_SESSION['spec'],
          'time' => '13-14',
          'status' => '1'
        ]
      ]);
      if (is_array($this->isDoc)){
        return false;
      }else return true;
      }

      public function load_data14(){
         $this->isDoc = getDB()->get("visit", "*",[
         "AND" => [
           'dateVisit' => $_SESSION['date'],
           'id_doctor' => $_SESSION['spec'],
           'time' => '14-15',
           'status' => '1'
         ]
       ]);
       if (is_array($this->isDoc)){
         return false;
       }else return true;
       }

       public function load_data15(){
          $this->isDoc = getDB()->get("visit", "*",[
          "AND" => [
            'dateVisit' => $_SESSION['date'],
            'id_doctor' => $_SESSION['spec'],
            'time' => '15-16',
            'status' => '1'
          ]
        ]);
        if (is_array($this->isDoc)){
          return false;
        }else return true;
        }

        public function load_data16(){
           $this->isDoc = getDB()->get("visit", "*",[
           "AND" => [
             'dateVisit' => $_SESSION['date'],
             'id_doctor' => $_SESSION['spec'],
             'time' => '16-17',
             'status' => '1'
           ]
         ]);
         if (is_array($this->isDoc)){
           return false;
         }else return true;
         }

         public function load_data17(){
            $this->isDoc = getDB()->get("visit", "*",[
            "AND" => [
              'dateVisit' => $_SESSION['date'],
              'id_doctor' => $_SESSION['spec'],
              'time' => '17-18',
              'status' => '1'
            ]
          ]);
          if (is_array($this->isDoc)){
            return false;
          }else return true;
          }

  public function action_bookVisit(){
      $this->getParams();
    if ($this->validate() == true){
      $_SESSION['spec'] = $this->form->spec;
      $_SESSION['treat'] = $this->form->treat;
      $_SESSION['date'] = $this->form->date;
      if($this->load_data()){
        $this->booked10 = '1';
      }
      else{
        $this->booked10 = '0';
      }
      if($this->load_data11()){
        $this->booked11 = '1';
      }
      else{
        $this->booked11 = '0';
      }
      if($this->load_data12()){
        $this->booked12 = '1';
      }
      else{
        $this->booked12 = '0';
      }

      if($this->load_data13()){
        $this->booked13 = '1';
      }
      else{
        $this->booked13 = '0';
      }
      if($this->load_data14()){
        $this->booked14 = '1';
      }
      else{
        $this->booked14 = '0';
      }
      if($this->load_data15()){
        $this->booked15 = '1';
      }
      else{
        $this->booked15 = '0';
      }
      if($this->load_data16()){
        $this->booked16 = '1';
      }
      else{
        $this->booked16 = '0';
      }
      if($this->load_data17()){
        $this->booked17 = '1';
      }
      else{
        $this->booked17 = '0';
      }

    $this->szym = 'dupa';
    getSmarty()->assign('szym', $this->szym);
    getSmarty()->assign('booked10', $this->booked10);
    getSmarty()->assign('booked11', $this->booked11);
    getSmarty()->assign('booked12', $this->booked12);
    getSmarty()->assign('booked13', $this->booked13);
    getSmarty()->assign('booked14', $this->booked14);
    getSmarty()->assign('booked15', $this->booked15);
    getSmarty()->assign('booked16', $this->booked16);
    getSmarty()->assign('booked17', $this->booked17);
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
    $this->getParams2();
    $_SESSION['time'] = $this->form->time;

    getDB()->insert('visit',[
      "id_user" => $_SESSION['id_user'],
      "id_doctor" => $_SESSION['spec'],
      "treatment" => $_SESSION['treat'],
      "dateVisit" => $_SESSION['date'],
      "time" => $_SESSION['time'],
      "status" => "0"
    ]);
    getSmarty()->assign('page_title', 'RemediumDente');
    getSmarty()->assign('page_description', 'RemediumDente');
    getSmarty()->assign('res', $_SESSION['role']);
    getSmarty()->display('loggedview.tpl');
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
