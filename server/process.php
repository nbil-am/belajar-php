<?php 
 if($_SERVER["REQUEST_METHOD" ] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $sql = "INSERT INTO crud (username,email,password) VALUES ('$username','$password','$email')";
    $connection->query($sql);
    header("Location: index.php");
 }
 else {
    echo "bukan post jir";
 }
 ?>