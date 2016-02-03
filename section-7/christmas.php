<?php

date_default_timezone_set('America/Jamaica');

$date = strtotime('25 December 2015') - time();
echo ceil($date/60/60/24)." days until christendom's holiday";