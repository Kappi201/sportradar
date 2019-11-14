<?php
//Config
require_once('config.php');

//Classes
$dates = new Date();
$teams = new Team();
$locations = new Location();
$sports = new Sport();

//Controllers
require_once("controllers/datesController.php");


//Views
require_once("views/layout/header.php");

if (isset($_GET['l'])) {
    switch ($_GET['l']) {
        case 'teams':
            include ("views/teams.php");
            break;
        case 'locations':
            include ("views/locations.php");
            break;
        case 'sports':
            include ("views/sports.php");
            break;
        default:
            include ("views/home.php");
    }
} else {
    include ("views/home.php");
}

require_once("views/layout/footer.php");