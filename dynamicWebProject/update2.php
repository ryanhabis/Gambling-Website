<?php
require_once ('include/connection.php');
$theCustomerToBeUpdated = $_POST["pickingUser"];

session_start();

if (empty($_SESSION['login_user'])) {
    header("Location: login1.php");
    exit;
}

// CONNECT TO THE DATABASE FROM AN INCLUDE FILE
require_once('include/connection.php');


?>
<!DOCTYPE html>
<html>
<head>
    <title>Update</title>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/update.css">
</head>

<body>
<main>
    <?php
    include("include/header.php");
    ?>
    <?php
    include("include/nav_ordinary.php");
    ?>

    <article>
        <br><br>
        <br><br>

        <h1>This webpage SELECTS ONE record from the Database Table to update</h1>

        <hr><hr>

        <h1>The filtered <span class="DB_table_heading">user</span> Table:</h1>

        <!-- ================================ INSERT PHP CODE BLOCK HERE ============================================== -->

        <?php
        $query = "SELECT * FROM member_table WHERE id = :theCustomerToBeUpdated";

        $statement = $db->prepare($query);
        $statement->bindValue(":theCustomerToBeUpdated", $theCustomerToBeUpdated);
        $statement->execute();
        $customerDetails = $statement->fetch();
        $statement->closeCursor();
        ?>

        <form id="theform5" name="theForm5" action="update3.php" method="post">
            <label>User ID:</label>
            <input type="text" id="user_id" name="id" readonly value="<?php echo $customerDetails['id']; ?>"><br><br>

            <label>Username (is Email Address):</label>
            <input type="email" id="username" name="user_name" required value="<?php echo $customerDetails['user_name']; ?>"><br><br>

            <label>Password:</label>
            <input type="text" id="the_customer_password" name="password_hashed" required value="<?php echo $customerDetails['password_hashed']; ?>"><br><br>

            <label>User address:</label>
            <input type="text" id="the_customer_status" name="user_address" required value="<?php echo $customerDetails['user_address']; ?>"><br><br>

            <label>Phone number:</label>
            <input type="text" id="user_phone" name="user_phone" required value="<?php echo $customerDetails['user_phone']; ?>"><br><br>

<!--            <label>User status:</label>-->
<!--            <input type="number" id="the_customer_sname" name="user_status" min="0" max="2" step="1" required value="--><?php //echo $customerDetails['user_status']; ?><!--"><br><br>-->

            <input type="reset" value="Reset the Form">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="UPDATE the Customer Record">
        </form>

    </article>

    <?php
    include("include/footer.php");
    ?>

    <script src="scripts/functions.js"></script>
</main>
</body>
</html>