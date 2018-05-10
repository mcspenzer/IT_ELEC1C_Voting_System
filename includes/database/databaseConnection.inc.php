<?php

function getConnection() {
    $server_name = "localhost";
    $database_name = "IT-ELEC_DB";

    $user_name = "spenzcasuga";
    $user_password = "lifestealer";

    $conn = new mysqli($server_name, $user_name, $user_password, $database_name);

    if ($conn->connect_error) {
        return false;
        exit;
    } else {
        return $conn;
        exit;
    }
}