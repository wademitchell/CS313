<?php


//Provide a link on the question page to go directly to the results (without voting).
//When the user casts their vote, they should then see the results.
//Store the results on the filesystem so they can be retrieved/added to later.
//If the user returns to the question page after they have voted, they should be automatically directed to the results. (Think sessions)

session_start();

echo $_SESSION ['seeresults'];

$vote = $_REQUEST['vote'];



//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$sean = $array[0];
$george = $array[1];
$roger = $array[2];
$timothy = $array[3];
$pierce = $array[4];
$daniel = $array[5];

if ($vote == 0) {
  $sean = $sean + 1;
}
if ($vote == 1) {
  $george = $george + 1;
}
if ($vote == 2) {
  $roger = $roger + 1;
}
if ($vote == 3) {
  $timothy = $timothy + 1;
}
if ($vote == 4) {
  $pierce = $pierce + 1;
}
if ($vote == 5) {
  $daniel = $daniel + 1;
}

//insert votes to txt file
$insertvote = $sean."||".$george."||".$roger."||".$timothy."||".$pierce."||".$daniel;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h4>Who Is Your Favorite James Bond?</h4>
<table>
<tr>
<td>Sean Connery:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($sean/($daniel+$pierce+$timothy+$roger+$george+$sean),2)); ?>'
height='20'>
<?php echo(100*round($sean/($daniel+$pierce+$timothy+$roger+$george+$sean),2)); ?>%
</td>
</tr>
<tr>
<td>George Lazenby:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($george/($daniel+$pierce+$timothy+$roger+$george+$sean),2)); ?>'
height='20'>
<?php echo(100*round($george/($daniel+$pierce+$timothy+$roger+$george+$sean),2)); ?>%
</td>
</tr>
<tr>
<td>Roger Moore:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($roger/($daniel+$pierce+$timothy+$roger+$george+$sean),2)); ?>'
height='20'>
<?php echo(100*round($roger/($daniel+$pierce+$timothy+$roger+$george+$sean),2)); ?>%
</td>
</tr>
<tr>
<td>Timothy Dalton:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($timothy/($daniel+$pierce+$timothy+$roger+$george+$sean),2)); ?>'
height='20'>
<?php echo(100*round($timothy/($daniel+$pierce+$timothy+$roger+$george+$sean),2)); ?>%
</td>
</tr>
<tr>
<td>Pierce Brosnan:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($pierce/($daniel+$pierce+$timothy+$roger+$george+$sean),2)); ?>'
height='20'>
<?php echo(100*round($pierce/($daniel+$pierce+$timothy+$roger+$george+$sean),2)); ?>%
</td>
</tr>
<tr>
<td>Daniel Craig:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($daniel/($daniel+$pierce+$timothy+$roger+$george+$sean),2)); ?>'
height='20'>
<?php echo(100*round($daniel/($daniel+$pierce+$timothy+$roger+$george+$sean),2)); ?>%
</td>
</tr>
</table>


