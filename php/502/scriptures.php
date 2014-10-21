<?php
// Start the session
session_start();
?>

<h1>Add Scripture</h1>
<form action="insert.php" method="post">
Book: <input type="text" name="book">
Chapter: <input type="number" name="chapter">
Verse: <input type="number" name="verse">
Content: <input type="text" name="content">
<!--Topic: <input type="checkbox" name="name">-->
<input type="submit">
</form>

<!--<h1>Scripture Search</h1>
<form action="results.php" method="POST" >
    Book: <select name="book">
		<option value="any">Any</option>
		<option value="John">John</option>
		<option value="Doctrine and Covenants">Doctrine and Covenants</option>
		<option value="Mosiah">Mosiah</option>
		</select>
		<br/><br/>

    <input type="submit" value="Submit">
</form>-->