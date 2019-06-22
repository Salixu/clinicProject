<?php
namespace app\controllers;
use core\Paginator;

class userVisits{
  private $paginator;
  private $pag;
  private $offset;
  private $clients;
  private $totalItems;
  private $sort;
  public function __construct(){
    $this->pag = new Paginator();
  }

  public function load_data(){
    $this->page = getFromRequest('page');
    $this->totalItems = getDB()->count("visit", "*",[
      "id_user" => $_SESSION['id_user']
    ]);
    $this->offset = null;
    $this->paginator = $this->pag->paginator(5, $this->totalItems, $this->page, $this->offset);
    $this->clients = getDB()->select("visit",[
        "id_doctor",
        "dateVisit",
        "treatment",
        "time",
        "id_user",
    ], [
      "AND" =>[
      "id_user" => $_SESSION['id_user']
    ],
       'ORDER'     => $this->sort,
        'LIMIT'     => [ $this->offset, $this->paginator['itemsOnPage'] ]
    ]);
  }
  public function getParams(){

  }

  public function action_showUserVisits(){
                $this->load_data();

                getSmarty()->assign("paginator", $this->paginator);
                getSmarty()->assign("record", $this->clients);
                getSmarty()->assign("total", $this->totalItems);
                getSmarty()->assign('page', $this->page);
                getSmarty()->assign('id', $_SESSION['id_user']);
                getSmarty()->assign("pagetitle", "Lista Klientów");
                getSmarty()->assign('res', $_SESSION['role']);
                getSmarty()->assign('active', 'showUserVisits');
                getSmarty()->display("userVisits.tpl");
  }
  public function generateViewVisits(){
    getSmarty()->assign('page_title', 'RemediumDente');
    getSmarty()->assign('page_description', 'RemediumDente');
    getSmarty()->assign('res', $_SESSION['role']);
    getSmarty()->display('userVisits.tpl');
  }
}
 ?>
