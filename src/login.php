<?php
    require("auth.php");

    if (isset($_POST["submit"])) {
        $name = $_POST["username"];
        $password = $_POST["password"];

        login($name, $password);
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
        <link rel="stylesheet" href="../styles/login.css">
		<!--font awesomem-->
		<script src="https://kit.fontawesome.com/36fdbb8e6c.js" crossorigin="anonymous"></script>
        <title>Login</title>
    </head>
    <body>

        <h2>Login</h2>
        <div class="container">
            <h1>Welcome back</h1>
            <form method="POST" action="">
                <label for="username">Username:</label><br>
                <input type="text" name="username" id="username" placeholder="Enter your username"><br><br>
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password" placeholder="Enter your password"><br><br>
                <section class="toright">
                    <a href="/">Forgot password?</a><br>
                    <input type="submit" name="submit" value="Login">
                </section>
            </form>
            <div id="separator"><span>or</span></div>
            <i class="fa-brands fa-apple"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-google"></i>
            <br><br>
            Not a member? <a href="signup.php">Sign up</a>
        </div>
        <?php require("./views/footer.php") ?>

    </body>
</html>