<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sportkalender</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="css/style.css" rel="stylesheet">


</head>
<body>
<h1>Supergeiler Sportkalender</h1>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="?l=home">Sportkalender für Sportradar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link <?php if ($l=='home') echo 'active'?>" href="?l=home">Kalender</a>
            </li>
            <li class="nav-item <?php if ($l=='teams') echo 'active'?>">
                <a class="nav-link" href="?l=teams">Teams</a>
            </li>
            <li class="nav-item <?php if ($l=='locations') echo 'active'?>">
                <a class="nav-link" href="?l=locations">Locations</a>
            </li>
            <li class="nav-item <?php if ($l=='sports') echo 'active'?>">
                <a class="nav-link" href="?l=sports">Sportarten</a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container p-4 mb-5">


