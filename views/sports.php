<h2>Sportarten</h2>

<ul class="list-group">
    <?php foreach ($sports->getSports() as $sport): ?>

        <li class="list-group-item">
            <b><?= $sport['name'] ?></b>
        </li>

    <?php endforeach; ?>
</ul>

<h3>Sport Hinzufügen:</h3>
<?php if (isset($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>
<form method="POST">
    <input type="text" name="name" placeholder="Sportname" class="form-control" required>

    <button type="submit" class="btn btn-primary" name="addTeam">Hinzufügen</button>
</form>
