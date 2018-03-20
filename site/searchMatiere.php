<?php

require_once('../bootstrap.php');

$search = $_GET['q'];
$matieres = $entityManager->getRepository('\Matiere')->getMatieres($search);

if($matieres) {
    echo '<h1>Résultat pour cette recherche</h1>';
    foreach($matieres as $matiere) {
        echo $matiere->getIntitule().'<br />';
    }
} else {
    echo 'Pas de résultat';
}


?>