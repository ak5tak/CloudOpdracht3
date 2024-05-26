<!DOCTYPE html>
<html lang="nl-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hoofdpagina</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <section class="uppernav">
                <a href="#"><img class="GSLogo" src="assets/GSLogo.png" alt="GSLogo" width="100px"></a>
                <form action="#"><input type="search" name="searchTerm" id="searchInput" placeholder="Zoek...">
                <button class="search_btn" type="submit"><img id="searchGlass" src="assets/1200px-Magnifying_glass_icon.svg.png" alt="glass_icon" width="20px" height="15px"></button>
                </form>
                <ul>
                    <li><a href="#about">about|</a></li>
                    <li><a href="contact.html">contact|</a></li>
                    <li><a href="klanten.html">klanten|</a></li>
                    <li><a href="shop.html"><img class="winkelkar" src="assets/winkelkar.png" alt="winkelkar" width="15px"></a></li>
                </ul>
            </section>
            <section class="lowernav">
                <article><a href="shop.html">winkel</a></article>      
                <article><a href="shop.html#schijven">schijven</a></article>
                <article><a href="shop.html#dip">dip handles</a></article> 
                <article><a href="shop.html#mobiliteit">mobiliteit</a></article>
            </section>
        </nav>
        <section class="background_gym">
            <h1>GymShop</h1>
        </section>
    </header>
    <main>
        <?php
// Verbinding maken met de MySQL database
$servername = "db";         // Naam van de service in docker-compose.yml
$port = "3306";             // Poort van de MySQL database
$username = "root";         // MySQL gebruikersnaam
$password = "root";     // MySQL wachtwoord
$dbname = "backend";        // Database naam

// Verbinding maken met de database
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Loggen naar de console
echo "Verbinding met de database succesvol gemaakt!<br>";

/// Tabel aanmaken als deze niet bestaat
$createTableSql = "CREATE TABLE IF NOT EXISTS test (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message VARCHAR(255) NOT NULL
)";

if ($conn->query($createTableSql) === TRUE) {
    echo "Table 'test' successfully created or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Voorbeeld invoegen van gegevens
$sql = "INSERT INTO test (message) VALUES ('Hello from PHP script')";

if ($conn->query($sql) === TRUE) {
    echo "Data successfully inserted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Verbinding sluiten
$conn->close();
?>

        <h2 class="populaire_titel">populaire producten</h2>
        <section class="populaire">
            <article>
                <a href="product_6.html">
                    <img src="assets/strengthshop_multi-pull-up_1038x1038.webp" alt="optrekstang" width="500px" height="300px">
                    <ul>
                        <li>multi-grip pull-up bar <span class="yellow">&#9733; &#9733; &#9733; &#9733; &#9733;</span></li>
                        <li>€105,00</li>
                    </ul>
                </a>
            </article>
            <article>
                <a href="product_7.html">
                        <img src="assets/strengthshop_pull-up_1038x1038.webp" alt="optrekstang" width="500px" height="300px">
                        <ul>
                            <li>standaard pull-up bar <span class="yellow">&#9733; &#9733; &#9733; &#9733;</span> &#9733;</li>
                            <li>€90,00</li>
                        </ul>
                </a>
            </article>
            <article>
                <a href="product_8.html">
                        <img src="assets/strengthshop_diphandles_996x996.webp" alt="optrekstang" width="500px" height="300px">
                        <ul>
                            <li>dip handles <span class="yellow">&#9733; &#9733; &#9733; &#9733; &#9733;</span></li>
                            <li>€150,00</li>
                        </ul>
                </a>
            </article>
        </section>
        <section id="about">
            <h2>about gymshop</h2>
            <article>
            <img src="assets/zelf_foto.png" alt="mezelf" width="20px" height="15px">
            <p>GymShop is een winkel en online winkel die zich toelegt op de verkoop van fitnessgerelateerde producten en uitrusting. Hier vind je een breed scala aan producten die zijn ontworpen om te voldoen aan de behoeften van mensen die aan hun fysieke fitheid werken.</p></article>
        </section>
        </main>
        <footer>
            <article class="links">
            <ul>
                <li><h3>hoofdkantoor</h3></li>
                <li>italiëlei 10</li>
                <li>2000 antwerpen</li>
            </ul>
            <ul>
                <li><h3>main menu</h3></li>
                <li><a href="#top">Terug naar boven</a></li>
                <li><a href="contact.html">contact</a></li>
            </ul>
            <ul>
                <li><h3>company</h3></li>
                <li><a href="shop.html">shop</a></li>
                <li><a href="contact.html#keuzelijst">vacatures</a></li>
            </ul>
            <ul class="volgen">
                <li><h3>volgen</h3></li>
                <li><a href="https://www.facebook.com/" target="_blank"><img src="assets/iconfacebook.png" alt="facebook" width="25px" height="25px"></a></li>
                <li><a href="https://www.instagram.com/" target="_blank"><img src="assets/iconinstagram.png" alt="instagram" width="25px" height="25px"></a></li>
                <li><a href="https://www.instagram.com/" target="_blank"><img src="assets/icontwitter.png" alt="twitter" width="25px" height="25px"></a></li>
            </ul>
            <ul>
                <li><h3>nieuwsbrief</h3></li>
                <li><p>Abonnneer op onze nieuwsbrief met Gymshop-nieuws.</p></li>
                <li>
                    <form id="formfooter" action="#">
                        <input type="text" name="emailadress" placeholder="Typ jou e-mail" id="footerMail">
                        <button class="Abonneer" type="submit">Abonneer</button>
                    </form>
                </li>
            </ul>
            </article>
            <article class="copyright">
                <p>&#169; GymShop</p>
            </article>
        </footer>
</body>
</html>
