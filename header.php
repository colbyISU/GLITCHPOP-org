<?php
    session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLITCHPOP.org</title>

    <link rel="icon" href="images/VALORANT.png">

    
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/collection.css" rel="stylesheet" type="text/css">
    <link href="css/list.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/util.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script> //Check if on mobile device.
        function detectmob() {
            if(window.innerWidth <= 800 || window.innerHeight <= 600) {
                return true;
                console.log("Mobile Device Detected.")
            } else {
                return false;
            }
        }

        if (detectmob()){
            window.location.replace("mobile.php");
        }
    </script>
</head>

<header class="sticky">
    <a href="index.php"><img class="logo" src="images/GLITCHPOP3D.png" alt="logo"></a>
    <nav>
        <ul class="navLinks">
            <li><a href="index.php" class="selected">HOME</a></li>
            <li><a href="#">SAVED</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </nav>
    <?php
        if (isset($_SESSION["useruid"])) {
            echo "<a class='loginButton' href='includes/logout.inc.php'><button>LOG OUT</button></a>";
            //For account name: $_SESSION["useruid"]
        } else {
            echo "<a class='loginButton' href='login.php'><button>LOG IN</button></a>";
        }
    ?>
 </header>


<body>
    <div class="wrapper">