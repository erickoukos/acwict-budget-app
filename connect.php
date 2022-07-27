<?php 

$conn = mysqli_connect("localhost", "root", "Budget@pp22", "budgetapp_db");

if(!$conn){
    echo "MySQL Error: " . mysqli_connect_error();
}

