<?php
//Connect with database
//Voters

$server = "localhost";
$db_username = "root";
$db_password = "";
$connect = mysqli_connect($server,$db_username,$db_password);
if(!$connect){
    die("Failed to connect to MySQL database: " . mysqli_error());
}
mysqli_select_db($connect, 'Voters');


?>