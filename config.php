<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$host = '127.0.0.1';
$dbname = 'mynsdb';
$username = 'mynsuser';
$password = 'mynspassword';
$PORT = '3306';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$PORT", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
