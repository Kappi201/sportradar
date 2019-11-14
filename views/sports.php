<h2>Sportarten</h2>
<div class="row">

    <!--Sportarten-->
    <div class="col-8">
        <ul class="list-group pt-2 pb-2">
            <?php foreach ($sports->getAll() as $sport): ?>

                <li class="list-group-item">
                    <b><?= $sport['name'] ?></b>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>

    <!--Hinzufügen-->
    <div class="col">
        <h3>Sport Hinzufügen:</h3>
        <?php if (isset($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>
        <form method="POST">
            <input type="text" name="name" placeholder="Sportname" class="form-control mb-2" required>

            <button type="submit" class="btn btn-primary" name="addSport">Hinzufügen</button>
        </form>
    </div>
</div>