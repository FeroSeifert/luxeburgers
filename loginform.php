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
        <a href="web.php">Home</a>
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
        <a href="login.php">Login</a>
      </nav>
    </div>
  </header>

  <div class="category-bar">
    <a href="burgers.php">Burgers</a>
    <a href="snacks.php">Snacks</a>
    <a href="drinks.php">Drinks</a>
    <a href="dessert.php">Dessert</a>
  </div>

  <div class="login-container">
    <h2>Login</h2>

    <form action="login.php" method="POST" class="login-form">
      <label for="username">Username</label>
      <input type="username" id="username" name="username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Inloggen</button>
    </form>
  </div>


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