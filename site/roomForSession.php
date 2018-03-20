<?php

require_once('../bootstrap.php');

$idMatiere = $_GET['id'];
$sessions = $entityManager->getRepository('\Session')->getRoomForSession($idMatiere);

if($sessions) {
    echo '<h1>Salles pour les sessions de cette matière :</h1>';
    foreach($sessions as $session) {
        echo $session->getIdSalle()->getLieu().'<br />';
    }
} else {
    echo 'Pas de session pour cette matière';
}


?>