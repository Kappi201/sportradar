<h2>Kalender</h2>

<div class="row">
<div class="col dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sportart
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <?php foreach ($sports->getSports() as $sport): ?>
            <li><a href="?sportId=<?= $sport['id'] ?>"><?= $sport['name'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

<div class="col dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Team
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <?php foreach ($teams->getTeams() as $team): ?>
            <li><a href="?teamId=<?= $team['id'] ?>"><?= $team['name'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

<div class="col dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Team
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <?php foreach ($locations->getLocations() as $location): ?>
            <li><a href="?locationId=<?= $location['id'] ?>"><?= $location['name'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
</div>
<ul class="list-group">
    <?php foreach ($dates->getDates() as $date): ?>
        <?php $sportId = $teams->getTeam($date['team_a_id'])['sport_id'];
        if (isset($_GET['sportId']) && $sportId == $_GET['sportId']):?>
            <li class="list-group-item">
                <b><?= $teams->getTeam($date['team_a_id'])['name'] ?>
                    - <?= $teams->getTeam($date['team_b_id'])['name'] ?></b><br>
                <?= date("d.m.Y - G:i", strtotime($date['date'])) ?><br>
                <?= $locations->getLocation($date['location_id'])['name'] ?><br>
                <?= $sports->getSport($sportId)['name'] ?>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

<h3>Spiel hinzufügen:</h3>
<?php if (isset($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>
<form method="POST">
    <select class="custom-select" name="teamA" required>
        <option disabled selected hidden>Team A</option>
        <?php foreach ($teams->getTeams() as $team): ?>
            <option value="<?= $team['id'] ?>"><?= $team['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <select class="custom-select" name="teamB" required>
        <option disabled selected hidden>Team B</option>
        <?php foreach ($teams->getTeams() as $team): ?>
            <option value="<?= $team['id'] ?>"><?= $team['name'] ?></option>
        <?php endforeach; ?>
    </select>

    <select class="custom-select" name="location" required>
        <option disabled selected hidden>Location</option>
        <?php foreach ($locations->getLocations() as $location): ?>
            <option value="<?= $location['id'] ?>"><?= $location['name'] ?></option>
        <?php endforeach; ?>
    </select>

    <input class="form-control" type="datetime-local" name="date" required>
    <button type="submit" class="btn btn-primary" name="addDate">Hinzufügen</button>
</form>
