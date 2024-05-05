<?php

    $restrict_page = "system_admin";
    
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
        <link rel="stylesheet" href="../styles/admin-dashboard.css">
		<!--font awesomem-->
		<script src="https://kit.fontawesome.com/36fdbb8e6c.js" crossorigin="anonymous"></script>
        <!--chart.js-->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="../scripts/expenses-chart.js"></script>
        <title>Admin Dashboard</title>
    </head>
    <body>
        <?php require("./views/header.php") ?>
        <div class="content">  
            <h1>MANAGE HOME PAGE</h1>
    
            <section id="section1">
                <div class="container">
                    <h3>Add New Images</h3>
                    <br>
                    <i class="fa-solid fa-images" style="font-size: 100px; text-align: center;"></i>
                </div>
                <div class="container">
                    <h3>View feedback</h3>
                    <button class="view-button">View</button>
                </div>
                <div class="container">
                    <h3>Add others</h3>
                    <button class="view-button">View</button>
                </div>
            </section>
        </div>
        <section id="section2">
            <div class="container">
                <h2>Login details</h2>
            </div>
        </section>
        
        <div class="content">
            <section id="section3">
                    <div class="container">
                        <h3>Add New Packages</h3>
                        <br>
                        <i class="fa-solid fa-leaf" style="text-align: center; font-size: 100px;"></i>
                        <br>
                        <button class="view-button"><i class="fa-solid fa-circle-plus"></i> Add</button>    
                        <i class="font-awesome">+</i>
                    </div>
                    <?php
                        $trip = $conn->query("SELECT * FROM Trip t, Location l, BoatType b, User u
                            WHERE t.LocationID = l.LocationID AND t.BoatTypeID = b.BoatTypeID AND t.UserID = u.UserID
                            ORDER BY t.TripID DESC
                            LIMIT 1
                    ")->fetch_assoc();
                        ?>
                    <div id="latest-trip" class="container">
                        <h3>Latest trip</h3>
                        <br>
                        <?php echo $trip["FirstName"] ?>
                        <br><br>
                        <i class="fa-solid fa-location-dot fa-fw"></i>
                        <?php echo $trip["LocationName"] ?><br>
                        <i class='fa-solid fa-sailboat'></i>
                        <?php echo $trip["BoatTypeName"] ?><br><br>
                        <button class="view-button">View</button>
                    </div>
                    <div style="display: inline-block; vertical-align: top;" class="container">
                        <h3>Payment details</h3>
                        <?php echo $trip["FirstName"] ?><br><br>
                        <i class="fa-solid fa-building-columns"></i>
                        <?php echo $trip["PaymentMode"] ?><br>
                        <i class="fa-solid fa-money-bill"></i>
                        $<?php echo $trip["PaymentAmoount"] ?><br><br>
                        <i class="fa-solid fa-calendar"></i>
                        <?php echo $trip["DateTime"] ?><br>
                        <button class="view-button">View</button>
                    </div>
                    <div class="container">
                        <h3>Staff / User details</h3>
                        <a href="view-accounts.php">
                            <button class="view-button">View</button>
                        </a>
                    </div>
                </section>
            </div>
            <section id="section4">
                <?php
                    $trip_income = $conn->query("SELECT SUM(PaymentAmoount) AS TripIncome FROM Trip")->fetch_assoc()["TripIncome"];
                    $trip_provider_salaries = $conn->query("SELECT COUNT(*) AS Providers FROM TripProvider")->fetch_assoc()["Providers"] * 100;
                    $support_agent_salaries = $conn->query("SELECT COUNT(*) AS Agents FROM CustomerSupportAgent")->fetch_assoc()["Agents"] * 60
                ?>
                <h2>Finances</h2>
                <section id="revenue-details">
                    <div class="container">
                        <h3>Revenue</h3>
                        <b>Trip income</b>
                        <span class="money">$<?php echo $trip_income; ?></span><br>
                        <b>Expenses</b>
                        <span class="money">$<?php echo ($trip_provider_salaries + $support_agent_salaries + 25) ?></span><br>
                        <div id="expenses">
                            Trip provider salaries
                            <span class="money">$<?php echo $trip_provider_salaries; ?></span><br>
                            Support agent salaries
                            <span class="money">$<?php echo $support_agent_salaries; ?></span><br>
                            System maintainence
                            <span class="money">$25.00</span><br>
                        </div>
                        <br>
                        <b>Net income</b>
                        <span class="money">$<?php echo $trip_income - ($trip_provider_salaries + $support_agent_salaries + 25); ?></span><br>
                    </div>
                </section>
                <section id="expenses-chart">
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                        const ctx = document.getElementById("chart")
                        createChart(ctx, [
                            <?php echo $trip_provider_salaries ?>, 
                            <?php echo $support_agent_salaries ?>,
                            25
                        ], ["Trip provider salaries", "Support agent salaries", "System maintainence"])
                        })
                    </script>
                    <canvas id="chart"></canvas>
                </section>
            </section>
        <?php require("./views/footer.php") ?>

    </body>
</html>