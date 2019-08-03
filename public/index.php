<?php 
require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__ .'/../App/App.php';

$app = new App($_SERVER['BASE_URI']);
$app->handlerequest();



?>

<!--<h1>Test</h1>
<div class="card" style="width: 18rem;">
  <img src="/Projets/S05-atelier-revisions-pokedex/public/assets/img/1.png" class="card-img-top" alt="pokemon-image">
  <div class="card-body">
    <p class="card-text">#1 Bulbizarre</p>
  </div>
</div>-->






