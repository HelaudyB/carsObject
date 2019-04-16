<?php
class Felin{
    private $_ferocitude;
    private $_taille;
    private $_mignonitude;
    private $_etatDeDomestication;
    private $_nourriture;
    private $_name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }


    /**
     * Felin constructor.
     * @param $_ferocitude
     * @param $_taille
     * @param $_mignonitude
     * @param $_nourriture
     */
    public function __construct($_ferocitude, $_taille, $_mignonitude)
    {
        parent::
        $this->_ferocitude = $_ferocitude;
        $this->_taille = $_taille;
        $this->_mignonitude = $_mignonitude;
        $this->_nourriture = $_nourriture;
    }


    /**
     * @return mixed
     */
    public function getEtatDeDomestication()
    {
        return $this->_etatDeDomestication;
    }

    /**
     * @param mixed $etatDeDomestication
     */
    public function setEtatDeDomestication($etatDeDomestication)
    {
        $this->_etatDeDomestication = $etatDeDomestication;
    }





    /**
     * @return mixed
     */
    public function getFerocitude()
    {
        return $this->_ferocitude;
    }

    /**
     * @param mixed $ferocitude
     */
    public function setFerocitude($ferocitude)
    {
        $this->_ferocitude = $ferocitude;
    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->_taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->_taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getMignonitude()
    {
        return $this->_mignonitude;
    }

    /**
     * @param mixed $mignonitude
     */
    public function setMignonitude($mignonitude)
    {
        $this->_mignonitude = $mignonitude;
    }

    /**
     * @return mixed
     */
    public function getNourriture()
    {
        return $this->_nourriture;
    }

    /**
     * @param mixed $nourriture
     */
    public function setNourriture($nourriture)
    {
        $this->_nourriture = $nourriture;
    }

}