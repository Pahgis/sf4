<?php 


class Voleur extends Hero {
    private $name;
    private $id;
    private $health = 80;
    private $attack = 80;
    private $defense = 50;
    private $class = "voleur";
    private $image = "./image/classe/rogue-removebg-preview.png";
    public function __construct($name)
    {
        $hero = new Hero($name);
        $this->health = $this->health + $hero->gethealth();
        $this->attack = $this->attack + $hero->getAttack();
        $this->defense = $this->defense + $hero->getDefense();
        $this->name = $hero->getName();
    }

    public function getImage()
    {
        return $this->image;
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

    public function getName(){
        return $this->name;
    }
    public function setHealth($health)
    {
        $this->health = $health;
    }
    public function hit(){
        $degat = $this->attack / rand(1,10);
        echo $this->name . "attaque l'ennemi pour " . $degat . "points de dégats ! <br>";
        return $degat;
    }

    
}