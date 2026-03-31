<?php
session_start();
if (isset($_POST["submit"])) {
    $_SESSION["isLoggedIn"] = true;
}
?>