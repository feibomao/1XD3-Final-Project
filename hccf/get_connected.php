<!--
Author: Dennis Qin
Date: Mar 30, 2026
Descr: PHP for the get connected page which serves as the front end display for uploaded relevant data to the database
-->
<?php
session_start();
?>
<!doctype html>
<html>

<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Get Connected</title>
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


        <div id="header_images">
            <img id="header_image" src="images/header_image.jpeg">
            <img id="header_image2" src="images/image2.jpeg">
        </div>
        <div id="header">
            <h1>Get connected with us!</h1>
        </div>

        <div id="content">
            <div id="photos">
                <img src="images/image1.jpeg">
            </div>
            <div id="text_content">
                <form id="info" action="get_connectedR.php" method="post">
                    <h1>Name</h1>
                    <input id="name" name="name" type="text" placeholder="John Smith" required>
                    <h1>Email</h1>
                    <input id="email" name="email" type="email" placeholder="JohnSmith@gmail.com">
                    <h1>Confirm Email</h1>
                    <input id="conf_email" name="conf_email" type="email" placeholder="JohnSmith@gmail.com">
                    <h1>Social Media @</h1>
                    <input id="media" name="media" type="text" placeholder="@hamilton.ccf">
                    <h1>Platform</h1>
                    <select id="select" name="platform">
                        <option value="None">Select</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Facebook">Facebook</option>
                    </select>
                    <h1 id="tip"> </h1>
                    <div class="submit_button">
                        <input id="button" type="submit">
                    </div>
                </form>

            </div>
        </div>


        <div id="footer"> &copy; 2026 Hamilton Chinese Christian Fellowship </div>
    </div>
</body>

</html>