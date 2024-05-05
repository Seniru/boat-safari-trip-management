<?php
    $restrict_page = "system_admin";
    
    require("auth.php");
    
    $query_params = NULL;
    parse_str($_SERVER["QUERY_STRING"], $query_params);
    
    $type = $query_params["type"];
    $searchname = $query_params["name"];

    $clean_names = array(
        "User" => "User",
        "TripProvider" => "Trip Provider",
        "CustomerSupportAgent" => "Support Agent"
    );

    if ($type == "") {
        $type = "all";
        $searchname = "";
    }

    $table = NULL;
    if ($type == "all") {
        $table = [ "User", "CustomerSupportAgent", "TripProvider" ];
    } else {
        switch ($type) {
            case "user":
                $table = "User";
                break;
                case "support-agent":
                $table = "CustomerSupportAgent";
                break;
                case "trip-provider":
                $table = "TripProvider";
                break;
            }
        }

    function print_account_details($table, $searchname) {

        global $conn, $clean_names;

        $query = "SELECT * FROM $table";
        if (!(is_null($searchname) || $searchname == "")) {    
            $query .= " WHERE " . ($table == "User" ? "FirstName" : "Name") . " LIKE '%$searchname%'";
        }

        $res = $conn->query($query);
        while ($row = $res->fetch_assoc()) {
            $pages = array(
                "User" => "user-profile.php",
                "TripProvider" => "trip-provider-profile.php",
                "CustomerSupportAgent" => "support-agent-profile.php"
            );
            $linkname = "{$pages["$table"]}?id=" . ($row["UserID"] ?? $row["StaffID"]);
            
            echo "
                <div class='container'>
                        <div class='user-details'>" .
                            ($table == "User" ? $row["FirstName"] : $row["Name"]) . "<br>
                            <img src='./images/user-solid.svg' class='profile-image'><br>
                            {$clean_names[$table]}
                        </div>
                        <div class='profile-link'>
                            <a href='$linkname'>View profile</a>
                        </div>
                    </div>
                ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/favicon.ico" type="image/ico">
        <!--google fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<!--component styles-->
		<link rel="stylesheet" href="../styles/components.css">
		<!--font awesomem-->
		<script src="https://kit.fontawesome.com/36fdbb8e6c.js" crossorigin="anonymous"></script>
        <title>View accounts</title>
        <style>

            #main-container {
                margin: 10px 10% 10px 10%;
                width: 80%;
            }

            #filter-options {
                position: relative;
                text-align: right;
                padding: 8px;
            }

            #filter-options > input[type=search] {
                width: 240px;
            }

            #account-view {
                column-count: 2;
                width: 100%;
                column-gap: 5px;
                padding-top: 10px;
            }

            #account-view > .container {
                width: 90%;
                display: inline-block;
                margin: 5px;
                column-count: 2;
            }

            .user-details {
                display: inline-block;
                width: 100%;
            }

            .profile-link {
                position: relative;
                top: 48%;
            }

            .profile-link > a {
                text-decoration: none;
            }

            .profile-image {
                margin: 10px;
            }
           

        </style>
    </head>
    <body>
        
        <?php require("./views/header.php") ?>
        
        <div id="main-container">
            <form id="filter-options" method="GET" action=""">
                <input type="search" name="name" value="<?php echo $_GET["name"]; ?>" placeholder="Search staff or user name">
                <select name="type" value="user">
                    <option value="all">All accounts</option>
                    <option value="user">Users</option>
                    <option value="trip-provider">Trip providers</option>
                    <option value="support-agent">Customer support agents</option>
                </select>
                <input type="submit" name="submit" value=" Go ">
            </form>
            <div id="account-view">
                <?php
                    if (is_array($table)) {
                        foreach($table as $t) {
                            print_account_details($t, $searchname);
                        }
                    } else {
                        print_account_details($table, $searchname);
                    }
                ?>                
            </div>
        </div>
        <?php require("./views/footer.php") ?>
    </body>
</html>