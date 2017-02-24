<?php
class Jeu{

    public $perso;

    public function choix($personnage){

        if($personnage == "paladin"){
            $this->perso =  new Paladin('Paladin');

        }
        elseif($personnage  == "guerrier"){
            $this->perso =  new Guerrier('Guerrier');


        }
        elseif($personnage == "mage"){
            $this->perso =  new Magicien('Mage');
        }

    }
}