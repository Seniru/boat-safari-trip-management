<?php

    session_start();
    
    unset($_SESSION["name"]);
    unset($_SESSION["id"]);
    unset($_SESSION["role"]);

    $username = NULL;
    $userid = NULL;
    $role = NULL;
    $loggedin = FALSE;

    session_destroy();
    header("Location: homepage.php");
?>