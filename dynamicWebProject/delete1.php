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
    <title>DELETE (1)</title>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/delete.css">


    <style>
        #referentialIntegrity {
            border: 5px outset red;
            background-color: ivory;
            color: red;
            margin: 5px 50px;
            padding: 20px
        }
    </style>
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
        <h2>You can pick ONE user from the <u>&lt;SELECT></u> below</h2>

        <form id="theForm5" name="theForm5" action="delete2.php" method="post">
            <label>Pick ONE user:</label>
            <select id="user_name" name="whichComment" required>
                <option value="">........Pick a Comment........</option>
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
            </select>

            <br><br>
            <input type="reset" value="Reset the Selection List">
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="DELETE ONE user">
        </form>

    </article>

    <?php
    include("include/footer.php");
    ?>
</main>
</body>
</html>
