<?php


//Provide a link on the question page to go directly to the results (without voting).
//When the user casts their vote, they should then see the results.
//Store the results on the filesystem so they can be retrieved/added to later.
//If the user returns to the question page after they have voted, they should be automatically directed to the results. (Think sessions)

$vote2 = $_REQUEST['vote2'];

//get content of textfile
$filename = "movie_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$drno = $array[0];
$secret = $array[1];
$live = $array[2];
$day = $array[3];
$eye = $array[4];
$casino = $array[5];

if ($vote2 == 0) {
  $drno = $drno + 1;
}
if ($vote2 == 1) {
  $secret = $secret + 1;
}
if ($vote2 == 2) {
  $live = $live + 1;
}
if ($vote2 == 3) {
  $day = $day + 1;
}
if ($vote2 == 4) {
  $eye = $eye + 1;
}
if ($vote2 == 5) {
  $casino = $casino + 1;
}

//insert votes to txt file
$insertvote = $drno."||".$secret."||".$live."||".$day."||".$eye."||".$casino;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h3>What Is Your Favorite Bond Movie?</h3>
<table>
<tr>
<td>Dr. No:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($drno/($casino+$eye+$day+$live+$secret+$drno),2)); ?>'
height='20'>
<?php echo(100*round($drno/($casino+$eye+$day+$live+$secret+$drno),2)); ?>%
</td>
</tr>
<tr>
<td>On Her Majesty's Secret Service:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($secret/($casino+$eye+$day+$live+$secret+$drno),2)); ?>'
height='20'>
<?php echo(100*round($secret/($casino+$eye+$day+$live+$secret+$drno),2)); ?>%
</td>
</tr>
<tr>
<td>Live and Let Die:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($live/($casino+$eye+$day+$live+$secret+$drno),2)); ?>'
height='20'>
<?php echo(100*round($live/($casino+$eye+$day+$live+$secret+$drno),2)); ?>%
</td>
</tr>
<tr>
<td>The Living Daylights:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($day/($casino+$eye+$day+$live+$secret+$drno),2)); ?>'
height='20'>
<?php echo(100*round($day/($casino+$eye+$day+$live+$secret+$drno),2)); ?>%
</td>
</tr>
<tr>
<td>Goldeneye:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($eye/($casino+$eye+$day+$live+$secret+$drno),2)); ?>'
height='20'>
<?php echo(100*round($eye/($casino+$eye+$day+$live+$secret+$drno),2)); ?>%
</td>
</tr>
<tr>
<td>Casino Royale:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($casino/($casino+$eye+$day+$live+$secret+$drno),2)); ?>'
height='20'>
<?php echo(100*round($casino/($casino+$eye+$day+$live+$secret+$drno),2)); ?>%
</td>
</tr>
</table>


