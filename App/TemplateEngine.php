<?php

class TemplateEngine
{

    public function __construct($router, $baseUri){
        $this->router = $router;
        $this->baseUri = $baseUri;
    }

    protected function show ($templateName, $templateVars = array()){
        $templateVars['router'] = $this->router;
        $templateVars['baseUri'] = $this->baseUri;
        require_once __DIR__ . '/views/header.tpl.php';
        require_once __DIR__ . '/views/' .$templateName. '.tpl.php';
        require_once __DIR__ . '/views/footer.tpl.php';
    }
}