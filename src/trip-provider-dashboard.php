<?php
    $restrict_page = "trip_provider";
    
    require("auth.php");
    require("libs/notifications.php");

    // approve trip
    $approveTrip = $_GET["approveTrip"];
    if (isset($approveTrip)) {
        $success = $conn->query("UPDATE Trip SET StaffID = $userid WHERE TripID = $approveTrip");
        $target = $conn->query("SELECT * FROM Trip t WHERE TripID = $approveTrip")->fetch_assoc()["UserID"];
        if ($success) {
            create_notification("$username approved your trip!", $target);
            echo "
                <script>
                    alert('Approved the trip!');
                    // reload the window
                    window.location.href = 'trip-provider-dashboard.php';
                </script>
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
    <link rel="stylesheet" href="../styles/trip-provider-dashboard.css">
    <!--font awesomem-->
    <script src="https://kit.fontawesome.com/36fdbb8e6c.js" crossorigin="anonymous"></script>
    <title>Dashboard | Trip Provider</title>
</head>

<body>
    <?php require("./views/header.php") ?>

    <!-- body content -->

    <h2>TRIP DETAILS</h2>

    <section id="trips">
        <?php

            $trips = $conn->query("SELECT * FROM Trip t, User u, BoatType b, Location l
                WHERE t.UserID = u.UserID
                AND t.BoatTypeID = b.BoatTypeID
                AND t.LocationID = l.LocationID
                AND DateTime > NOW()
                AND StaffID IS NULL
            ");

            while ($trip = $trips->fetch_assoc()) {
                echo "<div class='container'>
                        <h4 class='trip-id'>Trip #{$trip["TripID"]}</h4>
                        <div class='profile-details'>
                            <img src='../images/user-solid.svg' class='profile-image'>
                            <br>
                            {$trip["FirstName"]}
                        </div>
                        <hr>
                        <div class='trip-details'>
                            <br>
                            <i class='fa-solid fa-location-dot'></i>
                            {$trip["LocationName"]}<br>
                            <i class='fa-solid fa-sailboat'></i>
                            {$trip["BoatTypeName"]}<br>
                            Passengers:<br>
                            &emsp;&emsp;Over 12: 5 
                            <br>
                            &emsp;&emsp;Under 12: 3
                        </div>
                        <br><br>
                        <div class='trip-actions'>
                            <b><i class='fa-solid fa-calendar'></i> {$trip["DateTime"]}</b><br>
                            <a href='trip-provider-dashboard.php?approveTrip={$trip["TripID"]}'>
                                <button> <i class='fa-solid fa-circle-check'></i> Accept Trip </button>
                            </a>
                        </div>
                </div>";
            }
        ?>
    </section>
    <br>
    <section id="feedbacks">
        <div class="container">
            <?php
                // TODO: Display reviews related to provider only
                $feedbacks = $conn->query("SELECT * FROM User u, Review r, Trip t, UserTripReview utr
                    WHERE utr.UserID = u.UserID AND utr.ReviewID = r.ReviewID AND utr.TripID = t.TripID
                    ORDER BY Rand() LIMIT 1
                ");

                if ($feedbacks->num_rows > 0) {
                    $feedback = $feedbacks->fetch_assoc();
                    echo "<div class='profile-details'>
                            <h4>Feedback #{$feedback["ReviewID"]}</h4><br>
                            <img src='../images/user-solid.svg' class='profile-image'>
                            <br>
                            {$feedback["FirstName"]}
                        </div>
                        <div class='review'>
                            <p>
                                {$feedback["Content"]}
                            </p>
                        </div>
                    <div class='feedback-others'>";

                    $num_stars = $feedback["Rating"];
                    $no_stars = 5 - $num_stars;
                    for ($i = 0; $i < $num_stars; $i++)
                        echo "<i class='fa-solid fa-star' style='color: yellow;'></i>";
                    for ($i = 0; $i < $no_stars; $i++)
                            echo "<i class='fa-solid fa-star'></i>";
                    
                    echo "<br>{$feedback["DateTime"]}</div>";
                } else {
                    echo "<h3 style='text-align: center;'>No reviews for you</h3>";
                }
            ?>
        </div>
    </section>

    <section id="others">
        <div>
            <h3>VIEW TIPS</h3>
            <div class="container">
                <div class="profile-details">
                    <img src='../images/user-solid.svg' class='profile-image'>
                    <br>
                    User name
                </div>
                <button class="view-button"> View </button>
            </div>
        </div>
        <div>
            <img src="">
        </div>
        <div>
            <h3>COMMISIONS</h3>
            <div class="container">
                <div class="profile-details">
                    <img src='../images/user-solid.svg' class='profile-image'>
                    <br>
                    User name
                </div>
                <button class="view-button"> View </button>
            </div>
        </div>
    </section>







    <?php require("./views/footer.php") ?>

</body>

</html>