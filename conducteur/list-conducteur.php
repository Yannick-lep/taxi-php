<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) . '/connexiondb.php';

$conducteurArray = listerConducteurs($pdo);

include PATH_PROJET . '/views/conducteur/list-conducteur-view.php';