<!DOCTYPE html>
<!--
Author: Colin Wei
Date: 2026/04/01
Description: HTML and php for signup page 
-->
<html>

<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/newUser.js"></script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div id="content_container">
        <div id="nav_container">
            <img src="images/placeholder.jpg" alt="Logo" class="nav-logo">
            <div id="nav_links">
                <a class="nav-item" href="index.php">HOME</a>
                <a class="nav-item" href="get_connected.php">GET CONNECTED</a>
                <a class="nav-item" href="collage.php">PHOTOS</a>
            </div>
        </div>

        <div id="box">

            <h1>SIGN UP</h1>

            <form id="signUp" action="signupAJAX.php" , method="post">
                <div id="label">
                    <label for="email">Email:</label>
                </div>
                <div id="item">
                    <input type="email" id="email" name="email" required>
                </div>
                <div id="label">
                    <label for="pw">Password:</label>
                </div>
                <div id="item">
                    <input type="password" id="pw" name="pword" required>
                </div>
                <div id="label">
                    <label for="pwC">Confirm password:</label>
                </div>
                <div id="item">
                    <input type="password" id="pwC" name="pwordC" required>
                </div>
                <div id="item2">
                    <input id="send" type="submit">
                </div>
            </form>

            <form id="hide" action="get_connected.php">
            </form>

            <p><a href=login.php>Already have an account? Log in here!</a></p>
            <p><span id="target"></span></p>
            <!-- <p id="msg"></p> -->
            <!-- <p id="msg2"></p> -->
        </div>
    </div>
    <input type="hidden" id="status">
</body>

</html>