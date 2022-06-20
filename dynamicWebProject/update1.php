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
    <title>UPDATE - ONE (1)</title>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/update.css">
</head>

<body>
<main>
    <?php
    include("include/header.php");
    ?>

    <?php
    include("include/nav_update.php");
    ?>

    <article>
        <br><br>
        <br><br>
        <br><br>
        <a id="theTop" href="#theBottom">Go to Bottom</a>

        <h1>This webpage SELECTS YOUR record that you want to update</h1>

        <h4>Update user info</h4>

        <hr><hr>

        <h2>Pick your user name from the below</h2>

        <form id="theForm4" name="theForm4" action="update2.php" method="post">
            <label>Pick your username:</label>
            <select id="pickingUser" name="pickingUser" required>
                <option value="">.........User ..........</option>
                <?php
                $query = "SELECT id, user_name FROM member_table ORDER BY user_name ASC";
                $statement = $db->prepare($query);
                $statement->execute();
                $all_queries = $statement->fetchAll();
                $statement->closeCursor();

                foreach ($all_queries as $one_query) :
                    echo "<option value='" . $one_query['id'] . "'>" . $one_query['user_name'] . ", " . $one_query['password_hashed'] . "</option>";
                endforeach;
                ?>
                <br>
                <input type="reset" value="Reset the Selection List">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="UPDATE This Customer's Data">
        </form>

        <br><br>
        <a id="theBottom" href="#theTop">Go to Top</a>
        <br><br>
    </article>

    <footer>
        &copy; 2022 Not A Real Shop
        <br><br>
        <div id="wcb" class="carbonbadge"></div>
        <script src="https://unpkg.com/website-carbon-badges@1.1.3/b.min.js" defer></script>
    </footer>

    <script src="scripts/functions.js"></script>
</main>
</body>
</html>

