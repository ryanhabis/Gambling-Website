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
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8" />

    <title>
        Ordinary User
    </title>
    <link rel="stylesheet" href="css/products.css">
    <style>
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
        }
    </style>

</head>
<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
<main>
    <header>
        <h1>Welcome, <span class="theUser"><?php echo $_SESSION['login_user'] ?></span>! You have successfully signed in as an ORDINARY USER</h1>
    </header>
    <?php
    include("include/nav_ordinary.php");
    ?>
    <article>

        <img src="https://awsimages.detik.net.id/visual/2017/05/22/867320bb-87d9-4714-babd-a71bde0d87df_169.jpg" alt="External Source" width="300"><br>

        <!--
		<label>SID Server (Session ... PHP):</label>
		<span id="sessid_server"><?php echo session_id(); ?></span><br /><br />

        <label>SID Client (Cookie ... JavaScript):</label>
		<span id="sessid_client1"></span><br />

        <label>SID Client (Cookie ... PHP):</label>
		<span id="sessid_client2"><?php echo $_COOKIE['PHPSESSID'] ?></span>
		-->

        <br /><br /><br />
        <hr /><hr />

        <p>what you can do:</p>

        <ol>
            <li>UPDATE your user information tables (including personal details of their own account (e.g. phone number, password)</li>
            <li>Delete info about yourself.</li>
            <li>Play the spinning wheel game</li>
            <li>contact us if you are facing and technical problems or suggestions on improvement</li>
            <li>Terms and condition.</li>
        </ol>

        <hr /><hr />
        <br /><br /><br />
        <b id="logout"><a href="logout.php">Log Out</a></b>

        <h1>The <span class="DB_table_heading">PRODUCT</span> Table: 1PK, no FKs</h1>

        <!-- ================================ INSERT PHP CODE BLOCK 1 HERE ============================================== -->
        <?php
        $query1 = "SELECT * FROM product";
        $statement = $db->prepare($query1);
        $statement->execute();
        $all_queries1 = $statement->fetchAll();
        $statement->closeCursor();

        $howManyRecords1=0;

        foreach ($all_queries1 as $one_query1) :
            ?>

            <div class = 'productDetails'>
                <label class = 'theProduct'><u>Product ID</u> &nbsp;&nbsp;</label><?php echo $one_query1['product_id']; ?>;<br><br>
                <label class = 'theProduct'><u>Product Name</u> &nbsp;&nbsp;</label><?php echo $one_query1['product_name']; ?>;<br><br>
                <label class = 'theProduct'><u>Product Image</u> &nbsp;&nbsp;</label><?php echo "<img src='images/products/" . $one_query1 ['product_image_name'] . "' width='250' />";?><br><br>
                <label class='theProduct'><u>Product Description</u>: &nbsp;&nbsp;</label><?php echo $one_query1['product_description'];?><br><br>
                <label class='theProduct'><u>Product Description</u>: &nbsp;&nbsp;</label><?php echo $one_query1 ['product_price']; ?>;<br><br><br><br><br>
            </div>

            <?php
            $howManyRecords1++;
        endforeach;

        if ($howManyRecords1==1)
        {
            echo "<p class='postGrid'>There is " . $howManyRecords1 . " record in this table. </p>";
        }
        ?>

        <!--  https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto  -->
        <h2>Automatic Slideshow</h2>
        <p>Change image every 2 seconds:</p>

        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/raining-money.gif" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/casino.gif" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/spinningCoin.gif" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
        <?php
        include("include/footer.php");
        ?>
    </article>
</main>
</body>
</html>





