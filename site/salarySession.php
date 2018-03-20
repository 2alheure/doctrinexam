<?php

require_once('../bootstrap.php');

$idSalary = $_GET['id'];
$salary = $entityManager->find('\Employe', $idSalary);

$sessions = $entityManager->getRepository('\Assister')->findBy(array('idEmploye' => $salary));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Durée du cours</td>
                            <td>Note</td>
                            <td>Matière</td>
                            <td>Salle</td>
                            <td>Employé</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($sessions as $session) {
                            echo '<tr>';
                                echo '<td>'.$session->getIdSession()->getId().'</td>';
                                echo '<td>'.$session->getIdSession()->getDuree().'</td>';
                                echo '<td>'.$session->getNote().'</td>';
                                echo '<td>'.$session->getIdSession()->getIdMatiere()->getIntitule().'</td>';
                                echo '<td>'.$session->getIdSession()->getIdSalle()->getNumero().'</td>';
                                echo '<td>'.$session->getIdEmploye()->getNom().'</td>';
                            echo '</tr>';
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

    <script>
        $('table').dataTable();
    </script>
</body>
</html>