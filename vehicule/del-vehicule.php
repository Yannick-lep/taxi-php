<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) .'/connexiondb.php';

$idSuppVehicule = $_GET['id'] ?? null;

if ( ! is_numeric($idSuppVehicule)) {
    dd("Cette voiture n'existe pas !!!");
}

$suppResultVehicule =supprimerVehicule($pdo,$idSuppVehicule);

if($suppResultVehicule) {
    header("Location: " .WEB_ROOT ."/vehicule/list-vehicule.php");
    exit;
}