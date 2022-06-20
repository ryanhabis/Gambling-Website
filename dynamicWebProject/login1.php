<?php
if(isset($_POST['submit'])==NULL)
{
    $theError = '';

    $baddata = 2;
}

if($baddata == 1)
{
    $theError = 'Either the password or user name is incorrect';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="JavaScript/login.js"></script>
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
<main>
    <header>
        <h1 class = center>Ryan's casino royal</h1>
<!--        <img src="../images/spinningCoin.gif" class="center"/>-->
    </header>
    <?php
    include("include/nav_login.php");
    ?>


    <article>
    <h1>Welcome to the casino</h1>

    <h3>Complete the table below to use this website</h3>
        <h1>
            <div id = "errorDisplay"><?php echo $theError; ?></div>
        </h1>

        <h1>Sign In </h1>

        <form action="login2.php" method="post">
            <label>Username:</label> <input type="email" name="theUser" id="theUser" maxlength="254" size="45" required autofocus /> <br />
            <label>Password:</label> <input type="password" required name="thePassword" id="thePassword" /> <br /><br />

            <input type="submit" value="Sign In" name="submit" />
        </form>

        <?php
        include("include/footer.php");
        ?>

</article>
</main>
</body>

</html>