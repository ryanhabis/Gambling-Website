<?php
session_start();

if (empty($_SESSION['login_user'])) {
    header("Location: login1.php");
    exit;
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8" />

    <title>
        Ordinary User
    </title>
    <link rel="stylesheet" href="css/ordinaryUser.css">
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

<!--Taken from youtube -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/MoI8Z8Dq1yY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <div class = 'productDetails'>
            <label class = 'theProduct'><u>Product ID</u> &nbsp;&nbsp;</label>5;<br><br>
            <label class = 'theProduct'><u>Product Name</u> &nbsp;&nbsp;</label>Painting 2;<br><br>
            <label class = 'theProduct'><u>Product Image</u> &nbsp;&nbsp;</label><img src='images/products/paint2.jpg' width='250' /><br><br>
            <label class='theProduct'><u>Product Description</u>: &nbsp;&nbsp;</label>melts into toast<br><br>
            <label class='theProduct'><u>Product Description</u>: &nbsp;&nbsp;</label>19500000.00;<br><br><br><br><br>
        </div>
        <b id="logout"><a href="logout.php">Log Out</a></b>

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

    </article>
</main>
</body>
</html>

<script>
    function getCookieId() {
        return /SESS\w*ID=([^;]+)/i.test(document.cookie) ? RegExp.$1 : false;
    }

    document.getElementById("sessid_client1").innerHTML = getCookieId();
</script>





