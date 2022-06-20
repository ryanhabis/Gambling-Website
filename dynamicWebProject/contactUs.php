<?php
session_start();

if (empty($_SESSION['login_user'])) {
    header("Location: login1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="JavaScript/login.js"></script>
    <link rel="stylesheet" href="css/contactUs.css">

</head>
<body>

<main>
    <header>
        <h1 class = center>Ryan's casino royal</h1>
        <h1>Welcome, <span class="theUser"><?php echo $_SESSION['login_user'] ?></span>! You have successfully signed in as an ORDINARY USER</h1>
    </header>

    <?php
    include("include/nav_contactUs.php");
    ?>

    <div id="helpMessage"></div>

    <article>
        <h1>Welcome to the casino</h1>

        <h3>Complete the table below to use this website</h3>
        <center><form>
                <table width="600" border="1" cellpadding="5"
                       cellspacing="5">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" id="Name"
                                   name="name"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" id="Email"
                                   name="email"></td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td><input type="text" id="Mobile"
                                   name="mobile"></td>
                    </tr>
                    <tr>
                        <td>How did you find us</td>
                        <td><input type="radio" id="Google"
                                   name="marketing" value="Google"><label for="Google">
                                Google</label><br>
                            <input type="radio" id="Magazine"
                                   name="marketing" value="Magazine"><label for="Magazine">
                                Magazine</label><br>
                            <input type="radio" id="Newspaper"
                                   name="marketing" value="Newspaper"><label for="Newspaper">
                                Newspaper</label><br>
                            <input type="radio" id="Friend"
                                   name="marketing" value="Friend"><label for="Friend">
                                Friend</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>Your Message</td>
                        <td><textarea id="message" name="message"
                                      rows="10" cols="50"
                            ></textarea></td>
                    </tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type="reset" value="Reset Form">&nbsp;
                        <input type="Submit" value="Submit">
                    </td>
                    </tr>
                </table></center>
        <?php
        include("include/footer.php");
        ?>
    </article>
</main>
</body>

</html>