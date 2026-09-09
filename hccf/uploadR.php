<?php session_start(); ?>
<!--
    Author: Ehab Ismail
    Date: 2026/04/07
    Description: PHP for uploading function, also displays the uploaded picture.
-->
<!DOCTYPE html>
<html>

<head>
    <title>Upload Image</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include "connect.php";

    if (!isset($_SESSION["user"])) {
        echo "<p>You must be logged in to upload.</p>";
        exit;
    }

    $user_email = $_SESSION["user"];
    $allowed_types = ["image/jpeg", "image/png", "image/gif", "image/webp"];
    $upload_dir = "uploads/";

    if (!isset($_FILES["image"]) || $_FILES["image"]["error"] !== UPLOAD_ERR_OK) {
        echo "<p>Upload failed. Please try again.</p>";
        exit;
    }

    $file = $_FILES["image"];
    $mime_type = mime_content_type($file["tmp_name"]);

    if (!in_array($mime_type, $allowed_types)) {
        echo "<p>Invalid file type. Only JPEG, PNG, GIF, and WebP are allowed.</p>";
        exit;
    }

    $extension = pathinfo($file["name"], PATHINFO_EXTENSION);
    $new_filename = uniqid("img_", true) . "." . $extension;
    $destination = $upload_dir . $new_filename;

    if (move_uploaded_file($file["tmp_name"], $destination)) {

        $command = "INSERT INTO `uploads` (`user_email`, `filename`, `original_name`, `file_size`, `mime_type`) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $dbh->prepare($command);
        $params = [
            $user_email,
            $new_filename,
            $file["name"],
            $file["size"],
            $mime_type
        ];
        $success = $stmt->execute($params);

        ?>
        <div id="content_container">
            <div id="nav_container">
                <img src="images/placeholder.jpg" alt="Logo" class="nav-logo">
                <div id="nav_links">
                    <?php if (isset($_SESSION["user"])) {
                        echo "<p class='nav-item-b'>" . $_SESSION["user"] . "</p>";
                    } else { ?>
                        <p class="nav-item-b">guest</p>
                    <?php } ?>
                    <a class="nav-item" href="index.php">HOME</a>
                    <a class="nav-item" href="get_connected.php">GET CONNECTED</a>
                    <a class="nav-item" href="collage.php">PHOTOS</a>
                    <a class="nav-item" href="upload.php">UPLOAD</a>

                    <?php if (isset($_SESSION["user"])) { ?>
                        <a class="nav-item" href="logout.php">LOGOUT</a>
                        <?php
                    } else { ?>
                        <a class="nav-item" href="login.php">LOGIN</a>
                    <?php } ?>

                </div>
            </div>
            <div id="box">
                <?php if ($success): ?>
                    <p>Image uploaded successfully!</p>
                    <img src="<?= $destination ?>" style="max-width:100%;">
                    <form action="upload.php">
                        <div id="item2">
                            <input id="send" type="submit" value="Upload Another">
                        </div>
                    </form>
                <?php else: ?>
                    <p>File saved but database record failed.</p>
                <?php endif; ?>
            </div>

            <div id="footer">
                <p> &copy; 2026 Hamilton Chinese Christian Fellowship </p>
            </div>
        </div>
        <?php

    } else {
        echo "<p>Failed to save the file. Check that the uploads/ folder exists and is writable.</p>";
    }
    ?>
</body>

</html>