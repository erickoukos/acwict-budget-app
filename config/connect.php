<?php

// Use of headers

ob_start();

// Sessions

if (!isset($_SESSION)){
    session_start();
}

$connection = mysqli_connect("localhost","root","","budget_db");

if (!$connection)
{
    echo "MySQL Error: " . mysqli_connect_error();
}

else{
    echo 'Connected successfully!';
}

date_default_timezone_set('Africa/Nairobi');