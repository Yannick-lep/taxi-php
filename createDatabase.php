<?php
include 'fonctions.php';
require 'connexiondb.php'; 

createDatabase($pdo,'taxis.sql');

redirect('/index.php');