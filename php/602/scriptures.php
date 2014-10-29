<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Add Scripture</title>
</head>
<body>
    <div> 
        <h1>Add Scripture</h1>
<form action="insert.php" method="post">
Book: <input type="text" name="book">
Chapter: <input type="number" name="chapter">
Verse: <input type="number" name="verse">
Content: <input type="text" name="content">
<!--Topics: <input type="checkbox" name="topic_id[]" value="Faith" />
<input type="checkbox" name="topic_id[]" value="Sacrifice" />
<input type="checkbox" name="topic_id[]" value="Charity" />
<br>-->

<?php
include 'dbConnector.php';
$db = loadDB();
        




if( isset($_POST['topic_id']) && is_array($_POST['topic_id']) ) 
    {
    
    $statement = $db->prepare('SELECT topic_id, name FROM topics');
$statement->execute();
    
    foreach($_POST['topic_id'] as $topic_id) {
        // eg. "I have a grapefruit!"
        echo "Have {$topic_id}!";
        // -- insert into database call might go here
    }

    // eg. "apple, grapefruit"
    $topiclist = implode(', ', $_POST['topic_id']);
    // -- insert into database call (for fruitList) might go here.
}

//try
//{
//    include 'dbConnector.php';
//    $db = loadDB();
//
//	$statement = $db->prepare('SELECT topic_id, name FROM topics');
//	$statement->execute();
//
//	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
//	{
//		echo '<input type="checkbox" name="topic_id" value="' . $row['topic_id'] . '">';
//                echo $row['name'];
//                echo '</input><br />';
//	
//        echo "\n";
//}
//
//}
//catch (PDOException $ex)
//{
//	echo "ERROR";
//	die();
//}

?>
<!--<input type="checkbox" name="name" value="Faith" >Faith<br>
<input type="checkbox" name="name" value="Sacrifice">Sacrifice<br>
<input type="checkbox" name="name" value="Charity">Charity-->
<br>
<input type="submit" value="Add Scripture">
</form>
    </div>
</body>
</html>
