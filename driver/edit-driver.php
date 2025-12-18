<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php';

$idEditDriver = $_GET['id'] ?? null;

if (!is_numeric($idEditDriver)) {
    dd("Ce conducteur n'existe pas !!!");
}

$driver = getDriver($pdo,$idEditDriver);

if (!$driver) {
    dd("Ce conducteur n'existe pas");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])){
     $nom = nettoyer($_POST['nom']);
     $prenom = nettoyer($_POST['prenom']);
    

    updateDriver($pdo, $nom, $prenom,$idEditDriver);

    header("Location:" . WEB_ROOT . "/driver/list-driver.php");
    exit;
}
include PATH_PROJET . '/views/driver/edit-driver-view.php';