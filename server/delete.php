<?php 
include("../database/connection.php");
$email = $_GET["email"];
$sql = "DELETE FROM crud WHERE email='$email'";
$connection->query($sql);
header("Location:../index.php");