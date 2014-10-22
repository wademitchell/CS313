 <?php
	
	include 'dbConnector.php';
	echo '<br><br><br><br><h2>Scripture Master List</h2>';
	$db = loadDB();
	$book = $_POST['book'];
        $chapter = $_POST['chapter'];
	//Display all scriptures
	if ($book == '')
	{
		$stmt = $db->query("SELECT * FROM scriptures");
		
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
		{
			echo '<strong>' . $row['book'].' '.$row['chapter'] . ':' . $row['verse'] . '</strong>' .' - "'. $row['content'] . '"' . "<br>";
		}
	}
//	//Else display the chosen grade
//        elseif ($song_grade != 'any'&& $genre == 'any')
//	{
//		$stmt = $db->prepare("SELECT * FROM clean_db WHERE song_grade=:song_grade");
//		$stmt->bindValue(':song_grade', $song_grade , PDO::PARAM_STR);
//                
//                $stmt->execute();
//		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
//		{
//			echo "<br><br>" . '<h5>' . $row['song_grade'] . ' - ' . $row['song_title'] . ' - ' . $row['artist'] . ' ' . $row['artist2'] . ' - ' . $row['year'] . ' - ' . $row['genre'] . ' ' . $row['genre2'] . '</h5>' . ' '.$row['note'] . ' ' . "<br>";
//
//		}
//	}
//        elseif ($song_grade == 'any'&& $genre != 'any')
//	{
//		$stmt = $db->prepare("SELECT * FROM clean_db WHERE genre=:genre");
//		
//                $stmt->bindValue(':genre', $genre , PDO::PARAM_STR);
//                $stmt->execute();
//		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
//		{
//			echo "<br><br>" . '<h5>' . $row['song_grade'] . ' - ' . $row['song_title'] . ' - ' . $row['artist'] . ' ' . $row['artist2'] . ' - ' . $row['year'] . ' - ' . $row['genre'] . ' ' . $row['genre2'] . '</h5>' . ' '.$row['note'] . ' ' . "<br>";
//
//		}
//	}
//	else
//	{
//		$stmt = $db->prepare("SELECT * FROM clean_db WHERE song_grade=:song_grade AND genre=:genre");
//		$stmt->bindValue(':song_grade', $song_grade , PDO::PARAM_STR);
//                $stmt->bindValue(':genre', $genre , PDO::PARAM_STR);
//                $stmt->execute();
//		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
//		{
//			echo "<br><br>" . '<h5>' . $row['song_grade'] . ' - ' . $row['song_title'] . ' - ' . $row['artist'] . ' ' . $row['artist2'] . ' - ' . $row['year'] . ' - ' . $row['genre'] . ' ' . $row['genre2'] . '</h5>' . ' '.$row['note'] . ' ' . "<br>";
//
//		}
//	}
?>

<form action="scriptures.php" method="POST" >
	<br/>
    <input type="submit" value="Back">
</form>  


