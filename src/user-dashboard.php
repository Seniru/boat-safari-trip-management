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
    <link rel="stylesheet" href="../styles/user-dashboard.css">
    <!--font awesomem-->
    <script src="https://kit.fontawesome.com/36fdbb8e6c.js" crossorigin="anonymous"></script>
    <title>User Dashboard</title>
</head>

<body>
    <?php require("./views/header.php") ?>

    <section id="packages">
        <h3 style="color: white;">Our packages</h3>
        <div class="container">
            <div class="image-container">
                <img src="../images/slideshow-00.jpg">
            </div>
            <div class="package-details">
                <h3>Title</h3>
                <span>
                    <b>Location:</b>
                    Location
                    <br>
                    <b>Boat type:</b>
                    Boat type
                    <br>
                    <b>Facilities:</b>
                    <ul>
                        <li>Facility #1</li>
                        <li>Facility #2</li>
                        <li>Facility #3</li>
                    </ul>
                </span>
                <div class="price">
                    From <span class="money">$99.99</span>
                </div>
            </div>
            <button> Select </button>
        </div>
        <div class="container">
            <div class="image-container">
                <img src="../images/slideshow-00.jpg">
            </div>
            <div class="package-details">
                <h3>Title</h3>
                <span>
                    <b>Location:</b>
                    Location
                    <br>
                    <b>Boat type:</b>
                    Boat type
                    <br>
                    <b>Facilities:</b>
                    <ul>
                        <li>Facility #1</li>
                        <li>Facility #2</li>
                        <li>Facility #3</li>
                    </ul>
                </span>
                <div class="price">
                    From <span class="money">$99.99</span>
                </div>
            </div>
            <button> Select </button>
        </div>
        <div class="container">
            <div class="image-container">
                <img src="../images/slideshow-00.jpg">
            </div>
            <div class="package-details">
                <h3>Title</h3>
                <span>
                    <b>Location:</b>
                    Location
                    <br>
                    <b>Boat type:</b>
                    Boat type
                    <br>
                    <b>Facilities:</b>
                    <ul>
                        <li>Facility #1</li>
                        <li>Facility #2</li>
                        <li>Facility #3</li>
                    </ul>
                </span>
                <div class="price">
                    From <span class="money">$99.99</span>
                </div>
            </div>
            <button> Select </button>
        </div>
    </section>
    <form method="POST" action="payment.php">
        Search Location
        <br>
        <select name="location"> 
            <option>Location #1</option>
            <option>Location #2</option>
            <option>Location #3</option>
        </select>
        <br><br>
        <table>
            <tr>
                <th>Date</th>
                <th>Price & Deails</th>
                <th>Time</th>
                <th>Passengers</th>
                <th>Boat</th>
            </tr>
            <tr>
                <td>
                    <br>
                    <input type="date" name="date">
                </td>
                <td>
                    <br>
                    <select name="deals">
                        <option>$30 without TAX</option>
                        <option>Deal #2</option>
                        <option>Deal #3</option>
                    </select>
                </td>
                <td>
                    <br>    
                    <input type="time" name="time">
                </td>
                <td>
                    Age 12+
                    <input type="number">
                    <br>
                    Age 0-12
                    <input type="number">
                </td>
                <td>
                    <br>
                    <select name="boat-type">
                        <option value="swan">HANSA boat</option>
                        <option>Boat #2</option>
                    </select>
                </td>
            </tr>
        </table>
        <br><hr>
        <h4>Facilities</h4>
        <input type="checkbox"> Facility #1<br>
        <input type="checkbox"> Facility #2<br>
        <input type="checkbox"> Facility #3<br>
        <input type="submit" value="BOOK NOW">
    </form>
    <br>
    <section id="trip-details-container">
        <h3 style="text-align: center; color: white;">Your trip</h3>
        <div class="container" id="trip-details">
            <div class="image-container">
                <img src="../images/slideshow-00.jpg">
            </div>
            <div id="trip-info">
               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error deleniti facilis reiciendis quod mollitia quam, officiis iusto eligendi eius voluptates repudiandae fuga veritatis suscipit temporibus laudantium minus corporis velit labore?
               <!--todo: replace this with real data-->
            </div>
        </div>
    </section>
    <br><br><br>

    <?php require("./views/footer.php") ?>

</body>

</html>