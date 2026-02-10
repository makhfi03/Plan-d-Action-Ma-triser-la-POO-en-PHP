<!-- Plan d'Action : Maîtriser la POO en PHP
Niveau Facile : Les Fondations -->
<!-- La Classe Voiture -->
 
<?php
class Voiture{
     public $marque;
    public $couleur;
    public $vitesse;
    public function accelerer(){
        $this->vitesse += 10;
    }

    public function afficherInfos(){
        echo "Marque : " . $this->marque . "<br>";
        echo "Couleur : " . $this->couleur . "<br>";
        echo "Vitesse : " . $this->vitesse . "<br>";
    }
}
