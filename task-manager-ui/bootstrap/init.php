<?php
include "config.php";
include "vendor/autoload.php";
include "libs/helpers.php";


try {
    $db = new pdo("mysql:host=$database_config->host;dbname=$database_config->database;charset=utf8", 'root', '', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ));
} catch (PDOException $pe) {
    diePage("connection failed: " . $pe->getMessage());
}

include "libs/lib-tasks.php";
include "libs/lib-auth.php";
// echo "Database Configuration is available";
