<?php //dump($templateVars['types'])?>
<div class="container">
    <p class="text-light text-center ">Cliquez sur un type pour voir tous les Pokémon de ce type</p>
    <div class="d-flex row" style="margin-right: 5em;">
        <?php foreach($templateVars['types'] as $type) : ?>
             <div class="col">
                 <a href="<?=$templateVars['router']->generate('pokemonTypesListe', ['typeId' => $type->getId() ])?>" style="margin: 1em 5em;background-color: #<?=$type->getColor()?>" class="text-light btn btn-lg btn-block" ><?=$type->getName()?> </a>
             </div>
        <?php endforeach;  ?>
    </div>
</div>