<?php
session_start();
require('connection.php');

// --- Supprimer un professeur ---
if (isset($_GET['delete'])) {
    $pdo->prepare("DELETE FROM professor WHERE id = ?")->execute([$_GET['delete']]);
    header("Location: professeur.php");
    exit;
}

// --- Ajouter un professeur ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_GET['edit'])) {
    $stmt = $pdo->prepare("INSERT INTO professor (full_name, email, phone, cin, job, date_join, date_left, salary) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['full_name'], $_POST['email'], $_POST['phone'], $_POST['cin'], $_POST['job'],
        $_POST['date_join'], $_POST['date_left'], $_POST['salary']
    ]);
    header("Location: professeur.php");
    exit;
}

// --- Modifier un professeur ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['edit'])) {
    $stmt = $pdo->prepare("UPDATE professor SET full_name=?, email=?, phone=?, cin=?, job=?, date_join=?, date_left=?, salary=? WHERE id=?");
    $stmt->execute([
        $_POST['full_name'], $_POST['email'], $_POST['phone'], $_POST['cin'], $_POST['job'],
        $_POST['date_join'], $_POST['date_left'], $_POST['salary'], $_GET['edit']
    ]);
    header("Location: professeur.php");
    exit;
}

$search = isset($_GET['search']) ? trim($_GET['search']) : '';
    if (!empty($search)) {
        $res = $pdo->prepare("SELECT * FROM professor 
                WHERE full_name LIKE :search OR email LIKE :search OR cin LIKE :search 
                ORDER BY id DESC");
        $res->execute([':search' => "%$search%"]);
    } else {
        $res = $pdo->query("SELECT * FROM professor ORDER BY id DESC");
    }
    $members = $res->fetchAll();  
    
    $edit_member = null;
if (isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM professor WHERE id = ?");
    $stmt->execute([$_GET['edit']]);
    $edit_member = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professeur - Riad Elkheir</title>
    <link rel="webpage icon" href="images/RE.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        /* Navigation */
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

        /* Section Hero */
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn-custom {
            background-color: #e74c3c;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            color: white;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #c0392b;
            color: white;
        }

        .btn-outline-light {
            border: 2px solid white;
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            background: transparent;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background-color: white;
            color: #667eea;
        }

        /* Sections */
        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .section-title p {
            font-size: 1.1rem;
            color: #7f8c8d;
        }

        /* Section About */
        #about {
            background-color: white;
        }

        #about h3 {
            color: #2c3e50;
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        #about p {
            color: #555;
            margin-bottom: 1rem;
            text-align: justify;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .gallery-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
            color: white;
            padding: 20px;
            text-align: center;
        }

        .gallery-overlay h5 {
            margin: 0;
            font-size: 1.2rem;
        }

        /* Features */
        .fas {
            font-size: 1.2rem;
        }

        .text-success {
            color: #27ae60 !important;
        }

        /* Section Stats */
        .stats-section {
            background-color: #34495e;
            color: white;
        }

        .stat-item {
            text-align: center;
            padding: 2rem 1rem;
        }

        .stat-item .number {
            font-size: 3rem;
            font-weight: bold;
            color: #3498db;
            margin-bottom: 0.5rem;
        }

        .stat-item .label {
            font-size: 1.1rem;
            color: #bdc3c7;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 50px 0 30px;
        }

        footer .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #3498db;
        }

        footer p {
            color: #bdc3c7;
            line-height: 1.6;
        }

        footer h5 {
            color: white;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: #bdc3c7;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #3498db;
        }

        /* Utilitaires */
        .shadow-sm {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1) !important;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Section Title */
        .title {
            background-color: #34495e;
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        .title h2 {
            font-size: 2rem;
            margin: 0;
            font-weight: 500;
        }

        /* Form Section */
        .formSection {
            background-color: white;
            padding: 40px 0;
        }

        .show-btn {
            text-align: center;
            margin-bottom: 20px;
        }

        #toggle-btn {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        #toggle-btn:hover {
            background-color: #2980b9;
        }

        .form-section {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
            display: none;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .form-section.visible {
            display: block;
            opacity: 1;
        }

        .form-section h3 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.5rem;
        }

        .form-section form {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            border: 1px solid #e0e0e0;
        }

        .form-section input {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-section input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
        }

        .form-section button[type="submit"] {
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        .form-section button[type="submit"]:hover {
            background-color: #219a52;
        }

        .form-section a {
            background-color: #95a5a6;
            color: white;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .form-section a:hover {
            background-color: #7f8c8d;
        }

        /* Table Section */
        .table-section {
            background-color: #f8f9fa;
            padding: 40px 0;
        }

        .table-section h3 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.8rem;
        }

        .table-container {
            max-width: 1200px;
            margin: 0 auto;
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

        .responsive-table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .responsive-table tbody tr:last-child td {
            border-bottom: none;
        }

        .responsive-table a {
            color: #3498db;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .responsive-table a:hover {
            color: #2980b9;
        }

        .responsive-table a[href*="delete"] {
            color: #e74c3c;
        }

        .responsive-table a[href*="delete"]:hover {
            color: #c0392b;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }
            
            .hero-section p {
                font-size: 1rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .stat-item .number {
                font-size: 2rem;
            }
            
            .btn-lg {
                padding: 10px 20px;
                font-size: 1rem;
            }
            
            .gallery-item img {
                height: 200px;
            }
            
            .title h2 {
                font-size: 1.5rem;
            }
            
            .form-section {
                padding: 0 10px;
            }
            
            .form-section form {
                padding: 20px;
            }
            
            .responsive-table {
                font-size: 0.8rem;
            }
            
            .responsive-table th,
            .responsive-table td {
                padding: 10px 8px;
            }
            
            .responsive-table thead {
                display: none;
            }
            
            .responsive-table tbody tr {
                display: block;
                margin-bottom: 15px;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                overflow: hidden;
            }
            
            .responsive-table tbody td {
                display: block;
                text-align: right;
                padding: 10px 15px;
                border-bottom: 1px solid #f0f0f0;
                position: relative;
                padding-left: 50%;
            }
            
            .responsive-table tbody td:before {
                content: attr(data-label) ": ";
                position: absolute;
                left: 15px;
                width: 45%;
                text-align: left;
                font-weight: 600;
                color: #2c3e50;
            }
            
            .responsive-table tbody td:last-child {
                border-bottom: none;
            }
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

    <section class="title">
        <h2>Professeurs</h2>
    </section>
    
    <section class="formSection">
        <div class="show-btn">
            <button id="toggle-btn" onclick="toggleForm()">Afficher</button>
        </div>
        <div id="form-section" class="form-section">
        <h3><?= $edit_member ? 'Modifier un membre' : 'Ajouter nouveau membre' ?></h3>
        <form method="POST">
            <input type="text" name="full_name" placeholder="Nom complet" required value="<?= $edit_member['full_name'] ?? '' ?>">

            <input type="email" name="email" placeholder="email" required value="<?= $edit_member['email'] ?? '' ?>">
            <input type="text" name="phone" placeholder="phone" required value="<?= $edit_member['phone'] ?? '' ?>">

            <input type="text" name="cin" placeholder="CIN" required value="<?= $edit_member['cin'] ?? '' ?>">
            <input type="text" name="job" placeholder="Metier" required value="<?= $edit_member['job'] ?? '' ?>">

            <input type="date" name="date_join" placeholder="Date d'entrée" value="<?= $edit_member['date_join'] ?? '' ?>">
            <input type="date" name="date_left" placeholder="Date de sortie" value="<?= $edit_member['date_left'] ?? '' ?>">

            <input type="text" name="salary" placeholder="Salaire" required value="<?= $edit_member['salary'] ?? '' ?>">

            <button type="submit"><?= $edit_member ? 'Update' : 'Ajouter' ?></button>
            <?php if ($edit_member): ?>
            <a href="professeur.php">Annuler</a>
            <?php endif; ?>
        </form>
        </div>
    </section>

    <!-- table -->
    <section class="table-section">
    <h3>Liste de members</h3>

    <form method="GET" class="mb-4 d-flex justify-content-center">
        <input type="text" name="search" class="form-control w-50" placeholder="Rechercher par nom, CIN, ou email" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
        <button type="submit" class="btn btn-primary ms-2">Rechercher</button>
    </form>

  <div class="table-container">
    <table class="responsive-table">
      <thead>
        <tr>
          <th>ID</th><th>Nom ete Prenom</th><th>Email</th><th>Telephone</th><th>CIN</th>
          <th>Poste</th><th>Date d'inscription</th><th>Date de sortie</th><th>Salaire</th><th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($members as $m): ?>
        <tr>
          <td data-label="ID"><?= $m['id'] ?></td>
          <td data-label="Full Name"><?= htmlspecialchars($m['full_name']) ?></td>
          <td data-label="Email"><?= htmlspecialchars($m['email']) ?></td>
          <td data-label="Phone"><?= htmlspecialchars($m['phone']) ?></td>
          <td data-label="CIN"><?= htmlspecialchars($m['cin']) ?></td>
          <td data-label="Job"><?= htmlspecialchars($m['job']) ?></td>
          <td data-label="Join Date"><?= $m['date_join'] ?></td>
          <td data-label="Leave Date"><?= $m['date_left'] ?></td>
          <td data-label="Salary"><?= htmlspecialchars($m['salary']) ?></td>
          <td data-label="Actions">
            <a href="?edit=<?= $m['id'] ?>">Modifier</a> | 
            <a href="?delete=<?= $m['id'] ?>" onclick="return confirm('Supprimer ce membre?')">Supprimer</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<script>
        function toggleForm() {
            const formSection = document.getElementById('form-section');
            const btn = document.getElementById('toggle-btn');
            if (formSection.classList.contains('visible')) {
                formSection.classList.remove('visible');
                btn.textContent = 'Afficher';
            } else {
                formSection.classList.add('visible');
                btn.textContent = 'Masquer';
            }
        }

        window.onload = () => {
            <?php if ($edit_member): ?>
                document.getElementById('form-section').classList.add('visible');
                document.getElementById('toggle-btn').textContent = 'Masquer';
            <?php endif; ?>
        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
