<?php
session_start();
require('connection.php');

if (isset($_POST['formbtn'])){
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $cin = $_POST['cin'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $insert = $pdo->prepare("INSERT INTO jobapply (first_name, last_name, cin, phone, email) VALUES (:first_name, :last_name, :cin, :phone, :email)");
    $insert->execute([
        ':first_name'=>$fname,
        ':last_name' => $lname,
        ':cin' => $cin,
        ':phone' => $phone,
        ':email' => $email
    ]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="webpage icon" href="images/RE.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>RA7ALAT Agency - Book Travel Appointment</title>
    <link rel="stylesheet" href="attach/recrut.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/RA7ALAT.png" alt="RA7ALAT" onerror="this.style.display='none'">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Welcome To RiadElkheir Recrutement!</h1>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            

            <div class="appointment-container">
                <div class="form-header">
                    <h2>Post Your Application</h2>
                    <p>Fill out the form below and we'll get back to you within 24 to 48 hours</p>
                </div>

               
                    <form id="appointmentForm" method="post">
                        <!-- Personal Information Section -->
                        <div class="form-section">
                            <h3 class="section-title">
                                <i class="fas fa-user"></i>
                                Personal Information
                            </h3>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstName" class="form-label">First Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="firstName" name="fName" required>
                                </div>
                                <div class="form-group">
                                    <label for="lastName" class="form-label">Last Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="lastName" name="lName" required>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label for="cin" class="form-label">CIN (Identity) <span class="required">*</span></label>
                                <input type="text" class="form-control" id="cin" name="cin" placeholder="e.g., AB123456" required>
                            </div>
                            <div class="form-section">                          
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number <span class="required">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+212 6XX XX XX XX" required>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="your.email@example.com">
                                </div>
                            </div>
                            <div class="form-footer">
                                <button type="submit" name="formbtn" form="appointmentForm" class="btn-submit">
                                    <div class="loading"></div>
                                    <span class="btn-text">
                                        <i class="fas fa-calendar-check"></i>
                                        Apply To Job
                                    </span>
                                </button>
                            </div>
                    </form>
                </div>

                
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
