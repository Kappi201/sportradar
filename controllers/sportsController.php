<?php

//Validation und Injection mit add Methode in Date Klasse
if(isset($_POST['addSport'])) {
    if (isset($_POST['name']) && $_POST['name']!='') {
        $sports->add($_POST['name']);
    } else {
        //Error Message wird immer in der View angezeigt wenn eine vorhanden
        $error = "Bitte alle Felder aufüllen!";
    }
}
