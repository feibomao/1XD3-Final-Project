<?php
session_start()
    ?>

<!DOCTYPE html>
<!--
Author: Colin Wei
Date: 2026/04/07
Description: HTML and php for logout page 
-->
<html>

<head>
    <title>Logout</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id=content_container>
        <?php
        session_destroy()
            ?>

        <div id="nav_container">
            <img src="images/placeholder.jpg" alt="Logo" class="nav-logo">
            <div id="nav_links">
                <a class="nav-item" href="index.php">HOME</a>
                <a class="nav-item" href="get_connected.php">GET CONNECTED</a>
                <a class="nav-item" href="login.php">LOGIN</a>
            </div>
        </div>
        <div id=box>

            <p>Successfully Logged Out</p>
            <form action="index.php">
                <input id="send" type="submit" value="Home">
            </form>
        </div>
    </div>
</body>

</html>