<?php
    $host = 'localhost';
    $dbname = 'mesterember_app_users'; 
    $username = 'root';
    $password = '';

    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $mysqli = new mysqli($host, $username, $password, $dbname);

    if ($mysqli->connect_errno) {
        die('Connection error: ' . $mysqli->connect_error);
    }

    $sql = 'INSERT INTO user (username, email, password_hash) VALUES (?, ?, ?)';

    $stmt = $mysqli->prepare($sql);

    if (!$stmt) {   
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param('sss', $_POST["username"], $_POST["email"], $password_hash);

    $stmt->execute();

    $stmt->close();
    $mysqli->close();

    header('Location: sign-up-success.html');
    exit;
?>
