<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php'; 

$idEditconducteur = $_GET['id'] ?? null;

if (! is_numeric($idEditconducteur)  ) {
    dd("Ce conducteur n'existe pas !!!");
}

$conducteur = getconducteur($pdo,$idEditconducteur);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {
    $nom = nettoyer($_POST['nom']);
    $prenom = nettoyer($_POST['prenom']);

    $testUpdate = updateconducteur($pdo, $nom, $prenom,$idEditconducteur);
    
     redirect('/conducteur/list-conducteur.php');
}

include PATH_PROJET . '/views/conducteur/edit-conducteur-view.php';