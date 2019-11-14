<h2>Home</h2>
<ul>
    <?php foreach($dates->getDates() as $date): ?>

        <li>
            <b><?=$teams->getTeam($date['team_a_id'])['name']?> - <?=$teams->getTeam($date['team_b_id'])['name']?></b><br>
            <?=date("d.m.Y - G:i", strtotime($date['date']))?><br>
            <?=$locations->getLocation($date['location_id'])['name']?><br>
            <?=$sports->getSport($teams->getTeam($date['team_a_id'])['sport_id'])['name']?>
        </li>

    <?php endforeach;?>
</ul>

<?php if (isset($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>
<form method="POST">
    <select class="custom-select" name="teamA">
        <option selected>Team A</option>
        <?php foreach($teams->getTeams() as $team): ?>
            <option value="<?=$team['id']?>"><?=$team['name']?></option>
        <?php endforeach;?>
    </select>
    <select class="custom-select" name="teamB">
        <option selected>Team B</option>
        <?php foreach($teams->getTeams() as $team): ?>
            <option value="<?=$team['id']?>"><?=$team['name']?></option>
        <?php endforeach;?>
    </select>

    <select class="custom-select" name="location">
        <option selected>Location</option>
        <?php foreach($locations->getLocations() as $location): ?>
            <option value="<?=$location['id']?>"><?=$location['name']?></option>
        <?php endforeach;?>
    </select>

    <input class="form-control" type="datetime-local" name="date">
    <button type="submit" class="btn btn-primary" name="addDate">Add</button>
</form>
