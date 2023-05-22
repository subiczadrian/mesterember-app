<?php

$host = 'localhost';
$dbname = 'mesterember_app_users'; 
$username = 'root';
$password = '';

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die('Connection error: ' . $mysqli->connect_error);
}

$sqlFile = 'mesterember_app_users.sql';

$sqlContent = file_get_contents($sqlFile);

if ($mysqli->multi_query($sqlContent)) {
    echo "SQL file imported successfully.";
} else {
    echo "Error importing SQL file: " . $mysqli->error;
}

$mysqli->close();
?>