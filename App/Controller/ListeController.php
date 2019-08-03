<?php

require_once __DIR__ . '/../TemplateEngine.php';
require_once __DIR__ . '/../Utils/DBdata.php';

class ListeController extends TemplateEngine
{
    private $TemplateEngine;
    public function __construct($TemplateEngine) {
        $this->TemplateEngine = $TemplateEngine;
    }

    public function liste($params){
        $dbData = DBData::getInstance();
        $typeId = $params['typeId'];
        $listePokemon = $dbData->getPokemonByType($typeId);
        $this->TemplateEngine->show('liste', array(
            'listePokemon' => $listePokemon,
        ));
    }

    
}