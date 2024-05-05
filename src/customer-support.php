<?php
    $restrict_page="user";

    require("auth.php");
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["Email"];
        $ContactNumber=$_POST["Contact Number"];
        $type=$_POST["type"];
        $subject=$_POST["Subject"];
        $content=$_POST["Content"];

        $success = $conn->query("INSERT INTO Ticket VALUES(NULL,'Open','$subject','$type','$content','Now()',$userid,NULL);");
        if ($success) {
            echo"<script>alert('Ticket created!');</script>";

        } 
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--google fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<!--component styles-->
		<link rel="stylesheet" href="../styles/components.css">
		<!--font awesomem-->
		<script src="https://kit.fontawesome.com/36fdbb8e6c.js" crossorigin="anonymous"></script>
        <title>Document</title>
        <style>
            textarea {
                font-size: 15px;
            }

            input[type=text] {
                width: 200px;
            }

            body {
                background-image: url("../images/boat.jpg");
                background-size: cover;
               
            }

            .container {
                background-color: #839790a6;
                width: 70%;
                position: relative;
                left: 12.5%;
            }

            label,h1 {
                color: white;
            }

            h1{
                text-align:center;
            }

            form{
                padding-left:80px;
            }

            
        </style>
    </head>
    <body>
        <?php require("./views/header.php") ?>
        <!-- body content -->
        <div class="container">
            <h1>Customer Support Page</h1>
            <form method="POST" action="">
            <label for="name">Name:</label><br>
            <input type="text" id="name" Name="name" placeholder="Enter your name"><br><br>
            <label for="Email">Email:</label><br>
            <input type="text" id="Email" name="Email" placeholder="Enter your Email"><br><br>
            <label for="Contact Number">Contact Number:</label><br>
            <input type="text" id="ContactNumber" name="ContactNumber"placeholder="Enter your contact number"><br><br>
            <label for="Request/Inquiry Type">Request/Inquiry Type:</label><br>
            <select name="type">
                <option value="inquiries">Inquiries</option>
                <option value="complaints">Complaints</option>
            </select>
            <br><br>
            <label for="Subject">Subject:</label><br>
            <input type="text" id="Subject" name="Subject"placeholder="Type here"><br><br>
            <label for="Message">Message:</label><br>
            <textarea name="content" rows="8" cols="80"placeholder="Type here"></textarea><br>
            <input type="submit" value="Submit" name="submit">
        </form>
        </div>

        <?php require("./views/footer.php") ?>

    </body>
</html>