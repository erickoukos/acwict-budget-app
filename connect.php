<?php

$conn = mysqli_connect("localhost","root","","budget_db");
if (!$conn)
{
    echo "MySQL Error: " . mysqli_connect_error();
}else{
    echo 'Connected successfully!';
}