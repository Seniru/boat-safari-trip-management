<?php

    $servername     = "localhost";
    $username       = "root";
    $password       = "";
    $databasename   = "db";

    $conn = new mysqli($servername, $username, $password, $databasename);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

?>