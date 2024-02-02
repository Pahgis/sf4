<?php


class Monster {
    private $name = "Méchant";
    private $health = 300;
    private $attack = 20;
    private $defense = 40;

    public function getHealth()
    {
        return $this->health;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAttack()
    {
        return $this->attack;
    }
    public function getDefense()
    {
        return $this->defense;
    }
    public function setHealth($health)
    {
        $this->health = $health;
    }
    public function hit(){
        $degat = $this->attack / rand(5,15);
        echo $this->name . "attaque l'ennemi pour " . $degat . "points de dégats ! <br>";
        return $degat;
    }
}