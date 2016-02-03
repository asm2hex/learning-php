<?php
 
 
    if(isset($_POST['submit'])) {
        $temperature = $_POST['temperature'];
        $degree = $_POST['degree'];
        $accuracy = $_POST['accuracy'];
        
        if($degree === "fahrenheit") {
            $fahrenheit = $temperature * 1.8 + 32;
            echo "Your conversion from ".$temperature."&#8451; is: ".round($fahrenheit, $accuracy)."&#8457;";
        } else {
            $celsius = ($temperature - 32) * 5/9;
            echo "Your conversion from ".$temperature."&#8457; is: ".round($celsius, $accuracy)."&#8451;";
        }
    }
    
   
