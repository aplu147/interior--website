<?php 
include 'includes/header.php';
$contactConfig = include 'includes/contact-config.php';
?>

<!-- Luxury Contact Page -->
<div class="luxury-contact-page">
    <section class="luxury-contact-main py-6 position-relative">
        <div class="luxury-contact-bg-elements">
            <div class="luxury-bg-shape shape-1"></div>
            <div class="luxury-bg-shape shape-2"></div>
            <div class="luxury-bg-shape shape-3"></div>
        </div>
        
        <div class="container position-relative">
            <div class="luxury-section-header text-center mb-6">
                <h2 class="luxury-section-title animate__animated animate__fadeInDown">
                    <?= $contactConfig['contact_form_texts']['title'] ?>
                </h2>
                <div class="luxury-title-divider">
                    <span class="luxury-divider-line"></span>
                    <span class="luxury-divider-icon"><i class="fas fa-gem"></i></span>
                    <span class="luxury-divider-line"></span>
                </div>
                <p class="luxury-section-intro lead mt-4 animate__animated animate__fadeIn animate__delay-1s">
                    <?= $contactConfig['contact_form_texts']['subtitle'] ?>
                </p>
            </div>

            <div class="row g-5">
                <!-- Luxury Contact Form Column -->
                <div class="col-lg-7">
                    <div class="luxury-contact-form-wrapper animate__animated animate__fadeInLeft">
                        <div class="luxury-contact-card">
                            <div class="luxury-card-body p-5">
                                <h3 class="luxury-form-title mb-4">
                                    <i class="fas fa-paper-plane me-3"></i>
                                    <?= $contactConfig['contact_form_texts']['form_heading'] ?>
                                </h3>
                                
                                <form id="luxuryContactPageForm" action="process_contact.php" method="POST" class="luxury-contact-form needs-validation" novalidate>
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="luxury-form-group luxury-floating-group">
                                                <input type="text" class="luxury-form-control" id="luxuryContactName" name="name" required>
                                                <label for="luxuryContactName" class="luxury-floating-label">Your Name</label>
                                                <div class="luxury-input-highlight"></div>
                                                <div class="luxury-invalid-feedback">Please provide your name</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="luxury-form-group luxury-floating-group">
                                                <input type="email" class="luxury-form-control" id="luxuryContactEmail" name="email" required>
                                                <label for="luxuryContactEmail" class="luxury-floating-label">Your Email</label>
                                                <div class="luxury-input-highlight"></div>
                                                <div class="luxury-invalid-feedback">Please provide a valid email</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="luxury-form-group luxury-floating-group">
                                                <input type="text" class="luxury-form-control" id="luxuryContactSubject" name="subject">
                                                <label for="luxuryContactSubject" class="luxury-floating-label">Subject</label>
                                                <div class="luxury-input-highlight"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="luxury-form-group luxury-floating-group">
                                                <textarea class="luxury-form-control" id="luxuryContactMessage" name="message" rows="4" required></textarea>
                                                <label for="luxuryContactMessage" class="luxury-floating-label">Your Message</label>
                                                <div class="luxury-input-highlight"></div>
                                                <div class="luxury-invalid-feedback">Please enter your message</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="luxury-submit-btn w-100">
                                                <span class="luxury-btn-text">Send Message</span>
                                                <span class="luxury-btn-icon"><i class="fas fa-paper-plane"></i></span>
                                                <span class="luxury-btn-spinner spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Luxury Contact Info Column -->
                <div class="col-lg-5">
                    <div class="luxury-contact-info-wrapper animate__animated animate__fadeInRight">
                        <div class="luxury-contact-card">
                            <div class="luxury-card-body p-5">
                                <h3 class="luxury-info-heading mb-4">Contact Information</h3>
                                
                                <!-- Address -->
                                <div class="luxury-contact-item">
                                    <div class="luxury-icon-box">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="luxury-info-content">
                                        <h4 class="luxury-info-title">Address</h4>
                                        <p class="luxury-info-text"><?= $contactConfig['contact_info']['address'] ?></p>
                                    </div>
                                </div>
                                
                                <!-- Phone -->
                                <div class="luxury-contact-item">
                                    <div class="luxury-icon-box">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="luxury-info-content">
                                        <h4 class="luxury-info-title">Phone</h4>
                                        <p class="luxury-info-text"><?= $contactConfig['contact_info']['phone'] ?></p>
                                    </div>
                                </div>
                                
                                <!-- Email -->
                                <div class="luxury-contact-item">
                                    <div class="luxury-icon-box">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="luxury-info-content">
                                        <h4 class="luxury-info-title">Email</h4>
                                        <p class="luxury-info-text"><?= $contactConfig['contact_info']['email'] ?></p>
                                    </div>
                                </div>
                                
                                <div class="luxury-divider my-5">
                                    <span class="luxury-divider-inner"></span>
                                </div>
                                
                                <!-- Business Hours -->
                                <div class="luxury-business-hours">
                                    <h4 class="luxury-hours-title mb-3"><i class="fas fa-clock me-2"></i>Business Hours</h4>
                                    <ul class="luxury-hours-list">
                                        <li class="luxury-hours-item">
                                            <span class="luxury-hours-day">Monday - Friday:</span>
                                            <span class="luxury-hours-time"><?= $contactConfig['contact_info']['business_hours']['saturday_thursday'] ?></span>
                                        </li>
                                        <li class="luxury-hours-item">
                                            <span class="luxury-hours-day">Sunday:</span>
                                            <span class="luxury-hours-time"><?= $contactConfig['contact_info']['business_hours']['friday'] ?></span>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="luxury-divider my-5">
                                    <span class="luxury-divider-inner"></span>
                                </div>
                                
                                <!-- Social Links -->
                                <div class="luxury-social-section">
                                    <h4 class="luxury-social-title mb-3">Follow Us</h4>
                                    <div class="d-flex gap-3">
                                        <a href="<?= $contactConfig['social_links']['facebook'] ?>" class="luxury-social-icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="<?= $contactConfig['social_links']['instagram'] ?>" class="luxury-social-icon">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="<?= $contactConfig['social_links']['whatsapp'] ?>" class="luxury-social-icon">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Luxury Map Section -->
            <div class="luxury-map-section mt-6 animate__animated animate__fadeInUp animate__delay-1s">
                <div class="luxury-contact-card">
                    <div class="luxury-map-header p-4">
                        <h3 class="luxury-map-heading mb-0">
                            <i class="fas fa-map-marked-alt me-3"></i>
                            <?= $contactConfig['contact_form_texts']['map_heading'] ?>
                        </h3>
                    </div>
                    <div class="ratio ratio-16x9">
                        <iframe src="<?= $contactConfig['map_embed'] ?>" 
                                allowfullscreen 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                                class="luxury-map-iframe"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include('includes/footer-widget.php'); ?>

<!-- Initialize Luxury Contact Page Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize luxury contact page functionality
    initLuxuryContactPage();
});

function initLuxuryContactPage() {
    // Initialize form validation and submission
    initLuxuryPageForms();
    
    // Initialize floating labels
    initLuxuryFloatingLabels();
    
    // Initialize animations
    initLuxuryAnimations();
    
    // Initialize social media hover effects
    initLuxurySocialHover();
}

function initLuxuryPageForms() {
    // Handle luxury contact form submission
    const luxuryForm = document.getElementById('luxuryContactPageForm');
    if (!luxuryForm) return;
    
    // Form validation
    luxuryForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validate form
        if (!this.checkValidity()) {
            e.stopPropagation();
            this.classList.add('was-validated');
            return;
        }
        
        // Get form elements
        const submitBtn = this.querySelector('button[type="submit"]');
        const btnText = submitBtn.querySelector('.luxury-btn-text');
        const btnIcon = submitBtn.querySelector('.luxury-btn-icon');
        const btnSpinner = submitBtn.querySelector('.luxury-btn-spinner');
        
        // Show loading state
        btnText.textContent = 'Sending...';
        if (btnIcon) btnIcon.classList.add('d-none');
        if (btnSpinner) btnSpinner.classList.remove('d-none');
        submitBtn.disabled = true;
        
        // Submit form via AJAX
        const formData = new FormData(this);
        
        fetch('process_contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Show success state
                btnText.textContent = 'Message Sent!';
                if (btnSpinner) btnSpinner.classList.add('d-none');
                
                // Change icon to checkmark
                if (btnIcon) {
                    const successIcon = document.createElement('i');
                    successIcon.className = 'fas fa-check';
                    btnIcon.replaceWith(successIcon);
                }
                
                // Reset form after delay
                setTimeout(() => {
                    luxuryForm.reset();
                    luxuryForm.classList.remove('was-validated');
                    initLuxuryFloatingLabels(); // Reset floating labels
                    
                    btnText.textContent = 'Send Message';
                    if (btnIcon) {
                        const paperPlaneIcon = document.createElement('i');
                        paperPlaneIcon.className = 'fas fa-paper-plane';
                        paperPlaneIcon.classList.add('luxury-btn-icon');
                        btnIcon.replaceWith(paperPlaneIcon);
                    }
                    submitBtn.disabled = false;
                    
                    // Show success alert
                    if (data.message) {
                        showLuxuryAlert(data.message, 'success');
                    }
                }, 2000);
            } else {
                // Show error state
                btnText.textContent = 'Error Sending';
                if (btnSpinner) btnSpinner.classList.add('d-none');
                
                // Change icon to error
                if (btnIcon) {
                    const errorIcon = document.createElement('i');
                    errorIcon.className = 'fas fa-exclamation-circle';
                    btnIcon.replaceWith(errorIcon);
                }
                
                // Reset button after delay
                setTimeout(() => {
                    btnText.textContent = 'Try Again';
                    if (btnIcon) {
                        const paperPlaneIcon = document.createElement('i');
                        paperPlaneIcon.className = 'fas fa-paper-plane';
                        paperPlaneIcon.classList.add('luxury-btn-icon');
                        btnIcon.replaceWith(paperPlaneIcon);
                    }
                    submitBtn.disabled = false;
                    
                    // Show error alert
                    if (data.message) {
                        showLuxuryAlert(data.message, 'error');
                    }
                }, 2000);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // Show error state
            btnText.textContent = 'Error Sending';
            if (btnSpinner) btnSpinner.classList.add('d-none');
            
            // Change icon to error
            if (btnIcon) {
                const errorIcon = document.createElement('i');
                errorIcon.className = 'fas fa-exclamation-circle';
                btnIcon.replaceWith(errorIcon);
            }
            
            // Reset button after delay
            setTimeout(() => {
                btnText.textContent = 'Try Again';
                if (btnIcon) {
                    const paperPlaneIcon = document.createElement('i');
                    paperPlaneIcon.className = 'fas fa-paper-plane';
                    paperPlaneIcon.classList.add('luxury-btn-icon');
                    btnIcon.replaceWith(paperPlaneIcon);
                }
                submitBtn.disabled = false;
                
                // Show error alert
                showLuxuryAlert('An error occurred. Please try again.', 'error');
            }, 2000);
        });
    });
    
    // Real-time validation
    luxuryForm.querySelectorAll('.luxury-form-control').forEach(input => {
        input.addEventListener('input', function() {
            if (this.checkValidity()) {
                this.classList.remove('is-invalid');
            } else {
                this.classList.add('is-invalid');
            }
        });
    });
}

function showLuxuryAlert(message, type) {
    const alertDiv = document.createElement('div');
    alertDiv.className = `luxury-alert luxury-alert-${type}`;
    alertDiv.textContent = message;
    
    const container = document.querySelector('.luxury-contact-main .container');
    if (container) {
        container.prepend(alertDiv);
        
        // Remove alert after delay
        setTimeout(() => {
            alertDiv.style.opacity = '0';
            setTimeout(() => {
                alertDiv.remove();
            }, 300);
        }, 5000);
    }
}
</script>

<style>
/* Additional styles for contact page */
.luxury-contact-page .luxury-map-header {
    background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
    color: white;
}

.luxury-contact-page .luxury-map-heading {
    color: white;
    font-weight: 600;
}

.luxury-contact-page .luxury-map-iframe {
    border: none;
    filter: grayscale(20%);
    transition: filter 0.3s ease;
}

.luxury-contact-page .luxury-map-iframe:hover {
    filter: grayscale(0%);
}

.luxury-alert {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 15px 25px;
    border-radius: 8px;
    color: white;
    font-weight: 500;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    z-index: 9999;
    opacity: 1;
    transition: opacity 0.3s ease;
}

.luxury-alert-success {
    background: linear-gradient(135deg, #4CAF50, #2E7D32);
}

.luxury-alert-error {
    background: linear-gradient(135deg, #F44336, #C62828);
}
</style>