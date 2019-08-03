<?php

require_once __DIR__ . '/../Model/Pokemon.php';
require_once __DIR__ . '/../Model/Type.php';

class DBData
{
    private $pdo;
    private static $instance;

    private function __construct()
    {
        $configData = parse_ini_file(__DIR__.'/../../config/database.ini');

        try {            
            $this->pdo = new PDO(
                "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
                $configData['DB_USERNAME'],
                $configData['DB_PASSWORD'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
            );
        }
        catch(\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage().'<br>';
            echo '<pre>';
            echo $exception->getTraceAsString();
            echo '</pre>';
            exit;
        }
    }

    //Comme mon construct est privé, j'utilise une méthode pour créer une instance
    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new DBData();
        }
        return self::$instance;
    }

    //Je récupère tous les Pokémon
    public function getPokemon() {
        $sql = "SELECT * FROM pokemon ";
        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->execute();
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokemon');
        //dump($results);
        return $results;
    }

    //Je préfère un Pokémon en fonction de son Id que je passe dans l'URL
    public function getPokemonById($pokemonId) {
        $sql = "SELECT * 
                FROM pokemon 
                WHERE pokemon.id = $pokemonId";
        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->execute();
        $results = $pdoStatement->fetchObject('Pokemon');
        //dump($results);
        return $results;
    }

    //Je récupère tous les types de Pokémon
    public function getTypes() {
        $sql = "SELECT * 
                FROM type";

        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->execute();
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Type');
        //dump($results);
        return $results;
    }
 
    //Je récupère le type d'un Pokémon en fonction de son numéro
    public function getPokemonType($pokemonNumero) {
        $sql = "SELECT * 
                FROM type
                JOIN pokemon_type
                    ON pokemon_type.type_id = type.id
                WHERE pokemon_type.pokemon_numero = $pokemonNumero ";

        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->execute();
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Type');
       //dump($results);
        return $results;
    }

    //Je récupère tous les Pokémon d'un type donné
    public function getPokemonByType($typeId) {
        $sql = "SELECT * 
                FROM pokemon 
                JOIN pokemon_type 
                    ON pokemon_type.pokemon_numero = pokemon.numero 
                JOIN type 
                    ON type.id = pokemon_type.type_id 
                WHERE type.id = $typeId";

        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->execute();
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Pokemon');
        //dump($results);
        return $results;
    }
}