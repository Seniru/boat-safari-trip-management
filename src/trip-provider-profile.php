<?php
    $restrict_page = "trip_provider";
    
    require("auth.php");
    require("libs/pagination.php");

    $_SESSION["old_trip_offset"] = $_SESSION["old_trip_offset"] ?? 0;
    $_SESSION["ongoing_offset"] = $_SESSION["ongoing_offset"] ?? 0;
    
    $frags = explode("-", $_SERVER["QUERY_STRING"]);
    handlePagination($frags[0], $frags[1], "trip-provider-profile.php");
    
    $old_trip_offset = $_SESSION["old_trip_offset"];
    $new_trip_offset = $_SESSION["ongoing_offset"];
    
    $profile = $conn->query("SELECT * FROM TripProvider WHERE StaffID=$userid")->fetch_assoc();
    $old_trips_res = $conn->query("SELECT * FROM Trip t, Location l, BoatType b
        WHERE t.LocationID = l.LocationID AND StaffID=$userid AND t.BoatTypeID = b.BoatTypeID AND DateTime < NOW()
        LIMIT 1
        OFFSET $old_trip_offset
    ");
    $ongoing_trips_res = $conn->query("SELECT * FROM Trip t, Location l, BoatType b
        WHERE t.LocationID = l.LocationID AND StaffID=$userid AND t.BoatTypeID = b.BoatTypeID AND DateTime >= NOW()
        LIMIT 1
        OFFSET $new_trip_offset
    ");

    // Change password
    if (isset($_POST["reset-password"])) {
        $new_pass = $_POST["password"];
        $success = $conn->query("UPDATE TripProvider SET Password='$new_pass' WHERE StaffID=$userid");
        if ($success) {
            echo "<script>alert('Password updated!')</script>";
        } else {
            echo "<script>alert('Operation failed!')</script>";
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
    <script src="../scripts/change-pass-util.js"></script>
    <title>Profile</title>
    <style>

        section {
            width: 30%;
            margin-right: 1.5%;
            display: inline-block;
            vertical-align: top;
            position: relative;
            text-align: center;
            padding-bottom: 30px;
        }

        h2 {
            color: white;
        }

        textarea {
           background-color: inherit;
        }

        #content {
            margin: 15px;
            margin-top: 40px;
        }

        .arrow-left, .arrow-right {
            position: absolute;
            left: 10px;
            width: 35px;
            height: 35px;
            border-radius: 35px;
            background-color: #333;
            cursor: pointer;
        }

        .arrow-right {
            left: auto;
            right: 10px;
        }

        .profilepicture {
            width: 100px;
            height: 100px;
            border: 1px solid black;
            padding: 3px;
            margin: auto;
            display: block;
        }

        .trip-image {
            width: 90%;
            left: 5%;
            display: block;
            position: relative;
        }

        .status, .date {
            right: 20px;
            position: absolute;
        }

        #ongoing-trips > .container > img, #old-trips > .container > img {
            width: 100%;
        }

        .arrow-left, .arrow-right {
            position: absolute;
            left: 10px;
            width: 35px;
            height: 35px;
            border-radius: 35px;
            background-color: #333;
            cursor: pointer;
        }

        .arrow-right {
            left: auto;
            right: 10px;
        }

    </style>
</head>

<body>
    <?php require("./views/header.php") ?>
    <div id="content">

        <section id="profile">
            <h2>Profile Settings</h2>
            <div class="container">
                <img class="profilepicture" src="../images/user-solid.svg"><br>
                <?php echo "{$profile["Name"]} {$profile["LastName"]}" ?><br>
                Trip Provider<br>
                Gender: <?php echo $gender == "M" ? "Male" : "Female"; ?><br>
                Age: <?php echo (new DateTime())->diff(new DateTime("{$profile["DateOfBirth"]}"))->y; ?><br><br>
                <button onclick="changePassword(event, 'trip-provider-profile.php')">
                    Change password
                    <i class="fa-solid fa-user-pen"></i><br>
                </button>
                <br><br>
            </div>
        </section>

        <section id="ongoing-trips">
            <h2>Ongoing trips</h2>
            <div class="container">
                <?php
                    if ($ongoing_trips_res->num_rows > 0) {
                        $trip = $ongoing_trips_res->fetch_assoc();
                        echo "
                            <img src='../images/slideshow-00.jpg'><br>
                            <a href='trip-provider-profile.php?ongoing-pre'><button class='arrow-left'>&lt;</button></a>
                            <a href='trip-provider-profile.php?ongoing-next'><button class='arrow-right'>&gt;</button></a>
                            <br><br>
                            <i class='fa-solid fa-location-dot'></i>
                            {$trip["LocationName"]}<br>
                            <i class='fa-solid fa-sailboat'></i>
                            {$trip["BoatTypeName"]}<br><br>
                            <i class='fa-solid fa-calendar'></i>
                            <b>{$trip["DateTime"]}</b><br>
                        ";
                    } else {
                        echo "
                            <img src='../images/slideshow-00.jpg'><br>
                            <a href='trip-provider-profile.php?ongoing-pre'><button class='arrow-left'>&lt;</button></a>
                            <a href='trip-provider-profile.php?ongoing-next'><button class='arrow-right'>&gt;</button></a>
                            <br><br>
                            No more trips
                        ";
                    }
                ?>
            </div>
        </section>

        <section id="old-trips">
            <h2>Trip history</h2>
            <div class="container">
            <?php
                    if ($old_trips_res->num_rows > 0) {
                        $trip = $old_trips_res->fetch_assoc();
                        echo "
                            <img src='../images/slideshow-00.jpg'><br>
                            <a href='trip-provider-profile.php?old_trip-pre'><button class='arrow-left'>&lt;</button></a>
                            <a href='trip-provider-profile.php?old_trip-next'><button class='arrow-right'>&gt;</button></a>
                            <br><br>
                            <i class='fa-solid fa-location-dot'></i>
                            {$trip["LocationName"]}<br>
                            <i class='fa-solid fa-sailboat'></i>
                            {$trip["BoatTypeName"]}<br><br>
                        ";
                    } else {
                        echo "
                            <img src='../images/slideshow-00.jpg'><br>
                            <a href='trip-provider-profile.php?old_trip-pre'><button class='arrow-left'>&lt;</button></a>
                            <a href='trip-provider-profile.php?old_trip-next'><button class='arrow-right'>&gt;</button></a>
                            <br><br>
                            No more trips
                        ";
                    }
                ?>
            </div>
        </section>

    </div>

    <?php require("./views/footer.php") ?>

</body>

</html>