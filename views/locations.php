<h2>Locations</h2>
<div class="row">
    <div class="col-8">
        <ul class="list-group pt-2 pb-2">
            <?php foreach ($locations->getAll() as $location): ?>

                <li class="list-group-item">
                    <b><?= $location['name'] ?></b><br>
                    <?= $location['address'] ?>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
    <div class="col">
        <h3>Location hinzufügen:</h3>
        <?php if (isset($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>
        <form method="POST">
            <input type="text" name="name" placeholder="Locationname" class="form-control mb-2" required>
            <textarea name="address" placeholder="Adresse" class="form-control mb-2" required></textarea>

            <button type="submit" class="btn btn-primary" name="addLocation">Hinzufügen</button>
        </form>
    </div>
</div>