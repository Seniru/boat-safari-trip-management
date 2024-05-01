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
        <title>View accounts</title>
        <style>

            #main-container {
                margin: 10px 10% 10px 10%;
                width: 80%;
            }

            #filter-options {
                position: relative;
                text-align: right;
                padding: 8px;
            }

            #filter-options > input[type=search] {
                width: 240px;
            }

            #account-view {
                column-count: 2;
                width: 100%;
                column-gap: 5px;
                padding-top: 10px;
            }

            #account-view > .container {
                width: 90%;
                display: inline-block;
                margin: 5px;
                column-count: 2;
            }

            .user-details {
                display: inline-block;
                width: 100%;
            }

            .profile-link {
                position: relative;
                top: 48%;
            }

            .profile-link > a {
                text-decoration: none;
            }

            .profile-image {
                margin: 10px;
            }
           

        </style>
    </head>
    <body>
        
        <?php require("./views/header.php") ?>
        
        <div id="main-container">
            <div id="filter-options">
                <input type="search" placeholder="Search staff or user name">
                <select>
                    <option>All accounts</option>
                    <option>Users</option>
                    <option>Trip providers</option>
                    <option>Customer support agents</option>
                </select>
            </div>
            <div id="account-view">

                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                <div class="container">
                    <div class="user-details">
                        User name <br>
                        <img src="./images/user-solid.svg" class="profile-image"><br>
                        Type
                    </div>
                    <div class="profile-link">
                        <a href="/">View profile</a>
                    </div>
                </div>
                
            </div>
        </div>
        <?php require("./views/footer.php") ?>
    </body>
</html>