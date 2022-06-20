<?php
session_start();

if (empty($_SESSION['login_user'])) {
    header("Location: login1.php");
    exit;
}

// CONNECT TO THE DATABASE FROM AN INCLUDE FILE
require_once('include/connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spin the wheel</title>
    <link rel="stylesheet" href="css/spinningWheel.css">
</head>
<body>


<main>
    <header>
        <h1>Welcome, <span class="theUser"><?php echo $_SESSION['login_user'] ?></span>! You have successfully signed in as an ORDINARY USER</h1>
    </header>

    <?php
    include("include/nav_spin.php");
    ?>
    <article>

        <h1 id="theHeading">Spin the wheel</h1>


        <br>

        <br>

        <img class = "astronaut" src="images/Arrows_down_animated.gif" height="200" width="200"/>
        <p id="storeImage">
            <img src="images/spinningWheel.png" height="512" width="512" id="spinningImage"/>
        </p>

        <p id="showRotation"></p>
        <p id="buttonStore">
            <button class="center" id="theButton">Click to Stop the Spin</button>

            <script src="JavaScript/spinningWheel.js"></script>

        </p>
        </br>
        <img src="images/spinningCoin.gif" height="150" width="150"/>
        <img src="images/spinningCoin.gif" height="150" width="150"/>
        <img src="images/spinningCoin.gif" height="150" width="150"/>
    </article>

        <footer>
            <p>©Copyright 2020 by Ryan Habis. All rights reversed.</p>
        </footer>
</main>
</body>
</html>