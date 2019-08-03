<?php 

require_once __DIR__ . '/Controller/MainController.php';
require_once __DIR__ . '/Controller/PokemonController.php';
require_once __DIR__ . '/Controller/TypesController.php';
require_once __DIR__ . '/Controller/ListeController.php';
require_once __DIR__ . '/TemplateEngine.php'; 

class App 
{
   private $router;
   private $TemplateEngine;

   public function __construct($baseUri) {
       $this->router = new AltoRouter();
       $this->router->setBasePath($baseUri);
       $this->TemplateEngine = new TemplateEngine($this->router, $baseUri);
       $this->initRouter();
   }

   public function initRouter() {
       $this->router->map(
        'GET',
        '/',
        array(
            'controller' => 'MainController',
            'methode' => 'home'
        ),
        'homepage'
       );

       $this->router->map(
        'GET',
        '/pokemon/[i:pokemonId]',
        array(
            'controller' => 'PokemonController',
            'methode' => 'pokemon'
        ),
        'pokemonDetails'
       );

       $this->router->map(
        'GET',
        '/pokemon/types',
        array(
            'controller' => 'TypesController',
            'methode' => 'types'
        ),
        'pokemonTypes'
       );

       $this->router->map(
        'GET',
        '/pokemon/types/Liste/[i:typeId]',
        array(
            'controller' => 'ListeController',
            'methode' => 'liste'
        ),
        'pokemonTypesListe'
       );
   }

   public function handlerequest() {
       $match = $this->router->match();
       //dump($match);
       if ($match !== false) {
           $controllerName = $match['target']['controller'];
           $methodeName = $match['target']['methode'];
           $params = $match['params'];
           $controller = new $controllerName($this->TemplateEngine);
           $controller->$methodeName($params);
       } else {
        echo "PAGE NOT FOUND";
       }
   }
}

?>

