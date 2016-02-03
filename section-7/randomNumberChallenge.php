<?php

$heads = 0;
$tails = 0;

if($headsOrTails === 1) {
    echo "Heads, I win!";
} else {
    echo "Tails, you win!";
}

echo "<br>";

for($i = 1; $i <= 100; $i++) {
    $headsOrTails = rand(1,2);
    /*echo $headsOrTails."<br>";*/ 
    if($headsOrTails === 1) {
        $heads += 1;
    } else {
        $tails += 1;
    }
       
}

echo "There were ".$heads." heads and ".$tails." tails";