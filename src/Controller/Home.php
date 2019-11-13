<?php

//require "bootstrap.php";
$template = $twig->load('index.html');
echo $template->render(['ciudades' => $ciudad, 'tipos' => $tipo]);
