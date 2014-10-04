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
<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {  
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("POST","bondpoll.php?vote="+int,true);
  xmlhttp.send();
}
function getVote2(int) {
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {  
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll2").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("POST","moviepoll.php?vote2="+int,true);
  xmlhttp.send();
}
function getVote3(int) {
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {  
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll3").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("POST","girlpoll.php?vote3="+int,true);
  xmlhttp.send();
}
function getVote4(int) {
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {  
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll4").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("POST","villainpoll.php?vote4="+int,true);
  xmlhttp.send();
}
</script>

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
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
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
                        <div id="poll">
<h3>Who Is Your Favorite James Bond?</h3>
<form>
Sean Connery:
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<br>George Lazenby:
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
<br>Roger Moore:
<input type="radio" name="vote" value="2" onclick="getVote(this.value)">
<br>Timothy Dalton:
<input type="radio" name="vote" value="3" onclick="getVote(this.value)">
<br>Pierce Brosnan:
<input type="radio" name="vote" value="4" onclick="getVote(this.value)">
<br>Daniel Craig:
<input type="radio" name="vote" value="5" onclick="getVote(this.value)">
</form>
</div>
<div id="poll2">
<h3>What Is Your Favorite Bond Movie?</h3>
<form>
Dr. No:
<input type="radio" name="vote2" value="0" onclick="getVote2(this.value)">
<br>On Her Majesty's Secret Service:
<input type="radio" name="vote2" value="1" onclick="getVote2(this.value)">
<br>Live and Let Die:
<input type="radio" name="vote2" value="2" onclick="getVote2(this.value)">
<br>The Living Daylights:
<input type="radio" name="vote2" value="3" onclick="getVote2(this.value)">
<br>Goldeneye:
<input type="radio" name="vote2" value="4" onclick="getVote2(this.value)">
<br>Casino Royale:
<input type="radio" name="vote2" value="5" onclick="getVote2(this.value)">
</form>
</div>
<div id="poll3">
<h3>Who Is Your Favorite Bond Girl?</h3>
<form>
Vesper Lynd:
<input type="radio" name="vote3" value="0" onclick="getVote3(this.value)">
<br>Teresa Di Vicenzo (Tracy Bond):
<input type="radio" name="vote3" value="1" onclick="getVote3(this.value)">
<br>Jill Masterson:
<input type="radio" name="vote3" value="2" onclick="getVote3(this.value)">
<br>Tatiana Romanova:
<input type="radio" name="vote3" value="3" onclick="getVote3(this.value)">
<br>Anya Amasova:
<input type="radio" name="vote3" value="4" onclick="getVote3(this.value)">
<br>Melina Havelock:
<input type="radio" name="vote3" value="5" onclick="getVote3(this.value)">
</form>
</div>
<div id="poll4">
<h3>Who Is Your Favorite Bond Villain?</h3>
<form>
Jaws:
<input type="radio" name="vote4" value="0" onclick="getVote4(this.value)">
<br>Oddjob:
<input type="radio" name="vote4" value="1" onclick="getVote4(this.value)">
<br>Goldfinger:
<input type="radio" name="vote4" value="2" onclick="getVote4(this.value)">
<br>Ernst Stavro Blofeld:
<input type="radio" name="vote4" value="3" onclick="getVote4(this.value)">
<br>Le Chiffre:
<input type="radio" name="vote4" value="4" onclick="getVote4(this.value)">
<br>Francisco Scaramanga:
<input type="radio" name="vote4" value="5" onclick="getVote4(this.value)">
</form>
</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Chart Section -->
    <section id="chart" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Assignments</h2>
                <p>I can put my assignments here like this sample project.</p>
                <h2>Clean Top 40 Chart</h2>
                <p>Updated weekly, here are the cleanest, most popular hits from today's top artists.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="About" class="content-section text-center">
        <div class="about-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>About Wade</h2>
                    <p>Hi, I'm Wade Mitchell. I'm a Web Development & Deign major with BYUI. I currently live in Oregon. This is my CS 313 project.</p>
                    <h2>Why clean hits?</h2>
                    <p>We are prudes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>We are out there.</h2>
                <p>Follow us on Facebook and Twitter.</p>
                <p>Needs to be developed.</p>
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

