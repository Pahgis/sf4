let classSelection = document.querySelector(".classSelection")
let classCard = document.querySelectorAll(".cardClass")




    // SELECTION CLASS

        window.addEventListener("click", function(e){
            switch (e.target.id) {
                case "1":
                    classCard[0].classList.add("zoom")
                    classCard[1].classList.remove("zoom")
                    classCard[2].classList.remove("zoom")
                    classCard[3].classList.remove("zoom")
                    classCard[4].classList.remove("zoom")
                    classSelection.value = e.target.id
                    break;
                 case "2":
                    classCard[0].classList.remove("zoom")
                    classCard[1].classList.add("zoom")
                    classCard[2].classList.remove("zoom")
                    classCard[3].classList.remove("zoom")
                    classCard[4].classList.remove("zoom")
                    classSelection.value = e.target.id
                    break;
                 case "3":
                    classCard[0].classList.remove("zoom")
                    classCard[1].classList.remove("zoom")
                    classCard[2].classList.add("zoom")
                    classCard[3].classList.remove("zoom")
                    classCard[4].classList.remove("zoom")
                    classSelection.value = e.target.id
                    break;
                 case "4":
                    classCard[0].classList.remove("zoom")
                    classCard[1].classList.remove("zoom")
                    classCard[2].classList.remove("zoom")
                    classCard[3].classList.add("zoom")
                    classCard[4].classList.remove("zoom")
                    classSelection.value = e.target.id
                    break;
                 case "5":
                    classCard[0].classList.remove("zoom")
                    classCard[1].classList.remove("zoom")
                    classCard[2].classList.remove("zoom")
                    classCard[3].classList.remove("zoom")
                    classCard[4].classList.add("zoom")
                    classSelection.value = e.target.id
                    break;
            }
        })
       
