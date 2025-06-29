<?php
// À utiliser une seule fois pour créer un utilisateur
require('connection.php');
$username = "youssef";
$email = "youssef11@gmail.com";
$password = password_hash("123you123!", PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO users (username,email, password_hash) VALUES (?, ?, ?)");
$stmt->execute([$username, $email, $password]);

echo "Utilisateur créé.";
?>