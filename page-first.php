<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GS Fath Elkheir</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="attach/css.css">
    <link rel="webpage icon" href="images/RE.png">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-graduation-cap me-2"></i>
                <span data-translate="school_name">GS Riad Elkheir</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home" data-translate="nav_home">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#about" data-translate="nav_about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#programs" data-translate="nav_programs">Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery" data-translate="nav_gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" data-translate="nav_contact">Contact</a>
                    </li>
                </ul>
                
                <div class="d-flex align-items-center">
                    <button class="theme-toggle" onclick="toggleTheme()">
                        <i class="fas fa-moon" id="theme-icon"></i>
                    </button>
                    
                    <div class="dropdown">
                        <button class="lang-toggle dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-globe me-1"></i>
                            <span id="current-lang">EN</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" onclick="changeLanguage('en')">English</a></li>
                            <li><a class="dropdown-item" href="#" onclick="changeLanguage('fr')">Français</a></li>
                            <li><a class="dropdown-item" href="#" onclick="changeLanguage('ar')">العربية</a></li>
                        </ul>
                    </div>
                </div>
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

    <!-- Programs Section -->
    <section id="programs" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2 data-translate="programs_title">Our Programs</h2>
                <p data-translate="programs_subtitle">Comprehensive education from kindergarten to high school</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <h4 data-translate="program1_title">Kindergarten</h4>
                        <p data-translate="program1_desc">Ages 3-5: Building foundational skills through play-based learning and creative activities that spark curiosity.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="icon">
                            <i class="fas fa-child"></i>
                        </div>
                        <h4 data-translate="program2_title">Elementary</h4>
                        <p data-translate="program2_desc">Grades 1-5: Core subjects with emphasis on literacy, numeracy, and critical thinking skills development.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h4 data-translate="program3_title">Middle School</h4>
                        <p data-translate="program3_desc">Grades 6-8: Preparing students for high school with advanced curriculum and leadership opportunities.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4 data-translate="program4_title">High School</h4>
                        <p data-translate="program4_desc">Grades 9-12: College preparatory program with AP courses and university counseling services.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4 data-translate="program5_title">Arts Program</h4>
                        <p data-translate="program5_desc">Music, visual arts, and drama programs to nurture creativity and artistic expression in all students.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="icon">
                            <i class="fas fa-running"></i>
                        </div>
                        <h4 data-translate="program6_title">Sports</h4>
                        <p data-translate="program6_desc">Comprehensive athletics program promoting physical fitness, teamwork, and healthy competition.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="section-padding" style="background-color: var(--card-bg);">
        <div class="container">
            <div class="section-title">
                <h2 data-translate="gallery_title">School Life</h2>
                <p data-translate="gallery_subtitle">Glimpses of our vibrant school community</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="images/classroom.jpg" alt="Classroom">
                        <div class="gallery-overlay">
                            <h5 data-translate="gallery_img1">Modern Classrooms</h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="images/library.jpg" alt="Library">
                        <div class="gallery-overlay">
                            <h5 data-translate="gallery_img2">Library</h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="images/scince.jpg" alt="Science Lab">                           
                        <div class="gallery-overlay">
                            <h5 data-translate="gallery_img3">Science Laboratory</h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="images/sport.jpg" alt="Sports">
                        <div class="gallery-overlay">
                            <h5 data-translate="gallery_img4">Sports Activities</h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="images/art class.jpg" alt="Art Class">
                        <div class="gallery-overlay">
                            <h5 data-translate="gallery_img5">Art Classes</h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="images/event.jpg" alt="Events">
                        <div class="gallery-overlay">
                            <h5 data-translate="gallery_img6">School Events</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2 data-translate="contact_title">Get In Touch</h2>
                <p data-translate="contact_subtitle">Ready to join our school community? Contact us today!</p>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="row">
                        <div class="col-md-4 text-center mb-4">
                            <div class="feature-card">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h5 data-translate="contact_address_title">Address</h5>
                                <p data-translate="contact_address">123 Education Street<br>Learning City, LC 12345</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4 text-center mb-4">
                            <div class="feature-card">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <h5 data-translate="contact_phone_title">Phone</h5>
                                <p data-translate="contact_phone">#</p>
                            </div>
                        </div>
                        
                        <div class="col-md-4 text-center mb-4">
                            <div class="feature-card">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h5 data-translate="contact_email_title">Email</h5>
                                <p data-translate="contact_email">#</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <button class="btn btn-custom btn-lg" data-translate="contact_cta">Schedule a Visit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 data-translate="footer_about_title">Riad Elkheir</h5>
                    <p data-translate="footer_about_text">Dedicated to providing exceptional education and nurturing the next generation of leaders, thinkers, and innovators.</p>
                    <div class="social-links">
                        <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 data-translate="footer_quick_links">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home" data-translate="nav_home">Home</a></li>
                        <li><a href="#about" data-translate="nav_about">About</a></li>
                        <li><a href="#programs" data-translate="nav_programs">Programs</a></li>
                        <li><a href="#contact" data-translate="nav_contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 data-translate="footer_programs_title">Programs</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" data-translate="program1_title">Kindergarten</a></li>
                        <li><a href="#" data-translate="program2_title">Elementary</a></li>
                        <li><a href="#" data-translate="program3_title">Primary School</a></li>
                        <li><a href="#" data-translate="program4_title">Middle School</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 mb-4">
                    <h5 data-translate="footer_contact_title">Contact Info</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i><span data-translate="contact_address">Mers Elkheir, Temara, Rabat</span></p>
                    <p><i class="fas fa-phone me-2"></i><span data-translate="contact_phone">#</span></p>
                    <p><i class="fas fa-envelope me-2"></i><span data-translate="contact_email">#</span></p>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0" data-translate="footer_copyright">&copy; 2025 RIAD ELKHEIR. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="me-3" data-translate="footer_privacy">Privacy Policy</a>
                    <a href="#" data-translate="footer_terms">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="attach/script.js"></script> 
</body>
</html>