<?php

require_once __DIR__ . '/../TemplateEngine.php';
require_once __DIR__ . '/../Utils/DBdata.php';


class MainController extends TemplateEngine
{
   private $TemplateEngine;

    public function __construct($TemplateEngine) {
        $this->TemplateEngine = $TemplateEngine;
    }

    public function home(){
        $dbData = DBData::getInstance();
        $allPokemon = $dbData->getPokemon();
        $this->TemplateEngine->show('home', array(
            'allPokemon' => $allPokemon
        ));
        
    }
}

//$dbData = DBData::getInstance();