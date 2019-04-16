<?php
class voitureexception extends Exception {
    private $allowedMark=['audi', 'renault', 'vw', 'bwm', 'honda'];
    public function __construct(Voiture $voiture){ //attention mettre deux underscores sinon ça passe pas
        if(!in_array($voiture->getMarque(), $this->allowedMark)){
            throw new Exception('La marque de voiture que vous cherchez n\'existe pas', 400 );
        }
    }
}
?>

