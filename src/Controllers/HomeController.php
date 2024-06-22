<?php
namespace App\Controller;


use App\Core\Database;
use App\Models\User

class HomeController{
public function __construct(){

}
    private $db;

    public function __construct(){
        $this->db = new Database();
    }
    $resquest = $connection->query (SELECT )



    public function index(){
        $connection = $this ->db 

       //$user = new \App\Models\User('Itzel','Nonato');
        require __DIR__ .'/../Views/home.php';
    }
}

