<?php

require_once('../bootstrap.php');

$idSalary = $_GET['id'];
$salary = $entityManager->find('\Employe', $idSalary);

$sessions = $entityManager->getRepository('\Assister')->findBy(array('idEmploye' => $salary));

$notes = '';
$moyenne = '';
if($sessions) {
    foreach($sessions as $session) {
        $notes += $session->getNote();
    }
    
    $moyenne = $notes / sizeof($sessions);
    echo 'La moyenne de ce salarié est <b>'.$moyenne.'</b>';
} else {
    echo 'Pas de note';
}