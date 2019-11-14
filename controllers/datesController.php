<?php

//Validation und Injection mit add Methode in Date Klasse
if(isset($_POST['addDate'])) {
    if (isset($_POST['date'])
        && isset($_POST['teamA']) && $_POST['teamA']!=0
        && isset($_POST['teamB'])  && $_POST['teamB']!=0
        && isset($_POST['location']) && $_POST['location']!=0
    ) {
        if ($teams->get($_POST['teamA'])['sport_id'] == $teams->get($_POST['teamB'])['sport_id']) {
            $dates->add($_POST['date'], $_POST['teamA'], $_POST['teamB'], $_POST['location']);
        } else {
            $error = "Teams haben nicht die selbe Sportart!";
        }
    } else {
        //Error Message wird immer in der View angezeigt wenn eine vorhanden
        $error = "Bitte alle Felder aufüllen!";
    }
}

if (isset($_POST['deleteDate'])) {
    if (isset($_POST['id'])) {
        $dates->delete($_POST['id']);
    } else {
        $error = "Keine gültige ID";
    }
}