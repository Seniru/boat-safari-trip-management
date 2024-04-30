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
            .profilepicture{
                width:100px;
                height:50px;
            }
        </style>
    </head>
    <body>
        <?php require("./views/header.php") ?>
        
        <h2>Profile Settings</h2>
        <div class="container">
            <img class="profilepicture" src="../images/user-solid.svg">
             
        </div>

        <?php require("./views/footer.php") ?>

    </body>
</html>