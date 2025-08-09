<main class="main">
    <form action="server/insert.php" method="post" class="form" required>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="input" required>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="input">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="input" required>
        <button type="submit" name="submit">submit</button>
    </form>
    <div class="card-container">
        <?php 
        while ($row = $result->fetch_assoc()) {
            $username = $row['username'];
            $email = $row['email'];
            $password = $row['password']; // Remove this line to avoid exposing password
            include "components/card.php";
            } 
        ?>
    </div>
</main>
