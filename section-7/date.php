<?php

date_default_timezone_set('America/Jamaica');

$dateTest = date('d M Y');
$timeTest = date('g:i a');

$day = date('d');
$month = date('M');
$year = date('Y');
echo $today = "Today is ".$day." of ".$month." ".$year;
echo "<br>";

echo "The time is ".date('Gi');
echo "<br>";
echo "Today is ".$dateTest." and the time is ".$timeTest;