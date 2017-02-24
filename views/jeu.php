<?php
class Jeu{

    public $perso;

    public function choix($personnage){

        if($personnage == "paladin"){
            $this->perso =  new Paladin('Paladin');
        }
        elseif($personnage  == "guerrier"){
            $this->perso =  new Guerrier('Guerrier');
            echo "Guerrier" .$this->vie. "";
        }
        elseif($personnage == "mage"){
            $this->perso =  new Mage('Mage');
        }

    }
}