<?php

    if(isset($_POST['submit'])) {
        $word = $_POST['word'];
        $reversed = strrev($word);
        
        if($word === $reversed) {
            echo $word." is a palindrome";
        } else {
           echo $word." is not a palindrome";
        }
    }