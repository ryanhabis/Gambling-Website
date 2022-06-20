<?php
session_start();

if (empty($_SESSION['login_user'])) {
    header("Location: login1.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />

    <title>
        Status UNKNOWN
    </title>

    <link rel="stylesheet" href="css/administrator.css">

    <script>
    </script>

    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
<main>
    <header>
        <h1>Welcome, <span class="theUser"><?php echo $_SESSION['login_user'] ?></span>! You have successfully signed in: USER STATUS UNKNOWN</h1>
    </header>
<?php
include("include/nav_no_status.php");
?>


<label>SID Server (Session ... PHP):</label>
<span id="sessid_server"><?php echo session_id(); ?></span><br /><br />

<label>SID Client (Cookie ... JavaScript):</label>
<span id="sessid_client1"></span><br />

<label>SID Client (Cookie ... PHP):</label>
<span id="sessid_client2"><?php echo $_COOKIE['PHPSESSID'] ?></span>

<br /><br /><br />
<hr /><hr />

<p>Typically, from a webpage a "STATUS-UNKNOWN" USER would be able to:</p>

<ol>
    <li>SELECT: probably nothing</li>
    <li>UPDATE: probably nothing</li>
    <li>INSERT: probably nothing</li>
    <li>DELETE: probably nothing</li>
</ol>

<p>i.e. PRACTICALLY NO webpage links for SIUD from here</p>

<hr /><hr />
<br /><br /><br />
<b id="logout"><a href="logout.php">Log Out</a></b>

<?php
echo "<hr /><hr /><hr /><h1>Location of SESSION COOKIE {session.save_path}: ". session_save_path() . "</h1>";

echo "<h2>You can also find it if you go into browser settings, display all cookies, find 'localhost', and PHPSESSID.</h2>";

//echo phpinfo();
?>
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






