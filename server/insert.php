<?php 
include("../database/connection.php");

 if($_SERVER["REQUEST_METHOD" ] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    echo $username ."  ". $password ."  ". $email ."  ";

    $sql = "INSERT INTO crud (username,email,password) VALUES ('$username','$email','$password')";
    $connection->query($sql);
    header("Location: ../index.php");
    exit;
    // error handling
 }
 else {
    echo "bukan post jir";
 }
 ?>