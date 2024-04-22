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
		<link rel="stylesheet" href="styles/components.css">
		<!--font awesomem-->
		<script src="https://kit.fontawesome.com/36fdbb8e6c.js" crossorigin="anonymous"></script>
        <!--slideshow -->
        <script src="../scripts/slideshow.js"></script>
        <title>Welcome</title>

        <style>

            #slideshow {
                width: 100%;
                height: 100%;
                background-color: grey;
                position: absolute;
            }

            .slideshow-slide {
                display: none;
            }

            .slideshow-slide.active-slide {
                display: block;
            }

            .current-slide-indicator {
                background-color: red;
            }

        </style>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const slideContainer = document.getElementById("slideshow")
                const slides = slideContainer.getElementsByClassName("slideshow-slide")
                setInterval(function() {
                    changeSlide(slideContainer, slides, DIRECTION_LEFT)
                }, 6000)
            })
        </script>

    </head>
    <body>
        <!--?php require("./views/header.php"); ?-->
        
        <div id="slideshow" class="slideshow">
            <div class="slideshow-slide">
                Slide #1
            </div>
            <div class="slideshow-slide">
                Slide #2
            </div>
            <div class="slideshow-slide">
                Slide #3
            </div>
            <div class="slideshow-slide">
                Slide #4
            </div>
            <div class="slideshow-slide">
                Slide #5
            </div>
            <div class="slideshow-slide">
                Slide #6
            </div>
            <div class="slideshow-slide">
                Slide #7
            </div>
            <div class="slideshow-slide">
                Slide #8
            </div>
            <button class="slide-pre">&lt;</button>
            <button class="slide-next">&gt;</button>
            <div class="slide-selector"></div>
        </div>


        <!--?php require("./views/footer.php"); ?-->

    </body>
</html>