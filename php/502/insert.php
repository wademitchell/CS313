<?php
session_start();
	include 'dbConnector.php';
	echo '<h1>Insert Scriptures</h1>';
	$db = loadDB();
	$book = $_POST['book'];
        $chapter = $_POST['chapter'];
        $verse = $_POST['verse'];
        $content = $_POST['content'];
        
if ($_POST)
    
    
 {
    $query = "INSERT INTO scriptures (book, chapter, verse, content)
            VALUES ('$book', '$chapter', '$verse', '$content')";
    
    mysql_query($query);

  echo "<h2>Your Scripture has been added.</h2>";
}   
    
    
    
    
//{
//    $stmt = $db->prepare("INSERT INTO scriptures (book, chapter, verse, content)
//            VALUES ('$book', '$chapter', '$verse', '$content')");
//}
    
    
    
    
    

?>

<form action="display.php" method="POST" >
	<br/>
    <input type="submit" value="View All Scriptures">
</form>


