// Array met de ID's van de harten
const heartIds = ["heart1", "heart2", "heart3", "heart4", "heart5", "heart6", "heart7", "heart8", "heart9", "heart10", "heart11", "heart12"];

// Een functie om de kleur te veranderen en de status om te keren
function changeColor(element) {
    
    let clickCount = 1;

    element.addEventListener("click", function() {
        
        clickCount++;

        if (clickCount % 2 === 0) {
            // Even click: Verandering van zwart naar rood
            element.style.color = "red";
        } else {
            // Oneven click: Verandering van rood naar zwart
            element.style.color = "black";
        }

    });
}

heartIds.forEach(idString => { // Loop door elk element van de array
    const heart = document.getElementById(idString); // voor elke id wordt html-element opgehaald
    changeColor(heart);
});

