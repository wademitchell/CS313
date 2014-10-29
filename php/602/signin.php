<?php

require("password.php"); 
session_start();

$wrong = false;

if (isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	try
	{
		include 'dbConnector.php';
                $db = loadDB();

		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		$query = 'SELECT password FROM login WHERE username=:username';

		$statement = $db->prepare($query);
		$statement->bindParam(':username', $username);
		$result = $statement->execute();

		if ($result)
		{
			$row = $statement->fetch();
			$hashdb = $row['password'];

			if (password_verify($password, $hashdb))
			{
				$_SESSION['username'] = $username;
				header("Location: index.php");
				die();
			}
			else
			{
				$wrong = true;
			}

		}
		else
		{
			$wrong = true;
		}
	}
	catch (Exception $ex)
	{
		echo "ERROR: $ex";
		die();
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
</head>

<body>
<div>

<?php
if ($wrong)
{
	echo "The username or password is not correct. Try again or Register below.";
}
?>

<h1>Sign In To Access The Database</h1>

<form id="form" action="signin.php" method="POST">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username"></input>
	<br /><br />

	<label for="password">Password:</label>
        <input type="password" id="password" name="password"></input>
		<br /><br />

	<input type="submit" value="Sign In" />

</form>

<br /><br />

<a href="signup.php">No Login? Register Here</a>

</div>

</body>
</html>
