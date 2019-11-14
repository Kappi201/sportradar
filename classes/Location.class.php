<?php

class Location{

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

    //Alle Locations
    public function getAll(){

        $stmt = $this->db->prepare("SELECT * FROM locations");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    //1 Location gefunden mit angegbener ID
    public function get($id){

        $stmt = $this->db->prepare("SELECT * FROM locations WHERE id = :id");
        $stmt->bindValue(":id",$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;

    }

    //In Tabelle einfügen
    public function add($name, $address)
    {

        $stmt = $this->db->prepare("INSERT INTO locations (name, address) VALUES (:name, :address)");
        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":address", $address);
        $stmt->execute();

    }

}
