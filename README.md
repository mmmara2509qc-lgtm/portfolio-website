<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mellard M. Mara - Web Developer & BSIT Student</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="index.php" class="logo-text">MARA</a>
            </div>
            <ul class="nav-menu">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="admin/login.php">Admin</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <main class="container">
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <div class="hero-image">
                    <div class="image-frame">
                        <img src="assets/profile.jpg" alt="Mellard M. Mara - Web Developer" width="200" height="200">
                        <div class="image-overlay">
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/"><i class="fab fa-github"></i></a>
                    <a href="https://www.facebook.com/mellard.mara"><i class="fab fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-text">
                    <h1 class="hero-title">Hello, I'm <span class="highlight">Mellard M. Mara</span></h1>
                    <p class="hero-subtitle">Web Developer & BSIT Student</p>
                    <p class="intro">
                        Passionate about creating elegant solutions to complex problems. 
                        Currently pursuing Information Technology at Our Lady of Fatima University 
                        while building real-world web applications.
                    </p>
                    <div class="cta-buttons">
                        <a href="about.php" class="btn btn-primary">Learn More</a>
                        <a href="contact.php" class="btn btn-secondary">Get In Touch</a>
                    </div>
                </div>
            </div>
            <div class="scroll-indicator">
                <span>Scroll Down</span>
                <i class="fas fa-chevron-down"></i>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="skills-section">
            <div class="section-header">
                <h2>Technical Skills</h2>
                <p>Technologies I work with</p>
            </div>
            <div class="skills-grid">
                <div class="skill-category">
                    <div class="skill-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Frontend</h3>
                    <div class="skill-items">
                        <span class="skill-tag">HTML</span>
                        <span class="skill-tag">CSS</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">Tailwind</span>
                    </div>
                </div>
                <div class="skill-category">
                    <div class="skill-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Backend</h3>
                    <div class="skill-items">
                        <span class="skill-tag">PHP</span>
                        <span class="skill-tag">MySQL</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">Java</span>
                    </div>
                </div>
                <div class="skill-category">
                    <div class="skill-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Tools</h3>
                    <div class="skill-items">
                        <span class="skill-tag">Git</span>
                        <span class="skill-tag">VS Code</span>
                        <span class="skill-tag">XAMPP</span>
                        <span class="skill-tag">Figma</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section class="projects">
            <div class="section-header">
                <h2>Featured Projects</h2>
                <p>Some of my recent work</p>
            </div>
            <div class="project-grid">
                <div class="project-card">
                    <div class="project-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>E-Commerce Website</h3>
                    <p>Full-stack e-commerce solution with PHP and MySQL featuring user authentication, product management, and shopping cart functionality.</p>
                    <div class="project-tech">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3>Task Management App</h3>
                    <p>Responsive task management application with drag-and-drop functionality, real-time updates, and team collaboration features.</p>
                    <div class="project-tech">
                        <span>React</span>
                        <span>Node.js</span>
                        <span>Tailwind CSS</span>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-icon">
                        <i class="fas fa-cloud-sun"></i>
                    </div>
                    <h3>Weather Dashboard</h3>
                    <p>Real-time weather information dashboard with location detection, 5-day forecast, and interactive weather maps.</p>
                    <div class="project-tech">
                        <span>JavaScript</span>
                        <span>API Integration</span>
                        <span>CSS</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="cta-section">
            <div class="cta-content">
                <h2>Let's Work Together</h2>
                <p>I'm currently available for freelance projects and internship opportunities.</p>
                <a href="contact.php" class="btn btn-large">Start a Project</a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Mellard M. Mara</h3>
                <p>Web Developer & Bachelor of Science in Information Technology</p>
                <div class="footer-social">
                    <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/"><i class="fab fa-github"></i></a>
                    <a href="https://www.facebook.com/mellard.mara"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h4>Navigation</h4>
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
            </div>
            <div class="footer-section">
                <h4>Contact Info</h4>
                <div class="contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> Quezon City, Philippines</p>
                    <p><i class="fas fa-envelope"></i> mmmara2509qc@student.fatima.edu.ph</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Mellard M. Mara. All rights reserved.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
