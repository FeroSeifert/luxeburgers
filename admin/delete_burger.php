<?php

session_start();
if (!isset($_SESSION["isLoggedIn"])) {
    header("Location: login.php");
    exit;
}

require_once("../includes/pdo.php");

$id = $_GET["id"];
//hij haalt het id op van de url, die informatie komt van de link die je aanklikt in admin.php.

$stmt = $pdo->prepare("DELETE FROM gerechten WHERE id = ?");
$stmt->execute([$id]);

header("Location: admin.php");
exit;