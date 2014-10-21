<?php
session_start();
	include 'dbConnector.php';
	echo '<h1>Insert Scriptures</h1>';
	$db = loadDB();
	$book = $_POST['book'];
        $chapter = $_POST['chapter'];
        $verse = $_POST['verse'];
        $content = $_POST['content'];
        

//// escape variables for security
//$book = mysqli_real_escape_string($con, $_POST['book']);
//$chapter = mysqli_real_escape_string($con, $_POST['chapter']);
//$verse = mysqli_real_escape_string($con, $_POST['verse']);
//$content = mysqli_real_escape_string($con, $_POST['content']);

if ($POST)
{
    $stmt = $db->prepare("INSERT INTO scriptures (book, chapter, verse, content)
            VALUES ('$book', '$chapter', '$verse', '$content')");
}
    
    
    
    
    

?>

<form action="display.php" method="POST" >
	<br/>
    <input type="submit" value="View All Scriptures">
</form>


