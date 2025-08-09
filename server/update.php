<?php 
include("../database/connection.php");

if($_SERVER["REQUEST_METHOD"] !== 'POST') {
    header("Location:index.php");
}
$emailOld = $_POST["oldEmail"];
$passwordlOld = $_POST["oldPassword"];
$username = $_POST["username"];
$passwords = $_POST["password"];
$email = $_POST["email"];
if (empty($passwords)) {
    $passwords = $passwordlOld;
}
$sql="UPDATE crud SET username='$username',password='$passwords',email='$email' WHERE email='$emailOld'";
$connection->query($sql);
header("Location:../index.php");