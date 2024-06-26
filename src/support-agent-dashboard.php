<?php
    $restrict_page = "support_agent";
    
    require("auth.php");

    function displayTickets($status) {
        global $conn;
        $res = $conn->query("SELECT * FROM Ticket t, User u WHERE t.UserID = u.UserID AND Status = '$status';");

        if ($res->num_rows == 0) {
            echo "<center><h1>No $status tickets</h1></center>";
        } else {
        while ($row = $res->fetch_assoc()) {
            echo "
                <div class='container'>
                    <i class='fa-solid fa-envelope' style='font-size: 40px;'> </i>
                    <h2>Ticket #{$row['TicketID']}</h2>
                    <span class='status'>
                        <i class='fa-solid fa-circle' " . ($status == "Open" ? "style='color:green;'" : "") . "></i>
                        <span class='status-details'>$status</span>
                    </span>
                    <br><br>
                    <div class='userinfo'>
                        <img src='../images/user-solid.svg' class='profile-image'>
                        <div class='user'>{$row['FirstName']}</div>
                        </div>" . (
                            $status == "Open" ? 
                            "<span class='actions'>
                                <a href='view-ticket.php?TicketID={$row['TicketID']}'>
                                    <i class='fa-solid fa-reply'></i>
                                    Reply
                                </a>
                                <a href='view-ticket.php?TicketID={$row['TicketID']}&action=close'>
                                    <i class='fa-solid fa-rectangle-xmark'></i>
                                    Close
                                </a>
                            </span>" : "") .                
                "</div>";
            }   
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
        <title>Dashboard | Customer Support Agent</title>
		<style>
			.container {
                margin: 15px;
                position: relative;
            }

            span {
                position: absolute;
                right: 15px;
            }

            .status {
                top: 15px;
            }

            .status-details {
                right: 30px;
            }

            .actions {
                bottom: 15px;
            }

            .userinfo {
                width: 50%;
                display: inline-block;
                position: relative;
                left: -1px;
            }

            .profile-image {
                display: inline-block;
                vertical-align: middle;
            }

            .user {
                display: inline;
                width: 50px;
                vertical-align: middle;
            }

            .fa-envelope {
                display: inline;
            }

            h2 {
                display: inline-block;
            }

            .fa-rectangle-xmark {
                margin-left: 10px;
                color: red;
            }

		</style>
    </head>
    <body>
        <?php require("./views/header.php") ?>

        <?php
            displayTickets("Open");
            echo "<br><br>";
            displayTickets("Closed");
        ?>

        <?php require("./views/footer.php") ?>

    </body>
</html>