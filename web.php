<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LuxeBurgers</title>

  <link rel="stylesheet" href="style.css">

</head>

<body>

  <!-- TOP NAV LIKE YOUR EXAMPLE -->
  <header>
    <div class="nav-left">
      <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#" onclick="goMenu()">Menu</a>
        <a href="#">Locations</a>
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

  <!-- CATEGORY BAR (ONLY VISIBLE ON MENU PAGE) -->
  <div class="category-bar">
    <a href="#">Burgers</a>
    <a href="#">Snacks</a>
    <a href="#">Drinks</a>
    <a href="#">Dessert</a>
  </div>

  <section class="hero">
    <h1>LuxeBurgers, Minimalistische Sfeer</h1>
    <p>Ambachtelijke premium burgers in een rustige, stijlvolle omgeving met veel ruimte en comfort.</p>
    <button class="cta-btn">Reserveer nu</button>
  </section>

  <section class="gallery-wrapper">
    <div class="left-column">
      <div class="img-box"></div>
      <div class="img-box"></div>
      <div class="img-box"></div>
    </div>

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