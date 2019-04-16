<?php
class Chien extends animal {
    private $_bark;
    private $_nonos;
    private $_defend;

    /**
     * Chien constructor.
     * @param $_bark
     * @param $_nonos
     * @param $_defend
     */
    public function __construct($_bark, $_nonos, $_defend, $poids, $taille)
    {
        $this->_bark = $_bark;
        $this->_nonos = $_nonos;
        $this->_defend = $_defend;
    }

}