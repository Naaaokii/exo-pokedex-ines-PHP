<?php $pokemon = $templateVars['pokemonById']  ?>

<div class="container">
    <h3 class="text-center text-light" style="padding: 2.5rem 0;">Détails de <?= $pokemon->getNom()?> </h3>

    <div class="d-flex row">
            <img src="<?= $templateVars['baseUri'] . '/assets/img/' . $pokemon->getNumero() . '.png'?>" alt="pokemon_image" style="margin-right: 5em;"/></a>

        <div class="col align-bottom" style="background-color: #AB3838; padding: 1.5em 0.8em; margin-bottom: 2em;">
            
            <p class="text-light font-weight-bold" style="font-size: 1.5rem;">#<?=$pokemon->getNumero() . '' . $pokemon->getNom()?></p>

            <div class="d-flex">
            <?php foreach($templateVars['pokemonType'] as $pokemonType) :?>
                <div>
                    <p style="background-color: #<?= $pokemonType->getColor()?>" class="text-light types " > <?= $pokemonType->getName()?></p>
                </div>
            <?php endforeach; ?>

            </div>

                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th scope="col" class="text-light font-weight-bold" style="font-size: 1.3rem;">Statistiques</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row" class="text-light" style="width: 200px">PV</th>
                          <td class="text-light" style="width: 100px"><?= $pokemon->getPv() ?></td>
                          <td>       
                                <div class="progress" style="background-color: #632B2B">
                                    <div class="progress-bar" role="progressbar" style="width:<?= $pokemon->getPv() * 100 / 255 ?>% ; background-color: #FFF" ((aria-valuenow="<?= $pokemon->getPv() ?>" aria-valuemin="0")  aria-valuemax="255")></div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                          <th scope="row" class="text-light">Attaque</th>
                          <td class="text-light"><?= $pokemon->getAttaque() ?></td>
                          <td>               
                              <div class="progress" style="background-color: #632B2B">
                                    <div class="progress-bar" role="progressbar" style="width:<?= $pokemon->getAttaque() * 100 / 255  ?>%; background-color: #FFF" aria-valuenow="<?= $pokemon->getAttaque() ?>" aria-valuemin="0" aria-valuemax="255"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                          <th scope="row" class="text-light">Défense</th>
                          <td class="text-light"><?= $pokemon->getDefense() ?></td>
                          <td>
                                <div class="progress" style="background-color: #632B2B">
                                      <div class="progress-bar" role="progressbar" style="width: <?= $pokemon->getDefense() * 100 / 255  ?>%; background-color: #FFF" aria-valuenow="<?= $pokemon->getDefense()?>" aria-valuemin="0" aria-valuemax="255"></div>
                                    </div>
                                </div>
                          </td>
                        </tr>

                        <tr>
                          <th scope="row" class="text-light">Attaque spé.</th>
                          <td class="text-light"><?= $pokemon->getAttaque_spe() ?></td>
                          <td>
                                <div class="progress" style="background-color: #632B2B">
                                      <div class="progress-bar" role="progressbar" style="width: <?= $pokemon->getAttaque_spe() * 100 / 255  ?>%; background-color: #FFF" aria-valuenow="<?= $pokemon->getAttaque_spe()?>" aria-valuemin="0" aria-valuemax="255"></div>
                                    </div>
                                </div>
                          </td>
                        </tr>

                        <tr>
                          <th scope="row" class="text-light">Défense spé.</th>
                          <td class="text-light"><?= $pokemon->getDefense_spe() ?></td>
                          <td>
                                <div class="progress" style="background-color: #632B2B">
                                      <div class="progress-bar" role="progressbar" style="width: <?= $pokemon->getDefense_spe() * 100 / 255  ?>%; background-color: #FFF" aria-valuenow="<?= $pokemon->getDefense_spe()?>" aria-valuemin="0" aria-valuemax="255"></div>
                                    </div>
                                </div>
                          </td>
                        </tr>

                        <tr>
                          <th scope="row" class="text-light">Vitesse</th>
                          <td class="text-light"><?= $pokemon->getVitesse() ?></td>
                          <td>
                                <div class="progress" style="background-color: #632B2B">
                                      <div class="progress-bar" role="progressbar" style="width: <?= $pokemon->getVitesse() * 100 / 255  ?>%; background-color: #FFF" aria-valuenow="<?= $pokemon->getVitesse()?>" aria-valuemin="0" aria-valuemax="255"></div>
                                    </div>
                                </div>
                          </td>
                        </tr>

                      </tbody>
                    </table>

                    

    </div>
    
</div>


<a href="<?= $templateVars['router']->generate('homepage') ?>" style="margin-left: 50%; color: #F8F9FA;">Revenir à la liste</a>
