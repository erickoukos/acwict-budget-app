<?php

$link = mysqli_connect("localhost","root","","budget_db");
if (!$link)
{
    echo "MySQL Error: " . mysqli_connect_error();
}else{
    echo 'Connected successfully!';
}