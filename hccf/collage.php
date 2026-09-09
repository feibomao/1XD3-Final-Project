<!--
Author: Joshua Kollanur
Date: 2026/04/19
Description: Photo display, grabs images from the database 
and displays them in a page format for every 10 images
-->
<?php

session_start();
include "connect.php";

$photosPerPage = 12;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
if ($page < 1)
    $page = 1;
$offset = ($page - 1) * $photosPerPage;

$countStmt = $dbh->query("SELECT COUNT(*) FROM uploads");
$totalPhotos = $countStmt->fetchColumn();
$totalPages = ceil($totalPhotos / $photosPerPage);

$stmt = $dbh->prepare("SELECT filename, original_name FROM uploads LIMIT ? OFFSET ?");
$stmt->bindValue(1, $photosPerPage, PDO::PARAM_INT);
$stmt->bindValue(2, $offset, PDO::PARAM_INT);
$stmt->execute();
$photos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Collage</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/collage.js"></script>
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
                <?php if (isset($_SESSION["user"])): ?>
                    <a class="nav-item" href="logout.php">LOGOUT</a>
                <?php else: ?>
                    <a class="nav-item" href="login.php">LOGIN</a>
                <?php endif; ?>
            </div>
        </div>

        <div id="header">
            <h1>Photo Collage</h1>
        </div>

        <main id="collage_grid">
            <?php if (count($photos) > 0): ?>
                <?php foreach ($photos as $photo): ?>
                    <div class="photo-item">
                        <img src="uploads/<?= htmlspecialchars($photo['filename']) ?>"
                            alt="<?= htmlspecialchars($photo['original_name']) ?>">
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p style="text-align:center;">No photos uploaded yet.</p>
            <?php endif; ?>
        </main>

        <div class="pagination">
            <?php if ($page > 1): ?>
                <a href="collage.php?page=<?= $page - 1 ?>" class="nav-arrow prev">
                    <span></span>
                </a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="collage.php?page=<?= $i ?>" class="page-btn <?= ($i == $page) ? 'active' : '' ?>">
                    <?= $i ?>
                </a>
            <?php endfor; ?>

            <?php if ($page < $totalPages): ?>
                <a href="collage.php?page=<?= $page + 1 ?>" class="nav-arrow next">
                    <span></span>
                </a>
            <?php endif; ?>
        </div>

        <div id="lightbox">
            <img id="lightbox-img" src="">
        </div>

        <div id="footer"> &copy; 2026 Hamilton Chinese Christian Fellowship </div>
    </div>
</body>

</html>