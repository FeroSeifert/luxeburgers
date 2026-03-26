<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeBurgers</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="nav-left">
            <nav>
                <a href="web.php">Home</a>
                <a href="about.php">About</a>
                <a href="#" onclick="goMenu()">Menu</a>
                <a href="locations.php">Locations</a>
            </nav>
        </div>

        <div class="logo">LuxeBurgers</div>

        <div class="nav-right">
            <nav>
                <a href="#">Franchise</a>
                <a href="#">Jobs</a>
                <a href="#">Allergens</a>
            </nav>
        </div>
    </header>

    <div class="category-bar">
        <a href="burgers.php">Burgers</a>
        <a href="snacks.php">Snacks</a>
        <a href="drinks.php">Drinks</a>
        <a href="dessert.php">Dessert</a>
    </div>

    <section class="hero">
        <h1>Onze Snacks</h1>
        <p>Ambachtelijke premium snacks in een rustige, stijlvolle omgeving met veel ruimte en comfort.</p>
    </section>

    <section class="gallery-wrapper">
        <div class="right-grid">
            <div class="img-box"></div>
            <div class="img-box"></div>
            <div class="img-box"></div>
            <div class="img-box"></div>
            <div class="img-box"></div>
            <div class="img-box"></div>
            <div class="img-box"></div>
            <div class="img-box"></div>
            <div class="img-box"></div>
        </div>
    </section>

    <footer>
        © 2026 LuxeBurgers — Alle rechten voorbehouden
    </footer>

    <script>
        function goMenu() {
            document.body.classList.add("menu-page");
            window.scrollTo(0, 0);
        }
    </script>

</body>

</html>