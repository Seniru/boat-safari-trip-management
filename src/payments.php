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

        .container{
            background-color:#63667ca6;
            width:48%;
            position:relative;
            left:24.5%;
        }    

        #cdNO {
        background-image: url("../images/credit-card-solid (4).svg");
	    background-repeat: no-repeat;
	    background-position: 95% center;
        }
        #bank_confirm{
            
            
            background: linear-gradient(45deg,#00fffc,#0099cc) ;
            text-align: center;
            position: absolute;
            cursor: pointer;
            transition: 0.5s;
            border-radius:6px;
            margin-left: 407px;
            
        }

        .fa-brands {
            font-size:50px;
            text-align:unset;
            left: 33%;
            position: relative;
        }

        form {
            
            
            width: 50%;
            height: 80vh;
            left: 25%;
            position: relative;
        }

        h1{
            text-align:center;
            color:white;
        }

        h2{
            text-align:center;
            color:black;
        }

        h3{
            text-align:unset;
            left: 20%;
            position: relative;
        }

        input[type=text] {
            width: 388px;
            margin-left: 145px;
        }

        body{
                background-image: url("../images/pyment-background.jpg");
                background-size: cover;

             }

        #terms{

            margin-left: 145px;

        }     



        </style>
    </head>
    <body>

            
       
        <br>
        <h1>PAYMENT AND CONFIRMATION</h1>
        <form class="container">
        
        <br>
            <h2 id="caption"> Card Details </h2>
        <br>
        
        <h3>Card Number:</h3>
        <input type="text" name="cardnumber" id="cdNO" required><br>

        <h3>Expriy Date:</h3>
        <input type="text" name="exdate"  required><br>

        <h3>Security Code:</h3>
        <input type="text" name="securitycode"  required><br><br>

        <i class="fa-brands fa-cc-paypal"></i>
        <i class="fa-brands fa-cc-visa"></i>
        <i class="fa-brands fa-cc-mastercard"></i>
        <i class="fa-brands fa-cc-amazon-pay"></i>

        <br><br>

        <input type="checkbox" name="agree">
        I Agree to fiit <a href="policy.php">Terms of use</a>
        
        <br><br>
        <input id="bank_confirm" type="submit" name="submit" value="Confirm Payment">



    </form>
        
        <!-- body content -->

        

    </body>
</html>