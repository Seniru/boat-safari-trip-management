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
        <link rel="stylesheet" href="../styles/slideshow.css">
        <link rel="stylesheet" href="../styles/calendar.css">
        <link rel="stylesheet" href="../styles/homepage.css">
		<!--font awesomem-->
		<script src="https://kit.fontawesome.com/36fdbb8e6c.js" crossorigin="anonymous"></script>
        <!--slideshow -->
        <script src="../scripts/slideshow.js"></script>
        <script src="../scripts/calendar.js"></script>
        <title>Welcome</title>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const slideContainer = document.getElementById("slideshow")                
                const slides = slideContainer.getElementsByClassName("slideshow-slide")
                const calendar = document.getElementById("calendar")

                setInterval(function() {
                    changeSlide(slideContainer, slides, DIRECTION_LEFT)
                }, 10000)

                loadCalendar(calendar, [])

            })
        </script>

    </head>
    <body>
        <?php require("./views/header.php"); ?>
        
        <div id="slideshow" class="slideshow">
            <div class="slideshow-slide">
                <img src="../images/slideshow-06.jpg">
            </div>
            <div class="slideshow-slide">
                <img src="../images/slideshow-07.jpg">
            </div>
            <div class="slideshow-slide">
                <img src="../images/slideshow-08.jpg"> 
            </div>
            <div class="slideshow-slide">
                <img src="../images/slideshow-09.jpg">
            </div>
            <div class="slideshow-slide">
                <img src="../images/slideshow-10.jpg">
            </div>

            <button class="slide-pre">&lt;</button>
            <button class="slide-next">&gt;</button>
            <div class="slide-selector"></div>
        </div>
        <div id="about" class="container">
            <h3>Get to know us</h3>
            <h1>ABOUT US</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit nisi sunt magnam ullam porro ea labore iusto eum error, consequatur, facere, aspernatur voluptatibus quaerat earum. Sint exercitationem numquam quas consequatur.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem minus placeat architecto ab sequi veritatis amet. Cumque dolor reiciendis eius maxime eveniet sit! Soluta natus nisi nobis earum numquam.
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsum placeat quas deserunt at, id consequuntur minus totam, vel sunt sequi delectus commodi aliquam? Illo dolore iure doloribus dolorem esse! 
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quod pariatur in non totam aliquam labore libero magnam, aperiam voluptatum provident cumque dicta reprehenderit quasi nihil ipsum velit ipsam blanditiis.
                <br><br>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci sed officiis quibusdam consectetur dolorum tenetur, aperiam aspernatur iure itaque cupiditate, vero repellat enim perferendis? Cum tenetur voluptatibus odit accusantium esse!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et dolorem magnam eaque aut. Earum ipsa excepturi inventore nemo consectetur repellat ipsam facilis nulla ipsum quidem, in sunt molestias? Deleniti, magni.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus perspiciatis omnis autem vitae reiciendis quos quisquam corrupti a molestias consequatur harum laudantium id dolorum hic, dicta nobis quasi delectus voluptas.
            </p>
            <a href="/">Learn more...</a>
        </div>
        <br><br>
        <section id="info">
            <div class="container">
                <h3>OUR EVENTS</h3>
                <img src="../images/info-pic-01.jpg">
                <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi tenetur doloremque quidem sed obcaecati aut quisquam pariatur veniam, itaque accusantium iste consequuntur reprehenderit. Animi ex totam aut perferendis magni recusandae.</p>
            </div>
            <div class="container">
                <h3>POPULAR RIDES</h3>
                <img src="../images/info-pic-02.jpg">
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing el0it. Velit, quod? Cumque, ipsa! Porro culpa minus tempore temporibus fuga nisi! Fugiat fuga eius sed assumenda quia alias repellendus excepturi voluptate incidunt.</p>
            </div>
            <div class="container">
                <h3>SPECIAL OFFERS</h3>
                <img src="../images/info-pic-03.jpg">
                
                <br>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor possimus suscipit eius optio ut consequatur animi nemo fugiat error, nam quam aspernatur magnam, ea doloribus. Nulla inventore esse repellendus ex.</p>
            </div>
        </section>
        <br>
        <section id="reviews" class="container">
            <h3>How travellers think about us</h3>
            <hr><br><br>
            <div id="review-slideshow" class="slideshow">
            <div class="slideshow-slide">
                <img src="../images/slideshow-07.jpg">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto fugit aliquam velit atque ex explicabo voluptas similique rerum earum labore qui, inventore maiores ullam quibusdam? Delectus excepturi eveniet natus sed.</p>
            </div>
            <div class="slideshow-slide">
                <img src="../images/slideshow-06.jpg">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fuga ex nemo temporibus esse eius quod excepturi delectus molestiae, voluptatum aperiam in natus ducimus nulla minus nostrum? Delectus, alias numquam.</p>
            </div>
            <div class="slideshow-slide">
                <img src="../images/slideshow-08.jpg">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum asperiores eligendi aut quae ut, architecto soluta accusantium maxime nam recusandae optio maiores dolores, quisquam quam ad dolor sapiente pariatur earum?</p>
            </div>
            <div class="slideshow-slide">
                <img src="../images/slideshow-09.jpg">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium sint consequuntur, veritatis laudantium ut minus, id tenetur sequi blanditiis dolores cumque. Accusantium aut corporis non dolorem. Sit possimus laboriosam ipsum?</p>
            </div>
            <div class="slideshow-slide">
                <img src="../images/slideshow-10.jpg">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consequuntur voluptas odit quod corrupti corporis, accusamus sunt delectus modi dolore, vero sequi cupiditate eius. Culpa asperiores ratione harum unde et!</p>
            </div>

            <button class="slide-pre">&lt;</button>
            <button class="slide-next">&gt;</button>
            <div class="slide-selector"></div>
            <br><br><br>
        </div>
        </section>
        <?php require("./views/footer.php"); ?>

    </body>
</html>