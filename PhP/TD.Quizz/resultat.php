<?php

$q1 = strip_tags($_POST['q1']);
$q2 = strip_tags($_POST['q2']);

$score = 0;
if($q1 == 2)
{
    $score ++;
}

if($q2 == 12)
{
    $score ++;
}
echo "Score = " . $score . "/2<br>";
echo '<a href="index.php">Recommencer</a>';

?>