<?php
include './config/autoload.php';
$bdd = new HeroesManager();
$heroId = $_GET["id"];
$hero = $bdd->getHero($heroId);
$fightManager = new FightsManager();
$monster = $fightManager->createMonster();
//$fightManager->fight($hero, $monster);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/figth.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="persoCard border" data-vie="<?= $hero->getHealth() ?>" data-attack="<?= $hero->getAttack() ?>" data-defense="<?= $hero->getDefense() ?>" data-name="<?= $hero->getName() ?>" data-class="<?= $hero->getClass() ?>">
                    <div class="nameHero"></div>
                    <div class="classe"></div>
                    <div class="healthHero"></div>
                    <div class="attaqueHero"></div>
                    <div class="defenseHero"></div>
                    <div class="critiqueHero"></div>
                    <div class="energieHero"></div>
                    <div class="timer"></div>
                </div>
                <div class="groupAttackHero">
                    <button class="attack btn" id="1">Attaque basique</button>
                    <button class="secondAttack btn btn-primary" id="2">Second</button>
                    <button class="thirdAttack btn btn-primary" id="3">Third</button>
                    <button class="finalAttack btn btn-primary" id="4">Final</button>
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-4">
                <div class="monsterCard border" data-monster="<?= $monster->getHealth() ?> " data-monsterAttack="<?= $monster->getAttack() ?>" data-monsterDefense="<?= $monster->getDefense() ?>">
                    <p class="nameMonster"> <?= $monster->getName() ?></p>
                    <p class="healthMonster">Points de vie : <?= $monster->getHealth() ?></p>
                    <div class="timerMonstre"></div>
                </div>
                <div class="dot"></div>
            </div>
        </div>

    </div>



    <script src="./assets/js/voleur.js" type="module"></script>
    <script src="./assets/js/fight.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>