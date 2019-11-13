<?php

require "Url.php";

function enviardatos($ciudad = null, $tipo = null, $twig)
{
    $url = new url('/');


    if (!$url->segment(1))
        $page = 'login';
    else
        $page = $url->segment(1);

    //echo $page;exit;


    switch ($page) {
        case 'home':
            require_once 'src/Controller/Home.php';
            break;
        default:
            //echo '404 not found';
            //break;
            require_once 'src/Controller/Login.php';
            break;
    }
}
