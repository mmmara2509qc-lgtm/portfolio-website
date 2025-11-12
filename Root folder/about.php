<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Mellard M. Mara</title>
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
                <li><a href="about.php" class="active">About</a></li>
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
        <!-- About Hero -->
        <section class="about-hero">
            <div class="about-content">
                <div class="about-image">
                    <div class="image-frame">
                        <img src="assets/profile.jpg" alt="Mellard M. Mara" width="250" height="250">
                        <div class="image-overlay">
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/"><i class="fab fa-github"></i></a>
                    <a href="https://www.facebook.com/mellard.mara"><i class="fab fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-text">
                    <h1>About Me</h1>
                    <p class="about-intro">
                        I'm a dedicated 2nd-year BSIT student with a strong interest in technology, problem-solving, and innovation.
                        I strive to enhance my skills in software development and web technologies while continuously learning about emerging trends in the IT industry.
                        My goal is to build efficient and user-friendly digital solutions that make a positive impact.
                    </p>

                    <!-- Add project button here -->
    <div class="project-button">
        <a href="https://allymary12.github.io/TechHive_1/" target="_blank" class="btn btn-primary">
            <i class="fas fa-external-link-alt"></i> View My TechHive Project
        </a>
    </div>
                    <div class="personal-info">
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Location:</strong> Quezon City, Philippines
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email:</strong> mmmara2509qc@student.fatima.edu.ph
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-user-graduate"></i>
                            <div>
                                <strong>Status:</strong> Available for Internship
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education & Skills Section -->
        <section class="education-skills-section">
            <div class="section-header">
                <h2>Education & Skills</h2>
                <p>My academic journey and technical capabilities</p>
            </div>
            <div class="education-skills-grid">
                <!-- Education Column -->
                <div class="education-column">
                    <h3 class="column-title"><i class="fas fa-graduation-cap"></i> Education</h3>
                    <div class="education-timeline">
                        <div class="education-item">
                            <div class="edu-year">2025 - Present</div>
                            <div class="edu-content">
                                <h3>Bachelor of Science in Information Technology (BSIT)</h3>
                                <h4>2nd Year Student — Our Lady of Fatima University</h4>
                                <p class="edu-details">
                                    Currently pursuing a degree in Information Technology, focusing on programming, web development, and networking.
                                    I'm continuously building my technical and problem-solving skills through academic projects and hands-on experience.
                                </p>
                                <div class="achievements">
                                    <h5>Achievements & Activities:</h5>
                                    <ul>
                                        <li>Created Personal Portfolio Website</li>
                                        <li>Volunteer, Tech Support Team</li>
                                        <li>Top 1 Global Lolita in OLFU</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="education-item">
                            <div class="edu-year">2021 - 2023</div>
                            <div class="edu-content">
                                <h3>Senior High School - STEM Strand</h3>
                                <h4>Holy Spirit National High School - Quezon City</h4>
                                <p class="edu-details">
                                    <strong>Graduated with Honors</strong><br>
                                    <strong>Focus:</strong> Science, Technology, Engineering, and Mathematics
                                </p>
                                <div class="achievements">
                                    <h5>Notable Projects:</h5>
                                    <ul>
                                        <li>Developed simple inventory system using Python</li>
                                        <li>Created basic website for school project</li>
                                        <li>Participated in STEM research competition</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Skills Column -->
                <div class="skills-column">
                    <h3 class="column-title"><i class="fas fa-tools"></i> Technical Skills</h3>
                    <div class="skills-container">
                        <div class="skill-category">
                            <h4><i class="fas fa-code"></i> Programming Languages</h4>
                            <div class="skill-level">
                                <span>PHP & MySQL</span>
                                <div class="level-bar"><div class="level-progress" style="width: 90%"></div></div>
                            </div>
                            <div class="skill-level">
                                <span>JavaScript</span>
                                <div class="level-bar"><div class="level-progress" style="width: 85%"></div></div>
                            </div>
                            <div class="skill-level">
                                <span>Python</span>
                                <div class="level-bar"><div class="level-progress" style="width: 80%"></div></div>
                            </div>
                            <div class="skill-level">
                                <span>Java</span>
                                <div class="level-bar"><div class="level-progress" style="width: 75%"></div></div>
                            </div>
                        </div>

                        <div class="skill-category">
                            <h4><i class="fas fa-laptop-code"></i> Web Development</h4>
                            <div class="skill-level">
                                <span>HTML5 & CSS3</span>
                                <div class="level-bar"><div class="level-progress" style="width: 95%"></div></div>
                            </div>
                            <div class="skill-level">
                                <span>React.js</span>
                                <div class="level-bar"><div class="level-progress" style="width: 75%"></div></div>
                            </div>
                            <div class="skill-level">
                                <span>Node.js</span>
                                <div class="level-bar"><div class="level-progress" style="width: 70%"></div></div>
                            </div>
                            <div class="skill-level">
                                <span>Bootstrap</span>
                                <div class="level-bar"><div class="level-progress" style="width: 85%"></div></div>
                            </div>
                        </div>

                        <div class="skill-category">
                            <h4><i class="fas fa-database"></i> Database & Tools</h4>
                            <div class="skill-level">
                                <span>MySQL</span>
                                <div class="level-bar"><div class="level-progress" style="width: 85%"></div></div>
                            </div>
                            <div class="skill-level">
                                <span>Git & GitHub</span>
                                <div class="level-bar"><div class="level-progress" style="width: 80%"></div></div>
                            </div>
                            <div class="skill-level">
                                <span>VS Code</span>
                                <div class="level-bar"><div class="level-progress" style="width: 90%"></div></div>
                            </div>
                            <div class="skill-level">
                                <span>Figma</span>
                                <div class="level-bar"><div class="level-progress" style="width: 70%"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills & Expertise -->
        <section class="expertise-section">
            <div class="section-header">
                <h2>Skills & Expertise</h2>
                <p>What I bring to the table</p>
            </div>
            <div class="expertise-grid">
                <div class="expertise-category">
                    <h3><i class="fas fa-code"></i> Technical Skills</h3>
                    <div class="skill-level">
                        <span>PHP & MySQL</span>
                        <div class="level-bar"><div class="level-progress" style="width: 90%"></div></div>
                    </div>
                    <div class="skill-level">
                        <span>HTML5 & CSS3</span>
                        <div class="level-bar"><div class="level-progress" style="width: 95%"></div></div>
                    </div>
                    <div class="skill-level">
                        <span>JavaScript</span>
                        <div class="level-bar"><div class="level-progress" style="width: 85%"></div></div>
                    </div>
                    <div class="skill-level">
                        <span>React.js</span>
                        <div class="level-bar"><div class="level-progress" style="width: 75%"></div></div>
                    </div>
                </div>
                
                <div class="expertise-category">
                    <h3><i class="fas fa-users"></i> Professional Skills</h3>
                    <ul class="professional-skills">
                        <li><i class="fas fa-check"></i> Problem Solving</li>
                        <li><i class="fas fa-check"></i> Team Collaboration</li>
                        <li><i class="fas fa-check"></i> Project Management</li>
                        <li><i class="fas fa-check"></i> Communication</li>
                        <li><i class="fas fa-check"></i> Adaptability</li>
                        <li><i class="fas fa-check"></i> Time Management</li>
                    </ul>
                </div>
                
                <div class="expertise-category">
                    <h3><i class="fas fa-heart"></i> Interests</h3>
                    <div class="interests">
                        <span class="interest-tag">Web Development</span>
                        <span class="interest-tag">Mobile Apps</span>
                        <span class="interest-tag">UI/UX Design</span>
                        <span class="interest-tag">Open Source</span>
                        <span class="interest-tag">Tech Communities</span>
                        <span class="interest-tag">Learning New Tech</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Career Goals -->
        <section class="goals-section">
            <div class="section-header">
                <h2>Career Goals</h2>
                <p>Where I'm headed</p>
            </div>
            <div class="goals-content">
                <div class="goal-item">
                    <div class="goal-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Short-term Goals</h3>
                    <ul>
                        <li>Complete my Bachelor's degree with honors</li>
                        <li>Secure a web development internship</li>
                        <li>Contribute to open-source projects</li>
                        <li>Build a strong professional network</li>
                    </ul>
                </div>
                <div class="goal-item">
                    <div class="goal-icon">
                        <i class="fas fa-mountain"></i>
                    </div>
                    <h3>Long-term Goals</h3>
                    <ul>
                        <li>Become a full-stack developer</li>
                        <li>Work on impactful software projects</li>
                        <li>Mentor aspiring developers</li>
                        <li>Continue learning and adapting to new technologies</li>
                    </ul>
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