<?php

session_start();
if (!isset($_SESSION["isLoggedIn"])) {
    header("Location: login.php");
    exit;
}

require_once("../includes/pdo.php");

$id = $_GET["id"];

$stmt = $pdo->prepare("DELETE FROM gerechten WHERE id = ?");
$stmt->execute([$id]);

header("Location: admin.php");
exit;