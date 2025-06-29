<?php

session_start();
require('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="webpage icon" href="images/RE.png">
    <style>
        
        .navbar-brand {
            color: #3498db;
            position: absolute;
            left: 50%;
            margin-top: -15px;
            transform: translateX(-50%);
            font-size: 24px;
        }
        h2{
            color: #3498db;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 24px;
        }
        .navbar {
            padding: 1rem 0;
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
            margin-left: 2rem;
            text-align: center;
        }

        .nav-link:hover {
            color: #007bff !important;
        }

        .btn-signup {
            background-color: #dc3545;
            border-color: brown;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            text-decoration: none;
            margin-right: 2rem;
            
        }

        .btn-signup:hover {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        @media (max-width: 991px) {
            .navbar-brand {
                position: relative;
                left: auto;
                transform: none;
            }
            
            .navbar-collapse {
                margin-top: 1rem;
            }
            
            .nav-link {
                padding: 0.5rem 0 !important;
            }
            .btn-signup{
                margin-right: 0.5rem;
            }
        }
       
    </style>
    
</head>
<body class="light-mode">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container-fluid flex-column">

    <!-- Top row: Brand (left), Logout button (right) -->
    <div class="row w-100 align-items-center mb-3">
      <div class="col">
        <h2 class="navbar-brand mb-0">RiadElkheir</h2>
      </div>
      <div class="col text-end">
        <a href="logout.php" class="btn btn-primary btn-signup">Se déconnecter</a>
      </div>
    </div>

    <!-- Nav toggle for small screens -->
    <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Centered nav links -->
    <div class="collapse navbar-collapse justify-content-center w-100" id="navbarNav">
      <div class="navbar-nav text-center">
        <a class="nav-link" href="dashboard.php">Accueil</a>
        <a class="nav-link" href="administration.php">Administration</a>
        <a class="nav-link" href="professeur.php">Professeur</a>
        <a class="nav-link" href="etudiant.php">Étudiant</a>
        <a class="nav-link" href="recrutResult.php">Candidature</a>
      </div>
    </div>

  </div>
</nav>
    
    
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                        <h1 data-translate="hero_title">Excellence in Education</h1>
                        <p data-translate="hero_subtitle">
                        Nurturing young minds for a brighter future with innovative teaching methods and personalized attention
                        </p>
                    <div class="mt-4">
                        <button class="btn btn-custom btn-lg me-3" data-translate="hero_cta1">Enroll Now</button>
                        <button class="btn btn-outline-light btn-lg" data-translate="hero_cta2">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2 data-translate="about_title">About Our School</h2>
                <p data-translate="about_subtitle" style="color: white;">x</p>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 data-translate="about_heading">Our Mission</h3>
                    <p data-translate="about_text1">At Excellence Academy, we believe every child deserves the best education. Our dedicated team of experienced educators works tirelessly to create an environment where students can thrive academically, socially, and emotionally.</p>
                    <p data-translate="about_text2">We combine traditional values with modern teaching methods to prepare our students for the challenges of tomorrow while instilling strong moral foundations.</p>
                    
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-success me-3"></i>
                                <span data-translate="about_feature1">Small Class Sizes</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-success me-3"></i>
                                <span data-translate="about_feature2">Experienced Teachers</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-success me-3"></i>
                                <span data-translate="about_feature3">Modern Facilities</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-success me-3"></i>
                                <span data-translate="about_feature4">Individual Attention</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="gallery-item">
                        <img src="images/fathelkheir.jpg" alt="School Building">
                        <div class="gallery-overlay">
                            <h5 data-translate="about_image_caption">Our Beautiful Campus</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="number">500+</div>
                        <div class="label" data-translate="stat_students">Students</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="number">50+</div>
                        <div class="label" data-translate="stat_teachers">Teachers</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="number">...</div>
                        <div class="label" data-translate="stat_years">Years</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="number">...</div>
                        <div class="label" data-translate="stat_success">Success Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="logo mb-3">Fath Elkheir</div>
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. 
                        Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus 
                        rhoncus ut eleifend nibh porttitor.
                    </p>
                    <p>&copy; 2025 Groupe Scolaire Fath Elkheir. All rights reserved.</p>
                </div>
                
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Notre etablissement</h5>
                            <ul class="footer-links">
                                <li><a href="#">À propos de nous</a></li>
                                <li><a href="#">Notre équipe</a></li>
                                <li><a href="#">Carrières</a></li>
                                <li><a href="contact.php">Contactez-nous</a></li>
                            </ul>
                        </div>
                       
                        <div class="col-md-4">
                            <h5>Ressources</h5>
                            <ul class="footer-links">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">politique de confidentialité</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Theme Toggle Functionality
        document.getElementById('themeToggle1').addEventListener('change', function() {
            document.body.classList.toggle('dark-mode');
            document.body.classList.toggle('light-mode');
        });
        
        document.getElementById('themeToggle2').addEventListener('change', function() {
            document.body.classList.toggle('dark-mode');
            document.body.classList.toggle('light-mode');
        });
    </script>
</body>
</html>