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

?>

<br>
<input type="submit" value="Add Scripture">
</form>
        <a href="logout.php">Logout</a>

    </div>
</body>
</html>
