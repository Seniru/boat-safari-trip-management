<?php
    $restrict_page = "support_agent";
    
    require("auth.php");
    require("libs/notifications.php");

    $query_params = NULL;
    parse_str($_SERVER["QUERY_STRING"], $query_params);

    $ticketID = $query_params["TicketID"];
    $ticket = NULL;

    if (is_null($ticketID) || $ticketID == "") {
        echo "
            <script>
                alert('Invalid ticket!');
                window.location.href = 'support-agent-dashboard.php';
            </script>
        ";
    }
    if ($query_params["action"] == "close") {
        $conn->query("UPDATE Ticket SET Status='Closed' WHERE TicketID=$ticketID");
        $target = $conn->query("SELECT * FROM Ticket t WHERE TicketID = $ticketID")->fetch_assoc()["UserID"];
        create_notification("$username replied to your ticket!", $target);
        echo "
                <script>
                    alert('Ticket closed!');
                    window.location.href = 'support-agent-dashboard.php';
                </script>
            ";
    } else {
        $res = $conn->query("SELECT * FROM Ticket t, User u WHERE t.UserID = u.UserID AND TicketID=$ticketID");
        if ($res->num_rows == 0) {
            echo "
                <script>
                    alert('Ticket not found!');
                    window.location.href = 'support-agent-dashboard.php';
                </script>
            ";
        } else {
            $ticket = $res->fetch_assoc();
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
        <title>View ticket</title>
        <style>
            h2{
               color:white;
               margin-left:20px
            }
            h3 {
                display: inline-block;
            }
            .container{
                margin-left:20px;
                margin-right:20px
            }
            </style>
    </head>
    <body>
        <?php require("./views/header.php") ?>
        
        
        <h2>Ticket #<?php echo $ticketID; ?> </h2>
        
        <div class="container">
        <i class="fa-solid fa-user"></i>
        <h3>Name: </h3>
        <?php echo $ticket["FirstName"]; ?>
        <br>
        <i class="fa-solid fa-envelope"></i>
        <h3>Email:</h3>
        <?php echo $ticket["Email"]; ?>
        <br>
        <i class="fa-solid fa-phone-volume"></i>
        <h3>Contact Number:</h3>
        <?php echo $ticket["PhoneNumber"]; ?>
        <br>
        <h3>Request/Inquiry Type</h3>
        <?php echo $ticket["InquiryType"]; ?>
        <h3> <?php echo $ticket["Subject"]; ?> </h3>
        <p> <?php echo $ticket["Message"]; ?> </p>
        </div><br><br>

        <?php require("./views/footer.php") ?>

    </body>
</html>