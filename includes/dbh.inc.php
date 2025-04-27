<?php

$host = 'localhost';
$port = '4306'; // ✅ Add this line
$dbname = 'yummydb';
$dbusername = 'root';
$dbpassword = '';

try {
    // ✅ Add port to the DSN
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
