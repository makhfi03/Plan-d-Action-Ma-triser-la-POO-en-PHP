<!-- Le Compte Bancaire -->

<?php
class CompteBancaire{
    private $solde;

    public function deposer($montant) {
        if ($montant > 0) {
            $this->solde += $montant;
            echo "Dépôt de $montant effectué";
        } else {
            echo "Montant invalide";
        }
    }

    public function retirer($montant) {
        if ($montant <= 0) {
            echo "Montant invalide";
        } elseif ($montant > $this->solde) {
            echo "Solde insuffisant !";
        } else {
            $this->solde -= $montant;
            echo "Retrait de $montant effectué";
        }
    }
}