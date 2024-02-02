<?php

class HeroesManager
{
    private $db;

    public function __construct()
    {
        require_once './config/db.php';
        $this->db = $connexion;
    }

    public function add($hero)
    {

        $preparedRequest = $this->db->prepare("INSERT INTO hero (name,health_points, class,attack,defense) VALUES (?,?,?,?,?)");
        $preparedRequest->execute([
            $hero->getName(),
            $hero->getHealth(),
            $hero->getClass(),
            $hero->getAttack(),
            $hero->getDefense(),
        ]);
    }

    public function getLastId()
    {
        return $this->db->lastInsertId();
    }

    public function uniqueName($name, $id)
    {
        $preparedRequest = $this->db->prepare("SELECT name FROM hero WHERE name=?");
        $preparedRequest->execute([
            $name
        ]);
        $verifs = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);
        $sameName = false;
        foreach ($verifs as $verif) {
            if ($verif["name"] === $name) {
                $sameName = true;
            }
        }
        if ($sameName === false) {
            switch ($id) {
                case '1':
                    $hero = new Hero($name);
                    $this->add($hero);
                    break;
                case '2':
                    $hero = new Paladin($name);
                    $this->add($hero);
                    break;
                case '3':
                    $hero = new Voleur($name);
                    $this->add($hero);
                    break;
                case '4':
                    $hero = new Pretre($name);
                    $this->add($hero);
                    break;
                case '5':
                    $hero = new Mage($name);
                    $this->add($hero);
                    break;
            }
        }
    }

    public function getHeroVivants()
    {
        $preparedRequest = $this->db->prepare("SELECT * FROM hero WHERE health_points > 0");
        $preparedRequest->execute();
        $heros = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);
        return $heros;
    }

    public function getHero($id)
    {
        $preparedRequest = $this->db->prepare("SELECT * FROM hero WHERE id= ?");
        $preparedRequest->execute([
            $id
        ]);
        $heros = $preparedRequest->fetch(PDO::FETCH_ASSOC);

        switch ($heros["class"]) {
            case "voleur":
                $hero = new Voleur($heros["name"]);
                break;
            case "mage":
                $hero = new Mage($heros["name"]);
                break;
            case "paladin":
                $hero = new Paladin($heros["name"]);
                break;
            case "pretre":
                $hero = new Pretre($heros["name"]);
                break;
            case "hero":
                $hero = new Hero($heros["name"]);
                break;
        }
        return $hero;
    }
}
