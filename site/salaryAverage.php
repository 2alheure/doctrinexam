<?php

require_once('../bootstrap.php');

$idSalary = $_GET['id'];
$salary = $entityManager->find('\Employe', $idSalary);

$sessions = $entityManager->getRepository('\Assister')->findBy(array('idEmploye' => $salary));

$notes = '';

foreach($sessions as $session) {
    $notes += $session->getNote();
}

$moyenne = $notes / sizeof($sessions);

?>

La moyenne de ce salarié est <b><?php echo $moyenne; ?></b>