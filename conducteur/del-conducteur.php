<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php'; 

$idSuppconducteur = $_GET['id'] ?? null;

if (! is_numeric($idSuppconducteur)  ) {
    dd("Cette conference n'existe pas !!!");
}

$suppResultconducteur =supprimerConducteur($pdo,$idSuppconducteur);

if ($suppResultconducteur) {
     redirect('/conducteur/list-conducteur.php');
}