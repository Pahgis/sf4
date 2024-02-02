<?php 

class Hero {
    private $name;
    private $health = 100;
    private $attack = 50;
    private $defense = 50;
    private $critique = 1;
    private $id;
    private $class = "hero";

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hit(){
        $degat = $this->attack / 10;
        echo $this->name . "attaque l'ennemi pour " . $degat . "points de dégats ! ";
        return $degat;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDefense()
    {
        return $this->defense;
    }

    public function getClass()
    {
        return $this->class;
    }


    public function getAttack()
    {
        return $this->attack;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setHealth($health)
    {
        $this->health = $health;
    }

    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    public function setDefense($defense)
    {
        $this->defense = $defense;
    }
}