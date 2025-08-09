<?php 
if ($username && $email && $password) {
    // Ensure that the variables are set before including the card
} else {
    // Handle the case where the variables are not set
    echo "User data is not available.";
    exit;
}
?>

<div class="card">
    <h3>User data</h3>
    <i> username ="<?= $username ?>"</i>
    <i> email ="<?= $email ?>"</i>
    <i> password ="<?= $password ?>"</i>
    <div>
        <button class="btn"><a href="/belajar-php/edit.php?email=<?= $email?>">edit</a></button>
        <button class="btn"><a href="/belajar-php/server/delete.php?email=<?=$email?>">Delete</a></button>
        <button class="btn"><a href="/belajar-php/server/delete.php?email=<?=$email?>">Delete</a></button>

    </div>
</div>