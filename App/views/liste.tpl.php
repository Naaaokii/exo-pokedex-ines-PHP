<div class="container"> 
    <div class="row">
        <?php foreach($templateVars['listePokemon'] as $pokemon) :?>
            <div class="col-4">
                <div class="image_home">
                    <a href=""><img src="<?= $templateVars['baseUri'] . '/assets/img/'. $pokemon->getNumero() .'.png'?>" alt="pokemon_image" class=""/></a>
                    <p class="text-center" style="color: #F9D3D3;">#<?=$pokemon->getNumero() . '' . $pokemon->getNom()?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div> 
</div>