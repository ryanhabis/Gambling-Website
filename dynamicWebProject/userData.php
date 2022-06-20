<?php
require_once ('include/connection.php');

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
        Administrator
    </title>
    <link rel="stylesheet" href="css/userData.css">


    <!--    <style>-->
    <!--        body {background-color: yellow}-->
    <!--        label {width: 250px; display: inline-block}-->
    <!--        #logout {background: red; color: yellow; border-radius: 5px; border: 5px solid black; box-shadow: 5px 5px 10px #0000ff}-->
    <!--        .theUser {font-size: 60px; text-shadow: 5px 5px 5px #ff0000; color: white}-->
    <!--    </style>-->

    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
<main>
    <header>
        <h1>Welcome, <span class="theUser"><?php echo $_SESSION['login_user'] ?></span>! You have successfully signed in as ADMINISTRATOR</h1>

    </header>
    <?php
    include("include/nav_admin.php");
    ?>
    <article>


        <?php
        $query2 = "SELECT * FROM member_table";
        $statement = $db->prepare($query2);
        $statement->execute();
        $all_queries2 = $statement->fetchAll();
        $statement->closeCursor();

        echo "
                <table id='customerDetails' border='1'>
                <tr>
                    <th>The user ID:</th>
                    <th>The username <br> (= email):</th>
                    <th>Customer Password:</th>
                    <th>User address</th>
                    <th>User's phone number</th>
                    <th>user status</th>
                </tr>";

        $howManyRecords2=0;

        foreach ($all_queries2 as $one_query2) :

            echo "
                <tr>
                    <td>" . $one_query2['id'] . "</td>
                    <td>" . $one_query2['user_name'] . "</td>
                    <td>" . $one_query2['password_hashed'] . "</td>
                    <td>" . $one_query2['user_address'] . "</td>
                    <td>" . $one_query2['user_phone'] . "</td>
                    <td>" . $one_query2['user_status'] . "</td>
                </tr>";

            $howManyRecords2++;
        endforeach;

        echo "</table>";

        if ($howManyRecords2==1)
        {
            echo "<p>There is " . $howManyRecords2 . " record in this table.</p>";
        }
        else
        {
            echo "<p>There are " .$howManyRecords2 . " record in this table.</p>";
        }
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





