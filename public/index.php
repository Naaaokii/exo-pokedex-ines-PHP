<?php 
require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__ .'/../App/App.php';

$app = new App($_SERVER['BASE_URI']);
$app->handlerequest();
?>







