<?php
interface IReparable {
    public function reparer();

}

// creation de la class mere vehicule
class Vehicule {

    protected $nom;
    protected $matricule;
    protected $nombre_place;


    public function __construct($nom,$matricule,$nombre_place){
        $this->setnom($nom);
        $this->setmatricule($matricule);
        $this->setnombre_place($nombre_place);
        
    
    }

    public function getnom(){
        return $this-> nom;
     }
    
     public function setnom($new_nom){
         $this->nom=$new_nom;
     }
     public function getmatricule(){
         return $this-> matricule;
     }
    
    public function setmatricule($new_matricule){
         $this->matricule=$new_matricule;
     }
    
     public function getnombre_place(){
          return $this-> nombre_place;
     }
    
    public function setnombre_place($new_nombre_place){
        $this->nombre_place=$new_nombre_place;
     }
    
     public function affichage(){
   
        echo "ce vehicule  est une "  .$this-> getnom().  " de matricule"  .$this->getmatricule(). "et a "  .$this->getnombre_place(). " place"  ." <br>";
     }
    


public function demarrer(){
    echo "la voiture demarre <br>";
}
 }
class Voiture extends Vehicule implements IReparable{
protected $model;
protected $marque;
protected $kilometrage;
protected $annee;
// creation de la methode construct
 
 public function __construct($nom,$matricule, $nombre_place,$model,$marque,$kilometrage,$annee){

    parent::__construct($nom,$matricule, $nombre_place);



     $this->model=($model);
     $this->marque=$marque;
     $this->kilometrage=$kilometrage;
     $this->annee=$annee;

}
public function getmarque(){
    return $this-> marque;
}

 
 public function affichage(){
   
     echo "ce vehicule  est une "  .$this-> nom.  " de matricule" .$this->getmatricule(). "et a "  .$this->getnombre_place(). " place elle est de marque" .$this->getmarque(). "de model" .$this->model. "peut courir" .$this->kilometrage. "km et a ete achete en " .$this->annee ." <br>";
    // echo "Ce véhicule est une " . $this->getnom() . " de matricule " . $this->getmatricule() . " et a " . $this->getnombre_place() . " places. Elle est de marque " . $this->getmarque() . ", de modèle " . $this->getmodel() . ". Elle peut courir " . $this->getkilometrage() . " km et a été achetée en " . $this->getannee() . ". <br>";

    
 
}
public function klaxonner(){

    echo " le vehicule klaxonne <br>" ;
}

public function reparer(){
    echo"je suis un reparateur de vehicule <br>";

}

}


// creation des objets

 $voiture1 =new Voiture ("voiture", 2222 , 23, "FORD " , " FUSION ", 1200 ,2023);
 $voiture1->affichage(); 
 $voiture1->demarrer();
 $voiture1->klaxonner();
 $voiture1->reparer();

//  $voiture2= new Voiture ( " MERCEDES", " X6" , 2000, 2022);

//  $voiture3= new Voiture ( " TOYATA", " X8" , 4000, 2003);

//  $voiture1->affichage(); 
//  $voiture2->affichage() ;
//  $voiture3->affichage();
//  

// quatrieme question 



 
 

 
?>