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
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Top 40 Sign In</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/cleantop40.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="http://php-wademitchell.rhcloud.com/index.php">
                    <i class="fa fa-play-circle"></i>  <span class="light">Clean</span> Top 40
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row"></div>

                <h2>Sign In To The Greatest Music Database In The</h2>
                <h1>Universe</h1>
                <p>Test with Username: Prude Password: mycs313</p>

<form id="form" action="signin.php" method="POST">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username"></input>
	<br /><br />

	<label for="password">Password:</label>
        <input type="password" id="password" name="password"></input>
		<br /><br />

	<input type="submit" value="Sign In" />
        
        <?php
if ($wrong)
{
	echo '<br><div style="color:red;">The username or password is not correct. Try again or Register.</div>';
}
?>

</form>

<br /><br />

<a href="signup.php">No Login? Register Here</a>

</div>

   <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Clean Top 40 2014</p>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>