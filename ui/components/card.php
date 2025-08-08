<?php 
$username = '';
$email = '';
$password = '';

if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
}
?>

<div class="card">
    <h3>User data</h3>
    <i> username ="<?= $username ?>"</i>
    <i> email ="<?= $email ?>"</i>
    <i> password ="<?= $password ?>"</i>
</div>