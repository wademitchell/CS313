<?php
// Start the session
session_start();
		
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Top 40</title>

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
                <div class="row">
                       <?php
	
	include 'dbConnector.php';
	echo '<br><br><br><br><h2>The Database</h2>';
	$db = loadDB();
	$song_grade = $_POST['song_grade'];
        $genre = $_POST['genre'];
	//Display all songs
	if ($song_grade == 'any'&& $genre == 'any')
	{
		$stmt = $db->query("SELECT * FROM clean_db");
		
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
		{
			echo "<br><br>" . '<h5>' . $row['song_grade'] . ' - ' . $row['song_title'] . ' - ' . $row['artist'] . ' ' . $row['artist2'] . ' - ' . $row['year'] . ' - ' . $row['genre'] . ' ' . $row['genre2'] . '</h5>' . ' '.$row['note'] . ' ' . "<br>";
		}
	}
	//Else display the chosen grade
	else
	{
		$stmt = $db->prepare("SELECT * FROM clean_db WHERE song_grade=:song_grade AND genre=:genre");
		$stmt->bindValue(':song_grade', $song_grade , PDO::PARAM_STR);
                $stmt->bindValue(':genre', $genre , PDO::PARAM_STR);
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
		{
			echo "<br><br>" . '<h5>' . $row['song_grade'] . ' - ' . $row['song_title'] . ' - ' . $row['artist'] . ' ' . $row['artist2'] . ' - ' . $row['year'] . ' - ' . $row['genre'] . ' ' . $row['genre2'] . '</h5>' . ' '.$row['note'] . ' ' . "<br>";

		}
	}
?>

<form action="index.php" method="POST" >
	<br/>
    <input type="submit" value="Back">
</form>  
                </div>
            </div>
        </div>
    </header>
    
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