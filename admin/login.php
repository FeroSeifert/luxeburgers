<?php
session_start();
$username = "admin";
$password = "admin";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin") {
        $_SESSION["isLoggedIn"] = true;
        header("Location: admin.php");
    } else {
        echo "incorrect login";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <div class="login-container">
        <h2>Login</h2>

        <form action="login.php" method="POST" class="login-form">
            <label for="username">Username</label>
            <input type="username" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="submit">Login</button>
        </form>
    </div>

    <a style="margin-left: 50px;" href="../index.php">Back to home</a>
</body>

</html>