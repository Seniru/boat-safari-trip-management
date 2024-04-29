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
        </style>
    </head>
    <body>
        <?php require("./views/header.php") ?>
        <!-- body content -->
        <h2>Customer Support Page</h2>
        <div class="container">
            <form>
            <label for="name">Name:</label><br>
            <input type="text" id="name" Name="name" placeholder="Enter your name"><br>
            <label for="Email">Email:</label><br>
            <input type="text" id="Email" name="Email" placeholder="Enter your Email"><br>
            <label for="Contact Number">Contact Number:</label><br>
            <input type="text" id="Contact Number" name="Contact Number"placeholder="Enter your contact number"><br>
            <label for="Request/Inquiry Type">Request/Inquiry Type:</label><br>
            <select name="type">
                <option value="inquiries">Inquiries</option>
                <option value="complaints">Complaints</option>
            </select>
            <br>
            <label for="Subject">Subject:</label><br>
            <input type="text" id="Subject" name="Subject"placeholder="Type here"><br>
            <label for="Message">Message:</label><br>
            <textarea name="content" rows="8" cols="100"placeholder="Type here"></textarea><br>
            <input type="submit" value="Submit">
        </form>
        </div>

        <?php require("./views/footer.php") ?>

    </body>
</html>