<h2>Locations</h2>
<ul class="list-group">
    <?php foreach ($locations->getLocations() as $location): ?>

        <li class="list-group-item">
            <b><?= $location['name'] ?></b><br>
            <?= $location['address'] ?>
        </li>

    <?php endforeach; ?>
</ul>

<h3>Location hinzufügen:</h3>
<?php if (isset($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>
<form method="POST">
    <input type="text" name="name" placeholder="Locationname" class="form-control" required>
    <textarea name="address" placeholder="Adresse" class="form-control"required></textarea>

    <button type="submit" class="btn btn-primary" name="addTeam">Hinzufügen</button>
</form>
