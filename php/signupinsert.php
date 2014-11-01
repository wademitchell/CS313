<?php

require("password.php");

$username = $_POST['username'];
$password = $_POST['password'];

if (!isset($username) || $username == ""
	|| !isset($password) || $password == "")
{
	header("Location: signup.php");
	die(); 
}

$hash = password_hash($password, PASSWORD_DEFAULT);

try
{
        include 'dbConnector.php';
        $db = loadDB();

	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	$query = 'INSERT INTO login(username, password) VALUES(:username, :password)';

	$statement = $db->prepare($query);
	$statement->bindParam(':username', $username);
	$statement->bindParam(':password', $hash);
	$statement->execute();
}
catch (Exception $ex)
{
	echo "ERROR $ex";
	die();
}

header("Location: signin.php");
die(); 

?>