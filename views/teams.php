<h2>Teams</h2>
<div class="row">

    <!--Teams-->
    <div class="col-8">
        <ul class="list-group pt-2 pb-2">
            <?php foreach ($teams->getAll() as $team): ?>

                <li class="list-group-item">
                    <b><?= $team['name'] ?></b><br>
                    <?= $sports->get($team['sport_id'])['name'] ?>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>

    <!--Hinzufügen-->
    <div class="col">
        <h3>Team hinzufügen:</h3>
        <?php if (isset($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>
        <form method="POST">
            <input type="text" name="name" placeholder="Teamname" class="form-control mb-2" required>
            <select class="custom-select mb-2" name="sportId" required>
                <option disabled selected hidden>Sportart</option>
                <?php foreach ($sports->getAll() as $sport): ?>
                    <option value="<?= $sport['id'] ?>"><?= $sport['name'] ?></option>
                <?php endforeach; ?>
            </select>

            <button type="submit" class="btn btn-primary" name="addTeam">Hinzufügen</button>
        </form>
    </div>
</div>