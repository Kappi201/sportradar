<?php

//Validation und Injection mit add Methode in Date Klasse
if(isset($_POST['addLocation'])) {
    if (isset($_POST['name']) && $_POST['name']!=''
        && isset($_POST['address'])  && $_POST['address']!=''
    ) {
        $locations->add($_POST['name'], $_POST['address']);
    } else {
        //Error Message wird immer in der View angezeigt wenn eine vorhanden
        $error = "Bitte alle Felder aufüllen!";
    }
}

