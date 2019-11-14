<?php

class Team{

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

    //alle Teams
    public function getAll(){

        $stmt = $this->db->prepare("SELECT * FROM teams");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    //1 Team gefunden mit angegbener ID
    public function get($id){

        $stmt = $this->db->prepare("SELECT * FROM teams WHERE id = :id");
        $stmt->bindValue(":id",$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;

    }

    //In Tabelle einfügen
    public function add($name,$sportId)
    {

        $stmt = $this->db->prepare("INSERT INTO teams (name, sport_id) VALUES (:name, :sport_id)");
        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":sport_id", $sportId);
        $stmt->execute();

    }


}
