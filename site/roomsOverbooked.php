<?php

require_once('../bootstrap.php');

$rooms = $entityManager->getRepository('\Assister')->getRoomsOverbooked();


var_dump($rooms);


?>