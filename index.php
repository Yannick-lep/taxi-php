<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define("PATH_PROJET", $_SERVER['DOCUMENT_ROOT'] ."/taxi-php");
define("WEB_ROOT", "/taxi-php");

function dg($data)
{
    echo '<pre style="background-color:black; color:white;padding: 1rem;">';
    var_dump($data);
    echo '</pre>';
}

function dd($data)
{
echo '<pre style="background-colo:black; color:white;padding: 1rem;">';
var_dump($data);
echo '</pre>';
die();
}

// ====================
// === VEHICULE ===
// ====================

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

function ajoutVehicule($pdo,$nomParam, $prenomParam, $couleurParam, $immatriculationParam)  {
    $sql = "INSERT INTO vehicule (marque,modele,couleur,immatriculation) VALUES (:marque,:modele,:couleur,:immatriculation)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':marque'          => $nomParam,
        ':modele'          => $prenomParam,
        ':couleur'         => $couleurParam,
        ':immatriculation' => $immatriculationParam
    ]);
}

function updateVehicule($pdo,$nomParam, $prenomParam, $couleurParam, $immatriculationParam,$idParam){
    $sql = "UPDATE vehicule SET marque = :marque, modele = :modele,couleur = :couleur, immatriculation = :immatriculation WHERE id_vehicule = :id";
    $stmt = $pdo->prepare($sql);
    $updateBool = $stmt->execute([
        ':marque'          => $nomParam,
        ':modele'          => $prenomParam,
        ':couleur'         => $couleurParam,
        ':immatriculation' => $immatriculationParam,
        ':id'              => $idParam
    ]);
    return $updateBool;
}

function supprimerVehicule($pdo, $id)
{
    $stm = $pdo->prepare("DELETE FROM vehicule where id_vehicule = :id");
    $stm->bindParam(':id', $id, PDO::PARAM_INT);
    $suppResult = $stm->execute();
    return $suppResult;
}

// ==================
// === CONDUCTEUR ===
// ==================

function listerConducteurs($pdo)
{
    $sql = "SELECT * FROM conducteur ORDER BY id_conducteur DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $conducteurs = $stmt->fetchAll();
    return $conducteurs;
}

function getConducteur($pdo, $idParam) {
    $sql = "SELECT * FROM conducteur WHERE id_conducteur = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $idParam
    ]);
    $conducteur = $stmt->fetch();
    return $conducteur;
}

function ajoutConducteur($pdo,$nomParam, $prenomParam)  {
    $sql = "INSERT INTO conducteur (nom,prenom) VALUES (:nom,:prenom)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nom'       => $nomParam,
        ':prenom'    => $prenomParam
    ]);
}

function updateConducteur($pdo,$nomParam, $prenomParam,$idParam){
    $sql = "UPDATE conducteur SET nom = :nom, prenom = :prenom WHERE id_conducteur = :id";
    $stmt = $pdo->prepare($sql);
    $updateBool = $stmt->execute([
        ':nom'          => $nomParam,
        ':prenom'          => $prenomParam,
        ':id'              => $idParam
    ]);
    return $updateBool;
}

function supprimerConducteur($pdo, $id)
{
    $stm = $pdo->prepare("DELETE FROM conducteur where id_conducteur = :id");
    $stm->bindParam(':id', $id, PDO::PARAM_INT);
    $suppResult = $stm->execute();
    return $suppResult;
}

// =============
// STATISTIQUES
// =============

function getNbLigneTable($pdo,$table) {
        $sql = "SELECT COUNT(*) FROM `" . $table . "`";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $count = $stmt->fetchColumn();
        return $count;
}

/* Nombre de véhicules par conducteur
   
 SELECT marque, COUNT(*) AS nb_vehicules
FROM vehicule
GROUP BY marque
ORDER BY nb_vehicules DESC;  
*/

// ============================

function getLastInsertId($pdo) {
        $sql = "SELECT LAST_INSERT_ID()";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $last_insert_id = $stmt->fetch();
        return $last_insert_id;
}

function nettoyer($dataParam) {
    $data = trim($dataParam);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function createDatabase($pdo,$sqlfile) {
    $query = file_get_contents($sqlfile);
    $pdo->exec($query);
}

function redirect($url) {
    header("Location: " . WEB_ROOT . $url);
    exit;
}