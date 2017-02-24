<?php
class Guerrier // Présence du mot-clé class suivi du nom de la classe.
{
    // Déclaration des attributs et méthodes ici.
    private $attaque = 100;            // La force du personnage, par défaut à 50.
    private $_armure = 60;
    public $vie = 100;
    private $_arme = 80;
    private $nom;



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
$orgrimar = new Guerrier("harry");


?>