 <?php
	
	include 'dbConnector.php';
	echo '<br><h2>Scripture Master List</h2>';
	$db = loadDB();
	
	//Display all scriptures
	if ($book == '')
	{
		$stmt = $db->query("SELECT * FROM scriptures");
		
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
		{
			echo '<strong>' . $row['book'].' '.$row['chapter'] . ':' . $row['verse'] . '</strong>' .' - "'. $row['content'] . '"' . "<br>";
		}
                
                $stmt2 = $db->prepare('SELECT name FROM topic t' . ' INNER JOIN junction j ON j.topic_id = t.topic_id' . 'WHERE j.id = :id');
                        $stmt2>-bindParm(':id', $row['topic_id']);
                        $stmt2->execute();
                        
                        while ($topic_row = $stmt2->fetch(PDO::FETCH_ASSOC))
                        {
                            echo $topic_row['name'] . ' ';
                        }
                
	}

?>

<form action="scriptures.php" method="POST" >
	<br/>
    <input type="submit" value="Back">
</form>  


