<?php

date_default_timezone_set('America/Jamaica');

echo date('l jS F Y')."<br>";
echo "Today is ".date('l')."<br>";
echo date('l d F, Y ')."<br>";
echo date('Y/m/d')."<br>";
echo date('l jS F Y, h:i A')."<br>";

if(date('L') === 1) {
    echo date('Y')." is a leap year.";
} else {
    echo date('Y')." isn't a leap year.";
}