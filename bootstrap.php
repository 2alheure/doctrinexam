<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';

$dbParams = array(
    'host'     => '127.0.0.1',
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'exam',
);

$config = Setup::createYAMLMetadataConfiguration([realpath(__DIR__."/mappings")], /* isDevMode */ true);

$entityManager = EntityManager::create($dbParams, $config);