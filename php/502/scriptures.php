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
Topic: 
<br>

<?php


include 'dbConnector.php';
$db = loadDB();

try
{

	$statement = $db->prepare('SELECT id, name FROM topic');
	$statement->execute();

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<input type="checkbox" name="name" value="Faith" >Faith<br>' . $row['id'] . '">' . $row['name'] . '</input><br />\n';
                echo '<input type="checkbox" name="name" value="Sacrifice">Sacrifice<br>' . $row['id'] . '">' . $row['name'] . '</input><br />\n';
                echo '<input type="checkbox" name="name" value="Charity">Charity' . $row['id'] . '">' . $row['name'] . '</input><br />\n';
	}

}
catch (PDOException $ex)
{
	echo "ERROR";
	die();
}

?>
<!--<input type="checkbox" name="name" value="Faith" >Faith<br>
<input type="checkbox" name="name" value="Sacrifice">Sacrifice<br>
<input type="checkbox" name="name" value="Charity">Charity-->
<br>
<input type="submit">
</form>
    </div>
</body>
</html>
