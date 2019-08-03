<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>/assets/css/style.css">
    <title>Pokedex</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand text-danger" href="<?= $templateVars['router']->generate('homepage')?>">Pokédex</a>
            <div class="d-flex flex-row-reverse">
              <a class="p-2 text-danger" href="<?= $templateVars['router']->generate('pokemonTypes')?>"><span>Types</span></a>
              <a class="p-2 text-danger" href="<?= $templateVars['router']->generate('homepage')?>"><span>Liste</span></a>
            </div>
    </nav>
