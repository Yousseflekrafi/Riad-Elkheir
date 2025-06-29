<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="attach/style.css">
    <link rel="webpage icon" href="images/RE.png">
    <style>
        
.navbar-brand {
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
    margin-right: 1rem;
}

.nav-link:hover {
    color: #007bff !important;
}

.btn-signup {
    background-color: #007bff;
    border-color: #007bff;
    padding: 0.5rem 1.5rem;
    font-weight: 500;
    text-decoration: none;
}

.btn-signup:hover {
    background-color: #0056b3;
    border-color: #0056b3;
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
}
.hero {
    min-height: 100vh;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="books" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse"><rect width="100" height="100" fill="none"/><path d="M20,30 L80,30 L80,70 L20,70 Z" fill="rgba(255,255,255,0.05)"/><path d="M25,35 L75,35" stroke="rgba(255,255,255,0.1)" stroke-width="1"/><path d="M25,45 L75,45" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23books)"/></svg>') center/cover;
    opacity: 0.1;
    animation: float 20s ease-in-out infinite;
}


.hero-content {
    text-align: left;
    color: white;
    position: relative;
    z-index: 2;
}

.hero-title {
    font-size: clamp(2.5rem, 6vw, 4.5rem);
    font-weight: 800;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    animation: slideUp 1s ease-out;
}

.hero-subtitle {
    font-size: clamp(1.1rem, 2.5vw, 1.5rem);
    margin-bottom: 2rem;
    font-weight: 300;
    opacity: 0.9;
    animation: slideUp 1s ease-out 0.3s both;
}

.hero-description {
    font-size: 1.1rem;
    margin-bottom: 3rem;
    line-height: 1.6;
    opacity: 0.85;
    animation: slideUp 1s ease-out 0.6s both;
}

.hero-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
    max-width: 1200px;
    width: 100%;
    padding: 0 2rem;
}

.image-shape {
    width: 400px;
    height: 400px;
    background: linear-gradient(45deg, rgba(255,255,255,0.2), rgba(255,255,255,0.1)); 
    backdrop-filter: blur(15px);
    border-radius: 60px 20px 60px 20px;
    border: 2px solid rgba(255,255,255,0.3);
    position: relative;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    transform: rotate(-5deg);
    transition: transform 0.3s ease;
    margin-top: 6%;
}

.image-shape:hover {
    transform: rotate(0deg) scale(1.02);
}

.image-shape::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 95%;
    height: 95%;
    background-image: url(images/student1.png);
    border-radius: 40px 10px 40px 10px;
}

.floating-badge {
    position: absolute;
    background: rgba(255,255,255,0.95);
    color: #667eea;
    padding: 0.8rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    backdrop-filter: blur(10px);
}

.badge-1 {
    top: 10%;
    right: -10%;
    animation: floatBadge 3s ease-in-out infinite;
}

.badge-2 {
    bottom: 15%;
    left: -15%;
    animation: floatBadge 3s ease-in-out infinite 1.5s;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
}

@keyframes slideRight {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes floatBadge {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(2deg); }
}

@media (max-width: 768px) {
    .hero-container {
        grid-template-columns: 1fr;
        gap: 2rem;
        text-align: center;
    }
    
    .hero-content {
        text-align: center;
        order: 2;
    }
    
    .image-container {
        order: 1;
    }
    
    .image-shape {
        width: 280px;
        height: 350px;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
}


    </style>
    <title>Riad Elkheir</title>
</head>
<body >
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">         
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav me-auto mt-3 mt-lg-0">
                    <a class="nav-link" href="#">Accueil</a>
                    <a class="nav-link" href="recrut.php">Apply To Job</a>
                    <a class="nav-link" href="contact.php">Contact</a>
                    <a class="nav-link" href="helpcenter.php">Aide</a>
                </div>
            </div>

            <h2 class="navbar-brand mb-0">RiadElkheir</h2>
            
            <div class="d-flex">
                <a href="seconn.php" class="btn btn-primary btn-signup">S'inscrire</a>
            </div>

        </div>
    </nav>
    
    
    <section class="hero">       
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title" data-translate="hero_title">Excellence in Education</h1>
                <p class="hero-subtitle" data-translate="hero_subtitle1">Shaping Tomorrow's Leaders Today</p>
                <p class="hero-description" data-translate="hero_subtitle2">
                    Nurturing young minds for a brighter future with innovative teaching methods and personalized attention.</p>               
            </div>
            
            <div class="image-container">
                <div class="image-shape">
                </div>
            </div>
        </div>
        
        <div class="scroll-indicator">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M7 13l3 3 7-7"/>
                <path d="M7 6l3 3 7-7"/>
            </svg>
        </div>
    </section>


    <section id="about" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2 data-translate="about_title">About Our School</h2>
                <p data-translate="about_subtitle">Committed to providing exceptional education since 1995</p>
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
                                <li><a href="#">Contactez-nous</a></li>
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