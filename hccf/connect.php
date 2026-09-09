<?php
/**
 * Include this to connect. Change the dbname to match your database,
 * and make sure your login information is correct after you upload 
 * to csunix or your app will stop working.
 * 
 * Sam Scott, McMaster University, 2025
 */
try {
    $dbh = new PDO(
        "mysql:host=localhost;dbname=ismaie2_db",
        "ismaie2_local",
        "6(jm*Ahz"
    );
} catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}");
}

// echo "<p>It worked!!!</p>"; // success message