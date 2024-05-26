const artikelLijst = document.getElementById("artikelLijst");
const itemButtons = document.getElementsByClassName('item');

for (let i = 0; i < itemButtons.length; i++) {
    let button = itemButtons[i];
    button.addEventListener('click', function() {
        const productNameElements = document.getElementsByClassName('artikelNaam'); 
        const productName = productNameElements[i].textContent;

        // Controleer of het item al in de lijst zit
        const itemsInCart = artikelLijst.innerHTML;

        if (itemsInCart.includes(productName)) {
            // Als het item al in de lijst zit, doe niets
            return;
        }

        // Voeg het item toe aan de lijst als het nog niet aanwezig is
        artikelLijst.innerHTML += `<li>${productName}</li><input type="number">`;
    });
}

const kruisje = document.getElementById("cross");

// Winkelmandje wordt leeggemaakt
kruisje.addEventListener("click", function() {
    artikelLijst.innerHTML = ""; // Leegmaken van de lijst met geselecteerde items
    
});




const price = document.getElementsByClassName('artikelPrijs');
const berekendPrijs = document.getElementById("berekend_totaal");