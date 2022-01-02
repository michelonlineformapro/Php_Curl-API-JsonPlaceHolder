<?php
//Mise en cache
ob_start();

//Config url super Globale $_GET
if(isset($_GET['url'])){
    $url = $_GET['url'];
}else{
    $url = 'accueil';
}

//les routes
if($url === 'accueil'){
    $title = "PHP CURL -ACCUEIL-";
    require 'pages/accueil.php';
}else{
    require 'pages/404.php';
}

$content = ob_get_clean();
require "pages/template.php";
