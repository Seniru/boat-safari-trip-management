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
        <title>FAQ | Frequently Asked Questions</title>
        <style>
            h2 {
                color: white;
                margin-left: 15px;
            }

            #questions {
                position: relative;
                display: inline-block;
                width: 55%;
                padding: 10px;
            }

            #route-image {
                position: relative;
                display: inline-block;
                width: 40%;
                height: 100%;
                vertical-align: top;
                padding-top: 10px;
            }

        </style>
    </head>
    <body>
        <?php require("./views/header.php") ?>
        
        <h2>FAQ - Frequently asked questions</h2>
        <section id="questions">
            <div class="container">
                <h3>Cancellation</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla id atque doloremque dolor distinctio explicabo quod blanditiis odit ad molestias, quaerat architecto dolorum exercitationem sed, provident libero at esse autem.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, vero! Molestias voluptas assumenda beatae architecto minus sequi modi officia vero recusandae, dolorum vitae cumque similique molestiae ratione quaerat dignissimos voluptates.</p>
            </div>
            <br>
            <div class="container">
                <h3>Others</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur amet eius eos facilis vero sint natus sequi odio mollitia. Tenetur tempore magni rerum asperiores dignissimos adipisci enim error, alias temporibus?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est consectetur enim veniam eius, aspernatur dignissimos! Illo eius accusamus commodi, neque laborum officiis sequi recusandae! Ad deserunt quasi consequuntur exercitationem nobis.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eos incidunt dolore vero ad sed tempore culpa, eius natus aspernatur officiis, veritatis odio ut temporibus voluptate officia sunt esse facilis.</p>
            </div>
        </section>
        <img id="route-image" src="../images/route.jpg">

        <?php require("./views/footer.php") ?>

    </body>
</html>