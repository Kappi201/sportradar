<h2>Teams</h2>
<ul class="list-group">
    <?php foreach ($teams->getTeams() as $team): ?>

            <li class="list-group-item">
                <b><?= $team['name'] ?></b><br>
                <?= $sports->getSport($team['sport_id'])['name'] ?>
            </li>

    <?php endforeach; ?>
</ul>

<h3>Team hinzufügen:</h3>
<?php if (isset($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>
<form method="POST">
    <input type="text" name="name" placeholder="Teamname" class="form-control" required>
    <select class="custom-select" name="sport" required>
        <option disabled selected hidden>Sportart</option>
        <?php foreach ($sports->getSports() as $sport): ?>
            <option value="<?= $sport['id'] ?>"><?= $sport['name'] ?></option>
        <?php endforeach; ?>
    </select>

    <button type="submit" class="btn btn-primary" name="addTeam">Hinzufügen</button>
</form>
