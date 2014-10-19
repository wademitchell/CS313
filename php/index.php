<?php
// Start the session
session_start();
	include 'dbConnector.php';
	
	$db = loadDB();
        
        $sql = 
       'SELECT song_rank, song_title, artist, previous_week, year, genre
        FROM clean_db
        WHERE song_rank IS NOT NULL 
        ORDER BY song_rank';
 
$q = $db->query($sql);

$q->setFetchMode(PDO::FETCH_ASSOC);
	
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
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Clean</span> Top 40
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#chart">The Chart</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#db">The Database</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#assignments">Assignments</a>
                    </li>
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
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Clean Top 40</h1>
                        <p class="intro-text">Not your parent's Top 40, just one they approve of.<br>All the current clean hits, by the most popular artists.</p>
                        <a href="#chart" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Chart Section -->
    <section id="chart" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                
                <h2>Clean Top 40 Chart</h2>
                <p>Updated weekly, here are the cleanest, most popular hits from today's top artists.</p>
           
<table class="table table-bordered table-condensed">
        <col style="width:10%">
        <col style="width:10%">
        <col style="width:40%">
        <col style="width:40%">
 <thead>
 <tr>
 <th>This Week</th>
 <th>Last Week</th>
 <th>Song</th>
 <th>Artist</th>
 </tr>
 </thead>
 <tbody>
 <?php while ($r = $q->fetch()): ?>
 <tr>
 <td><?php echo htmlspecialchars($r['song_rank'])?></td>
 <td><?php echo htmlspecialchars($r['previous_week'])?></td>
 <td><?php echo htmlspecialchars($r['song_title']); ?></td>
 <td><?php echo htmlspecialchars($r['artist']); ?></td>
 </tr>
 <?php endwhile; ?>
 </tbody>
</table>
                
            </div>
        </div>
    </section>

    <!-- Database Section -->
    <section id="db" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                
                <h2>The Database</h2>
                <p>Search <b><i>every</b></i> hit song since our creation, clean or dirty. Search by Song Grade and Year.</p>

    
                
<!--  <h2>Search</h2>  
  <form name="search" method="post" action="<ADD_ONE????????HERETOTURNONPHP=$PHP_SELF?>"> 
      Seach for: <input type="text" name="find" /> in  
      <Select NAME="field"> 
          <Option VALUE="song_title">Song</option> 
          <Option VALUE="artist">Artist</option> 
          
      </Select> <input type="hidden" name="searching" value="yes" /> 
      <input type="submit" name="search" value="Search" /> 
  </form>     
  
  <?  //This is only displayed if they have submitted the form  
  if ($searching =="yes")  
  {  
  echo "<h2>Results</h2><p>";   
  //If they did not enter a search term we give them an error  
  if ($find == "")  
  {  
  echo "<p>You forgot to enter a search term";  
  exit;  
  }   
// We preform a bit of filtering  
$find = strtoupper($find);  
$find = strip_tags($find);  
$find = trim ($find);   
//Now we search for our search term, in the field the user specified  
$data = mysql_query("SELECT * FROM clean_db WHERE upper($field) 
LIKE'%$find%'");   
//And we display the results  
while($result = mysql_fetch_array( $data ))  
{  
echo $result['song_title'];  
echo " ";  
echo $result['artist'];    
echo "<br>";  
echo "<br>";  
}   
//This counts the number or results - and if there wasn't any it gives them a little message explaining that  
$anymatches=mysql_num_rows($data);  
if ($anymatches == 0)  
{
echo "Sorry, but we can not find an entry to match your query<br><br>";  
}
//And we remind them what they searched for  
echo "<b>Searched For:</b> " .$find;  
}
?>-->
            
  <form action="results.php" method="POST" >
      
  Song Grade: <select name="song_grade">
		<option value="any">All</option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
                <option value="D">D</option>
                <option value="F">F</option>
		</select>
		<br/><br/>
                
<!--  Genre: <select name="genre">
		<option value="any">All</option>
                <option value="Country">Country</option>
                <option value="Dance/Electronic">Dance/Electronic</option>
                <option value="Pop">Pop</option>
		<option value="R&B/Hip-Hop">R&B/Hip-Hop</option>
                <option value="Rock">Rock</option>
                <option value="Other">Other</option>
		</select>
		<br/><br/>-->

  Year: <select name="year">
		<option value="any">All</option>
                <option value="2014">2014</option>
		</select>
		<br/><br/>              
                
    <input type="submit" value="Submit">
    </form>
                
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section id="about" class="content-section text-center">
        <div class="about-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>About Clean Top 40</h2>
                    <p>Hi, I'm Wade Mitchell. I currently live in Oregon. I'm a music lover and a prude (not really). I'm a Web Design & Development major with BYU-I. This is my CS 313 project.</p>
                    
                <p>Follow Clean Top 40 on Facebook, Twitter, and Spotify.</p>
                <p>(Needs to be developed)</p>
                    <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/wademitchell/CS313" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="assignments" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Assignments</h2>
                <p><a href="http://php-wademitchell.rhcloud.com/survey/index.html">2.03 ASSIGNMENT
PHP SURVEY</a></p>
                
            </div>
        </div>
    </section>

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

