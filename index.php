<?php
class Voiture {
protected $model;
protected $marque;
protected $kilometrage;
protected $annee;


public function affichage(){
    var_dump("la voiture de marque $this-> marque et de model $this->model a une capacite de courir $this->kilometrage par $this->annee");
}
 

}


?>