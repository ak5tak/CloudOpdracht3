document.addEventListener("DOMContentLoaded", function () {
    const clientBox = document.getElementById('doos_klanten');
    const clientAmount = 32;
    

    for (let i = 0; i < clientAmount; i++) {
        fetch('https://randomuser.me/api/') 
            .then(res => {                  
                return res.json();          // Geef dan data terug in json
            })
            .then(data => {                 // json omzetten in JS
                
                const client = data.results[0]; // selecteert het eerste element van de array results
                const clientInfo = document.createElement('div');
                clientInfo.classList.add('klant'); // geef de div een klasse .klant in html
                clientInfo.innerHTML = `<ul>
                    <li><img src="${client.picture.large}" alt="randomUserAPI"></li>
                    <li>${client.name.title} ${client.name.first} ${client.name.last}</li>
                    <li>Land: ${client.location.country}</li>
                    </ul>`;

                clientBox.appendChild(clientInfo); // Voeg de div .klant toe in de doos
            })
            .catch(error => {   // als er iets fout gaat, krijg je een melding in de console
                console.error('Oeps, er is iets misgegaan. Stuur ons alstublieft een tweet @randomapi over het probleem. Dank je wel.'
                , error);
            });
    }
});


