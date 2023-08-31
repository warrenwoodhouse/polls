<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$a = $array[0];
$b = $array[1];
$c = $array[2];
$d = $array[3];
$e = $array[4];
$f = $array[5];
$g = $array[6];
$h = $array[7];
$i = $array[8];
$j = $array[9];
$k = $array[10];
$l = $array[11];

if ($vote == 0) {
  $a = $a + 1;
}
if ($vote == 1) {
  $b = $b + 1;
}
if ($vote == 2) {
  $c = $c + 1;
}
if ($vote == 3) {
  $d = $d + 1;
}
if ($vote == 4) {
  $e = $e + 1;
}
if ($vote == 5) {
  $f = $f + 1;
}
if ($vote == 6) {
  $g = $g + 1;
}
if ($vote == 7) {
  $h = $h + 1;
}
if ($vote == 8) {
  $i = $i + 1;
}
if ($vote == 9) {
  $j = $j + 1;
}
if ($vote == 10) {
  $k = $k + 1;
}
if ($vote == 11) {
  $l = $l + 1;
}

//insert votes to txt file
$insertvote = $a."||";
$insertvote = $b."||";
$insertvote = $c."||";
$insertvote = $d."||";
$insertvote = $e."||";
$insertvote = $f."||";
$insertvote = $g."||";
$insertvote = $h."||";
$insertvote = $i."||";
$insertvote = $j."||";
$insertvote = $k."||";
$insertvote = $l."||";
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Assassin’s Creed III:</td>
<td><img src="polls/example/poll.png"
width='<?php echo(100*round($a/($a+$a),1)); ?>'
height='20'>
<?php echo(100*round($a/($a+$a),1)); ?>%
</td>
</tr>
<tr>
<td>Destroy All Humans!:</td>
<td><img src="polls/example/poll.png"
width='<?php echo(100*round($b/($b+$b),1)); ?>'
height='20'>
<?php echo(100*round($b/($b+$b),1)); ?>%
</td>
</tr>
<tr>
<td>Micro Machines v3 (PS1):</td>
<td><img src="polls/example/poll.png"
width='<?php echo(100*round($c/($c+$c),1)); ?>'
height='20'>
<?php echo(100*round($c/($c+$c),1)); ?>%
</td>
</tr>
<tr>
<td>Crash Bandicoot: Cortex Strikes Back!:</td>
<td><img src="polls/example/poll.png"
width='<?php echo(100*round($d/($d+$d),1)); ?>'
height='20'>
<?php echo(100*round($d/($d+$d),1)); ?>%
</td>
</tr>
<tr>
<td>Pandemonium! (PS1):</td>
<td><img src="polls/example/poll.png"
width='<?php echo(100*round($e/($e+$e),1)); ?>'
height='20'>
<?php echo(100*round($e/($e+$e),1)); ?>%
</td>
</tr>
<tr>
<td>The Sims (PS2):</td>
<td><img src="polls/example/poll.png"
width='<?php echo(100*round($f/($f+$f),1)); ?>'
height='20'>
<?php echo(100*round($f/($f+$f),1)); ?>%
</td>
</tr>
<tr>
<td>Hitman: Codename 47 (PC):</td>
<td><img src="polls/example/poll.png"
width='<?php echo(100*round($g/($g+$g),1)); ?>'
height='20'>
<?php echo(100*round($g/($g+$g),1)); ?>%
</td>
</tr>
<tr>
<td>Dog's Life:</td>
<td><img src="polls/example/poll.png"
width='<?php echo(100*round($h/($h+$h),1)); ?>'
height='20'>
<?php echo(100*round($h/($h+$h),1)); ?>%
</td>
</tr>
<tr>
<td>The Godfather: The Video Game (PS2):</td>
<td><img src="polls/example/poll.png"
width='<?php echo(100*round($i/($i+$i),1)); ?>'
height='20'>
<?php echo(100*round($i/($i+$i),1)); ?>%
</td>
</tr>
<tr>
<td>Zone of the Enders (PS2):</td>
<td><img src="polls/example/poll.png"
width='<?php echo(100*round($j/($j+$j),1)); ?>'
height='20'>
<?php echo(100*round($j/($j+$j),1)); ?>%
</td>
</tr>
<tr>
<td>Thief (Remake):</td>
<td><img src="polls/example/poll.png"
width='<?php echo(100*round($k/($k+$k),1)); ?>'
height='20'>
<?php echo(100*round($k/($k+$k),1)); ?>%
</td>
</tr>
<tr>
<td>Dishonored:</td>
<td><img src="polls/example/poll.png"
width='<?php echo(100*round($l/($l+$l),1)); ?>'
height='20'>
<?php echo(100*round($l/($l+$l),1)); ?>%
</td>
</tr>
</table>
