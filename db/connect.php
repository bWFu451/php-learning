<?php
$config = require __DIR__ . "/../config.php";

$dsn = "mysql:host=" . $config["host"] . ";dbname=" . $config["dbname"] . ";charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $config["user"], $config["password"], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);

} catch (PDOException $e) {
    echo "Не удалось подключиться";
}