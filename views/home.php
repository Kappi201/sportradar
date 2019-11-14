<h2>Kalender</h2>

<div class="row">
    <div class="col-8">
        <div class="d-flex flex-row justify-content-start">
            <div class="p-0 mr-2">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sportart
                    <span class="caret"></span></button>
                <ul class="dropdown-menu dropdown-menu1 p-2">
                    <input class="form-control mb-2" id="myInput1" type="text" placeholder="Suchen..">
                    <?php foreach ($sports->getAll() as $sport): ?>
                        <li><a href="?sportId=<?= $sport['id'] ?>"><?= $sport['name'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="p-0 mr-2">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Team
                    <span class="caret"></span></button>
                <ul class="dropdown-menu dropdown-menu2 p-2">
                    <input class="form-control mb-2" id="myInput2" type="text" placeholder="Suchen..">
                    <?php foreach ($teams->getAll() as $team): ?>
                        <li><a href="?teamId=<?= $team['id'] ?>"><?= $team['name'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="p-0">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Location
                    <span class="caret"></span></button>
                <ul class="dropdown-menu dropdown-menu3 p-2">
                    <input class="form-control mb-2" id="myInput3" type="text" placeholder="Suchen..">
                    <?php foreach ($locations->getAll() as $location): ?>
                        <li><a href="?locationId=<?= $location['id'] ?>"><?= $location['name'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <ul class="list-group pt-2 pb-2">

            <?php foreach ($dates->getAll() as $date): ?>

                <li class="list-group-item">
                    <b><?= $teams->get($date['team_a_id'])['name'] ?>
                        - <?= $teams->get($date['team_b_id'])['name'] ?></b><br>
                    <?= date("d.m.Y - G:i", strtotime($date['date'])) ?><br>
                    <?= $locations->get($date['location_id'])['name'] ?><br>
                    <?= $sports->get($teams->get($date['team_a_id'])['sport_id'])['name'] ?><br>
                    <form method="POST">
                        <input type="hidden" name="id" value="<?=$date['id'] ?>">
                        <button type="submit" class="btn btn-primary" name="deleteDate">Löschen</button>
                    </form>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
    <div class="col">
        <h3>Spiel hinzufügen:</h3>
        <?php if (isset($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>
        <form method="POST">
            <select class="custom-select mb-2" name="teamA" required>
                <option disabled selected hidden>Team A</option>
                <?php foreach ($teams->getAll() as $team): ?>
                    <option value="<?= $team['id'] ?>"><?= $team['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <select class="custom-select mb-2" name="teamB" required>
                <option disabled selected hidden>Team B</option>
                <?php foreach ($teams->getAll() as $team): ?>
                    <option value="<?= $team['id'] ?>"><?= $team['name'] ?></option>
                <?php endforeach; ?>
            </select>

            <select class="custom-select mb-2" name="location" required>
                <option disabled selected hidden>Location</option>
                <?php foreach ($locations->getAll() as $location): ?>
                    <option value="<?= $location['id'] ?>"><?= $location['name'] ?></option>
                <?php endforeach; ?>
            </select>

            <input class="form-control mb-2" type="datetime-local" name="date" required>
            <button type="submit" class="btn btn-primary" name="addDate">Hinzufügen</button>
        </form>
    </div>
</div>