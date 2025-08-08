<?php 
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "belajar";
$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    echo "orang aneh database doang error";
    die("error");
}
