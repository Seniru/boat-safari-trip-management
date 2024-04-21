<?php

    $servername = _ENV["DB_SERVER_NAME"];
    $username = _ENV["DB_USER_NAME"];
    $password = _ENV["DB_PASSWORD"];
    $databasename = _ENV["DB_name"];

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

?>