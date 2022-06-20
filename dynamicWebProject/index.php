<?php
//require_once('include/connection.php');

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/index.css">
<!--    <link rel="stylesheet" href="css/slideShow.css">-->
<!--    <link href="JavaScript/slideShow.js">-->

</head>
<body>

<main>
<!-- Here is our main header that is used across all the pages of our website -->

<header>
    <h2>Welcome to the casino royal</h2>
</header>

    <!--
    This is the navigation bar
    -->
    <?php
    include("include/nav_index.php");
    ?>
    <article>

        <h2>Welcome to Ryan's casino</h2>

        <p>In order to play on this website please login</p>

        <h3>1) Acceptance and Amendment of the Agreement</h3>

        <ol>
            <li>If you do not agree to any terms or conditions of the Agreement you should immediately stop using the Site and the Services.</li>
            </br></br>
            <li>We may amend the Agreement from time to time and any changes made shall come into effect 14 days after being published on the Site or earlier if required by any applicable law, regulation or directive. You agree that your access or use of the Site or your use of the Services following such period will be deemed to constitute your acceptance of the amendments made to the Agreement.</li>
            </br></br>
            <li>It remains your responsibility to ensure that you are aware of the correct, current terms and conditions of Agreement and we advise you to check the Terms of Service and the Privacy Policy on a regular basis.</li>
            </br></br>
            <li>We may terminate or suspend your use of the Services and/or this Site at any time, at our sole discretion and for any reason which may include but is not limited to a breach by you of the Agreement without providing any financial compensation to you.</li>
        </ol>

        <h1>Either <u>Sign Up</u> or <u>Sign In</u> to <span>member_table</span> database table</h1>

        <p>
            <a href="signup1.php" target="_blank">Sign Up</a>&nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;
            <a href="login1.php" target="_blank">Sign In</a>
        </p>

        </br>
        <img src="images/spinningCoin.gif" height="150" width="150"/><img src="images/spinningCoin.gif" height="150" width="150"/><img src="images/spinningCoin.gif" height="150" width="150"/>
    </article>
    <!--
    This is login button
    -->
<!--    <button class="button"onclick="document.getElementById('mouseClick').style.display='block'" style="width:auto;">Login</button>-->

    <!--
?    This is the audio once a button is clicked.
!   Enable me once you're done
    -->
<!--    <audio id="audio" src="../audio/retro.wav"></audio>-->

<!--    <div id="mouseClick" class="modal">-->
<!--
!        Not finished
-->
<!--        <form class="modal-content animate" action="/action_page.php" method="post">-->
<!--            <div class="imgcontainer">-->
<!--                &lt;!&ndash;  <img id="astronaut" src="../images/spinman.png" height="100" width="50"/>&ndash;&gt;-->

<!--                &lt;!&ndash;-->
<!--                    These are the two images for within the login form-->
<!--                &ndash;&gt;-->
<!--                <img src="../images/loginPic.gif" height="320" width="1150"/>-->
<!--                <img id = "astronaut" src="../images/floatingAstronautTwo.gif" height="401" width="470"/>-->
<!--                <br/>-->
<!--            </div>-->
<!--
!           User name and password
-->
<!--            <div class="container">-->
<!--                <label for="uname"><b>Username</b></label>-->
<!--                <input type="text" placeholder="Enter Username" name="uname" required>-->

<!--                <label for="psw"><b>Password</b></label>-->
<!--                <input type="password" placeholder="Enter Password" name="psw" required>-->

<!--                <button type="submit">Login</button>-->
<!--                <button type="register">Register</button>-->
<!--                    &lt;!&ndash;-->
<!--                    This is the checkbox that remembers the user's login details.-->
<!--                    &ndash;&gt;-->
<!--                <label>-->
<!--                    <input type="checkbox" checked="checked" name="remember"> Remember me-->
<!--                </label>-->
<!--            </div>-->
            <!--
                        This is the Cancel and forgot password button at the end of the form.
!                        Not finished
            -->
<!--            <div class="container" style="background-color:#f1f1f1">-->
<!--                <button type="button" onclick="document.getElementById('mouseClick').style.display='none'" class="cancelbtn">Cancel</button>-->
<!--                <span class="psw">Forgot <a href="#">password?</a></span>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->


<!--
    Start of slide show
!    Not finished
 -->

<!--    <div class="slideshow-container">-->
<!---->
<!--        <div class="mySlides fade">-->
<!--            <div class="numbertext">1 / 3</div>-->
<!--            <img src="../images/spinningCoin.gif" style="width:100%">-->
<!--            <div class="text">Caption Text</div>-->
<!--        </div>-->
<!---->
<!--        <div class="mySlides fade">-->
<!--            <div class="numbertext">2 / 3</div>-->
<!--            <img src="../images/floatingAstronaut.gif" style="width:100%">-->
<!--            <div class="text">Caption Two</div>-->
<!--        </div>-->
<!---->
<!--        <div class="mySlides fade">-->
<!--            <div class="numbertext">3 / 3</div>-->
<!--            <img src="../images/pieceAstro.gif" style="width:100%">-->
<!--            <div class="text">Caption Three</div>-->
<!--        </div>-->
<!---->
<!---->
<!--        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>-->
<!--        <a class="next" onclick="plusSlides(1)">&#10095;</a>-->
<!---->
<!--    </div>-->
<!--    <br>-->
<!---->
<!--    <div style="text-align:center">-->
<!--        <span class="dot" onclick="currentSlide(1)"></span>-->
<!--        <span class="dot" onclick="currentSlide(2)"></span>-->
<!--        <span class="dot" onclick="currentSlide(3)"></span>-->
<!--    </div>-->

<!--
    End of slide show
-->
    <footer>
    <p>©Copyright 2020 by Ryan Habis. All rights reversed.</p>
</footer>
    </main>

</body>

</html>