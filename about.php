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
    <h1>About Us</h1>
    <p>Welcome to LuxeBurgers! We are a team of passionate food enthusiasts dedicated to creating the finest burgers you could ever eat. We also focus on having low prices for our customers. So come visit us and taste the difference!</p>
  </section>

  <section class="hero">
    <h1>Follow Us</h1>
    <div class="social-icons">
      <a href="#"><img src="img/facebook.png" alt="Facebook"></a>
      <a href="#"><img src="img/twitter.png" alt="Twitter"></a>
      <a href="#"><img src="img/instagram.png" alt="Instagram"></a>
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