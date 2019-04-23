<?php
class VoitureManager extends Connect {
    const TABLE = 'voiture';

    public function __construct()
    {
        parent::__construct();
    }

    public function insert(Voiture $voiture){
        $query="INSERT INTO `voiture`( `marque`, `isQuatro`, `siegeChauffant`, `clim`, `nbPortes`, `prix`, `model` ) VALUES ('".$voiture->getisQuatro()."','".$voiture->getSiegeChauffant()."','".$voiture->getClim()."','".$voiture->getNbPortes()."','".$voiture->getPrix()."','".$voiture->getModel()."')";
        parent::execute($query);
    }

    public function delete(Voiture $voiture){
        $query="DELETE INTO `voiture`( `marque`, `isQuatro`, `siegeChauffant`, `clim`, `nbPortes`, `prix`, `model` ) VALUES ('".$voiture->getisQuatro()."','".$voiture->getSiegeChauffant()."','".$voiture->getClim()."','".$voiture->getNbPortes()."','".$voiture->getPrix()."','".$voiture->getModel()."')";
        parent::execute($query);

    }


        public function update(Voiture $voiture){
            $query = "UPDATE `Voiture` SET marque = voiture.marque,
                                      model = voiture.model,
                                      prix = voiture.prix,
                                      nbPortes = voiture.nbPortes,
                                      clim = voiture.clim,
                                      siegeChauffant = voiture.siegeChauffant,
                                      isQuatro = voiture.isQuatro,
                                      WHERE `id` = ". $voiture->getId();
            parent::execute($query);
        }



    public function select(){

    }

    public function selectAll(){

    }
    public function persist(){
        $voitureManager = new VoitureManager();
        $voitureManager->insert($voitureManager);
    }
}

?>