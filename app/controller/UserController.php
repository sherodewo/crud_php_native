<?php


include_once "app/config.php";

class controller{

    private $connection;

    function __construct($db)
    {
        $this->connection = $db;
    }


    public function add(){
//        $result =$this->connection->query("
//        INSERT INTO users(firstname,lastname,email)
//        VALUES('$firstname','$lastname','$email')");
    }
}

