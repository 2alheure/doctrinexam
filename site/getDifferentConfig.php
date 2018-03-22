<?php

require_once('../bootstrap.php');

$profs = $entityManager->getRepository('\Session')->getDifferentConfig();

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
                            <td>Nom du remplaçant</td>
                            <td>Heure de la session</td>
                            <td>Durée de la session</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($profs as $prof) {
                            $date = $prof['debut']->format('Y-m-d H:i:s');
                            echo '<tr>';
                                echo '<td>'.$prof['nom'].'</td>';
                                echo '<td>'.$date.'</td>';
                                echo '<td>'.$prof['duree'].' minutes</td>';
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