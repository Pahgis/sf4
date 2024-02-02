// IMPORT CLASS

import { Voleur } from "./module/voleur.js"

// SETUP VARIABLE

let attaque = document.querySelector(".attack")
let hero = document.querySelector("[data-vie]")
let timer = document.querySelector(".timer")
let timerMonstre = document.querySelector(".timerMonstre")
let timeHitMonster = 2000;
let dots = document.querySelector(".dot")

// HTML HERO CARD INFO

let nameHero = document.querySelector(".nameHero")
let classe = document.querySelector(".classe")
let hero_health = document.querySelector(".healthHero")
let attaqueHero = document.querySelector(".attaqueHero")
let defenseHero = document.querySelector(".defenseHero")
let critiqueHero = document.querySelector(".critiqueHero")
let energieHero = document.querySelector(".energieHero")

// HTML MONSTER INFO

let monster = document.querySelector("[data-monster]")
let health_monster = document.querySelector(".healthMonster")

let trigger = true;

// ATTAQUE ALL

window.addEventListener("click", function (e) {
    attaque.style.display = "none"
    switch (e.target.id) {
        case "1":
            heroHit(perso.attack, perso.critique)
            break;
        case "2":
        heroHit(perso.secondattack(perso.energie), perso.critique)
            break;
        case "3":
            let data = perso.thirdattack()
            dot(data[0], data[1], data[2])
            break;
        case "4":
           perso.lastattack()
            break;
       
    }
    if (trigger) {
        trigger = false
        setTimeout(() => {
            attaque.style.display = "block"
            trigger = true;
        }, 3000);
    }

 

})


let perso = createHero(hero.dataset.vie, hero.dataset.defense, hero.dataset.attack, hero.dataset.name, hero.dataset.class)
console.log(perso)
affichageHero();
function createHero(health, defense, attack, name, classe) {
    switch (classe) {
        case "voleur":
            return new Voleur(name, attack, defense, health, classe)

            break;

    }
}

function affichageHero() {
    nameHero.innerHTML = " " + perso.name
    hero_health.innerHTML = "PV : " + perso.health
    classe.innerHTML = "CLS : " + perso.classe
    attaqueHero.innerHTML = "ATK : " + perso.attack
    defenseHero.innerHTML = "DFS : " + perso.defense
    critiqueHero.innerHTML = "CS : " + perso.critique * 10 + "%"
    energieHero.innerHTML = "ENG : " + perso.energie
}

function heroHit(degat) {
    if (getRndInteger(0, 20) >= 20 - perso.critique) {
        
        let degatsHero = degat *2
        healthMonster(degatsHero, monster.dataset.monster)

    }
    else {
        console.log(perso.critique)
        let degats = degat 
        healthMonster(degats, monster.dataset.monster)
    }
}

function monsterHit() {
    if (getRndInteger(0, 20) == 20) {
        let degatsMonster = monster.dataset.monsterattack * 2
        return degatsMonster

    }
    else {
        let degatsMonster = monster.dataset.monsterattack
        return degatsMonster
    }
    return degatsMonster
}

let j = 2
let heroNextAttaque = 3;
setInterval(() => {
    if (j < 0) {
        j = 2
    }
    if (heroNextAttaque < 0) { heroNextAttaque = 3 }
    timerMonstre.innerHTML = "Temps avant next ATK : " + j--
    timer.innerHTML = "Next Atk" + heroNextAttaque--
}, 1000);
const test = setInterval(() => {


    let degatsMonster = monsterHit()
    heroHealth(degatsMonster, hero.dataset.vie)
    console.log(degatsMonster)
}, timeHitMonster);

function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}


function healthMonster(degats, health) {

    health = health - degats;
    health_monster.textContent = "PV : " + health
    monster.dataset.monster = health;

}

function heroHealth(degats, health) {
    health = health - degats;
    hero_health.textContent = "PV : " + health
    hero.dataset.vie = health;
}


function dot(x,degat){
    
       const eee =  setInterval(() => {
        if(x > 0)
        {
            dots.innerHTML = `
            <img src="./assets/icon/dot/blood.png" alt="">
            `
            heroHit(degat)
            x--  
        }
        else
    {
        dots.innerHTML = ""
        clearInterval(eee)
    }
        }, 1000);

}



function buff(temps, stats, aug)
{

   const myInterval =  setInterval(() => {
        if(temps > 0 )
        {

            stats = aug
            temps--
        }
        else{
            perso.stats = perso.stats - aug
            clearInterval(myInterval)
        }
    }, 1000);
}




setInterval(() => {
    affichageHero()
    perso.critique
}, 1000);



