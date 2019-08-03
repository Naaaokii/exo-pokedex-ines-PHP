<?php

require_once __DIR__ . '/../TemplateEngine.php';
require_once __DIR__ . '/../Utils/DBdata.php';

class TypesController extends TemplateEngine
{
    private $TemplateEngine;
    public function __construct($TemplateEngine) {
        $this->TemplateEngine = $TemplateEngine;
    }

    public function types(){
        $dbData = DBData::getInstance();
        $types = $dbData->getTypes();
        $this->TemplateEngine->show('types', array(
            'types' => $types
        ));
    }
}