<?php
session_start();
require('connection.php');

$recruters = $pdo->query("SELECT * FROM jobapply ORDER BY id DESC")->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App - Riad Elkheir</title>
    <link rel="webpage icon" href="images/RE.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Candidature - RiadElkheir</title>
    <style>
        .navbar {
            background-color: #fff !important;
            border-bottom: 1px solid #e0e0e0;
            padding: 1rem 0;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2c3e50 !important;
        }

        .nav-link {
            color: #555 !important;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #3498db !important;
        }

        .btn-signup {
            background-color: #dc3545;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-signup:hover {
            background-color: #dc3545;
            color: white;
        }
        
        .table-container {
            max-width: 1100px;
            margin: 0 auto;
            margin-top: 10%;
            padding: 0 20px;
            overflow-x: auto;
        }

        .responsive-table {
            width: 100%;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-collapse: collapse;
        }

        .responsive-table thead {
            background-color: #34495e;
            color: white;
        }

        .responsive-table th {
            padding: 15px 10px;
            text-align: left;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .responsive-table td {
            padding: 15px 10px;
            border-bottom: 1px solid #e0e0e0;
            color: #555;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid">         
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav me-auto mt-3 mt-lg-0">
                    <a class="nav-link" href="dashboard.php">Accueil</a>
                    <a class="nav-link" href="contact.php">Contact</a>
                </div>
            </div>

            <h2 class="navbar-brand mb-0">RiadElkheir</h2>
            
            <div class="d-flex">
                <a href="logout.php" class="btn btn-primary btn-signup">Se deconnecter</a>
            </div>

        </div>
    </nav>
    <div class="table-container">
    <table class="responsive-table">
      <thead>
        <tr>
          <th>ID</th><th>Nom</th><th>Prenom</th><th>CIN</th><th>Phone</th><th>Email</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($recruters as $re): ?>
        <tr>
            <td><?= htmlspecialchars($re['id']) ?></td>
            <td><?= htmlspecialchars($re['last_name'])?></td>
            <td><?= htmlspecialchars($re['first_name'])?></td>
            <td><?= htmlspecialchars($re['cin'])?></td>
            <td><?= htmlspecialchars($re['phone'])?></td>
            <td><?= htmlspecialchars($re['email'])?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>
</body>
</html>