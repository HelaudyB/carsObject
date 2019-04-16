<?php
class motoexception extends Exception {
    private $allowedMark=['yamaha', 'kamasaki', 'KTM', 'honda', 'husqvarna'];
    public function __construct(Moto $moto){
         if(!in_array($moto->getMarque(), $this->allowedMark)){
             throw new Exception('La moto que vous cherchez n\'existe pas', 400 );
         }
    }
}
?>

