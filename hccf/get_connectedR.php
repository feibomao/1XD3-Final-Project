<!--
Author: Dennis Qin
Date: Apr 18, 2026
Descr: PHP that uploads the relevant data to a table called getting_connected and reloads the page for the user once its submitted
-->
<?php
include "connect.php";

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$media = filter_input(INPUT_POST, "media", FILTER_SANITIZE_SPECIAL_CHARS);
$platform = filter_input(INPUT_POST, "platform", FILTER_SANITIZE_SPECIAL_CHARS);

$cmd = "INSERT INTO getting_connected (name, email, social_media, platform) VALUES (?, ?, ?, ?)";
$stmt = $dbh->prepare($cmd);
$success = $stmt->execute([$name, $email, $media, $platform]);

if ($success) {
    header("Location: get_connected.php");
} else {
    echo "Something went wrong. <a href='get_connected.php'>Go back</a>";
}
?>