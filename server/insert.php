<?php 
include("../database/connection.php");

 if($_SERVER["REQUEST_METHOD" ] == "POST") {
   if(!isset($_POST["username"]) && !isset($_POST["email"]) && !isset($_POST["password"])) {
      header("Location:../index.php");
   }
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
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