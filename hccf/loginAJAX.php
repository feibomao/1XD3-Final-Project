<?php
session_start();
/**
 * Author: Colin Wei
 * Date: 2026/04/18
 * Description: AJAX file for login 
 */
include "connect.php";

$email = filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_GET, "pword", FILTER_SANITIZE_SPECIAL_CHARS);

$command = "SELECT * FROM `users` WHERE `email` = ?";
$stmt = $dbh->prepare($command);
$params = [$email];
$success = $stmt->execute($params);

if ($success) {

    if ($row = $stmt->fetch()) {
        if (password_verify($password, $row["password"])) {
            $_SESSION["user"] = $row["email"];
            echo "1";
        } else {
            echo "Incorrect Password";
        }
    } else {
        echo "User Not Found";
    }
}


//echo "Hello, <strong>$name</strong>!!!";
