<?php
session_start();
if(session_destroy())
{
   header("Location: signin.php");
}
?>

//for the red error message, just move the if($wrong) to underneath the submit button and add <div style="color:red;"></div> to the echo statement

