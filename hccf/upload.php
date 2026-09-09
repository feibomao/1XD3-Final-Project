<?php session_start(); ?>
<!--
    Author: Ehab Ismail
    Date: 2026/04/07
    Description: HTML and php for upload page
-->
<!DOCTYPE html>
<html>

<head>
    <title>Upload Image</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/upload.js"></script>
</head>

<body>
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

        <div id="upload_main">
            <?php if (!isset($_SESSION["user"])): ?>
                <p id="not_logged_in">You must be <a href="login.php">logged in</a> to upload.</p>
            <?php else: ?>
                <form action="uploadR.php" method="post" enctype="multipart/form-data" id="upload_form">
                    <div id="drop_zone">
                        <div id="drop_icon">&#8679;</div>
                        <div id="drop_label">DRAG TO UPLOAD</div>
                        <div id="drop_sub">or click anywhere here to browse</div>
                        <input type="file" id="image" name="image" accept="image/*" required>
                        <div id="file_preview">No file selected</div>
                    </div>
                    <div id="upload_submit">
                        <input id="send" type="submit" value="Upload Image">
                    </div>
                </form>
            <?php endif; ?>
        </div>

        <div id="footer">
            <p> &copy; 2026 Hamilton Chinese Christian Fellowship </p>
        </div>
    </div>
</body>

</html>