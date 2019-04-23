<?php
class Audi extends Voiture {

    private $isQuatro;

    public function __construct($marque, $model, $prix, $nbPortes, $clim, $siegeChauffant, $isQuatro)
    {
        parent::__construct($marque, $model, $prix, $nbPortes, $clim, $siegeChauffant);
        $this->isQuatro = $isQuatro;
    }
    public function __set($name, $value)
    {
        echo'toto';
    }
    private function setId($id)
    {
        $this->id=$id;
    }

    /**
     * @return mixed
     */
    public function getisQuatro()
    {
        return $this->isQuatro;
    }

    /**
     * @param mixed $isQuatro
     */
    public function setIsQuatro($isQuatro)
    {
        $this->isQuatro = $isQuatro;
    }
    public function persist(){
        $voitureManager = new VoitureManager();
        $voitureManager->insert($voitureManager);
    }


}
?>