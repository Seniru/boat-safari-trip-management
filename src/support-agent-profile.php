<?php
    //$restrict_page = "support_agent";

    require("auth.php");
    require("libs/handleProfiles.php");


    $profile = NULL;
    $view_mode = is_viewing_own_profile($userid, $role, $_GET["id"], "support_agent");
    
    switch ($view_mode) {
        case UNAUTHORIZED_VIEW:
            header("Location: homepage.php");
            exit();
            break;
        case VIEW_OWN_PROFILE:
            $res = $conn->query("SELECT * FROM CustomerSupportAgent WHERE StaffID=$userid;");
            $profile = $res->fetch_assoc();
            break;
        case VIEW_OTHER_PROFILE:
            $res = $conn->query("SELECT * FROM CustomerSupportAgent WHERE StaffID={$_GET["id"]}");
            if ($res->num_rows == 0) {
                echo "<script>
                    alert('Profile not found!');
                    window.location.href='homepage.php';
                </script>";
                exit();
            } else {
                $profile = $res->fetch_assoc();
            }              
        }

       // Change password
       if (isset($_POST["reset-password"])) {
        $new_pass = $_POST["password"];
        $success = $conn->query("UPDATE CustomerSupportAgent SET Password='$new_pass' WHERE StaffID=$userid");
        if ($success) {
            echo "<script>alert('Password updated!')</script>";
        } else {
            echo "<script>alert('Operation failed!')</script>";
        }
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
		<!--font awesomem-->
		<script src="https://kit.fontawesome.com/36fdbb8e6c.js" crossorigin="anonymous"></script>
        <script src="../scripts/change-pass-util.js"></script>
        <title>Profile | Customer Support Agent</title>
        <style>
            .profilepicture{
                width:150px;
                height:100px;
            }

            #profile {
                width: 50%;
                margin-left: 25%;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php require("./views/header.php") ?>
        <section id="profile">
            <h2 style="color: white;">Profile Settings</h2>
            <div class="container">
                <img class="profilepicture" src="../images/user-solid.svg">
                <h3><?php echo $profile["Name"] ?></h3>
                <h3>Customer Support Agent</h3>
                <h3><?php echo $profile["Gender"] == "M" ? "Male" : "Female"; ?></h3>
                <h3>Age: <?php echo (new DateTime())->diff(new DateTime($profile["DateOfBirth"]))->y; ?></h3>
                <?php
                    if ($view_mode == VIEW_OWN_PROFILE) {
                        echo "
                            <button onclick='changePassword(event, \'support-agent-profile.php\')'>
                                Change password
                                <i class='fa-solid fa-user-pen'></i><br>
                            </button>
                        ";
                    }
                ?>
            </div>
            <br><br><br>
        </section>
        

        <?php require("./views/footer.php") ?>

    </body>
</html>