<?php
// config.php
$host = 'sql312.infinityfree.com';
$dbname = 'if0_37689774_bazar';
$username = 'if0_37689774';
$password = 'lvZ3qL2l7nSh2';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Database connection failed: ' . $e->getMessage();
}
?>
