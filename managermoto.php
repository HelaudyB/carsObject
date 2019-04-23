<?php
class MotoManger extends Connect {
    const TABLE = 'moto';

    public function __construct()
    {
        parent::__construct();
    }

    public function insert(Moto $moto){
        $query="INSERT INTO `moto`( `marque`, `model`, `topCase`, `isKawai`, `prix` ) VALUES ('".$moto->getMarque()."','".$moto->getModel()."','".$moto->getTopCase()."','".$moto->getIsKawai()."','".$moto->getPrix()."')";
        
    }

    public function delete(Moto $moto){
        $query="DELETE INTO `moto`( `marque`, `model`, `topCase`, `isKawai`, `prix` ) VALUES ('".$moto->getMarque()."','".$moto->getModel()."','".$moto->getTopCase()."','".$moto->getIsKawai()."','".$moto->getPrix()."')";
        parent::execute($query);

    }


    public function update(Moto $moto){
        $query = "UPDATE `Moto` SET marque = moto.marque, model = moto.model, prix = moto.prix,
                                      isKawai = moto.isKawai,
                                      topCase = moto.topCase,
                                      prix = moto.prix
                                      WHERE `id` = ". $moto->getId();
        parent::execute($query);
    }



    public function select(){

    }

    public function selectAll(){

    }
    public function persist(){
        $motoManager = new MotoManager();
        $motoManager->insert($motoManager);
    }
}

?>