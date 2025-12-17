<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicules</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/solar/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <?php
            if (count($vehiculeArray) === 0 ) :
                echo '<h3>Aucun vehicule !</h3>';
                echo '<a href="'.  WEB_ROOT . '/vehicule/add-vehicule.php" role="button">Ajouter un vehicule</a>';
                die();
            endif;
    ?>
    <h1 style="color:yellowgreen;">Liste des vehicules</h1>
    <a href="<?=  WEB_ROOT . '/vehicule/add-vehicule.php' ?>" role="button" class="btn btn-primary" style="margin:15px;color:black;font-weight:bold;">Ajouter un vehicule</a>
    <table class="table table-hover">
        <thead>
            <tr class="table-primary">
                <th style="color: blue;">Marque</th>
                <th style="color: blue;">Modele</th>
                <th style="color: blue;">Couleur</th>
                <th style="color: blue;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehiculeArray as $car) : ?>
                <tr>
                    <td><?= $car['marque']; ?></td>
                    <td><?= $car['modele']; ?></td>
                    <td><?= $car['couleur']; ?></td>
                    <td ><a href="<?= WEB_ROOT . '/vehicule/edit-vehicule.php?id=' .$car['id_vehicule'] ?>"  role="button" class="btn btn-primary">Edit</a> 
                    <a href="<?= WEB_ROOT . '/vehicule/del-vehicule.php?id=' .$car['id_vehicule'] ?>" role="button" onclick="return confirm('Etes vous certain de vouloir supprimer ce véhicule ?');" class="btn btn-primary">Supprimer</a></td >
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
</body>
</html>