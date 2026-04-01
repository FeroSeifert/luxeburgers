<?php

//start de sessie
session_start();

// verwijder de sessie variabelen
session_unset();

//vernietig de sessie
session_destroy();

//
session_start();

//
session_regenerate_id(true);

//
header("Location: login.php");
exit();