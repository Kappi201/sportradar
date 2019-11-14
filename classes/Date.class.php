<?php

class Date{

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

    public function getDates(){

        $stmt = $this->db->prepare("SELECT * FROM dates");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }


    public function addDate($date,$team_a_id,$team_b_id,$location_id) {

        $stmt = $this->db->prepare("INSERT INTO dates (date,team_a_id,team_b_id,location_id) VALUES (:date,:team_a_id,:team_b_id,:location_id)");
        $stmt->bindValue(":date",$date);
        $stmt->bindValue(":team_a_id",$team_a_id);
        $stmt->bindValue(":team_b_id",$team_b_id);
        $stmt->bindValue(":location_id",$location_id);
        $stmt->execute();

    }


}
