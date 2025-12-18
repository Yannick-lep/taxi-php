<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) .'/connexiondb.php';

$idSuppDriver = $_GET['id'] ?? null;

if ( ! is_numeric($idSuppDriver)) {
    dd("Ce conducteur n'existe pas !!!");
}

$suppResultDriver =supprimerDriver($pdo,$idSuppDriver);

if($suppResultdriver) {
    header("Location: " .WEB_ROOT ."/driver/list-Driver.php");
    exit;
}