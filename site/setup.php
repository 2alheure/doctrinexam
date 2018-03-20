<?php 

require_once('../vendor/fzaninotto/faker/src/autoload.php');
require_once('../bootstrap.php');

$faker = Faker\Factory::create();

$personne = null;
$entreprise = null;

for ($i = 0 ; $i<100 ; $i++) {      // Génération entreprise + employés
    $personne = new Employe();
    $personne->setNom($faker->firstName);
    $personne->setPrenom($faker->lastName);

    if ($i%5 == 0) {
        $entreprise = new Entreprise();
        $entreprise->setNom($faker->word);

        $entityManager->persist($entreprise);
        $entityManager->flush();
    }

    $personne->setIdEntreprise($entreprise);

    $entityManager->persist($personne);
    $entityManager->flush();
}

for ($i = 0 ; $i<100 ; $i++) {
    $personne = new Prof();
    $personne->setNom($faker->firstName);
    $personne->setPrenom($faker->lastName);

    $entityManager->persist($personne);
    $entityManager->flush();
}


header('location: index.php');