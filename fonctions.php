<?php

define ("PATH_PROJET", $_SERVER['DOCUMENT_ROOT'] ."/taxi-php");
define ("WEB_ROOT", "/taxi-php");

function dg($data){
 echo '<pre style="background-color: black; color: white;padding: 1rem;">';
 var_dump($data);
 echo "</pre>";
}

function dd($data){
 echo '<pre style="background-color: black; color: white;padding: 1rem;">';
 var_dump($data);
 echo "</pre>";
 die();
}

function listerVehicules($pdo){
    $sql = "SELECT * FROM vehicule";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $vehicules = $stmt->fetchAll();
    return  $vehicules;
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