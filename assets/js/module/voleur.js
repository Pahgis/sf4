export let heros = document.querySelector("[data-vie]");


export class Voleur
{
    constructor(name, attack, defense, health,classe){
        this.name = name;
        this.attack = attack;
        this.defense = defense;
        this.health = health;
        this.critique = 2;
        this.classe = classe
        this.energie = 100;
    }

    secondattack(energie){
        this.energie = this.energie - 60
         let degats  = this.attack * 3
          return degats
        
    }

    thirdattack(){
        this.energie = this.energie - 20
       let bleed = 3
       let degat = this.attack / 20
       let name = "bleed"
       let array = [3 , degat, "bleed "]
       return array     
    }

    lastattack()
    {
        if(this.energie >=50)
        {
            this.energie = 100
        }
        else
        {
            this.energie = this.energie + 50
        }
        this.critique = 7
       setTimeout(() => {
        this.critique = 2
       }, 10000);
    }


    
}

