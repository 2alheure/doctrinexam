<?php 
require_once('bootstrap.php');

echo '<meta charset="utf-8">';

// Exo 0
$me = new Personne();
$me->setNom('Juventin');
$me->setPrenom('Jordan');
$me->setDateNaissance(new \DateTime('06-02-1995'));
$me->setEmail('juv.jordan@hotmail.fr');
$me->setAdresse('42, Tu n\'y as pas cru, tout de même ?');
$me->setCpostal('12345');
$me->setVille('Kanto');
$me->setPays('Japon');

$entityManager->persist($me);
$entityManager->flush();

echo 'Rendu Exam Doctrine ORM de '.$me->getPrenom().' '.$me->getNom().'<br><br>';

$entityManager->remove($me); // SUICIDE 
$entityManager->flush();


// Exo 1
$film = $entityManager->find('\Film', 42);
echo 'Film portant l\'id 42 : '.$film->getTitre().'<br><br>';

// Exo 2
$film = $entityManager->getRepository('\Film')->findOneBy(['titre' => 'Reservoir Dogs']);
echo "Id du film ayant pour titre 'Reservoir Dogs' : ".$film->getIdFilm()."<br><br>";

// Exo 3
$dist = $entityManager->find('\Distributeur', 80);
echo "Films du distributeur <b>".$dist->getNom()."</b> :<br>";

// Exo 4
foreach ($dist->getFilms() as $film) {
    echo '- '.$film->getTitre().'<br>';
}
echo '<br>';

// Exo 5
$fonctions_repo = $entityManager->getRepository('\Fonction');
$fonctions = $fonctions_repo->findAll();
echo "Liste des fonctions :<br>";
foreach ($fonctions as $func) {
    echo '- '.$func->getNom().'<br>';
}
echo '<br>';

// Exo 6