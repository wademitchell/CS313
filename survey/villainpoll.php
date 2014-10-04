<?php


//Provide a link on the question page to go directly to the results (without voting).
//When the user casts their vote, they should then see the results.
//Store the results on the filesystem so they can be retrieved/added to later.
//If the user returns to the question page after they have voted, they should be automatically directed to the results. (Think sessions)

$vote4 = $_REQUEST['vote4'];

//get content of textfile
$filename = "villain_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$jaws = $array[0];
$oddjob = $array[1];
$gold = $array[2];
$blo = $array[3];
$lechiffre = $array[4];
$scar = $array[5];

if ($vote4 == 0) {
  $jaws = $jaws + 1;
}
if ($vote4 == 1) {
  $oddjob = $oddjob + 1;
}
if ($vote4 == 2) {
  $gold = $gold + 1;
}
if ($vote4 == 3) {
  $blo = $blo + 1;
}
if ($vote4 == 4) {
  $lechiffre = $lechiffre + 1;
}
if ($vote4 == 5) {
  $scar = $scar + 1;
}

//insert votes to txt file
$insertvote = $jaws."||".$oddjob."||".$gold."||".$blo."||".$lechiffre."||".$scar;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h3>Who Is Your Favorite Bond Villain?</h3>
<table>
<tr>
<td>Jaws:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($jaws/($scar+$lechiffre+$blo+$gold+$oddjob+$jaws),2)); ?>'
height='20'>
<?php echo(100*round($jaws/($scar+$lechiffre+$blo+$gold+$oddjob+$jaws),2)); ?>%
</td>
</tr>
<tr>
<td>Oddjob:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($oddjob/($scar+$lechiffre+$blo+$gold+$oddjob+$jaws),2)); ?>'
height='20'>
<?php echo(100*round($oddjob/($scar+$lechiffre+$blo+$gold+$oddjob+$jaws),2)); ?>%
</td>
</tr>
<tr>
<td>Goldfinger:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($gold/($scar+$lechiffre+$blo+$gold+$oddjob+$jaws),2)); ?>'
height='20'>
<?php echo(100*round($gold/($scar+$lechiffre+$blo+$gold+$oddjob+$jaws),2)); ?>%
</td>
</tr>
<tr>
<td>Ernst Stavro Blofeld:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($blo/($scar+$lechiffre+$blo+$gold+$oddjob+$jaws),2)); ?>'
height='20'>
<?php echo(100*round($blo/($scar+$lechiffre+$blo+$gold+$oddjob+$jaws),2)); ?>%
</td>
</tr>
<tr>
<td>Le Chiffre:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($lechiffre/($scar+$lechiffre+$blo+$gold+$oddjob+$jaws),2)); ?>'
height='20'>
<?php echo(100*round($lechiffre/($scar+$lechiffre+$blo+$gold+$oddjob+$jaws),2)); ?>%
</td>
</tr>
<tr>
<td>Francisco Scaramanga:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($scar/($scar+$lechiffre+$blo+$gold+$oddjob+$jaws),2)); ?>'
height='20'>
<?php echo(100*round($scar/($scar+$lechiffre+$blo+$gold+$oddjob+$jaws),2)); ?>%
</td>
</tr>
</table>


