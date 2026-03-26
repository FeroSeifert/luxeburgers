<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luxe Burgers</title>

  <style>
    :root {
      --bg: #fdc415;
      --text: #000000;
      --dark: #111111;
      --font: "Rubik", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
    }

    body {
      margin: 0;
      background: var(--bg);
      color: var(--text);
      font-family: var(--font);
    }

    /* TOP NAV LIKE EXAMPLE */
    header {
      background: var(--bg);
      padding: 1.5rem 3rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 10;
    }

    .nav-left,
    .nav-right {
      display: flex;
      gap: 2rem;
      align-items: center;
    }

    nav a {
      text-decoration: none;
      color: #ffffff;
      font-weight: 600;
      font-size: 1rem;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 800;
      color: #ffffff;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    /* HERO */
    .hero {
      padding: 4rem 3rem;
      max-width: 700px;
    }

    .hero h1 {
      font-size: 3rem;
      margin: 0 0 1rem 0;
    }

    .cta-btn {
      background: var(--dark);
      color: #fff;
      padding: 1rem 2rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 1.5rem;
      font-size: 1rem;
    }

    /* WIREFRAME LAYOUT */
    .gallery-wrapper {
      display: flex;
      gap: 2rem;
      padding: 3rem;
    }

    .left-column {
      display: flex;
      flex-direction: column;
      gap: 2rem;
      flex: 1;
    }

    .left-column .img-box {
      background: #fff;
      height: 200px;
      border-radius: 8px;
    }

    .right-grid {
      flex: 2;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
    }

    .right-grid .img-box {
      background: #fff;
      height: 150px;
      border-radius: 8px;
    }

    footer {
      text-align: center;
      padding: 3rem;
      opacity: 0.7;
    }

    /* MENU PAGE CATEGORY BAR (HIDDEN BY DEFAULT) */
    .category-bar {
      display: none;
      justify-content: center;
      gap: 2rem;
      padding: 1.5rem;
      background: var(--dark);
    }

    .category-bar a {
      color: #ffffff;
      text-decoration: none;
      font-weight: 500;
    }

    /* SHOW CATEGORY BAR ONLY ON MENU PAGE */
    body.menu-page .category-bar {
      display: flex;
    }
  </style>
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

    <div class="logo">Luxe Burgers</div>

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
    <h1>Luxe Burgers, Minimalistische Sfeer</h1>
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
    © 2026 Luxe Burgers — Alle rechten voorbehouden
  </footer>

  <script>
    function goMenu() {
      document.body.classList.add("menu-page");
      window.scrollTo(0, 0);
    }
  </script>

</body>
</html>