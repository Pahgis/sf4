<?php 


class Pretre extends Hero {
    private $name;
    private $id;
    private $health = 100;
    private $attack = 60;
    private $defense = 70;
    private $class = "pretre";

    public function __construct($name)
    {
        $hero = new Hero($name);
        $this->health = $this->health + $hero->gethealth();
        $this->attack = $this->attack + $hero->getAttack();
        $this->defense = $this->defense + $hero->getDefense();
        $this->name = $hero->getName();
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getHealth()
    {
        return $this->health;
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
    public function getName(){
        return $this->name;
    }

    public function hit(){
        $degat = $this->attack / 10;
        echo $this->name . "attaque l'ennemi pour " . $degat . "points de dégats ! ";
        return $degat;
    }
}