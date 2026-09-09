<?php

session_start();
/**
 * Author: Colin Wei
 * Date: 2026/04/18
 * Description: AJAX file for signup
 */

include "connect.php";

$email = filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_GET, "pword", FILTER_SANITIZE_SPECIAL_CHARS);

$command = "SELECT `email` FROM `users` WHERE `email` = ?";
$stmt = $dbh->prepare($command);
$params = [$email];
$success = $stmt->execute($params);

if ($success) {
    if ($row = $stmt->fetch()) {
        echo "email already taken";
    } else {
        echo "1";
        $_SESSION["user"] = $email;
        $command = "INSERT INTO `users` (`email`, `password`) VALUES (?,?)";
        $stmt = $dbh->prepare($command);
        $params = [$email, password_hash($password, PASSWORD_DEFAULT)];
        $success = $stmt->execute($params);
    }
}