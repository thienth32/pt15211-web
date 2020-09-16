<?php
class BaseModel{

    function __construct()
    {
        $this->conn = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", 
                    "root", "123456");
    }

    function all(){
        $getAllQuery = "select * from " . $this->table;
        $data = $this->executeQuery($getAllQuery);
        return $data;
    }

    function executeQuery($query){
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}


?>