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
      <nav class="spacing">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="#" onclick="goMenu()">Menu</a>
        <a href="locations.php">Locations</a>
      </nav>
    </div>

    <div class="logo">LuxeBurgers</div>

    <div class="nav-right">
      <nav class="spacing">
        <a href="#">Franchise</a>
        <a href="#">Jobs</a>
        <a href="loginform.php">Login</a>
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
    <h1>Welcome to LuxeBurgers</h1>
    <p>The most crazy delicious looking and tasting burger you will have ever eaten!</p>
    <a href="burgers.php" class="cta-btn">Order Now</a>
  </section>

  <div>
    <div class="img-box"></div>
  </div>

  <div class="adminlogin">
    <nav>
      <a href="admin/login.php">Admin Login</a>
    </nav>
  </div>

  <footer>
    © 2026 LuxeBurgers - All Rights Reserved
  </footer>

  <script>
    function goMenu() {
      document.body.classList.add("menu-page");
      window.scrollTo(0, 0);
    }
  </script>

</body>

</html>