<?php
include("Weapon.php");

class PersonnageBase extends Weapon {
    private $pseudo;
    private $niveau;
    private $arme;

    public function __construct($pseudo) {
        $this->pseudo = $pseudo;
        $this->niveau = $niveau = 1;
        $this->arme = $arme = new Weapon("baton", "basic", "mélée", "1");
    }

    # GETTER
    public function getPseudo(){
        return $this->pseudo;
    }
    public function getNiveau() {
        return $this->niveau;
    }
    public function getArme() {
        return $this->arme;
    }

    # SETTER
    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }
    public function setNiveau($niveau) {
        $this->niveau = $niveau;
    }
    public function setArme($name, $rarity, $type, $dammage) {
        $this->arme = new Weapon($name, $rarity, $type, $dammage);
    }
    # Method
    public function LevelUp() {
        $this->niveau++;
    }
    public function AttackBase() {
        $this->arme;
    }
}


class Guerrier extends PersonnageBase {
    private $force;

    public function __construct() {
        $this->force = 100;
        PersonnageBase::setArme("épée", "normal", "mélée", "10");
    }

    public function LevelUp() {
        $this->niveau == PersonnageBase::LevelUp();
        $this->force += 5;
    }
}


class Sorcier extends PersonnageBase {
    private $magie;

    public function __construct() {
        $this->magie = 100;
        PersonnageBase::setArme("baguette", "normal", "distance", "15");
    }
    public function LevelUp() {
        $this->niveau == PersonnageBase::LevelUp();
        $this->magie += 5;
    }
}


class Voleur extends PersonnageBase {
    private $dextérité;

    public function __construct() {
        $this->dextérité = 100;
        PersonnageBase::setArme("dague", "normal", "mélée", "7");
    }
    public function LevelUp() {
        $this->niveau == PersonnageBase::LevelUp();
        $this->dextérité += 5;
    }
}
?>