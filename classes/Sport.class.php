<?php

class Sport{

    private $db;

    function __construct(){

        try {
            $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);
        }catch(PDOException $e){
            //echo $e;
            echo "Verbindung fehlgeschlagen";
            die();
        }

    }

    public function getSports(){

        $stmt = $this->db->prepare("SELECT * FROM sports");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    public function getSport($id){

        $stmt = $this->db->prepare("SELECT * FROM sports WHERE id = :id");
        $stmt->bindValue(":id",$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;

    }


}
