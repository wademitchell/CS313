<?php
session_start();
	include 'dbConnector.php';
	echo '<h1>Insert Scriptures</h1>';
	$db = loadDB();
	$book = $_POST['book'];
        $chapter = $_POST['chapter'];
        $verse = $_POST['verse'];
        $content = $_POST['content'];
        $topic_id = $_POST['topic_id'];

    if ($_POST)
    {
    $query = 'INSERT INTO scriptures (book, chapter, verse, content)
VALUES (:book, :chapter, :verse, :content)';
    
    $statement = $db->prepare($query);

	$statement->bindParam(':book', $book);
	$statement->bindParam(':chapter', $chapter);
	$statement->bindParam(':verse', $verse);
	$statement->bindParam(':content', $content);
	$statement->execute();

  echo "<h2>Your Scripture has been added.</h2>";
    }
//    catch (PDOException $ex)
//    {
//    echo 'error';
//    }
    
    
?>

<form action="display.php" method="POST" >
	<br/>
    <input type="submit" value="View All Scriptures">
</form>


