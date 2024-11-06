<?php
class DB{

    public $pdo;
    public function __construct(){
        $dns = "mysql:host=127.0.0.1;dbname=work_of_bill";
        $username = "root";
        $password = "root";
        $this->pdo = new PDO($dns,$username,$password);
        return $this->pdo;
    }
}
?>