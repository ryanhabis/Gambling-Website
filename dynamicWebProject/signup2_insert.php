<?php
require ('include/connection.php');

if (empty($_POST['theUserSignup']))
{
    header("Location: signup1.php");
}
else
{
    $bad_data = 0;

    $signupUsername = $_POST['theUserSignup'];
    $signupPassword = $_POST['thePasswordSignup'];
    $signupAddress = $_POST['theAddressSignup'];
    $signupPhone = $_POST['thePhoneSignup'];

    echo "<script>alert('Password='" . $signupPassword . ");</script>";

    $hashed_password = password_hash($signupPassword, PASSWORD_DEFAULT);

    $query1 = "SELECT * FROM member_table WHERE user_name = :signupUsername";
    $statement = $db->prepare($query1);
    $statement->bindValue(":signupUsername", $signupUsername);
    $statement->execute();
    $all_queries1 = $statement->fetchAll();
    $statement->closeCursor();

    $arrayLength = count($all_queries1);

    echo ("<script> alert('number of records: " . $arrayLength . ".');</script>");

    if ($arrayLength != 0)
    {
        $bad_data = 1;
    }
    else
    {
        $query2 = "INSERT INTO member_table (user_name, password_hashed, user_address, user_phone,user_status) VALUES (:signupUsername,:hashed_password,:signupAddress, :signupPhone, '2')";

        $statement = $db->prepare($query2);
        $statement->bindValue(':signupUsername',$signupUsername);
        $statement->bindValue(':hashed_password',$hashed_password);
        $statement->bindValue(':signupAddress',$signupAddress);
        $statement->bindValue(':signupPhone',$signupPhone);
        $statement->execute();
        $statement->closeCursor();

        echo ("<script>window.location.replace('login1.php');</script>");
    }

    if ($bad_data == 1)
    {
        include ("signup1.php");
    }
}
?>