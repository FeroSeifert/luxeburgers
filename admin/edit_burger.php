<?php
session_start();
if (!isset($_SESSION["isLoggedIn"])) {
    header("Location: login.php");
    exit;
}

require_once("../includes/pdo.php");

$id = $_GET["id"];

// Fetch burger
$stmt = $pdo->prepare("SELECT * FROM gerechten WHERE id = ?");
$stmt->execute([$id]);
$burger = $stmt->fetch();

if (!$burger) {
    die("Burger niet gevonden");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $naam = $_POST["naam"];
    $prijs = $_POST["prijs"];
    $allergenen = $_POST["allergenen"];

    $update = $pdo->prepare("UPDATE gerechten SET naam=?, prijs=?, allergenen=? WHERE id=?");
    $update->execute([$naam, $prijs, $allergenen, $id]);

    header("Location: admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<body>

    <h2>Burger bewerken</h2>

    <form method="POST">
        Naam: <input type="text" name="naam" value="<?= $burger['naam'] ?>" required><br><br>
        Prijs: <input type="number" step="0.01" name="prijs" value="<?= $burger['prijs'] ?>" required><br><br>
        Allergenen: <input type="text" name="allergenen" value="<?= $burger['allergenen'] ?>"><br><br>

        <button type="submit">Opslaan</button>
    </form>

</body>

</html>