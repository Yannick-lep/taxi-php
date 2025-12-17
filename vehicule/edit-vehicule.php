<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php';

$idEditVehicule = $_GET['id'] ?? null;

if (!is_numeric($idEditVehicule)) {
    dd("Cette voiture n'existe pas !!!");
}

$vehicule = getVehicule($pdo,$idEditVehicule);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])){
     $marque = nettoyer($_POST['marque']);
     $modele = nettoyer($_POST['modele']);
     $couleur = nettoyer($_POST['couleur']);
     $immatriculation = nettoyer($_POST['immatriculation']);

    updateVehicule($pdo, $marque, $modele, $couleur, $immatriculation,$idEditVehicule);

    header("Location:" . WEB_ROOT . "/vehicule/list-vehicule.php");
    exit;
}
include PATH_PROJET . '/views/vehicule/edit-vehicule-view.php';



