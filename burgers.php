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

    <?php
    require_once("includes/pdo.php");
    /**
     * @var PDO $connect
     */
    ?>

    <?php
    $query = "SELECT * FROM gerechten";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $burgers = $stmt->fetchAll();
    print_r($burgers);
    ?>

    <section class="hero">
        <h1>Onze Burgers</h1>
        <p>Ambachtelijke premium burgers in een rustige, stijlvolle omgeving met veel ruimte en comfort.</p>
    </section>

    <section class="burger-grid">
        <?php foreach ($burgers as $burger): ?>
            <div class="burger-card">
                <h3><?= htmlspecialchars($burger['naam']) ?></h3>
                <p class="price">€<?= number_format($burger['prijs'], 2, ',', '.') ?></p>
                <p class="allergens">Allergenen: <?= htmlspecialchars($burger['allergenen']) ?></p>
            </div>
        <?php endforeach; ?>
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