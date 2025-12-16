<?php
include dirname(__DIR__) . '/fonctions.php';
require dirname(__DIR__) .'/connexiondb.php';

$vehiculeArray = listerVehicules($pdo);

include  PATH_PROJET .'/views/vehicule/list-vehicule-view.php';