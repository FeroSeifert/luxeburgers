<?php

// database gegevens
$host = 'db';
$db = 'luxeburgers';
$user = 'user';
$pass = 'password';
$charset = 'utf8mb4';

// pdo opties
$opties = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

// dsn
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    // verbinding maken
    $pdo = new PDO($dsn, $user, $pass, $opties);
} catch (PDOException $e) {
    // foutmelding bij verbinding
    echo "de verbinding is mislukt";
    die("Verbinding mislukt: ");
}
