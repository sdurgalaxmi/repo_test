<?php
// index.php

$host = getenv('DB_HOST') ?: 'demopostgres';
$db   = getenv('DB_NAME') ?: 'demodb';
$user = getenv('DB_USER') ?: 'demo2';
$pass = getenv('DB_PASSWORD') ?: 'demo2';

$dsn = "pgsql:host=$host;dbname=$db";
try {
    $pdo = new PDO($dsn, $user, $pass);
    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
