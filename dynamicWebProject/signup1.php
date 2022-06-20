<?php

if (isset($_POST['submit'])==NULL)
{
    $error = '';
    $bad_data = 2;
}

if ($bad_data == 1)
{
    $error = 'This account already exists: try again';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="JavaScript/login.js"></script>
    <link rel="stylesheet" href="css/signup1.css">

</head>
<body>

<main>
    <header>
        <h1>Welcome to the casino</h1>
        <h1>
            <div id="errorDisplay">
                <?php
                echo $error;
                ?>
            </div>
        </h1>
        <!--        <img src="../images/spinningCoin.gif" class="center"/>-->
    </header>

    <?php
    include("include/nav_signup.php");
    ?>
    <div id="helpMessage"></div>

    <article>
        <h1>Welcome to the casino</h1>

        <h3>Complete the table below to use this website</h3>
        <form method="post" action="signup2_insert.php" onsubmit="return formCheck()">

            <label onmouseover="showHelp(8)" onmouseout="hideHelp()">Your Age:</label>
            <input type="age" id="yourAge" name="yourAge" placeholder="You must be over 18">
            <br><br>

            <button class="center" onclick="checkAge()">Age check</button>

            <br><br>

            <label onmouseover="showHelp(1)" onmouseout="hideHelp()">Your Name:</label>
            <input type="text" id="yourName" name="yourName" placeholder="At least 5 characters" required disabled onblur= "disableBlur()" required pattern="[a-zA-Z]+"><br><br>


            <label onmouseover="showHelp(2)" onmouseout="hideHelp()">Your Email:</label>
            <input type="email" id="yourEmail" name="theUserSignup" placeholder="must be '@' in it" required disabled onblur=><br><br>

            <label onmouseover="showHelp(3)" onmouseout="hideHelp()">Your Password:</label>
            <input type="password" id="yourPassword1" name="yourPassword1" required disabled onblur= "disableBlur()" placeholder="At least 9 characters" required onkeyup="passwordStrengthTest()" onfocus="disableConfirmPassword()">
            &nbsp;<span id="showPasswordValidity" class="empty">. . . . . . . . . . . . .</span><br><br>

            <label onmouseover="showHelp(4)" onmouseout="hideHelp()">Confirm Password:</label>
            <input type="password" id="yourPassword2" name="thePasswordSignup" placeholder="At least 9 characters" required disabled onblur="checkConfirmPassword()"><br><br>

            <label>Address:</label>
            <input type="text" maxlength="75" size="75" required placeholder="up to 75 characters" name="theAddressSignup" id="theAddressSignup" />

            <br />

            <label>Phone Number (digits only):</label>
            <input type="number" required min="10000000" max="999999999999999" placeholder="between 8 - 15 digits" step="1" name="thePhoneSignup" id="thePhoneSignup" />

            <br>
            <br>

            <label onmouseover="showHelp(5)" onmouseout="hideHelp()">Your Country:</label>
            <select id="yourCountry" name="yourCountry" required disabled onblur= "disableBlur()" required onchange="showInternationalDiallingCode()">
                <option value="">Pick a country...</option>
                <option value="Ireland-353">Ireland</option>
                <option value="UK-44">UK</option>
                <option value="USA-1">USA</option>
            </select><br><br><br><br><br>

            <label onmouseover="showHelp(5)" onmouseout="hideHelp()">Your Phone Number:</label>
            <span id="showIntCode"></span>
            <input type="number" id="yourPhoneNumber" name="yourPhoneNumber" placeholder="Code and Number: no spaces or - or ()" required disabled><br><br>

            <label onmouseover="showHelp(6)" onmouseout="hideHelp()">CreditCard Type:</label>
            <input type="radio" name="cardType" id="cardVisa" value="visa" required disabled onblur= "disableBlur()" onclick="setCardNumberTextbox(1)" required>Visa &nbsp;
            <input type="radio" name="cardType" id="cardMastercard" value="mastercard" required disabled onblur= "disableBlur()" onclick="setCardNumberTextbox(2)" required>Mastercard &nbsp;
            <input type="radio" name="cardType" id="cardDiners" value="diners" required disabled onblur= "disableBlur()" onclick="setCardNumberTextbox(3)" required>Diners &nbsp;
            <input type="radio" name="cardType" id="cardAmExpress" value="amExpress" required disabled onblur= "disableBlur()" onclick="setCardNumberTextbox(4)" required>Am. Express<br><br>

            <label onmouseover="showHelp(7)" onmouseout="hideHelp()">CreditCard Number:</label>
            <input type="number" id="yourCCNumber" name="yourCCNumber" placeholder="CC type first" required disabled pattern="" min="1" max="2"><br><br><br><br>

            <footer>
                <input class="center" required disabled onblur= "disableBlur()" id = "submitBtn" type="submit" value="Sign Up" name="submit" />
                <br><input class="center" required disabled onblur= "disableBlur()" id = "resetBtn" type="reset" value="reset Form">
            </footer>
        </form>
        <?php
        include("include/footer.php");
        ?>
    </article>
</main>
</body>

</html>