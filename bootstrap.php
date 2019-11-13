<?php
// Configuracion Doctrine
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\Logging\DebugStack;
use Doctrine\DBAL\Types\DateTimeType;
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Query;

require_once "vendor/autoload.php";
// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src/Entity"), $isDevMode);
//$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);
// database configuration parameters
$conn = [
    'driver' => 'pdo_mysql',
    'path' => __DIR__ . '/db.mysql',
    'host' => 'localhost',
    'port' => '3306',
    'dbname' => 'intelcost_bienes',
    'user' => 'root',
    'password' => 'root',
    'charset'  => 'utf8',
    'driverOptions' => [
        1002 => 'SET NAMES utf8'
    ]
    //'chatset' => 'root',
];
// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
//Configuracion de twig(Sistema de pantillas), se configura el 'debud => true ' con el fin de que no maneje cache al momneto de poner le produccion cambiar a false
$loader = new Twig_Loader_Filesystem('src/Templates');
$twig = new Twig_Environment($loader, [
    'debug' => true,
    'cache' => 'src/Templates/compilation_cache',
]);
// $loader = new \Twig\Loader\FilesystemLoader('src/Templates');
// $twig = new \Twig\Environment($loader, [
//     'cache' => '/path/to/compilation_cache',
// ]);
//Permite hacer el dump de una variable
$twig->addExtension(new Twig_Extension_Debug());
