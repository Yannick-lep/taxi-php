<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php';

// =================================================
// Traitement du formulaire d'ajour d'un conducteur
// =================================================

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {

    $nom = nettoyer($_POST['nom']);
    $prenom = nettoyer($_POST['prenom']);


    ajoutconducteur($pdo, $nom, $prenom);

    $conducteurInserted = getLastInsertId($pdo);

    if ($conducteurInserted) {
        redirect('/conducteur/list-conducteur.php');
    }
}

include PATH_PROJET . '/views/conducteur/add-conducteur-view.php';