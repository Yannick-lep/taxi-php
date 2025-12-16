<?php

// -------------------- CONFIG PDO --------------------
$host    = 'localhost';
$db      = 'taxis';
$user    = 'root';
$pass    = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $erreur) {
    echo 'Erreur de connexion PDO !!!' .$erreur->getMessage();
    die('Impossible de se connecter à la base de donnée !');
}