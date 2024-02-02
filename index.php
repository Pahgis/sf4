<?php
include './config/autoload.php';
$bdd = new HeroesManager();
if (!empty($_POST["name"])) {

    $bdd->uniqueName($_POST["name"], $_POST["classSelection"]);
    $lastid = $bdd->getLastId();
    header("Location: ./lobby.php?id=$lastid");
}

$heros = $bdd->getHeroVivants();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <h1>Test</h1>
            <div class="col-12 py-5">
                <div class="d-flex flex-row justify-content-center gap-4">
                    <div class="border cardClass hero" id="1"></div>
                    <div class=" cardClass paladin d-flex align-items-end justify-content-center " id="2">
                        <div class="fondCard col-10 mb-4 text-center">
                            <p>Paladin</p>
                            <i class="fa-solid fa-heart text-danger"><span class="text-white"> 250</span></i>
                            <div>Judgement :  3*degats</div>
                            <div>Armor up : buff armor *3</div>
                            <div>Heal : 30% pv</div>
                        </div>
                    </div>
                    <div class="border cardClass voleur d-flex align-items-end justify-content-center" id="3">
                        <div class="fondCard col-10 mb-4 text-center">
                            <p>Voleur</p>
                            <i class="fa-solid fa-heart text-danger"><span class="text-white"> 180</span></i>
                        </div>
                    </div>
                    <div class="border cardClass pretre d-flex align-items-end justify-content-center" id="4">
                        <div class="fondCard col-10 mb-4 text-center">
                            <p>Prêtre</p>
                            <i class="fa-solid fa-heart text-danger"><span class="text-white"> 200</span></i>
                        </div>
                    </div>
                    <div class="border cardClass mage d-flex align-items-end justify-content-center" id="5">
                        <div class="fondCard col-10 mb-4 text-center">
                            <p>Mage</p>
                            <i class="fa-solid fa-heart text-danger"><span class="text-white"> 170</span></i>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-3"></div>
                    <div class="col-6 text-center">
                        <form action="" method="post">
                            <input type="hidden" class="classSelection" name="classSelection" value="">
                            <input type="text" id="" placeholder="pseudo" class="form-control" name="name">
                            <button class="btn btnLetgo mt-4" type="submit">Let's go</button>
                        </form>
                    </div>
                </div>
                <h1 class="py-5 text-center"> Hero disponible :</h1>
                <div class="heroVivant d-flex flex-wrap justify-content-center gap-4 overflow-auto">

                    <?php
                    foreach ($heros as $hero) { ?>
                        <a href="./lobby.php?id=<?= $hero["id"] ?>">
                            <div class="cardClass  btn <?=$hero["class"] ?>  btnchoice id='<?= $hero["id"] ?> d-flex align-items-end justify-content-center'">
                            <div class="fondCard col-10 mb-4 text-center">
                                <p><?= $hero["name"] ?> : <?= $hero["class"] ?></p>
                                <i class="fa-solid fa-heart text-danger"><span class="text-white"> <?= $hero["health_points"] ?> </span></i> 
                            </div>
                                
                            </div>
                        </a>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>








    <script src="./assets/js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>