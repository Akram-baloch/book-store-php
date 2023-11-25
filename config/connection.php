<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){
    echo "connection failed";
}
?>
