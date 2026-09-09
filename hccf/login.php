<!DOCTYPE html>
<!--
Author: Colin Wei
Date: 2026/04/01
Description: HTML and php for login page 
-->
<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/currUser.js"></script>

</head>

<body>
    <div id=content_container>
        <div id="nav_container">
            <img src="images/placeholder.jpg" alt="Logo" class="nav-logo">
            <div id="nav_links">
                <a class="nav-item" href="index.php">HOME</a>
                <a class="nav-item" href="get_connected.php">GET CONNECTED</a>
                <a class="nav-item" href="collage.php">PHOTOS</a>
            </div>
        </div>

        <div id="box">
            <h1>LOG IN</h1>
            <form id="login" action="loginAJAX.php" , method="post">
                <div id="label">
                    <label for="email">Email:</label>
                </div>
                <div>
                    <input type="email" id="email" name="email" required>
                </div>
                <div id="label">
                    <label for="pword">Password:</label>
                </div>
                <div>
                    <input type="password" id="pword" name="pWord" required>
                </div>
                <div id="item2">
                    <input id="send" type="submit">
                </div>
            </form>

            <form id="hide" action="get_connected.php">
            </form>

            <p><a href=signup.php>New? Sign up here!</a></p>
            <p><span id="target"></span></p>
        </div>

    </div>
</body>

</html>