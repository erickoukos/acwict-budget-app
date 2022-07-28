<?php 

define('HOSTNAME', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'budget_db');
$conn = mysqli_connect(HOSTNAME, USER, PASSWORD,DATABASE);

if(!$conn){
    echo "MySQL Error: " . mysqli_connect_error();
}else{
    echo 'Connected to the database!';
}

