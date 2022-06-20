<?php
require_once ('include/connection.php');

if(empty($_POST['theUser']))
{
    header("Location: login.php");
}
else
{
    $baddata = 0;

    $username = $_POST['theUser'];
    $password = $_POST['thePassword'];

    $query = "SELECT * FROM member_table WHERE user_name = :username";
    $statement = $db->prepare($query);
    $statement->bindValue(":username", $username);
    $statement->execute();

    $all_queries = $statement->fetchAll();

    $statement->closeCursor();

    $arrayLength = count($all_queries);


    if ($arrayLength != 1)
    {
        $baddata = 1;
    }
    else
    {
        foreach ($all_queries as $one_query) :
            $stored_hashed_password = $one_query['password_hashed'];
            $dbUserStatus = $one_query['user_status'];
        endforeach;

        $verify = password_verify($password,$stored_hashed_password);

        if ($verify) {
            session_start();
            $_SESSION['login_user'] = $username;

            if ($dbUserStatus == 1) {
                header("Location: administrator.php?user=" . $_SESSION['login_user'] . "ADMINISTRATION");
            } else if ($dbUserStatus == 0) {
                header("Location: ordinaryUser.php?user=" . $_SESSION['login_user'] . "ORDINARY");
            } else {
                header("LOCATION: statusUnknown.php?user=" . $_SESSION['login_user'] . "STATUS UNDEFINED");
            }
            exit;
        }
        else
        {
            $baddata =1;
        }
    }

    if ($baddata == 1)
    {
        include ("login1.php");
    }

}
?>