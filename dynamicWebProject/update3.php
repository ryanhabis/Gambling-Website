<?php
require_once ('include/connection.php');

$id = $_POST["id"];
$user_name = $_POST["user_name"];
$password_hashed = $_POST["password_hashed"];
$user_address = $_POST["user_address"];
$user_phone = $_POST["user_phone"];
$user_status = $_POST["user_status"];

$query = "UPDATE member_table SET
            id=:id,
            user_name=:user_name,
            password_hashed=:password_hashed,
            user_address=:user_address,
            user_phone=:user_phone,
            user_status=:user_status

            WHERE id=:id";

$statement = $db->prepare($query);

$statement->bindvalue(":id",$id);
$statement->bindvalue(":user_name",$user_name);
$statement->bindvalue(":password_hashed",$password_hashed);
$statement->bindvalue(":user_address",$user_address);
$statement->bindvalue(":user_phone",$user_phone);
$statement->bindvalue(":user_status",$user_status);

$statement->execute();
$statement->closeCursor();

header("Location: administrator.php");
?>
