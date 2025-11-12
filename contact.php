<?php 
include 'includes/config.php';

$showContactForm = false;
$welcomeName = '';
$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && !isset($_POST['email'])) {
        // Step 1: Name submission
        $welcomeName = htmlspecialchars(trim($_POST['name']));
        $showContactForm = true;
        $_SESSION['visitor_name'] = $welcomeName;
    } elseif (isset($_POST['email']) && isset($_POST['message'])) {
        // Step 2: Contact form submission
        $name = $_SESSION['visitor_name'] ?? 'Guest';
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $message = htmlspecialchars(trim($_POST['message']));
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)) {
            try {
                $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
                $stmt->execute([$name, $email, $message]);
                $successMessage = "Thank you for your message! I'll get back to you soon.";
                $showContactForm = false;
                unset($_SESSION['visitor_name']);
            } catch(PDOException $e) {
                $error = "Sorry, there was an error sending your message. Please try again.";
            }
        } else {
            $error = "Please provide a valid email and message.";
            $showContactForm = true;
            $welcomeName = $_SESSION['visitor_name'] ?? '';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me - Mellard M. Mara</title>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
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
        <section class="contact-section">
            <div class="contact-header">
                <h1>Get In Touch</h1>
                <p>I'd love to hear from you. Send me a message and I'll respond as soon as possible.</p>
            </div>
            
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Location</h3>
                            <p>Quezon City, Philippines</p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p>mmmara2509qc@student.fatima.edu.ph</p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Phone</h3>
                            <p>+63 915 274 7349</p>
                        </div>
                    </div>
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Response Time</h3>
                            <p>Usually within 24 hours</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-container">
                    <?php if ($successMessage): ?>
                        <div class="alert success">
                            <div class="alert-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="alert-content">
                                <h4>Message Sent Successfully!</h4>
                                <p><?php echo $successMessage; ?></p>
                            </div>
                            <a href="contact.php" class="btn btn-primary" style="margin-top: 1rem;">Send Another Message</a>
                        </div>
                    <?php elseif (!$showContactForm): ?>
                        <div class="name-form">
                            <div class="form-header">
                                <h2>Let's Get Started</h2>
                                <p>First, tell me your name</p>
                            </div>
                            <form method="POST">
                                <div class="form-group">
                                    <label for="name">Your Name:</label>
                                    <div class="input-with-icon">
                                        <i class="fas fa-user"></i>
                                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit <i class="fas fa-arrow-right"></i></button>
                            </form>
                        </div>
                    <?php else: ?>
                        <div class="welcome-message">
                            <div class="welcome-header">
                                <h2>Hello <?php echo $welcomeName; ?>!</h2>
                                <p>Thanks for visiting my portfolio. Please fill out the form below to send me a message.</p>
                            </div>
                        </div>
                        
                        <?php if (isset($error)): ?>
                            <div class="alert error">
                                <div class="alert-icon">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <div class="alert-content">
                                    <h4>Error</h4>
                                    <p><?php echo $error; ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <form method="POST" class="contact-form">
                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <div class="input-with-icon">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" id="email" name="email" placeholder="your.email@example.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message:</label>
                                <div class="textarea-with-icon">
                                    <i class="fas fa-comment-alt"></i>
                                    <textarea id="message" name="message" rows="6" placeholder="Tell me about your project or inquiry..." required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message <i class="fas fa-paper-plane"></i></button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Mellard M. Mara</h3>
                <p>Information Technology Student & Web Developer</p>
                <div class="footer-social">
                    <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/"><i class="fab fa-github"></i></a>
                    <a href="https://www.facebook.com/mellard.mara"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
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
            <p>&copy; 2025 Mellard M. Mara. BS Information Technology Student at Our Lady of Fatima University QC.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>