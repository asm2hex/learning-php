<?php

if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    
    echo "You've submitted ".$firstname." ".$lastname." ".$email." ".$gender;
}