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
Topic: 
<input type="checkbox" name="name" value="Faith" >Faith<br>
<input type="checkbox" name="name" value="Sacrifice">Sacrifice<br>
<input type="checkbox" name="name" value="Charity">Charity
<input type="submit">
</form>
