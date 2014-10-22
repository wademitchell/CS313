<?php
	session_start();
	include 'dbConnector.php';
	echo '<h1>Scripture Resources</h1>';
	$db = loadDB();
	$book = $_POST['book'];
	//Display all scriptures
	if ($book == 'any')
	{
		$stmt = $db->query("SELECT * FROM scriptures");
		
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
		{
			echo '<strong>' . $row['book'].' '.$row['chapter'] . ':' . $row['verse'] . '</strong>' .' - "'. $row['content'] . '"' . "<br>";
		
                        $stmt2 = $db->prepare("SELECT name FROM topic");
                        $stmt2>-bindParm(':id', $row['topic_id']);
                        $stmt2->execute();
                        
                        while ()
                }
	}
	//Else display the scriptures from that book
	else
	{
		$stmt = $db->prepare("SELECT * FROM scriptures WHERE book=:book");
		$stmt->bindValue(':book', $book , PDO::PARAM_STR);
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
		{
			echo '<strong>' . $row['book'].' '.$row['chapter'] . ':' . $row['verse'] . '</strong>' .' - "'. $row['content'] . '"' . "<br>";
		}
	}
?>

<form action="scriptures.php" method="POST" >
	<br/>
    <input type="submit" value="back">
</form>