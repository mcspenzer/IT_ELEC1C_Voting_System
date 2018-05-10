<?php

require "../database/databaseConnection.inc.php";

if (!isset($_POST['user_name_transfer']) && !isset($_POST['user_password_transfer'])) {
    echo "no username";
    exit;
} else {
    //Get connection from databaseConnection.inc.php
    $connection = getConnection();

    $sql_statement = "SELECT admin_id, admin_first_name, admin_last_name, admin_email, admin_username FROM administrators WHERE admin_username = ?";

    $stmt = $connection->prepare($sql_statement);
    $stmt->bind_param("s", $user_name);

    $user_name = $_POST['user_name_transfer'];
    $user_password = $_POST['user_password_transfer'];
    $stmt->execute();

    $result = $stmt->store_result();

    echo "".$stmt->num_rows;
    
    if ($stmt->num_rows != 1) {
        echo "invalid result";
        exit;
    } else {
        $stmt->bind_result($admin_id, $admin_first_name, $admin_last_name, $admin_email, $admin_username);

        session_start();
        
        //bind fetched values to session
        while ($stmt->fetch()) {
            $_SESSION['admin_id'] = $admin_id;
            $_SESSION['admin_first_name'] = $admin_first_name;
            $_SESSION['admin_last_name'] = $admin_last_name;
            $_SESSION['admin_email'] = $admin_email;
            $_SESSION['admin_username'] = $admin_username;

            var_dump($_SESSION);
        }
        
        $stmt->close();
        $connection->close();

        header("Location: ../../home.php");
    }
}