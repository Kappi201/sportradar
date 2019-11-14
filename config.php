<?php

//Alle Klassen includen
spl_autoload_register(function ($class) {
    require_once 'classes/' . $class . '.class.php';
});

define("DB_HOST","localhost");
define("DB_NAME","sportradar");
define("DB_USER","root");
define("DB_PW","");

?>