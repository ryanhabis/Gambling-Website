<?php
require_once ('include/connection.php');

$whichComment = $_POST["whichComment"];

$query = "DELETE FROM member_table where id = :whichComment";


$statement = $db->prepare($query);

$statement->bindValue(":whichComment", $whichComment);

$statement->execute();
$statement->closeCursor();

header("Location: index.php");
?>