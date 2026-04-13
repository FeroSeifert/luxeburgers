<?php
session_start();
// Als de gebruiker niet is ingelogd, terugsturen naar loginpagina
if (!isset($_SESSION["isLoggedIn"])) {
    header("Location: login.php");
    exit;
}

require_once("../includes/pdo.php");

$id = $_GET["id"];

// Fetch burger
// ? Is een placeholder die wordt vervangen met het id van de burger die bewerkt wordt.
$stmt = $pdo->prepare("SELECT * FROM gerechten WHERE id = ?");
$stmt->execute([$id]);
$burger = $stmt->fetch();

if (!$burger) {
    die("Burger niet gevonden");
}

// slaat de waarden van de burger op in variabelen
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $naam = $_POST["naam"];
    $prijs = $_POST["prijs"];
    $allergenen = $_POST["allergenen"];

    // Update burger in database met de nieuwe waarden
    $update = $pdo->prepare("UPDATE gerechten SET naam=?, prijs=?, allergenen=? WHERE id=?");
    $update->execute([$naam, $prijs, $allergenen, $id]);

    header("Location: admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Admin — Burgers Editen</title>
    <link rel="stylesheet" href="../style.css">
</head>

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