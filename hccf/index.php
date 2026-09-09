<!--
    Author: Joshua, Dennis, Ehab, Colin
    Date: 2026/04/07
    Description: Main index page, includes a carousel of images.
-->

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HCCF</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/carousel.js"></script>
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

        <main id="carousel_section">
            <div class="carousel-container">
                <button id="prevBtn" class="carousel-btn" aria-label="Previous Image">&#10094;</button>

                <div class="carousel-slide">
                    <img id="display-img" src="images/gallery1.jpeg" alt="Fellowship Event Photo">
                </div>

                <button id="nextBtn" class="carousel-btn" aria-label="Next Image">&#10095;</button>
            </div>
            <p id="image-caption">HCCF Frosh Highlights</p>
        </main>
        <div id="AboutUsContainer">
            <div id="AboutUs">
                <h1>About Us</h1>
                <br>
                <p>HCCF is a Christian club at McMaster University that aims to provide fellowship for all individuals
                    that seek it.
                    We are a welcoming community that accepts you for who are, no matter how far along you are in your
                    faith.
                    Come join us for Bible studies, games nights, deep talks, and off campus activities every Thursday!!
                </p>
            </div>
        </div>

        <div id="footer"> &copy; 2026 Hamilton Chinese Christian Fellowship </div>
    </div>
</body>

</html>
