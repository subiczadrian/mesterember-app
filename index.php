<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kezdőlap</title>
</head>
<body>
    
    <h1>Kezdőlap</h1>

    <?php if (isset($user)): ?>

        <p>Hello <?= htmlspecialchars($user["username"]) ?></p>

        <p><a href="logout.php">Kijelentkezés</a></p>

    

    <?php else: ?>

        <p><a href="login.php">Bejelentkezés</a></p>

    <?php endif; ?>

</body>
</html>