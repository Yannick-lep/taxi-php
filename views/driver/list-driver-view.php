<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conducteur</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/solar/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main class="container">
        <?php
            if (count($driverArray) === 0 ) :
                echo '<h3>Aucun conducteur !</h3>';
                echo '<a href="'.  WEB_ROOT . '/driver/add-driver.php" role="button">Ajouter un conducteur</a>';
                die();
            endif;
    ?>
    <h1 style="color:yellowgreen; text-align:center;">Liste des Conducteurs</h1>
    <a href="<?=  WEB_ROOT . '/driver/add-driver.php' ?>" role="button" class="btn btn-primary" style="margin:15px;color:black;font-weight:bold;">Ajouter un conducteur</a>
    <table class="table table-hover">
        <thead>
            <tr class="table-primary">
                <th style="color: blue;">Nom</th>
                <th style="color: blue;">Prenom</th>
                <th style="color: blue;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($driverArray as $car) : ?>
                <tr>
                    <td><?= $car['nom']; ?></td>
                    <td><?= $car['prenom']; ?></td>
                    <td ><a href="<?= WEB_ROOT . '/driver/edit-driver.php?id=' .$car['id_conducteur'] ?>"  role="button" class="btn btn-primary">Edit</a> 
                    <a href="<?= WEB_ROOT . '/driver/del-driver.php?id=' .$car['id_conducteur'] ?>" role="button" onclick="return confirm('Etes vous certain de vouloir supprimer ce conducteur ?');" class="btn btn-primary">Supprimer</a></td >
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
</body>
</html>