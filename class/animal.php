<?php
class Animal
{
    private $_poids;
    private $_taille;


    /**
     * @return mixed
     */
    public function getPoids()
    {
        return $this->_poids;
    }

    /**
     * @param mixed $poids
     */
    public function setPoids($poids)
    {
        $this->_poids = $poids;
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

    public function afficheMonPoids()
    {
        echo($this->_poids);
    }

    public function __construct($poids, $taille)
    {
        echo('je construit mon objet');
        $this->_poids = 40;
        $this->_taille= 23;
    }
}
