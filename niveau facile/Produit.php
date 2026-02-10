<!-- Gestion de Produits -->

<?php
class Produit
{
    private $nom;
    private $prix;

    public function __construct($nom, $prix)
    {
        $this->nom = $nom;
        $this->prix = $prix;
    }

    public function affichage()
    {
        echo "le prix de" . $this->nom . "est:" . $this->prix . "DH";
    }
}
