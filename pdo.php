<?php

$hostname = 'sql1.njit.edu ';
$username = 'bbk23';
$password = 'Stoneboys4.';
$dsn = "mysql:host=$hostname;db=username";

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $error) {
    $error_message = $error->getMessage();
    echo "Error Connecting to SQL: $error_message";
}