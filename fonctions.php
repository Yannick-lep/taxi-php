<?php

define ("PATH_PROJET", $_SERVER['DOCUMENT_ROOT'] ."/taxi-php");
define ("WEB_ROOT", "/taxi-php");

function dg($data)
{
    echo '<pre style="background-color:black; color:white;padding: 1rem;">';
    var_dump($data);
    echo '</pre>';
}

function dd($data)
{
    echo '<pre style="background-color:black; color:white;padding: 1rem;">';
    var_dump($data);
    echo '</pre>';
    die();
}

function listerVehicules($pdo)
{
    $sql = "SELECT * FROM vehicule ORDER BY id_vehicule DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $vehicules = $stmt->fetchAll();
    return $vehicules;
}

function getVehicule($pdo, $idParam) {
    $sql = "SELECT * FROM vehicule WHERE id_vehicule = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $idParam
    ]);
    $vehicule = $stmt->fetch();
    return $vehicule;
}

function getLastInsertId($pdo) {
        $sql = "SELECT LAST_INSERT_ID()";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $last_insert_id = $stmt->fetch();
        return $last_insert_id;
}

function ajoutVehicule($pdo,$marqueParam, $modeleParam, $couleurParam, $immatriculationParam)  {
    $sql = "INSERT INTO vehicule (marque,modele,couleur,immatriculation) VALUES (:marque,:modele,:couleur,:immatriculation)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':marque'          => $marqueParam,
        ':modele'          => $modeleParam,
        ':couleur'         => $couleurParam,
        ':immatriculation' => $immatriculationParam
    ]);
}

function updateVehicule($pdo, $marqueParam, $modeleParam, $couleurParam, $immatriculationParam,$idParam){
    $sql = "UPDATE vehicule SET marque = :marque, modele = :modele, couleur = :couleur, :immatriculation = immatriculation WHERE id_vehicule = :id";
}
function supprimerVehicule($pdo, $id)
{
    $stm = $pdo->prepare("DELETE FROM vehicule where id_vehicule = :id");
    $stm->bindParam(':id', $id, PDO::PARAM_INT);
    $suppResult = $stm->execute();
    return $suppResult;
}

function nettoyer($dataParam) {
    $data = trim($dataParam);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function getNbLigneTable($pdo,$table){
     $sql = "SELECT COUNT(*) FROM `".$table ."`";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $count= $stmt->fetchColumn();
        return $count;
}

//======================================================
function listerDrivers($pdo) {
    $stmt = $pdo->query("SELECT * FROM conducteur ORDER BY id_conducteur DESC");
    return $stmt->fetchAll();
}

function getDriver($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM conducteur WHERE id_conducteur = :id");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch();
}

function ajoutDriver($pdo, $nom, $prenom) {
    $stmt = $pdo->prepare("
        INSERT INTO conducteur (nom, prenom)
        VALUES (:nom, :prenom)
    ");
    return $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom
    ]);
}

function updateDriver($pdo, $nom, $prenom, $id) {
    $stmt = $pdo->prepare("
        UPDATE driver
        SET nom = :nom, prenom = :prenom
        WHERE id_driver = :id
    ");
    return $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':id' => $id
    ]);
}

function supprimerDriver($pdo, $id) {
    $stmt = $pdo->prepare("DELETE FROM driver WHERE id_driver = :id");
    return $stmt->execute([':id' => $id]);
}
