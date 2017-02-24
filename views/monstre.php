<?php
class Monstre // Présence du mot-clé class suivi du nom de la classe.
{
    // Déclaration des attributs et méthodes ici.
    private $attaque = 80;            // La force du personnage, par défaut à 50.
    private $_armure = 60;
    private $vie = 100;
    private $_arme = 80;
    private $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function regenerer($vie = null){ // Une méthode qui déplacera le personnage (modifiera sa localisation).
        if(is_null($vie)){
            $this->vie = 100;
        } else {
            $this->vie += $vie;
        }
    }

    public function attaque($cible)
    {

        $cible->setVie($cible->getVie() - $this->attaque);


    }

    public function mort()
    {
        return $this->vie <= 0;
    }

    function setVie($vie) {
        $this->vie = $vie;
    }

    function getVie() {
        return $this->vie;
    }


}
$dragon = new Monstre("dragon");


?>