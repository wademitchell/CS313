<?php


//Provide a link on the question page to go directly to the results (without voting).
//When the user casts their vote, they should then see the results.
//Store the results on the filesystem so they can be retrieved/added to later.
//If the user returns to the question page after they have voted, they should be automatically directed to the results. (Think sessions)

$vote3 = $_REQUEST['vote3'];

//get content of textfile
$filename = "girl_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$vesper = $array[0];
$tracy = $array[1];
$jill = $array[2];
$tat = $array[3];
$anya = $array[4];
$melina = $array[5];

if ($vote3 == 0) {
  $vesper = $vesper + 1;
}
if ($vote3 == 1) {
  $tracy = $tracy + 1;
}
if ($vote3 == 2) {
  $jill = $jill + 1;
}
if ($vote3 == 3) {
  $tat = $tat + 1;
}
if ($vote3 == 4) {
  $anya = $anya + 1;
}
if ($vote3 == 5) {
  $melina = $melina + 1;
}

//insert votes to txt file
$insertvote = $vesper."||".$tracy."||".$jill."||".$tat."||".$anya."||".$melina;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h4>Who Is Your Favorite Bond Girl?</h4>
<table>
<tr>
<td>Vesper Lynd:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($vesper/($melina+$anya+$tat+$jill+$tracy+$vesper),2)); ?>'
height='20'>
<?php echo(100*round($vesper/($melina+$anya+$tat+$jill+$tracy+$vesper),2)); ?>%
</td>
</tr>
<tr>
<td>Teresa Di Vicenzo (Tracy Bond):</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($tracy/($melina+$anya+$tat+$jill+$tracy+$vesper),2)); ?>'
height='20'>
<?php echo(100*round($tracy/($melina+$anya+$tat+$jill+$tracy+$vesper),2)); ?>%
</td>
</tr>
<tr>
<td>Jill Masterson:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($jill/($melina+$anya+$tat+$jill+$tracy+$vesper),2)); ?>'
height='20'>
<?php echo(100*round($jill/($melina+$anya+$tat+$jill+$tracy+$vesper),2)); ?>%
</td>
</tr>
<tr>
<td>Tatiana Romanova:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($tat/($melina+$anya+$tat+$jill+$tracy+$vesper),2)); ?>'
height='20'>
<?php echo(100*round($tat/($melina+$anya+$tat+$jill+$tracy+$vesper),2)); ?>%
</td>
</tr>
<tr>
<td>Anya Amasova:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($anya/($melina+$anya+$tat+$jill+$tracy+$vesper),2)); ?>'
height='20'>
<?php echo(100*round($anya/($melina+$anya+$tat+$jill+$tracy+$vesper),2)); ?>%
</td>
</tr>
<tr>
<td>Melina Havelock:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($melina/($melina+$anya+$tat+$jill+$tracy+$vesper),2)); ?>'
height='20'>
<?php echo(100*round($melina/($melina+$anya+$tat+$jill+$tracy+$vesper),2)); ?>%
</td>
</tr>
</table>


