<?php

    require("../db/config.php");

    $username = NULL;
    $userid = NULL;
    $loggedin = FALSE;
    $role = NULL;
    
    session_start();

    if (isset($_SESSION["id"])) {
        $username = $_SESSION["name"];
        $userid = $_SESSION["id"];
        $role = $_SESSION["role"];
        $loggedin = TRUE;
    }

    if (isset($restrict_page)) {
        if ($role != $restrict_page) {
            header("Location: homepage.php");
        }
    }

    function login($username, $password) {
        
        global $conn;

        $account_strings = array(
            "user" => "SELECT * FROM User WHERE FirstName='$username'",   
            "support_agent" => "SELECT * FROM CustomerSupportAgent WHERE Name='$username';",
            "trip_provider" => "SELECT * FROM TripProvider WHERE Name='$username';",
            "system_admin" => "SELECT * FROM SystemAdmin WHERE Name='$username';"
        );

        foreach ($account_strings as $account_type => $sql) {
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $account = $result->fetch_assoc();
                if ($account["Password"] == $password) {
                    $role = $account_type;
                    $username = $role == "user" ? $account["FirstName"] : $account["Name"];
                    $userid = 
                        $role == "user" ? $account["UserID"] :
                        ($role == "system_admin" ? $account["AdminID"] : $account["StaffID"]);
                    $loggedin = TRUE;

                    // set session variables
                    session_start();
                    $_SESSION["name"] = $username;
                    $_SESSION["id"] = $userid;
                    $_SESSION["role"] = $role;

                    switch ($role) {
                        case "user":
                            header("Location: user-dashboard.php");
                            break;
                        case "support_agent":
                            header("Location: support-agent-dashboard.php");
                            break;
                        case "trip_provider":
                            header("Location: trip-provider-dashboard.php");
                            break;
                        case "system_admin":
                            header("Location: admin-dashboard.php");
                            break;

                    }

                } else {
                    echo "<script>alert('Wrong password!');</script>";
                }
                return;
            }
        }

        echo "<script>alert('Account not found!')</script>";
    }

?> 