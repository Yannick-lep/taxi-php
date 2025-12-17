<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) .'/connexiondb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])){
    //==============================================
    //traitement du formulaire d'ajout d'un vehicule
    //==============================================
    
    $marque = nettoyer($_POST['marque']);
    $modele = nettoyer($_POST['modele']);
    $couleur = nettoyer($_POST['couleur']);
    $immatriculation = nettoyer($_POST['immatriculation']);
    

   ajoutVehicule($pdo, $marque, $modele, $couleur, $immatriculation);

   $vehiculeInserted = getLastInsertId($pdo);

   if ($vehiculeInserted) {
       header("Location:" . WEB_ROOT . "/vehicule/list-vehicule.php");
       exit;
   }
}

include PATH_PROJET . '/views/vehicule/add-vehicule-view.php';
