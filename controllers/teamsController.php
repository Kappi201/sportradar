<?php

//Validation und Injection mit add Methode in Date Klasse
if(isset($_POST['addTeam'])) {
    if (isset($_POST['name']) && $_POST['name']!=''
        && isset($_POST['sportId'])  && $_POST['sportId']!=0
    ) {
        $teams->add($_POST['name'], $_POST['sportId']);
    } else {
        //Error Message wird immer in der View angezeigt wenn eine vorhanden
        $error = "Bitte alle Felder aufüllen!";
    }
}

