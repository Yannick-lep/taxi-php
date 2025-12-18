<?php
include 'fonctions.php';
require 'connexiondb.php';
?>

<a href="./vehicule/list-vehicule.php">Lister les véhicules</a><br>
<a href="./driver/list-driver.php">Lister les conducteurs</a>

<p>Nombre de véhicule : <?= getNbLigneTable($pdo,'vehicule') ?></p>
<p>Nombre de conducteurs : <?= getNbLigneTable($pdo,'conducteur') ?></p>