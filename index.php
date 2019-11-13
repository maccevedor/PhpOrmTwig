<?php
//phpinfo();
require_once "bootstrap.php";
require_once "src/Routing/Routing.php";
require_once "src/Entity/Ciudad.php";
require_once "src/Entity/Tipo.php";

$ciudadRepository = $entityManager->getRepository('Ciudad');
$ciudad = $ciudadRepository->findAll();

$tipoRepository = $entityManager->getRepository('Tipo');
$tipo = $tipoRepository->findAll();
enviardatos($ciudad, $tipo, $twig);
