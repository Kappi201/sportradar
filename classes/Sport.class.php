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

    //Alle Sportarten
    public function getAll(){

        $stmt = $this->db->prepare("SELECT * FROM sports");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    //1 Sportart gefunden mit angegbener ID
    public function get($id){

        $stmt = $this->db->prepare("SELECT * FROM sports WHERE id = :id");
        $stmt->bindValue(":id",$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;

    }

    //In Tabelle einfügen
    public function add($name)
    {

        $stmt = $this->db->prepare("INSERT INTO sports (name) VALUES (:name)");
        $stmt->bindValue(":name", $name);
        $stmt->execute();

    }

}
