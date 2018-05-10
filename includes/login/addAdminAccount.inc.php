<?php

require '../database/databaseConnection.inc.php';

$connection = getConnection();

$stmt = $connection->prepare("INSERT INTO administrators (
    admin_first_name,
    admin_last_name,
    admin_email, 
    admin_username,
    admin_password
) VALUES (?, ?, ?, ?, ?)");

if ($connection->errno) {
    echo "[MYSQL Error] Line: $connection->errno\n\t\t $connection->error";
} else {
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $username, $password);

    $first_name = "Administrator2";
    $last_name = "";
    $email = "spenzcasuga@gmail.com";
    $username = "administrator2";
    $password = password_hash("lifestealer", PASSWORD_DEFAULT);
    $stmt->execute();    
}


