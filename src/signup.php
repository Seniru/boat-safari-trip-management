<?php

    require("auth.php");

    if (isset($_POST["submit"])) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $dob = $_POST["dob"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $gender = $_POST["gender"];
        $password = $_POST["password"];

        // TODO: add server side validation

        $success = $conn->query("INSERT INTO User VALUES (
            NULL, '$gender', '$email', '$password', '$dob', '$tel', '$firstname', '$lastname'
        )");

        if ($success) {
            login($firstname, $password);
        } else {
            echo "<script>alert('Registration failed!');</script>";
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
        <title>Sign up</title>
        <style>
            h2 {
                text-align: center;
                color: white;
            }

            #content {
                margin: 15px;
            }

            .container {
                width: 80%;
                margin-left: 10%;
                position: relative;
            }

            .container > img {
                width: 40%;
                height: 95%;
                display: inline-block;
                position: absolute;
                border-radius: 5px;
            }

            .container > form {
                width: 49%;
                display: inline-block;
                position: relative;
                left: 45%;
            }

            form > input[type]:not([type=submit]) {
                width: 85%;
            }

            form > input[type=submit] {
                text-align: center;
            }

            form > select {
                width: 85%;
            }

            #name-container > input {
                width: 40%;
            }

        </style>
    </head>
    <body>
        <?php require("./views/header.php") ?>
        <div id="content">
            <h2>Sign up</h2>
            <div class="container">
                <img id="signup-img" src="../images/slideshow-00.jpg">
                <form method="POST" action="">
                    Name:<br>
                    <div id="name-container">
                        <input type="text" name="firstname" placeholder="First name">
                        <input type="text" name="lastname" placeholder="Last name">
                    </div>
                    Date of Birth<br>
                    <input type="date" name="dob"><br>
                    Email<br>
                    <input type="email" name="email" placeholder="Email address"><br>
                    Phone number<br>
                    <input type="tel" name="tel" placeholder="Phone number"><br>
                    Gender<br>
                    <select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <br>
                    Password<br>
                    <input type="password" name="password" id="password" placeholder="Enter your password"><br>
                    Re-enter password<br>
                    <input type="password" id="password-conf" placeholder="Re-enter password"><br><br>
                    <input type="submit" name="submit" value="Sign up">
                </form>
            </div>
        </div>
        
        <?php require("./views/footer.php") ?>

    </body>
</html>