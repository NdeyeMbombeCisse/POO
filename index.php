<?php
class Voiture {
protected $model;
protected $marque;
protected $kilometrage;
protected $annee;
// creation de la methode construct
 
 public function __construct($model,$marque,$kilometrage,$annee){
    $this->setmodel($model);
    $this->setmarque($marque);
    $this->setkilometrage($kilometrage);
     $this->setannee($annee);

}
// utilisation de getteur et des setteurs

 public function getmodel(){
    return $this-> model;
 }

 public function setmodel($new_model){
     $this->model=$new_model;
 }
 public function getmarque(){
     return $this-> marque;
 }

public function setmarque($new_marque){
     $this->marque=$new_marque;
 }

 public function getkilometrage(){
      return $this-> kilometrage;
 }

public function setkilometrage($new_kilometrage){
    $this->kilometrage=$new_kilometrage;
 }

 public function getannee(){
      return $this-> annee;
 }

public function setannee($new_annee){
    $this->annee=$new_annee;
 }

 public function affichage(){
   
   echo "la voiture de marque"  .$this-> getmarque().  "et de model"  .$this->getmodel(). "a une capacite de courir"  .$this->getkilometrage(). " km et a ete achete en"  .$this->getannee()." <br>";
}
 
}
// creation des objets

 $voiture1 =new Voiture (" FORD " , " FUSION ", 1200 ,2023);

 $voiture2= new Voiture ( " MERCEDES", " X6" , 2000, 2022);

 $voiture3= new Voiture ( " TOYATA", " X8" , 4000, 2003);

 $voiture1->affichage(); 
 $voiture2->affichage() ;
 $voiture3->affichage();



 
?>