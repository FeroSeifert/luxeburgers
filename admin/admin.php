<?php
session_start();
if (!isset($_SESSION["isLoggedIn"])) {
    header("Location: login.php");
    exit;
}

require_once("../includes/pdo.php");

// Fetch all burgers
$query = "SELECT * FROM gerechten";
$stmt = $pdo->prepare($query);
$stmt->execute();
$burgers = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Admin — Burgers beheren</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <h1>Admin Dashboard</h1>
    <a href="add_burger.php" class="btn">➕ Nieuwe burger toevoegen</a>

    <table border="1" cellpadding="10" style="margin-top:20px;">
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Prijs</th>
            <th>Allergenen</th>
            <th>Acties</th>
        </tr>

        <?php foreach ($burgers as $burger): ?>
            <tr>
                <td><?= $burger['id'] ?></td>
                <td><?= $burger['naam'] ?></td>
                <td>€<?= number_format($burger['prijs'], 2, ',', '.') ?></td>
                <td><?= $burger['allergenen'] ?: "Geen" ?></td>
                <td>
                    <a href="edit_burger.php?id=<?= $burger['id'] ?>">✏️ Bewerken</a> |
                    <a href="delete_burger.php?id=<?= $burger['id'] ?>" onclick="return confirm('Weet je het zeker?')">🗑️
                        Verwijderen</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="logout.php" style="float:right; margin-bottom:20px;">
        Logout
    </a>

</body>

</html>