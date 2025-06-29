<?php
session_start();

require("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $profession = trim($_POST['profession']);
    $message = trim($_POST['message']);

    if (!empty($name) && !empty($profession) && !empty($message)) {
        $insert = $pdo->prepare("INSERT INTO feedback (name, profession, message) VALUES (?, ?, ?)");
        $insert->execute([$name, $profession, $message]);
        echo "Message received successfully.";
    } else {
        echo "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Riad Elkheir</title>
    <link rel="webpage icon" href="images/RE.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --blue: #0071c2;
            --dark-blue: #003580;
            --light-blue: #e7f3ff;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
        }
        
        .navbar-custom {
            background: linear-gradient(135deg, var(--blue) 0%, var(--dark-blue) 100%);
            padding: 1rem 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-size: 2rem;
            font-weight: bold;
            color: #3498db !important;
            text-decoration: none;
        }
        
        .nav-buttons .btn {
            margin-left: 0.5rem;
            border-radius: 4px;
            font-weight: 500;
        }
        .nav-buttons .btn a{
            text-decoration: none;
            color: white;
        }
        
        .btn-outline-light:hover {
            background-color: rgba(255,255,255,0.2);
            border-color: white;
        }
     
        .main-content {
            background: white;
            border-radius: 12px;
            padding: 3rem;
            margin: 2rem 0;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        
        .main-title {
            color: #333;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .subtitle {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 3rem;
        }
        
        .contact-section {
            margin-bottom: 3rem;
        }
        
        .contact-card {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 2rem;
            height: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        
        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            border-color: var(--blue);
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--light-blue) 0%, #cce7ff 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: var(--blue);
            font-size: 1.5rem;
        }
        
        .contact-card h4 {
            color: #333;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .contact-card p {
            color: #666;
            line-height: 1.6;
        }
        
        .btn-signin {
            background: linear-gradient(135deg, var(--blue) 0%, var(--dark-blue) 100%);
            border: none;
            color: white;
            padding: 1rem 3rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 8px;
            width: 100%;
            margin-top: 2rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0,113,194,0.3);
        }
        
        .btn-signin:hover {
            background: linear-gradient(135deg, var(--dark-blue) 0%, #002147 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0,113,194,0.4);
            color: white;
        }
        
        .collapse-arrow {
            transition: transform 0.3s ease;
            cursor: pointer;
        }
        
        .collapse-arrow.collapsed {
            transform: rotate(180deg);
        }
        
        @media (max-width: 768px) {
            .main-content {
                padding: 2rem 1.5rem;
                margin: 1rem 0;
            }
            
            .main-title {
                font-size: 2rem;
            }
            
            .nav-buttons {
                margin-top: 1rem;
            }
            
            .nav-buttons .btn {
                margin: 0.25rem;
                font-size: 0.9rem;
            }
        }
        .logo h2{
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <div class="container">
            <h2 class="navbar-brand logo">Riad Elkheir</h2>
            
            
        </div>
    </nav>

    <div class="container">
        <div class="main-content">
            <h1 class="main-title">Be in touch with us!</h1>
            <div class="row contact-section">
                <div class="col-md-6 mb-4">
                    <a href="#" class="text-decoration-none" onclick="showform()">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <h4>Send us a message</h4>
                            <p>Contact our agents about your booking, and we'll reply as soon as possible.</p>
                        </div>
                    </a>
                </div>
                <div id="messageForm" style="display: none;">
                    <form method="post" class="mb-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your name</label>
                            <input type="name" name="name" class="form-control" id="name" placeholder="Ex: John" required>
                        </div>
                        <div class="mb-3">
                            <label for="profession" class="form-label">Your name</label>
                            <input type="profession" name="profession" class="form-control" id="profession" placeholder="Ex: Professeur d'Anglais" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Écrivez votre message ici..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h4>Call us</h4>
                        <p>Phone : #</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add hover effects for contact cards
        document.querySelectorAll('.contact-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        function showform() {
            const form = document.getElementById('messageForm');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
        // Smooth scroll animation
        window.addEventListener('scroll', function() {
            const elements = document.querySelectorAll('.contact-card');
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        });
    </script>
</body>
</html>