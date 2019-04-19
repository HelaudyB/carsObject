<?php

/*
  CREATE TABLE Animal (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    poids VARCHAR(30) NOT NULL,
    age VARCHAR(30) NOT NULL);
)
*/

class Connect{
    private $bdd = 'carsproject';

    public function __construct($connec_host = 'localhost', $connec_dbname = 'carsproject', $connec_pseudo = 'user', $connec_mdp = 'root')
    {
        try {
            $this->bdd = new PDO('mysql:host='.$connec_host.';dbname='.$connec_dbname, $connec_pseudo, $connec_mdp);
            $this->bdd->exec("SET CHARACTER SET utf8");
            $this->bdd->exec("SET NAMES utf8");
            echo"<div class='alert alert-success' role='alert'>connexion réussie!</div>";
        }
        catch(PDOException $e) {
            throw new Exception($e->getMessage());
            echo"<div class='alert alert-danger' role='alert'>connexion ratée!</div>";

        }
    }

    public function connexion(){
        return $this->bdd;
    }

    public function execute($request){
        try{
            $query = $this->bdd->prepare($request);
            $query->execute();
        } catch (Exception $e){
            throw new Exception($e->getMessage());
        }

    }
}

class VoitureManager extends Connect
{
    const TABLE = 'voiture';

    public function __construct()
    {
        parent::__construct();
    }

    public function insert(Voiture $voiture){
        $query="INSERT INTO `voiture`( `isQuatro`, `siegeChauffant`, `clim`, `nbPortes`, `prix`, `model` ) VALUES    ('".$voiture->getisQuatro()."','".$voiture->getSiegeChauffant()."','".$voiture->getClim()."','".$voiture->getNbPortes()."','".$voiture->getPrix()."','".$voiture->getModel()."')";
        parent::execute($query);
    }

    public function delete(){

    }

    public function update(){

    }

    public function select(){

    }

    public function selectAll(){

    }
    public function persist(){
        $voitureManager = new VoitureManager();
        $voitureManager->insert($this);
    }
}

?>