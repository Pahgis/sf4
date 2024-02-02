<?php 


class Mage extends Hero {
    private $name;
    private $id;
    private $health = 70;
    private $attack = 90;
    private $defense = 40;
    private $class = "mage";
    private $image = "./image/classe/mage.jpg";
    public function __construct($name)
    {
        $hero = new Hero($name);
        $this->health = $this->health + $hero->gethealth();
        $this->attack = $this->attack + $hero->getAttack();
        $this->defense = $this->defense + $hero->getDefense();
        $this->name = $hero->getName();
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getDefense()
    {
        return $this->defense;
    }
    public function getName(){
        return $this->name;
    }
   
    public function setHealth($health)
    {
        $this->health = $health;
    }
    

    public function hit(){
        $degat = $this->attack / 10;
        echo $this->name . "attaque l'ennemi pour " . $degat . "points de dégats ! ";
        return $degat;
    }
}