<?php
class Magicien // Présence du mot-clé class suivi du nom de la classe.
{
    // Déclaration des attributs et méthodes ici.
    private $magie = 100;            // La force du personnage, par défaut à 50.
    private $_armure = 60;
    private $vie = 100;
    private $_arme = 80;
    private $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function regenerer() // Une méthode qui déplacera le personnage (modifiera sa localisation).
    {
        $this->vie = 100;
    }

    public function sort($cible2)
    {
        $cible2->setVie($cible2->getVie() - $this->magie);
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