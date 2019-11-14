<?php

if(isset($_POST['addDate'])) {
    if (isset($_POST['date'])
        && isset($_POST['teamA']) && $_POST['teamA']!=0
        && isset($_POST['teamB'])  && $_POST['teamB']!=0
        && isset($_POST['location']) && $_POST['location']!=0
    ) {
        if ($teams->getTeam($_POST['teamA'])['sport_id'] == $teams->getTeam($_POST['teamB'])['sport_id']) {
            $dates->addDate($_POST['date'], $_POST['teamA'], $_POST['teamB'], $_POST['location']);
        } else {
            $error = "Teams haben nicht die selbe Sportart!";
        }
    } else {
        $error = "Bitte alle Felder aufüllen!";
    }
}