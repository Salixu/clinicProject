<?php
namespace app\controllers;
use core\Paginator;

class adminUsersCtrl{
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
    $this->totalItems = getDB()->count("users", "*");
    $this->offset = null;
    $this->paginator = $this->pag->paginator(5, $this->totalItems, $this->page, $this->offset);
    $this->clients = getDB()->select("users",[

        "id_user",
        "name",
        "email",
        "role",
        "statusAccount",
        "lastUpdate"
    ],[
       'ORDER'     => $this->sort,
        'LIMIT'     => [ $this->offset, $this->paginator['itemsOnPage'] ]
    ]
  );
  }

public function action_searchUser(){
  $name = getFromRequest('name');
  $this->user = getDB()->select('users',[
    "id_user",
    "name",
    "email",
    "role",
    "statusAccount",
    "lastUpdate"
  ],[
    'name[~]' => $name
  ]);
  getSmarty()->assign("filtr", "1");
  getSmarty()->assign("pagetitle", "Lista Klientów");
  getSmarty()->assign('res', $_SESSION['role']);
  getSmarty()->assign('record', $this->user);
  getSmarty()->assign('page_title', 'RemediumDente');
  getSmarty()->assign('page_description', 'RemediumDente');
  getSmarty()->display("userRecords.tpl");
}

  public function action_generateViewUsers(){
                $this->load_data();
                getSmarty()->assign("filtr", "0");
                getSmarty()->assign("paginator", $this->paginator);
                getSmarty()->assign("record", $this->clients);
                getSmarty()->assign("total", $this->totalItems);
                getSmarty()->assign('page', $this->page);
                getSmarty()->assign('id', $_SESSION['id_user']);
                getSmarty()->assign("pagetitle", "Lista Klientów");
                getSmarty()->assign('res', $_SESSION['role']);
                getSmarty()->assign('page_title', 'RemediumDente');
                getSmarty()->assign('page_description', 'RemediumDente');
                getSmarty()->display("adminUsersFull.tpl");
  }
}
 ?>
