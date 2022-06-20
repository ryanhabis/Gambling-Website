<?php

//// MYSQL03 connection code
//$dsn = 'mysql:host=localhost;dbname=member_table';
//$username = 'root';
//$password = '';

	// XAMPP connection code
	$dsn = 'mysql:host=localhost;dbname=D00245309';
	$username = 'D00245309';
	$password = '051fDvxl';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    exit();
}
?>