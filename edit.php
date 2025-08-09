<?php 
include("database/connection.php");

    if($_SERVER["REQUEST_METHOD"] === "GET") {
        $email = $_GET["email"];
        $sql = "SELECT * from crud where email='$email'";
        $result = $connection->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $username = $row["username"];
            $password = $row["password"];
            $email = $row["email"];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="server/update.php" method="POST" class="form">
        <label for="username">Username</label>
        <input type="text" value="<?=$email?>" hidden name="oldEmail">
        <input type="text" id="username" name="username" class="input" value="<?= $username?>">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="input" value="<?= $email?>">
        <label for="password">Password</label>
        <input type="text" id="password" name="password" class="input" placeholder="isi untuk mengubah password(opsional)">
        <input type="text" hidden value="<?= $password ?>" name="oldPassword">
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>