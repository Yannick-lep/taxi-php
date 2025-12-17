<?php
include 'fonctions.php';
require 'connexiondb.php';
?>

<a href="./vehicule/list-vehicule.php">Lister les véhicules</a>

<p>Nombre de véhicule : <?= getNbLigneTable($pdo,'vehicule') ?></p>
<p>Nombre de conducteurs : <?= getNbLigneTable($pdo,'conducteur') ?></p>