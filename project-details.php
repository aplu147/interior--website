<?php 
include 'includes/header.php';
include 'includes/projects-data.php';

$projectId = isset($_GET['id']) ? intval($_GET['id']) : 1;
$project = $projects[$projectId] ?? $projects[1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($project['short_title']) ?> | Luxe Project Details</title>
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --gold: #D4AF37;
            --dark-charcoal: #333333;
            --light-gray: #F5F5F5;
            --slate: #6E7F80;
            --ivory: #FFFFF0;
            --spacing-xl: 6rem;
            --spacing-lg: 4rem;
            --spacing-md: 2rem;
            --spacing-sm: 1rem;
            --border-radius: 8px;
            --box-shadow-luxe: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            --transition-luxe: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--dark-charcoal);
            background-color: var(--ivory);
            line-height: 1.8;
        }
        
        h1, h2, h3, h4, h5, .section-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }
        
        /* Luxe Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: var(--light-gray);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--gold);
            border-radius: 4px;
        }
        
        /* Luxe Hero Section */
        .luxe-hero {
            height: 90vh;
            min-height: 700px;
            position: relative;
            overflow: hidden;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?= $project['images']['main'] ?>') center/cover no-repeat fixed;
            display: flex;
            align-items: flex-end;
            padding-bottom: var(--spacing-xl);
            color: white;
        }
        
        .luxe-hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
        }
        
        .luxe-hero-title {
            font-size: 4.5rem;
            margin-bottom: var(--spacing-sm);
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
            position: relative;
            display: inline-block;
        }
        
        .luxe-hero-title:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 0;
            width: 100px;
            height: 4px;
            background: var(--gold);
        }
        
        .luxe-hero-meta {
            display: flex;
            gap: var(--spacing-lg);
            margin-top: var(--spacing-md);
        }
        
        .luxe-meta-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .luxe-meta-icon {
            font-size: 1.5rem;
            color: var(--gold);
        }
        
        /* Main Content */
        .luxe-main-content {
            padding: var(--spacing-xl) 0;
            position: relative;
        }
        
        .luxe-section {
            margin-bottom: var(--spacing-xl);
        }
        
        .luxe-section-title {
            font-size: 2.5rem;
            margin-bottom: var(--spacing-md);
            position: relative;
            display: inline-block;
        }
        
        .luxe-section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--gold);
        }
        
        /* Gallery */
        .luxe-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: var(--spacing-sm);
            margin-top: var(--spacing-md);
        }
        
        .luxe-gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: var(--border-radius);
            aspect-ratio: 4/3;
            transition: var(--transition-luxe);
        }
        
        .luxe-gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: var(--box-shadow-luxe);
        }
        
        .luxe-gallery-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition-luxe);
        }
        
        .luxe-gallery-item:hover .luxe-gallery-img {
            transform: scale(1.1);
        }
        
        /* Features */
        .luxe-features {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: var(--spacing-md);
        }
        
        .luxe-feature-card {
            background: white;
            padding: var(--spacing-md);
            border-radius: var(--border-radius);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: var(--transition-luxe);
            border-left: 4px solid var(--gold);
        }
        
        .luxe-feature-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--box-shadow-luxe);
        }
        
        .luxe-feature-icon {
            font-size: 2rem;
            color: var(--gold);
            margin-bottom: var(--spacing-sm);
        }
        
        /* Sidebar */
        .luxe-sidebar {
            position: sticky;
            top: var(--spacing-md);
        }
        
        .luxe-specs-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow-luxe);
            overflow: hidden;
            margin-bottom: var(--spacing-md);
        }
        
        .luxe-specs-header {
            background: var(--dark-charcoal);
            color: white;
            padding: var(--spacing-md);
            font-size: 1.5rem;
            position: relative;
        }
        
        .luxe-specs-header:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: var(--spacing-md);
            width: 50px;
            height: 3px;
            background: var(--gold);
        }
        
        .luxe-specs-item {
            padding: var(--spacing-md);
            border-bottom: 1px solid var(--light-gray);
            display: flex;
            align-items: center;
            gap: var(--spacing-sm);
            transition: var(--transition-luxe);
        }
        
        .luxe-specs-item:last-child {
            border-bottom: none;
        }
        
        .luxe-specs-item:hover {
            background: rgba(212, 175, 55, 0.1);
            padding-left: calc(var(--spacing-md) + 10px);
        }
        
        .luxe-specs-icon {
            color: var(--gold);
            font-size: 1.2rem;
            min-width: 25px;
        }
        
        /* Products */
        .luxe-products {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: var(--spacing-md);
        }
        
        .luxe-product-card {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: var(--transition-luxe);
        }
        
        .luxe-product-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--box-shadow-luxe);
        }
        
        .luxe-product-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .luxe-product-info {
            padding: var(--spacing-md);
        }
        
        .luxe-product-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            margin-bottom: var(--spacing-sm);
        }
        
        /* Contact Form */
        .luxe-contact-form {
            background: white;
            padding: var(--spacing-xl);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow-luxe);
        }
        
        .luxe-form-control {
            border: 1px solid var(--light-gray);
            padding: 15px;
            border-radius: var(--border-radius);
            transition: var(--transition-luxe);
        }
        
        .luxe-form-control:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.2);
        }
        
        .luxe-btn {
            background: var(--gold);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: var(--border-radius);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition-luxe);
        }
        
        .luxe-btn:hover {
            background: var(--dark-charcoal);
            color: white;
            transform: translateY(-3px);
        }
        
        /* Floating CTA */
        .luxe-floating-cta {
            position: fixed;
            bottom: var(--spacing-md);
            right: var(--spacing-md);
            z-index: 1000;
            opacity: 0;
            transform: translateY(100px);
            transition: var(--transition-luxe);
        }
        
        .luxe-floating-cta.show {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .luxe-hero-title {
                font-size: 3.5rem;
            }
            
            .luxe-hero-meta {
                flex-wrap: wrap;
                gap: var(--spacing-md);
            }
        }
        
        @media (max-width: 768px) {
            .luxe-hero-title {
                font-size: 2.5rem;
            }
            
            .luxe-section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body class="luxe-project-details">
    <!-- Hero Section -->
    <section class="luxe-hero">
        <div class="container luxe-hero-content">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="luxe-hero-title animate__animated animate__fadeInDown"><?= htmlspecialchars($project['short_title']) ?></h1>
                    <p class="lead animate__animated animate__fadeIn animate__delay-1s"><?= htmlspecialchars($project['location']) ?></p>
                    
                    <div class="luxe-hero-meta animate__animated animate__fadeIn animate__delay-1s">
                        <div class="luxe-meta-item">
                            <div class="luxe-meta-icon"><i class="fas fa-layer-group"></i></div>
                            <div><?= ucfirst(implode(' / ', $project['category'])) ?></div>
                        </div>
                        <div class="luxe-meta-item">
                            <div class="luxe-meta-icon"><i class="fas fa-ruler-combined"></i></div>
                            <div><?= htmlspecialchars($project['size']) ?></div>
                        </div>
                        <div class="luxe-meta-item">
                            <div class="luxe-meta-icon"><i class="fas fa-calendar-alt"></i></div>
                            <div><?= htmlspecialchars($project['year']) ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container luxe-main-content">
        <div class="row g-5">
            <!-- Main Content Column -->
            <div class="col-lg-8">
                <!-- Project Overview -->
                <section class="luxe-section">
                    <h2 class="luxe-section-title">Project Overview</h2>
                    <div class="project-description">
                        <?= $project['long_description'] ?>
                    </div>
                </section>
                
                <!-- Design Features -->
                <section class="luxe-section">
                    <h2 class="luxe-section-title">Design Features</h2>
                    <div class="luxe-features">
                        <?php foreach ($project['features'] as $i => $feature): ?>
                        <div class="luxe-feature-card animate__animated animate__fadeInUp" style="animation-delay: <?= $i * 0.1 ?>s">
                            <div class="luxe-feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h3>Feature <?= $i + 1 ?></h3>
                            <p><?= htmlspecialchars($feature) ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                
                <!-- Project Gallery -->
                <section class="luxe-section">
                    <h2 class="luxe-section-title">Project Gallery</h2>
                    <div class="luxe-gallery">
                        <?php foreach ($project['images']['gallery'] as $index => $image): ?>
                        <a href="<?= $image ?>" class="luxe-gallery-item" data-lightbox="project-gallery" 
                           data-title="<?= htmlspecialchars($project['short_title']) ?> - Image <?= $index + 1 ?>">
                            <img src="<?= $image ?>" alt="<?= htmlspecialchars($project['short_title']) ?> - Image <?= $index + 1 ?>" 
                                 class="luxe-gallery-img">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <i class="fas fa-search-plus text-white fs-3"></i>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </section>
                
                <!-- Products Used Section -->
                <?php if (!empty($project['products_used'])): ?>
                <section class="luxe-section">
                    <h2 class="luxe-section-title">Products Used</h2>
                    <div class="luxe-products">
                        <?php foreach ($project['products_used'] as $productId): ?>
                            <?php if (isset($products[$productId])): ?>
                                <?php $product = $products[$productId]; ?>
                                <div class="luxe-product-card">
                                    <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="luxe-product-img">
                                    <div class="luxe-product-info">
                                        <h3 class="luxe-product-name"><?= htmlspecialchars($product['name']) ?></h3>
                                        <div class="luxe-product-category"><?= $product['category'] ?></div>
                                        <a href="product-details.php?id=<?= $productId ?>" class="btn btn-sm btn-outline-primary mt-2">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </section>
                <?php endif; ?>
            </div>
            
            <!-- Sidebar Column -->
            <div class="col-lg-4">
                <!-- Project Specs Card -->
                <div class="luxe-specs-card luxe-sidebar">
                    <div class="luxe-specs-header">
                        <i class="fas fa-clipboard-list me-2"></i> Project Specifications
                    </div>
                    <div class="luxe-specs-body">
                        <div class="luxe-specs-item">
                            <div class="luxe-specs-icon"><i class="fas fa-home"></i></div>
                            <div>
                                <strong>Type:</strong> <?= ucfirst(implode(' / ', $project['category'])) ?>
                            </div>
                        </div>
                        <div class="luxe-specs-item">
                            <div class="luxe-specs-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div>
                                <strong>Location:</strong> <?= htmlspecialchars($project['location']) ?>
                            </div>
                        </div>
                        <div class="luxe-specs-item">
                            <div class="luxe-specs-icon"><i class="fas fa-ruler-combined"></i></div>
                            <div>
                                <strong>Size:</strong> <?= htmlspecialchars($project['size']) ?>
                            </div>
                        </div>
                        <div class="luxe-specs-item">
                            <div class="luxe-specs-icon"><i class="fas fa-calendar-alt"></i></div>
                            <div>
                                <strong>Completed:</strong> <?= htmlspecialchars($project['year']) ?>
                            </div>
                        </div>
                        <div class="luxe-specs-item">
                            <div class="luxe-specs-icon"><i class="fas fa-star"></i></div>
                            <div>
                                <strong>Status:</strong> <?= $project['badge'] ?? 'Completed' ?>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <button class="luxe-btn w-100 mb-3 contact-btn">
                            <i class="fas fa-phone-alt me-2"></i> Contact Us
                        </button>
                        <button class="btn btn-outline-dark w-100 download-btn">
                            <i class="fas fa-download me-2"></i> Download Brochure
                        </button>
                    </div>
                </div>
                
                <!-- Share Project Card -->
                <div class="luxe-specs-card mt-4">
                    <div class="luxe-specs-header">
                        <i class="fas fa-share-alt me-2"></i> Share This Project
                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-facebook share-btn" data-platform="facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-twitter share-btn" data-platform="twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-linkedin share-btn" data-platform="linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn btn-pinterest share-btn" data-platform="pinterest">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                            <a href="#" class="btn btn-whatsapp share-btn" data-platform="whatsapp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Related Projects -->
                <div class="luxe-specs-card mt-4">
                    <div class="luxe-specs-header">
                        <i class="fas fa-project-diagram me-2"></i> Related Projects
                    </div>
                    <div class="p-4">
                        <div class="related-projects-grid">
                            <?php 
                            $relatedCount = 0;
                            foreach ($projects as $id => $p): 
                                if ($id != $projectId && array_intersect($project['category'], $p['category']) && $relatedCount < 3):
                                    $relatedCount++;
                            ?>
                            <a href="project-details.php?id=<?= $id ?>" class="related-project-card">
                                <div class="project-image-wrapper">
                                    <img src="<?= $p['images']['main'] ?>" alt="<?= htmlspecialchars($p['title']) ?>" 
                                         class="project-image" loading="lazy">
                                    <div class="image-overlay"></div>
                                </div>
                                <div class="project-info">
                                    <h3 class="project-title"><?= htmlspecialchars($p['short_title']) ?></h3>
                                    <div class="project-category"><?= ucfirst(implode(' / ', $p['category'])) ?></div>
                                </div>
                            </a>
                            <?php 
                                endif;
                            endforeach; 
                            ?>
                        </div>
                        <a href="projects.php" class="btn btn-outline-dark w-100 mt-3">
                            View All Projects <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Form Section -->
        <section id="contact-form" class="luxe-section">
            <div class="luxe-contact-form">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h2 class="luxe-section-title mb-4">Start Your Project With Us</h2>
                        <p class="lead">Get in touch with our team to discuss your requirements</p>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone-alt fa-lg text-gold me-3"></i>
                            <div>
                                <h5 class="mb-0">Call Us</h5>
                                <p class="mb-0"><a href="tel:+1234567890" class="text-decoration-none">+1 (234) 567-890</a></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope fa-lg text-gold me-3"></i>
                            <div>
                                <h5 class="mb-0">Email Us</h5>
                                <p class="mb-0"><a href="mailto:info@example.com" class="text-decoration-none">info@example.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form id="projectContactForm" class="needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control luxe-form-control" id="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control luxe-form-control" id="email" required>
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control luxe-form-control" id="subject" 
                                           value="Regarding <?= htmlspecialchars($project['short_title']) ?>" required>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control luxe-form-control" id="message" rows="4" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="luxe-btn w-100" type="submit">
                                        <i class="fas fa-paper-plane me-2"></i> Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Floating CTA -->
    <div class="luxe-floating-cta">
        <a href="#contact-form" class="luxe-btn shadow-lg animate__animated animate__pulse animate__infinite">
            <i class="fas fa-paper-plane me-2"></i> Get a Quote
        </a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Show/hide floating CTA
        window.addEventListener('scroll', function() {
            if (window.scrollY > 500) {
                document.querySelector('.luxe-floating-cta').classList.add('show');
            } else {
                document.querySelector('.luxe-floating-cta').classList.remove('show');
            }
        });
        
        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);
        
        // Animate elements on scroll
        gsap.utils.toArray('.animate__animated').forEach(element => {
            gsap.from(element, {
                scrollTrigger: {
                    trigger: element,
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                opacity: 0,
                y: 50,
                duration: 0.8,
                ease: "power2.out"
            });
        });
        
        // Button functionalities
        // Contact Button
        document.querySelector('.contact-btn').addEventListener('click', function() {
            document.getElementById('contact-form').scrollIntoView({
                behavior: 'smooth'
            });
        });
        
        // Download Brochure Button
        document.querySelector('.download-btn').addEventListener('click', function() {
            alert('Downloading project brochure...');
        });
        
        // Social Share Buttons
        document.querySelectorAll('.share-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const platform = this.dataset.platform;
                const url = encodeURIComponent(window.location.href);
                const title = encodeURIComponent('<?= htmlspecialchars($project['short_title']) ?>');
                const text = encodeURIComponent('Check out this project: <?= htmlspecialchars($project['short_title']) ?>');
                
                let shareUrl;
                switch(platform) {
                    case 'facebook':
                        shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                        break;
                    case 'twitter':
                        shareUrl = `https://twitter.com/intent/tweet?text=${text}&url=${url}`;
                        break;
                    case 'linkedin':
                        shareUrl = `https://www.linkedin.com/shareArticle?mini=true&url=${url}&title=${title}`;
                        break;
                    case 'pinterest':
                        shareUrl = `https://pinterest.com/pin/create/button/?url=${url}&media=<?= $project['images']['main'] ?>&description=${text}`;
                        break;
                    case 'whatsapp':
                        shareUrl = `https://wa.me/?text=${text} ${url}`;
                        break;
                }
                
                window.open(shareUrl, '_blank', 'width=600,height=400');
            });
        });
        
        // Form validation
        const form = document.getElementById('projectContactForm');
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                event.preventDefault();
                alert('Thank you for your message! We will contact you soon.');
                form.reset();
            }
            form.classList.add('was-validated');
        }, false);
        
        // Parallax effect for hero
        gsap.to('.luxe-hero', {
            scrollTrigger: {
                scrub: true
            },
            backgroundPositionY: '20%',
            ease: "none"
        });
    });
    </script>
    
    <?php include('includes/footer-widget.php'); ?>
</body>
</html>