<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) .'/connexiondb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])){
    //================================================
    //traitement du formulaire d'ajout d'un conducteur
    //================================================
    
    $nom = nettoyer($_POST['nom']);
    $prenom = nettoyer($_POST['prenom']);
  
     if (empty($nom) || empty($prenom)) {
        dd("Tous les champs sont obligatoires");
    }
    

   ajoutDriver($pdo, $nom, $prenom);

   $driverInserted = getLastInsertId($pdo);

   if ($driverInserted) {
       header("Location:" . WEB_ROOT . "/driver/list-driver.php");
       exit;
   }
}

include PATH_PROJET . '/views/driver/add-driver-view.php';