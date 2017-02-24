<?php
class Magicien // Présence du mot-clé class suivi du nom de la classe.
{
    // Déclaration des attributs et méthodes ici.
    public $attaque = 100;            // La force du personnage, par défaut à 50.
    public $armure = 60;
    public $vie = 100;
    public $_arme = 80;
    public $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function regenerer() // Une méthode qui déplacera le personnage (modifiera sa localisation).
    {
        $this->vie = 100;
    }

    public function attaque($cible)
    {
        $cible->setVie($cible->getVie() - $this->attaque);
    }


    function setVie($vie) {
        $this->vie = $vie;
    }

    function getVie() {
        return $this->vie;
    }
}


$merlin = new Magicien("Merlin");

?>