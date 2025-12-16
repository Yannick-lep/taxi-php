<?php
include 'fonctions.php';
require 'connexiondb.php';

$idVehicule = $_GET['id'] ?? null;

if (!is_numeric($idVehicule)) {
    dd("cete voiture n'existe pas !!!");
}

$pdo = new PDO($dsn, $user, $pass, $option);
$stm = $pdo->prepare("SELECT * FROM vehicule where id = :id");
$stm->bindParam(':id', $idVehicule, PDO::PARAM_INT);
$stmConf = $stm->execute();
$Vehicules = $stm->fetch();


