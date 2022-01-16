<?php
class MonsterBase {
    private $name;
    private $level;
    private $arme;

    public function __construct($name, $level) {
        $this->name = $name;
        $this->level = $level = 1;
        $this->arme = $arme = "baton";
    }
    # GETTER
    public function getName() {
        return $this->name;
    }
    public function getLevel() {
        return $this->level;
    }
    public function getArme() {
        return $this->arme;
    }
    # SETTER
    public function setName($name) {
        $this->name = $name;
    }
    public function setLevel($level) {
        $this->level = $level;
    }
    public function setArme($arme) {
        $this->arme = $arme;
    }
    # Method
    public function LevelUp() {
        $this->level++;
    }
}
?>