<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php';

$idVehicule = $_GET['id'] ?? null;

if (!$idVehicule || !is_numeric($idVehicule)) {
    dd("Cette voiture n'existe pas !!!");
}

$sql = "SELECT * FROM vehicule WHERE id_vehicule = :id";
$stm = $pdo->prepare($sql);
$stm->bindParam(':id', $idVehicule, PDO::PARAM_INT);
$stm->execute();

$vehicule = $stm->fetch();

if (!$vehicule) {
    dd("Véhicule introuvable");
}



