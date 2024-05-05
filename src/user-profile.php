<?php
    //$restrict_page = "user";
    
    require("auth.php");
    require("libs/pagination.php");
    require("libs/handleProfiles.php");

    $query_params = NULL;
    parse_str($_SERVER["QUERY_STRING"], $query_params);

    $_SESSION["old_trip_offset"] = $_SESSION["old_trip_offset"] ?? 0;
    $_SESSION["new_trip_offset"] = $_SESSION["new_trip_offset"] ?? 0;
    $_SESSION["ticket_offset"] = $_SESSION["ticket_offset"] ?? 0;
    
    $frags = explode("-", $_SERVER["QUERY_STRING"]);
    handlePagination($frags[0], $frags[1], "user-profile.php");
    
    $old_trip_offset = $_SESSION["old_trip_offset"];
    $new_trip_offset = $_SESSION["new_trip_offset"];
    $ticket_offset = $_SESSION["ticket_offset"];

    $profile = $conn->query("SELECT * FROM User WHERE UserID=$userid")->fetch_assoc();
    $ticket_res = $conn->query("SELECT * FROM Ticket WHERE UserID=$userid LIMIT 1 OFFSET $ticket_offset");
    $old_trips_res = $conn->query("SELECT * FROM Trip t, Location l, BoatType b
        WHERE t.LocationID = l.LocationID AND UserID=$userid AND t.BoatTypeID = b.BoatTypeID AND DateTime < NOW()
        LIMIT 1
        OFFSET $old_trip_offset
    ");
    
    $previous_trip = NULL;
    $old_trip_review = array();
    if ($old_trips_res->num_rows > 0) {
        $previous_trip = $old_trips_res->fetch_assoc();
        $old_trip_review = $conn->query("SELECT * FROM UserTripReview utr, Trip t, Review r, User u
            WHERE utr.UserID = u.UserID
            AND utr.TripID = t.TripID
            AND utr.ReviewID = r.ReviewID
            AND u.UserID = $userid
            AND utr.TripID = {$previous_trip["TripID"]}
        ");
    }

    $ongoing_trips_res = $conn->query("SELECT * FROM Trip t, Location l, BoatType b
        WHERE t.LocationID = l.LocationID AND UserID=$userid AND t.BoatTypeID = b.BoatTypeID AND DateTime >= NOW()
        LIMIT 1
        OFFSET $new_trip_offset
    ");

    $view_mode = is_viewing_own_profile($userid, $role, $_GET["id"], "user");

    switch ($view_mode) {
        case UNAUTHORIZED_VIEW:
            header("Location: homepage.php");
            exit();
            break;
        case VIEW_OWN_PROFILE:
            $res = $conn->query("SELECT * FROM User WHERE UserID=$userid;");
            $profile = $res->fetch_assoc();
            break;
        case VIEW_OTHER_PROFILE:
            $res = $conn->query("SELECT * FROM User WHERE UserID={$_GET["id"]}");
            if ($res->num_rows == 0) {
                echo "<script>
                    alert('Profile not found!');
                    window.location.href='homepage.php';
                </script>";
                exit();
            } else {
                $profile = $res->fetch_assoc();
            }   
            break;           
    }


    // Create/Edit feedback
    if (isset($_POST["post-review"])) {
        $content = $_POST["review-content"];
        createReview($previous_trip, NULL, $content);
    }
    // Ratings
    if (isset($_GET["rating"])) {
        createReview($previous_trip, $_GET["rating"], NULL);
    }

    // Change password
    if (isset($_POST["reset-password"])) {
        $new_pass = $_POST["password"];
        $success = $conn->query("UPDATE User SET Password='$new_pass' WHERE UserID=$userid");
        if ($success) {
            echo "<script>alert('Password updated!')</script>";
        } else {
            echo "<script>alert('Operation failed!')</script>";
        }
    }

    if(isset($_GET["delete-ticket"])){
        $ticketID=$_GET["delete-ticket"];
        $conn->query("DELETE FROM Ticket WHERE TicketID=$ticketID");
        echo"<script>alert('Ticket Deleted')</script>";
    }

    function createReview($trip, $rating, $review) {
        global $conn, $userid;
        $set = array();
        if ($rating != NULL) array_push($set, "Rating = $rating");
        if ($review != NULL) array_push($set," Content = '$review'");
        $set_statement = implode(", ", $set);

        $check_review = $conn->query("SELECT * FROM UserTripReview WHERE TripID={$trip["TripID"]}");
        if ($check_review->num_rows > 0) {
            $rvw = $check_review->fetch_assoc();
            $conn->query("UPDATE Review SET $set_statement WHERE ReviewID={$rvw["ReviewID"]}");
            // reload so the review gets updated (lazy fix)
            header("Location: user-profile.php");
        } else {
            $rating = $rating ?? 0;
            $review = $review ?? "";
            $conn->query("INSERT INTO Review VALUES (
                NULL, $rating, '$review', $userid
            )");
            $reviewID = mysqli_insert_id($conn);
            $conn->query("INSERT INTO UserTripReview VALUES ($userid, {$trip["TripID"]}, $reviewID)");
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

    </style>
</head>

<body>
    <?php require("./views/header.php") ?>
    <div id="content">
        <section id="previous-trips">
            <h2>Previous trips</h2>
            <div class="container">
                <?php
                    if ($old_trips_res->num_rows == 0) {
                        echo "<br><br><br><br>No more previous trips!<br><br>
                            <a href='user-profile.php?old_trip-pre'><button class='arrow-left'>&lt;</button></a>
                            <a href='user-profile.php?old_trip-next'><button class='arrow-right'>&gt;</button></a>
                            <br><br>"
                        ;
                    } else {
                        echo "<img class='trip-image' src='../images/slideshow-00.jpg'>
                            <br>
                            <a href='user-profile.php?old_trip-pre'><button class='arrow-left'>&lt;</button></a>
                            <a href='user-profile.php?old_trip-next'><button class='arrow-right'>&gt;</button></a>
                            <br><br>
                            <i class='fa-solid fa-location-dot'></i>
                            {$previous_trip["LocationName"]}<br>
                            <i class='fa-solid fa-sailboat'></i>
                            {$previous_trip["BoatTypeName"]}<br><br>
                        ";
                        
                        $review = $old_trip_review->fetch_assoc();
                        if (is_null($review)) $review = array();

                        echo "<form method='POST' action=''>
                                <textarea cols='30' name='review-content'>{$review["Content"]}</textarea><br>";

                        if ($view_mode == VIEW_OWN_PROFILE) {
                            echo "
                                <button type='submit' name='post-review'>
                                <i class='fa-solid fa-paper-plane'></i> Submit Feedback
                            ";
                        }
                                
                        echo "</button></form>";

                        if (!is_null($review)) {
                            $num_stars = $review["Rating"];
                            $no_stars = 5 - $num_stars;
                            for ($i = 0; $i < $num_stars; $i++)
                                echo "<a href='user-profile.php?rating=" . ($i + 1) . "'><i class='fa-solid fa-star' style='color: yellow;'></i></a>";
                            for ($i = 0; $i < $no_stars; $i++)
                                echo "<a href='user-profile.php?rating=" . ($num_stars + $i + 1) . "'><i class='fa-solid fa-star'></i></a>";
                        }
                            
                    }
                ?>
            </div>
        </section>
        <section id="ongoing-trips">
            <h2>Ongoing trips</h2>
            <div class="container">
                <?php
                    if ($ongoing_trips_res->num_rows == 0) {
                        echo "<br><br><br><br>No more trips!<br><br>
                            <a href='user-profile.php?new_trip-pre'><button class='arrow-left'>&lt;</button></a>
                            <a href='user-profile.php?new_trip-next'><button class='arrow-right'>&gt;</button></a>
                            <br><br>";
                    } else {
                        $ongoing_trip = $ongoing_trips_res->fetch_assoc();
                        echo "
                            <img class='trip-image' src='../images/slideshow-00.jpg'>
                            <br>
                            <a href='user-profile.php?new_trip-pre'><button class='arrow-left'>&lt;</button></a>
                            <a href='user-profile.php?new_trip-next'><button class='arrow-right'>&gt;</button></a>
                            <br><br>
                            <i class='fa-solid fa-location-dot'></i>
                            {$ongoing_trip["LocationName"]}<br>
                            <i class='fa-solid fa-sailboat'></i>
                            {$ongoing_trip["BoatTypeName"]}<br><br>
                            <i class='fa-regular fa-calendar'></i>
                            Upcoming <b>{$ongoing_trip["DateTime"]}</b>
                        ";
                    }
                ?>
                
            </div>
        </section>
        <section id="profile">
            <h2>Profile Settings</h2>
            <div class="container">
                <img class="profilepicture" src="../images/user-solid.svg"><br>
                <?php echo "{$profile["FirstName"]} {$profile["LastName"]}" ?><br>
                <?php echo $profile["Email"] ?><br>
                Gender: <?php echo $profile["Gender"] ?><br><br>
                <?php
                    if ($view_mode == VIEW_OWN_PROFILE) {
                        echo "
                            <button onclick='changePassword(event, \'user-profile.php\')'>
                                Change password
                                <i class='fa-solid fa-user-pen'></i><br>
                            </a>
                        ";
                    }
                ?>
            </div>
        </section>
        <section id="tickets">
            <h2>My tickets</h2>
            <div class="container">
                <?php
                    if ($ticket_res->num_rows == 0) {
                        echo "<br><br><br><br>No more tickets!<br><br>
                        <a href='user-profile.php?ticket-pre'><button class='arrow-left'>&lt;</button></a>
                        <a href='user-profile.php?ticket-next'><button class='arrow-right'>&gt;</button></a>
                        <br><br>";
                    } else {
                        $ticket = $ticket_res->fetch_assoc();
                        $status = $ticket["Status"];
                        echo "<span class='status'>
                                <i class='fa-solid fa-circle' " . ($status == "Open" ? "style='color:green;'" : "") . "></i>
                                <span class='status-details'>$status</span>
                            </span>
                            <h4>{$ticket["Subject"]}</h4>
                            <p>{$ticket["Message"]}</h4>
                            <br><br>
                            <a href='user-profile.php?ticket-pre'><button class='arrow-left'>&lt;</button></a>
                            <a href='user-profile.php?ticket-next'><button class='arrow-right'>&gt;</button></a>
                            <br><br>
                            <a href='user-profile.php?delete-ticket={$ticket["TicketID"]}'><button>Delete</button></a>
                            <div class='date'>
                                <i class='fa-regular fa-calendar'></i>
                                {$ticket["SubmittedDateTime"]}
                            </div>
                        <br>
                        ";
                    }
                ?>
            </div>
        </section>
    </div>

    <?php require("./views/footer.php") ?>

</body>

</html>