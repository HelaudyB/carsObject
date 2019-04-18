<?php
include 'includeverything.php';
//var_dump($newAnimal->getTaille());
// echo $newAnimal;


//$chat = new Chat(9000, 334,"relativement domestiqué","OTRUCHE");
// $chat->getMignonitude();
// var_dump($chat);




$audiRS1 = new Audi('Audi', 'RS1', 100000, 5, 1, 1, 0);

$voitureInconnu = new Voiture('Renault', 'Espace', 10000, 5, 0, 0);
$vehiculeInconnu = new Vehicule('Renault', 'Tracteur', 100000);
$yamaha = new Yamaha('yes', 'yes', 'yamaha', 'ZGH57', 'toierutoeriut','ioueiue');

$Nala = new Chien('beaucoup', 'un peu', 'pas mal', 34, 3423);
$mewmoto = new yamaha(true, 'yes');
// $newKawa =  new Kawa('audi', 'roeziruzeoir', 34556, true, true)  ;
$newyamaha =  new yamaha('audi', 'roeziruzeoir')  ;
$nouvelleVoiture = new Audi('KTM', 'ajzeytaz', 34534,5, false, false, false );

$voitureInconnu->name='eoirezur';
$voitureInconnu->valeur='eroiuezroit';
$nouvelleKawasaki = new Kawa('Kawasaki', 'eoiruze', 7000, false, true);
$nouvelleKawasaki->name = 'Kawasaki';
var_dump($nouvelleKawasaki);
var_dump($nouvelleVoiture);
// var_dump($newKawa);
var_dump($yamaha);
var_dump($Nala);
var_dump($audiRS1);
var_dump($voitureInconnu);
var_dump($vehiculeInconnu);

// echo($nouvelleKawasaki->marque);
$nouvelleKawasaki->marque= 'yamaha';

$Otruche = new Chat(12, '16/20', 'oizeu', 'oijeroi', 'ilrutyreiuty', 'dluiyreiutye');
var_dump($Otruche);
