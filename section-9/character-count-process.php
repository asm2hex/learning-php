<?php

if(isset($_POST['submit'])) {
    $sentence = $_POST['sentence'];
    $spaces = $_POST['spaces'];
    if($spaces === "yes") {
        $character = strlen($sentence);
        echo "There're $character characters (including spaces) in the string: $sentence";
    } else {
        $spacecount = substr_count($sentence, ' ');
        $character = strlen($sentence);
        $result = $character - $spacecount;
                
        echo "There're $result characters (excluding spaces) in the string: $sentence";
    }
    
}