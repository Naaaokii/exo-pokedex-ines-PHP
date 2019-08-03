<?php

require_once __DIR__ . '/../TemplateEngine.php';
require_once __DIR__ . '/../Utils/DBdata.php';

class PokemonController extends TemplateEngine
{
    private $TemplateEngine;
    public function __construct($TemplateEngine) {
        $this->TemplateEngine = $TemplateEngine;
    }

    public function pokemon($params){
        $dbData = DBData::getInstance();
        $pokemonId = $params['pokemonId'];
        $pokemonById = $dbData->getPokemonById($pokemonId);
        $pokemonNumero = $pokemonById->getNumero();
        $pokemonType = $dbData->getPokemonType($pokemonNumero);
        $this->TemplateEngine->show('pokemon', array(
            'pokemonById' => $pokemonById,
            'pokemonType' => $pokemonType
        ));
    }
}