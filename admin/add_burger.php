<?php
session_start();
if (!isset($_SESSION["isLoggedIn"])) {
    header("Location: login.php");
    exit;
}

require_once("../includes/pdo.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $naam = $_POST["naam"];
    $prijs = $_POST["prijs"];
    $allergenen = $_POST["allergenen"];

    $query = "INSERT INTO gerechten (naam, prijs, allergenen) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$naam, $prijs, $allergenen]);

    header("Location: admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<body>

    <h2>Nieuwe burger toevoegen</h2>

    <form method="POST">
        Naam: <input type="text" name="naam" required><br><br>
        Prijs: <input type="number" step="0.01" name="prijs" required><br><br>
        Allergenen: <input type="text" name="allergenen"><br><br>

        <button type="submit">Opslaan</button>
    </form>

</body>

</html>