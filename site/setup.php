<?php 

require_once('../vendor/fzaninotto/faker/src/autoload.php');
require_once('../bootstrap.php');

$faker = Faker\Factory::create();

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

for ($i = 0 ; $i<100 ; $i++) {      // Génération prof
    $prof = new Prof();
    $prof->setNom($faker->firstName);
    $prof->setPrenom($faker->lastName);
    
    $entityManager->persist($prof);
    $entityManager->flush();
}

for ($i = 0 ; $i<20 ; $i++) {      // Génération matière
    $matiere = new Matiere();
    $matiere->setIntitule($faker->word);
    $matiere->setIdProf($entityManager->find('\Prof', $faker->numberBetween(1, $prof->getId()))); // $prof contient encore la dernière entité de type Prof qui a été persistée, donc on a le last_insert_id
    
    $entityManager->persist($matiere);
    $entityManager->flush();
}

for ($i = 0 ; $i<20 ; $i++) {          // Génération salle
    $salle = new Salle();
    $salle->setLieu($faker->city);
    $salle->setNumero($faker->numberBetween(1, 100));
    $salle->setPlaces($faker->numberBetween(20, 150));

    $entityManager->persist($salle);
    $entityManager->flush();
}

for ($i = 0 ; $i<20 ; $i++) {          // Génération session
    $session = new Session();
    $session->setDebut($faker->dateTimeBetween('-1 year', '+2 years'));
    $session->setDuree($faker->numberBetween(45, 180));

    $session->setIdSalle($entityManager->find('\Salle', $faker->numberBetween(1, $salle->getId()))); // $salle contient encore la dernière entité de type Salle qui a été persistée, donc on a le last_insert_id
    $session->setIdMatiere($entityManager->find('\Matiere', $faker->numberBetween(1, $matiere->getId()))); // $matiere contient encore la dernière entité de type Matiere qui a été persistée, donc on a le last_insert_id

    $entityManager->persist($session);
    $entityManager->flush();
}

/*for ($i = 0 ; $i<20 ; $i++) {          // Génération enseignement
    $enseignement = new Enseignement();
    $enseignement->setCompte_rendu($faker->text());

    $enseignement->setIdProf($entityManager->find('\Prof', $faker->numberBetween(1, $prof->getId()))); // $prof contient encore la dernière entité de type Prof qui a été persistée, donc on a le last_insert_id
    $enseignement->setIdSession($entityManager->find('\Session', $faker->numberBetween(1, $session->getId()))); // $session contient encore la dernière entité de type Session qui a été persistée, donc on a le last_insert_id

    $entityManager->persist($enseignement);
    $entityManager->flush();
}*/

for ($i = 0 ; $i<20 ; $i++) {          // Génération assister
    $assister = new Assister();
    $assister->setNote($faker->numberBetween(0, 20));

    $assister->setIdEmploye($entityManager->find('\Employe', $faker->numberBetween(1, $personne->getId()))); // $employe contient encore la dernière entité de type Employe qui a été persistée, donc on a le last_insert_id
    $assister->setIdSession($entityManager->find('\Session', $faker->numberBetween(1, $session->getId()))); // $session contient encore la dernière entité de type Session qui a été persistée, donc on a le last_insert_id

    $entityManager->persist($assister);
    $entityManager->flush();
}



header('location: index.php');