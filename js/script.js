// Mobile Navigation Toggle - Compact Version
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');
    const body = document.body;

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', (e) => {
            e.stopPropagation();
            e.preventDefault();
            
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(n => {
            n.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (navMenu.classList.contains('active') && 
                !navMenu.contains(e.target) && 
                !hamburger.contains(e.target)) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });

        // Close menu when window is resized
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });

        // Close menu when pressing Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && navMenu.classList.contains('active')) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
    }

    // Scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const elementsToAnimate = document.querySelectorAll('.skill-category, .project-card, .education-item, .expertise-category, .goal-item, .contact-method');
    
    elementsToAnimate.forEach(el => {
        observer.observe(el);
    });

    // Add CSS for animations if not already present
    if (!document.querySelector('#animation-styles')) {
        const style = document.createElement('style');
        style.id = 'animation-styles';
        style.textContent = `
            .skill-category, 
            .project-card, 
            .education-item, 
            .expertise-category, 
            .goal-item,
            .contact-method {
                opacity: 0;
                transform: translateY(30px);
                transition: opacity 0.6s ease, transform 0.6s ease;
            }
            
            .animate-in {
                opacity: 1;
                transform: translateY(0);
            }
        `;
        document.head.appendChild(style);
    }

    // Form validation
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            const email = document.getElementById('email');
            const message = document.getElementById('message');
            
            if (!email.value || !message.value) {
                e.preventDefault();
                showAlert('Please fill in all required fields.', 'error');
                return;
            }
            
            if (!isValidEmail(email.value)) {
                e.preventDefault();
                showAlert('Please enter a valid email address.', 'error');
                email.focus();
                return;
            }
        });
    }

    // Enhanced email validation
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Show alert function
    function showAlert(message, type) {
        // Remove existing alerts
        const existingAlert = document.querySelector('.custom-alert');
        if (existingAlert) {
            existingAlert.remove();
        }

        const alert = document.createElement('div');
        alert.className = `custom-alert ${type}`;
        alert.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 1rem 1.5rem;
            border-radius: var(--border-radius);
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideIn 0.3s ease;
            max-width: 300px;
        `;

        if (type === 'error') {
            alert.style.background = 'var(--danger-color)';
        } else {
            alert.style.background = 'var(--success-color)';
        }

        alert.textContent = message;
        document.body.appendChild(alert);

        // Auto remove after 5 seconds
        setTimeout(() => {
            if (alert.parentNode) {
                alert.style.animation = 'slideOut 0.3s ease';
                setTimeout(() => alert.remove(), 300);
            }
        }, 5000);
    }

    // Add keyframe animations for alerts
    if (!document.querySelector('#alert-animations')) {
        const style = document.createElement('style');
        style.id = 'alert-animations';
        style.textContent = `
            @keyframes slideIn {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            
            @keyframes slideOut {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(100%);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    }

    // Smooth scrolling for anchor links - Enhanced
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            
            // Skip if it's just "#"
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                
                // Calculate offset based on header height
                const headerHeight = document.querySelector('.navbar')?.offsetHeight || 80;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add loading animation
    window.addEventListener('load', () => {
        document.body.classList.add('loaded');
    });

    // Add CSS for loading state if not present
    if (!document.querySelector('#loading-styles')) {
        const style = document.createElement('style');
        style.id = 'loading-styles';
        style.textContent = `
            body:not(.loaded) * {
                animation: none !important;
            }
        `;
        document.head.appendChild(style);
    }
});

// Handle page transitions and improve performance
window.addEventListener('beforeunload', () => {
    // Smooth page transition out
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.3s ease';
});

// Improve scroll performance
let scrollTimeout;
window.addEventListener('scroll', () => {
    if (!scrollTimeout) {
        scrollTimeout = setTimeout(() => {
            scrollTimeout = null;
            
            // Add/remove scroll class for styling
            if (window.scrollY > 100) {
                document.querySelector('.navbar')?.classList.add('scrolled');
            } else {
                document.querySelector('.navbar')?.classList.remove('scrolled');
            }
        }, 10);
    }
});

// Add CSS for scrolled navbar if not present
if (!document.querySelector('#navbar-scroll-styles')) {
    const style = document.createElement('style');
    style.id = 'navbar-scroll-styles';
    style.textContent = `
        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98) !important;
            backdrop-filter: blur(20px) !important;
            box-shadow: 0 5px 30px rgba(0,0,0,0.1) !important;
        }
    `;
    document.head.appendChild(style);
}