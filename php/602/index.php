<?php

session_start();

if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: signin.php");
	die(); 
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Scripture Database</title>
</head>

<body>
<div>

	<h1>The Scripture Database</h1>

	Welcome <?= $username ?><br /><br />
        
        <p>You may now enter a scripture into the database.</p>

	<a href="scriptures.php">Enter</a>
</div>

</body>
</html>