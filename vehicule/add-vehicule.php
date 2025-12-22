<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php';

// =============================================
// Traitement du formulaire d'ajour d'un vehicule
// =============================================

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {

    $marque = nettoyer($_POST['marque']);
    $modele = nettoyer($_POST['modele']);
    $couleur = nettoyer($_POST['couleur']);
    $immatriculation = nettoyer($_POST['immatriculation']);

    ajoutVehicule($pdo, $marque, $modele, $couleur, $immatriculation);

    $vehiculeInserted = getLastInsertId($pdo);

    if ($vehiculeInserted) {
        redirect('/vehicule/list-vehicule.php');
    }
}

include PATH_PROJET . '/views/vehicule/add-vehicule-view.php';