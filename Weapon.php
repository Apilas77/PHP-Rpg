<?php
class WeaponBase {
    $name;
    $rarity;
    $type;
    $dammage;

    public function __construct($name, $rarity, $type, $dammage) {
        $this->name = $name;
        $this->rarity = $rarity;
        $this->type = $type;
        $this->dammage = $dammage;
    }
    # GETTER
    public function getName()) {
        return $this->name;
    }
    public function getRarity() {
        return $this->rarity;
    }
    public function getType() {
        return $this->type;
    }
    public function getDammage() {
        return $this->dammage;
    }
    # SETTER
    public function setName($name) {
        $this->name = $name;
    }
    public function setRarity() {
        $this->rarity = $rarity;
    }
    public function setType() {
        $this->type = $type;
    }
    public function setDammage() {
        $this->dammage = $dammage;
    }
    # Method
    public function LevelRarity($rarity) {
        $this->level = $rarity;
    }
}
?>