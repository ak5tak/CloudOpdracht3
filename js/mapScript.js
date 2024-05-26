let map = L.map('GSMap').setView([51.22605744212934, 4.414618404060773], 17);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 25,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


let APicon = L.icon({
    iconUrl: './assets/GSLogo.png',

    iconSize:     [40, 25], 
    iconAnchor:   [10, 5], 
});

L.marker([51.22605744212934, 4.414618404060773], {icon: APicon}).addTo(map);