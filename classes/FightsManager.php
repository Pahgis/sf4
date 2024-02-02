<?php

class FightsManager
{
    private $db;

    public function __construct()
    {
        require './config/db.php';
        $this->db = $connexion;
    }

    public function createMonster()
    {
        return new Monster();
    }

    public function fight($hero, $monster)
    {
        $trigger = false;
        while (($hero->getHealth() > 0) && $monster->getHealth() > 0) {
            if ($trigger) {
                $hit = $hero->hit();
                $monster->setHealth($monster->getHealth() - $hit);
                $trigger = false;
            } else {
                $hitMonster = $monster->hit();
                $hero->setHealth($hero->getHealth() - $hitMonster);
                $trigger = true;
            }
        }
        if ($hero->getHealth() <= 0) {
            echo "Le hero est mort<br>";
        }elseif ($monster->getHealth() <= 0) {
            echo "Le monstre est mort<br>";
        }
    }
}
