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
    <title>Profile</title>
    <style>

        section {
            width: 30%;
            margin-right: 1.5%;
            display: inline-block;
            vertical-align: top;
            position: relative;
            text-align: center;
            padding-bottom: 30px;
        }

        h2 {
            color: white;
        }

        #content {
            margin: 15px;
            margin-top: 40px;
        }

        .arrow-left, .arrow-right {
            position: absolute;
            left: 10px;
            width: 35px;
            height: 35px;
            border-radius: 35px;
            background-color: #333;
            cursor: pointer;
        }

        .arrow-right {
            left: auto;
            right: 10px;
        }

        .profilepicture {
            width: 100px;
            height: 100px;
            border: 1px solid black;
            padding: 3px;
            margin: auto;
            display: block;
        }

        .trip-image {
            width: 90%;
            left: 5%;
            display: block;
            position: relative;
        }

        .status, .date {
            right: 20px;
            position: absolute;
        }

    </style>
</head>

<body>
    <?php require("./views/header.php") ?>
    <div id="content">
        <section id="previous-trips">
            <h2>Previous trips</h2>
            <div class="container">
                <img class="trip-image" src="../images/slideshow-00.jpg">
                <br>
                <button class="arrow-left">&lt;</button>
                <button class="arrow-right">&gt;</button>
                <br><br>
                Location<br>
                Boat type<br>
                <a href="/feedback.php">
                    Feedback
                    <i class="fa-solid fa-paper-plane"></i>
                </a>
                <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
        </section>
        <section id="ongoing-trips">
            <h2>Ongoing trips</h2>
            <div class="container">
                <img class="trip-image" src="../images/slideshow-00.jpg">
                <br>
                <button class="arrow-left">&lt;</button>
                <button class="arrow-right">&gt;</button>
                <br><br>
                Location<br>
                Boat type<br>
        </section>
        <section id="profile">
            <h2>Profile Settings</h2>
            <div class="container">
                <img class="profilepicture" src="../images/user-solid.svg"><br>
                Name<br>
                Email<br>
                Gender<br><br>
                Change password
                <i class="fa-solid fa-user-pen"></i><br>
            </div>
        </section>
        <section id="tickets">
            <h2>My tickets</h2>
            <div class="container">
                <span class="status">
                    <i class="fa-solid fa-circle"></i>
                    <span class="status-details">Closed</span>
                </span>
                <h4>Title</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus cupiditate quia maxime modi et vero exercitationem dolor atque cum sed amet expedita nobis, nesciunt deserunt, quis odit harum? Aliquid, numquam?</h4>
                <br><br>
                <button class="arrow-left">&lt;</button>
                <button class="arrow-right">&gt;</button>
                <br><br>
                <div class="date">2024/01/01</div>
                <br>
            </div>
        </section>
    </div>

    <?php require("./views/footer.php") ?>

</body>

</html>