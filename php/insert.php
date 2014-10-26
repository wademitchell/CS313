<?php
session_start();
	include 'dbConnector.php';
	echo '<h1>Add Songs</h1>';
	$db = loadDB();
	$song_title = $_POST['song_title'];
        $artist = $_POST['artist'];
        $song_grade = $_POST['song_grade'];
        $genre = $_POST['genre'];
        $year = $_POST['year'];
        $note= $_POST['note'];

    if ($_POST)
    {
    $query = 'INSERT INTO clean_db (song_title, artist, song_grade, genre, year, note)
VALUES (:song_title, :artist, :song_grade, :genre, :year, :note)';
    
    $statement = $db->prepare($query);

	$statement->bindParam(':song_title', $song_title);
	$statement->bindParam(':artist', $artist);
	$statement->bindParam(':song_grade', $song_grade);
        $statement->bindParam(':genre', $genre);
	$statement->bindParam(':year', $year);
        $statement->bindParam(':note', $note);
	$statement->execute(); 
      
    }
    
    header( 'Location: http://php-wademitchell.rhcloud.com/displayadd.php' ) ;
    
?>

<form action="displayadd.php" method="POST" >
	<br/>
    <input type="submit" value="View All Songs">
</form>


