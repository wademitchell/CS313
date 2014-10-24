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

  $id = $db->lastInsertId();
  foreach ($topic_id as $topic_id)
  {
      $statement = $db->prepare('INSERT INTO junction(id, topic_id) VALUES(:id, :topic_id)');
  
      $statement->bindParam(':id', $id);
      $statement->bindParam('topic_id', $topic_id);
      
      $statement->execute();
      
      
  }
    }
    
    header( 'Location: http://php-wademitchell.rhcloud.com/502/display.php' ) ;
    
?>

<form action="display.php" method="POST" >
	<br/>
    <input type="submit" value="View All Scriptures">
</form>


