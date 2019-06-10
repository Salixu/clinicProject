<?php
namespace app\controllers;
use core\Paginator;

class userVisits{
  public function __construct(){
    $this->pag = new Paginator();
  }

  public function action_showUserVisits(){
                $paginator = $this->pag->paginator(10, $totalItems, $page, $offset);
                $totalItems = getDB()->count("visit","id_user",[
                  "treatment" => "a"
                ]);
                $page = getFromGet('page');
                $offset         = null;
                $clients = getDB()->select("visit",[
                    "id_doctor",
                    "treatment",
                    "dateVisit",
                    "time",
                ], [
                    'LIMIT'     => [ $offset, $paginator['itemsOnPage'] ]
                ]);

                getSmarty()->assign("paginator", $paginator);
                getSmarty()->assign("clients", $clients);
                getSmarty()->assign("pagetitle", "Lista Klientów");
                getSmarty()->assign('res', $_SESSION['role']);
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
