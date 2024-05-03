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
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const ctx = document.getElementById("chart")
                createChart(ctx, [100, 300, 200, 10], ["Expense #1", "Expense #2", "Expense #3", "Expense #4"])
            })
        </script>
    </head>
    <body>
        <?php require("./views/header.php") ?>
        <div class="content">  
            <h1>MANAGE HOME PAGE</h1>
    
            <section id="section1">
                <div class="container">
                    <h3>Add New Images</h3>
                    <br>
                    <img src="/"></img>
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
                        <img src="/"></img>
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>    
                        <i class="font-awesome">+</i>
                    </div>
                    <div class="container">
                        <h3>View trips</h3>
                        <div class="trip">Trip #1</div>
                        <div class="trip">Trip #2</div>
                        <div class="trip">Trip #3</div>
                        <button class="view-button">View</button>
                    </div>
                    <div class="container">
                        <h3>Payment details</h3>
                        Username<br>
                        Bank Details<br>
                        Date/Time<br>
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
                <h2>Finances</h2>
                <section id="revenue-details">
                    <div class="container">
                        <h3>Revenue</h3>
                        <b>Trip income</b>
                        <span class="money">$99.99</span><br>
                        <b>Expenses</b>
                        <span class="money">$99.99</span><br>
                        <div id="expenses">
                            Expense #1
                            <span class="money">$99.99</span><br>
                            Expense #2
                            <span class="money">$99.99</span><br>
                            Expense #3
                            <span class="money">$99.99</span><br>
                        </div>
                        <br>
                        <b>Net income</b>
                        <span class="money">$99.99</span><br>
                    </div>
                </section>
                <section id="expenses-chart">
                    <canvas id="chart"> </canvas>
                </section>
            </section>
        <?php require("./views/footer.php") ?>

    </body>
</html>