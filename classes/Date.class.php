<?php

class Date
{

    private $db;

    function __construct()
    {

        try {
            $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PW);
        } catch (PDOException $e) {
            //echo $e;
            echo "Verbindung fehlgeschlagen";
            die();
        }

    }

    //Alle Termine mit Filter -> In Parametern angegeben
    public function getAll()
    {
        $addition='';
        //Schöner machen
        if (isset($_GET)) {
            foreach ($_GET as $key => $value) {
                $filteredBy = $key;
                $id = $value;
            }
        }

        if (isset($filteredBy)) {
            if ($filteredBy == 'sportId') {
                //Alle Teams welche die SportId haben und danach in Array gepackt
                $team = new Team();
                $teamIds = $team->getAllBySport($id);
                $newArray[]='';
                $i = 0;
                foreach ($teamIds as $teamId) {
                    $newArray[$i] = $teamId['id'];
                    $i++;
                }
                if ($newArray != '') {
                    $teamIds = join("','", $newArray);
                    $addition = "WHERE team_a_id IN ('$teamIds') ORDER BY date";
                }
            }
            if ($filteredBy == 'teamId') {
                $addition =  "WHERE team_a_id = ".$_GET['teamId']." OR team_b_id = ".$_GET['teamId'];
            }
            if ($filteredBy == 'locationId') {
                $addition =  "WHERE location_id = ".$_GET['locationId'];
            }

        }

        //Abfrage mit jeweiliger addition falls vorhanden
        $stmt = $this->db->prepare("SELECT * FROM dates ".$addition);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    //In Tabelle einfügen
    public function add($date, $team_a_id, $team_b_id, $location_id)
    {

        $stmt = $this->db->prepare("INSERT INTO dates (date,team_a_id,team_b_id,location_id) VALUES (:date,:team_a_id,:team_b_id,:location_id)");
        $stmt->bindValue(":date", $date);
        $stmt->bindValue(":team_a_id", $team_a_id);
        $stmt->bindValue(":team_b_id", $team_b_id);
        $stmt->bindValue(":location_id", $location_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $stmt = $this->db->prepare("DELETE FROM dates WHERE id = :id;");
        $stmt->bindValue(":id", $id);
        $stmt->execute();

    }


}
