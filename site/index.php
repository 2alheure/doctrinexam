<?php

require_once('../bootstrap.php');

$salaries = $entityManager->getRepository('\Employe')->findAll();
$matieres = $entityManager->getRepository('\Matiere')->findAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam Doctrine</title>
</head>
<body>
    <h1>Examen Doctrine</h1>
    <section>
        <ul>
            <li><a href="setup.php">Générer des données dans la base.</a></li>
            <li></li>
            <li>
                <select class="salarySessionSelect">
                    <option>Choisir un employé</option>
                    <?php
                        foreach($salaries as $salary) {
                            ?>
                            <option value="<?php echo $salary->getId(); ?>"><?php echo $salary->getNom(); ?></option>
                            <?php
                        }
                    ?>
                </select>
                <a class="salarySession" href="salarySession.php">Toutes les sessions d'un salarié</a>
            </li>
            <li>
                <select class="salaryAverageSelect">
                    <option>Choisir un employé</option>
                    <?php
                        foreach($salaries as $salary) {
                            ?>
                            <option value="<?php echo $salary->getId(); ?>"><?php echo $salary->getNom(); ?></option>
                            <?php
                        }
                    ?>
                </select>
                <a class="salaryAverage" href="salaryAverage.php">Moyenne des notes d'un salarié</a>
            </li>
            <li>Lister les différentes configurations existantes d'une session avec, pour chacune, le nom du prof ayant créé cette configuration.</li>
            <li>
                <select class="roomForSessionSelect">
                    <option>Choisir un employé</option>
                    <?php
                        foreach($matieres as $matiere) {
                            ?>
                            <option value="<?php echo $matiere->getId(); ?>"><?php echo $matiere->getIntitule(); ?></option>
                            <?php
                        }
                    ?>
                </select>
                <a class="roomForSession" href="roomForSession.php">Lister les salles dans lesquelles ont lieu toutes les sessions d'un même cours</a>
            </li>
            <li>Lister les sessions affectées à des salles n'ayant pas un nombre suffisant de places pour accueillir les inscrits à cette session.</li>
        </ul>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

    <script>        
        $('.salarySessionSelect').on('change', function() {
            var val = $(this).find(":selected").val();
            $('.salarySession').attr('href', 'salarySession.php?id='+val);
        });

        $('.salaryAverageSelect').on('change', function() {
            var val = $(this).find(":selected").val();
            $('.salaryAverage').attr('href', 'salaryAverage.php?id='+val);
        });

        $('.roomForSessionSelect').on('change', function() {
            var val = $(this).find(":selected").val();
            $('.roomForSession').attr('href', 'roomForSession.php?id='+val);
        });
    </script>
</body>
</html>

