<?php
session_start();
require('connection.php');
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['user'] = $user['email'];
        header("Location: private/dashboard.php");
        exit;
    } else {
        $error = "You are not an admin user";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="webpage icon" href="images/RE.png">
    <title>Se connecter - Riad Elkheir</title>
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        input[type="email"],
        input[type="password"] {
            width: 92%;
            padding: 15px;
            margin: 10px 0;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            text-transform: uppercase;
            cursor: pointer;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    
    <form class="login-box" method="POST">
        <h2>Connexion</h2>
        <input type="email" name="email" placeholder="Adresse e-mail" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>

        <?php if ($error): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
            <script>
                setTimeout(function () {
                    window.location.href = 'page-first.php';
                }, 1000);
            </script>
        <?php endif; ?>
    </form>
</body>
</html>
