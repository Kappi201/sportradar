<?php

class Db{

    public $db;

    function __construct(){

        try {
            $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);
        }catch(PDOException $e){
            //echo $e;
            echo "Verbindung fehlgeschlagen";
            die();
        }

    }

}
