<?php
    $restrict_page = "user";
    
    require("auth.php");
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
    <link rel="stylesheet" href="../styles/user-dashboard.css">
    <!--font awesomem-->
    <script src="https://kit.fontawesome.com/36fdbb8e6c.js" crossorigin="anonymous"></script>
    <script src="../scripts/user-dashboard.js"></script>
    <title>User Dashboard</title>
</head>

<body>
    <?php require("./views/header.php") ?>

    <h3 style="color: white; margin-left: 25px;">Our packages</h3>
    <section id="packages">
        <?php

            $res = $conn->query("SELECT * FROM Package p, BoatType b, Location l
                WHERE p.BoatTypeID = b.BoatTypeID AND p.LocationID = l.LocationID
            ");

            while ($package = $res->fetch_assoc()) {
                echo "<div class='container'>
                    <div class='image-container'>
                        <img src='../images/slideshow-00.jpg'>
                    </div>
                    <div class='package-details'>
                        <h3>{$package["PackageName"]}</h3>
                        <span>
                            <b>Location:</b>
                            <span class='location'>{$package["LocationName"]}</span>
                            <br>
                            <b>Boat type:</b>
                            <span class='boat-type'>{$package["BoatTypeName"]}</span>
                            <br>
                            <b>Facilities:</b>
                            <ul>
                ";

                $res2 = $conn->query("SELECT * FROM PackageFacilities WHERE PackageID={$package["PackageID"]}");
                while ($facility = $res2->fetch_assoc()) {
                    echo "<li>{$facility["Facility"]}</li>";
                }
 
                echo "
                            </ul>
                        </span>
                        <div class='price'>
                            From <span class='money'>$99.99</span>
                        </div>
                    </div>
                    <button onclick='selectPackage(event)'> Select </button>
                </div>";
            }
        ?>
    </section>

    <form method="POST" action="payments.php">
        Search Location
        <br>
        <select name="location" id="location" onchange="createReport()"> 
            <?php
                $res = $conn->query("SELECT * FROM Location");
                while ($location = $res->fetch_assoc()) {
                    echo "<option>{$location["LocationName"]}</option>";
                }
            ?>
        </select>
        <br><br>
        <table>
            <tr>
                <th>Date</th>
                <th>Price & Deails</th>
                <th>Time</th>
                <th>Passengers</th>
                <th>Boat</th>
            </tr>
            <tr>
                <td>
                    <br>
                    <input type="date" name="date" id="date" onchange="createReport()"> 
                </td>
                <td>
                    <br>
                    <select name="deals">
                        <option>$30 without TAX</option>
                        <option>Deal #2</option>
                        <option>Deal #3</option>
                    </select>
                </td>
                <td>
                    <br>    
                    <input type="time" name="time" id="time" onchange="createReport()">
                </td>
                <td>
                    Age 12+
                    <input type="number" id="passengers-o12" onchange="createReport()">
                    <br>
                    Age 0-12
                    <input type="number" id="passengers-u12" onchange="createReport()">
                </td>
                <td>
                    <br>
                    <select id="boat-type" name="boat-type">
                        <?php
                            $res = $conn->query("SELECT * FROM BoatType");
                            while ($location = $res->fetch_assoc()) {
                                echo "<option>{$location["BoatTypeName"]}</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <br><hr>
        <h4>Facilities</h4>
        <input type="checkbox"> Facility #1<br>
        <input type="checkbox"> Facility #2<br>
        <input type="checkbox"> Facility #3<br>
        <input type="submit" value="BOOK NOW" name="create-trip">
    </form>
    <br>
    <section id="trip-details-container">
        <h3 style="text-align: center; color: white;">Your trip</h3>
        <div class="container" id="trip-details">
            <div class="image-container">
                <img src="../images/slideshow-00.jpg">
            </div>
            <div id="trip-info">
                <b>Location</b>
                <span id="review-location"></span>
                <br>
                <b>Date: </b>
                <span id="review-date"></span>
                <br>
                <b>Time: </b>
                <span id="review-time"></span>
                <br>
                <b>Passengers:</b><br>
                &emsp;<b>Over 12: </b>
                <span id="review-passengers-o12"></span>
                <br>
                &emsp;<b>Under 12: </b>
                <span id="review-passengers-u12"></span>
                <br><br>
                <b>Boat: </b>
                <span id="review-boat"></span>
                <br>
                <b>Facilities: </b>
                <br>
                <ul id="review-facilities"></ul>
            </div>
        </div>
    </section>
    <br><br><br>

    <?php require("./views/footer.php") ?>

</body>

</html>