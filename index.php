<?php include 'includes/header.php'; 
require_once __DIR__ . '/includes/product-functions.php';
try {
    $productsConfig = load_product_config();
} catch (Exception $e) {
    die("Error loading product system: " . $e->getMessage());
}
define('ROOT_PATH', __DIR__);
$productsConfig = include ROOT_PATH . '/includes/products-config.php';

// Include the config file at the top of your home page
$aboutConfig = include 'includes/about-config.php';
// Include projects data
require_once __DIR__ .'/includes/projects-data.php';

?>
 <main>
 
 <!-- hero section--->
 <!-- In your index.php or homepage template -->
<section class="th-home-hero">
				<!-- Background Video (with image fallback) -->
			<!--@div class="th-spotlight"-->
		<div class="th-hero-media">
				<div class="th-hero-media">
					<video class="th-hero-video" autoplay muted loop playsinline>
						<source src="assets/video/hero-loop.mp4" type="video/mp4">
					</video>
	<!-- Overlay that dominates the video’s visuals -->
					<div class="th-hero-video-overlay"></div>
				</div>
		</div>
		<div class="th-hero-content">
  <!-- Add your logo here -->
			<img 
				src="assets/img/interia-logo-3d.png" 
				alt="INTERIA DECOR - Luxury Interior Design" 
				class="th-hero-logo"
				width="300" 
				height="auto"
			>
			<h1 class="th-hero-title">Crafting Timeless Interiors</h1>
			<p class="th-hero-subtitle">Where Elegance Meets Innovation</p>
			<a href="/projects" class="th-hero-btn">Explore Our Masterpieces</a>
		</div>

  <!-- Scrolling indicator (optional) -->
		<div class="th-scroll-hint">
			<span class="th-scroll-text">Scroll</span>
			<div class="th-scroll-line"></div>
		</div>
</section>


<!----------- about section-------------->
<section class="interior-about-preview">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 interior-about-preview-content">
        <div class="interior-about-preview-header">
          <h2 class="interior-about-preview-title"><?= htmlspecialchars($aboutConfig['about_content']['home_title']) ?></h2>
          <div class="interior-about-preview-divider" style="background-color: <?= $aboutConfig['styles']['primary_color'] ?>"></div>
        </div>
        <div class="interior-about-preview-text">
          <p><?= htmlspecialchars($aboutConfig['about_content']['home_content']) ?></p>
        </div>
        
        <div class="interior-about-preview-stats">
          <?php foreach (array_slice($aboutConfig['about_content']['stats'], 0, 2) as $stat): ?>
          <div class="interior-about-preview-stat">
            <div class="interior-about-preview-stat-number" 
                 data-count="<?= $stat['value'] ?>" 
                 style="color: <?= $aboutConfig['styles']['primary_color'] ?>">
              0
            </div>
            <div class="interior-about-preview-stat-label"><?= htmlspecialchars($stat['label']) ?></div>
          </div>
          <?php endforeach; ?>
        </div>
        
        <a href="about.php" class="interior-about-preview-btn" style="background-color: <?= $aboutConfig['styles']['primary_color'] ?>">
          <?= htmlspecialchars($aboutConfig['about_content']['home_button_text']) ?>
          <i class="fas fa-arrow-right"></i>
        </a>
      </div>
      <div class="col-lg-6 interior-about-preview-image">
        <img src="<?= $aboutConfig['about_content']['hero_image'] ?>" alt="About <?= htmlspecialchars($aboutConfig['about_content']['title']) ?>" class="img-fluid">
        <div class="interior-about-preview-badge" style="background-color: <?= $aboutConfig['styles']['primary_color'] ?>">
          <span class="interior-about-preview-years">
            <?= $aboutConfig['about_content']['stats'][0]['value'] ?>+
          </span>
          <span class="interior-about-preview-years-text">
            <?= $aboutConfig['about_content']['stats'][0]['label'] ?>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- service section -->

<section id="homepage-services" class="hp-services-section py-5 bg-light position-relative">
    <!-- Background Shapes -->
    <div class="services-bg-shape shape-1"></div>
    <div class="services-bg-shape shape-2"></div>
    
    <div class="container position-relative">
        <?php $servicesConfig = include 'includes/services-config.php'; ?>
        
        <div class="hp-services-header text-center mb-5">
            <h2 class="hp-services-title dynamic-services-section-title animate__animated animate__fadeInDown">
                <?= $servicesConfig['services']['home_title'] ?>
            </h2>
            <p class="hp-services-subtitle dynamic-services-section-description animate__animated animate__fadeIn animate__delay-1s">
                <?= $servicesConfig['services']['home_description'] ?>
            </p>
            <div class="hp-services-divider mx-auto"></div>
        </div>

        <div class="row g-4 dynamic-homepage-services-list">
            <?php 
            // Get all services marked to show on homepage
            $homepageServices = array_filter($servicesConfig['service_list'], function($service) {
                return $service['show_on_homepage'] ?? false;
            });
            
            // Get the featured service ID
            $featuredId = $servicesConfig['services']['featured_service'];
            
            // Remove featured service from the array
            $nonFeaturedServices = array_filter($homepageServices, function($key) use ($featuredId) {
                return $key != $featuredId;
            }, ARRAY_FILTER_USE_KEY);
            
            // Shuffle non-featured services
            shuffle($nonFeaturedServices);
            
            // Take 2 random non-featured services
            $randomServices = array_slice($nonFeaturedServices, 0, 2);
            
            // Create final array with featured service in the middle
            $finalServices = [
                array_keys($randomServices)[0] => array_values($randomServices)[0],
                $featuredId => $homepageServices[$featuredId],
                array_keys($randomServices)[1] => array_values($randomServices)[1]
            ];
            
            // Display the services
            foreach ($finalServices as $id => $service): 
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="hp-service-item animate__animated animate__fadeInUp">
                    <div class="hp-service-card-wrapper <?= $id == $featuredId ? 'featured' : '' ?>">
                        <div class="hp-service-card">
                            <div class="hp-service-card-front">
                                <div class="hp-service-icon">
                                    <i class="fas <?= $service['icon'] ?> dynamic-service-icon"></i>
                                </div>
                                <h3 class="dynamic-homepage-service-title"><?= $service['title'] ?></h3>
                                <p class="dynamic-homepage-service-short-description"><?= $service['short_description'] ?></p>
                            </div>
                            <div class="hp-service-card-back">
                                <div class="hp-service-icon">
                                    <i class="fas <?= $service['icon'] ?> dynamic-service-icon"></i>
                                </div>
                                <h3><?= $service['title'] ?></h3>
                                <ul class="hp-service-features">
                                    <?php foreach (array_slice($service['features'], 0, 3) as $feature): ?>
                                    <li><?= $feature ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <a href="service-details.php?id=<?= $id ?>" class="btn btn-outline-light mt-3 dynamic-homepage-service-button">Explore Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-5 animate__animated animate__fadeIn animate__delay-1s">
            <a href="services.php" class="btn btn-dark btn-lg px-4 hp-view-all-btn dynamic-homepage-services-view-all">
                <span><?= $servicesConfig['services']['home_button_text'] ?></span>
                <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Unique Projects Section -->
<!-- Stylish Projects Carousel -->
<section id="id-projects-carousel-section" class="id-projects-carousel-section">
    <div class="id-carousel-container">
        <h2 class="id-section-title">Our Masterpieces</h2>
        <p class="id-section-subtitle">Swipe to explore our featured projects</p>
        
        <div class="id-projects-track">
            <?php foreach ($featuredProjects as $id => $project): ?>
            <div class="id-project-slide" data-project-id="<?= $id ?>">
                <div class="id-slide-inner">
                    <div class="id-image-container">
                        <img src="<?= $project['images']['main'] ?>" 
                             alt="<?= htmlspecialchars($project['title']) ?>"
                             class="id-project-image">
                        <div class="id-image-overlay"></div>
                        <?php if ($project['badge']): ?>
                        <span class="id-project-badge"><?= $project['badge'] ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="id-project-info">
                        <h3 class="id-project-title"><?= htmlspecialchars($project['title']) ?></h3>
                        <a href="project-details.php?id=<?= $id ?>" class="id-view-btn">
                            View Project <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="id-carousel-nav">
            <button class="id-nav-btn id-prev-btn">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="id-progress-track">
                <div class="id-progress-bar"></div>
            </div>
            <button class="id-nav-btn id-next-btn">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

<!-- Products Section -->
<section id="lazy-river-products" class="py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="text-primary mb-2 d-block">TRENDING NOW</span>
            <h2 class="display-5 fw-bold mb-3">Shop Our Curated Collection</h2>
            <p class="lead text-muted">Beautiful pieces handpicked for your home</p>
        </div>
        
        <!-- Lazy River Scroll Container -->
        <div class="lazy-river-container">
            <div class="lazy-river-track">
                <?php foreach (array_merge($productsConfig['products'], $productsConfig['products']) as $id => $product): ?>
                <div class="lazy-river-item">
                    <div class="product-card-river">
                        <div class="product-thumb-river">
                            <img src="<?= $product['images'][0] ?>" 
                                 alt="<?= htmlspecialchars($product['name']) ?>" 
                                 loading="lazy">
                            <div class="product-badge-river">New</div>
                            <div class="product-actions-river">
                                <a href="product-details.php?id=<?= $id ?>" class="btn-action-river">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn-action-river snipcart-add-item"
                                   data-item-id="<?= $id ?>"
                                   data-item-name="<?= htmlspecialchars($product['name']) ?>"
                                   data-item-price="<?= $product['price'] ?>"
                                   data-item-url="/product-details.php?id=<?= $id ?>"
                                   data-item-image="<?= $product['images'][0] ?>">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-info-river">
                            <h3><?= htmlspecialchars($product['name']) ?></h3>
                            <div class="price-river">
                                <span><?= $productsConfig['currency'] ?><?= number_format($product['price'], 2) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="products.php" class="btn btn-dark btn-lg px-4 rounded-pill">
                View All Products <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Luxury Contact Section for Home Page -->
<section id="luxury-contact-home" class="luxury-contact-section">
    <!-- Luxury Contact CTA -->
    <div class="luxury-contact-cta py-6 bg-dark text-white position-relative overflow-hidden">
        <div class="luxury-cta-overlay"></div>
        <div class="container text-center position-relative">
            <h2 class="luxury-cta-title mb-4">Ready to Transform Your Space?</h2>
            <p class="luxury-cta-text lead mb-4">Experience bespoke design excellence with our team</p>
            <a href="contact.php" class="luxury-cta-btn btn btn-lg px-5 py-3">Schedule a Consultation</a>
        </div>
    </div>

    <!-- Luxury Contact Main Section -->
    <div class="luxury-contact-main py-6 position-relative">
        <div class="luxury-contact-bg-elements">
            <div class="luxury-bg-shape shape-1"></div>
            <div class="luxury-bg-shape shape-2"></div>
            <div class="luxury-bg-shape shape-3"></div>
        </div>
        
        <div class="container position-relative">
            <?php $contactConfig = include 'includes/contact-config.php'; ?>
            
            <div class="luxury-section-header text-center mb-6">
                <h2 class="luxury-section-title animate__animated animate__fadeInDown">
                    <?= $contactConfig['contact_form_texts']['home_title'] ?>
                </h2>
                <div class="luxury-title-divider">
                    <span class="luxury-divider-line"></span>
                    <span class="luxury-divider-icon"><i class="fas fa-gem"></i></span>
                    <span class="luxury-divider-line"></span>
                </div>
                <p class="luxury-section-intro lead mt-4 animate__animated animate__fadeIn animate__delay-1s">
                    <?= $contactConfig['contact_form_texts']['home_intro'] ?>
                </p>
            </div>
            
            <div class="row g-5 justify-content-center">
                <!-- Luxury Contact Info -->
                <div class="col-lg-5">
                    <div class="luxury-contact-info-wrapper animate__animated animate__fadeInLeft">
                        <div class="luxury-contact-card">
                            <div class="luxury-card-body p-5">
                                <!-- Hours -->
                                <div class="luxury-contact-item">
                                    <div class="luxury-icon-box">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="luxury-info-content">
                                        <h4 class="luxury-info-title">Business Hours</h4>
                                        <ul class="luxury-info-list">
                                            <li class="luxury-info-list-item">
                                                <span class="luxury-info-label">Monday - Friday:</span>
                                                <span class="luxury-info-value"><?= $contactConfig['contact_info']['business_hours']['saturday_thursday'] ?></span>
                                            </li>
                                            <li class="luxury-info-list-item">
                                                <span class="luxury-info-label">Sunday:</span>
                                                <span class="luxury-info-value"><?= $contactConfig['contact_info']['business_hours']['friday'] ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="luxury-divider my-5">
                                    <span class="luxury-divider-inner"></span>
                                </div>
                                
                                <!-- Contact Info -->
                                <div class="luxury-contact-item">
                                    <div class="luxury-icon-box">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="luxury-info-content">
                                        <h4 class="luxury-info-title">Contact Information</h4>
                                        <ul class="luxury-info-list">
                                            <li class="luxury-info-list-item">
                                                <span class="luxury-info-label"><i class="fas fa-envelope me-2"></i>Email:</span>
                                                <span class="luxury-info-value"><?= $contactConfig['contact_info']['email'] ?></span>
                                            </li>
                                            <li class="luxury-info-list-item">
                                                <span class="luxury-info-label"><i class="fas fa-phone me-2"></i>Phone:</span>
                                                <span class="luxury-info-value"><?= $contactConfig['contact_info']['phone'] ?></span>
                                            </li>
                                            <li class="luxury-info-list-item">
                                                <span class="luxury-info-label"><i class="fas fa-map-marker-alt me-2"></i>Address:</span>
                                                <span class="luxury-info-value"><?= $contactConfig['contact_info']['address'] ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Social Links -->
                                <div class="luxury-social-section mt-5 pt-3 text-center">
                                    <h5 class="luxury-social-title mb-4">Connect With Us</h5>
                                    <div class="d-flex justify-content-center gap-4">
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
                
                <!-- Luxury Contact Form -->
                <div class="col-lg-7">
                    <div class="luxury-contact-form-wrapper animate__animated animate__fadeInRight">
                        <div class="luxury-contact-card">
                            <div class="luxury-card-body p-5">
                                <h3 class="luxury-form-title mb-4">
                                    <i class="fas fa-paper-plane me-3"></i>Send Us a Message
                                </h3>
                                
                                <form id="luxuryContactForm" class="luxury-contact-form needs-validation" novalidate>
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="luxury-form-group luxury-floating-group">
                                                <input type="text" class="luxury-form-control" id="luxuryFirstName" name="firstName" required>
                                                <label for="luxuryFirstName" class="luxury-floating-label">First Name</label>
                                                <div class="luxury-input-highlight"></div>
                                                <div class="luxury-invalid-feedback">Please provide your first name</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="luxury-form-group luxury-floating-group">
                                                <input type="text" class="luxury-form-control" id="luxuryLastName" name="lastName" required>
                                                <label for="luxuryLastName" class="luxury-floating-label">Last Name</label>
                                                <div class="luxury-input-highlight"></div>
                                                <div class="luxury-invalid-feedback">Please provide your last name</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="luxury-form-group luxury-floating-group">
                                                <input type="email" class="luxury-form-control" id="luxuryEmail" name="email" required>
                                                <label for="luxuryEmail" class="luxury-floating-label">Email Address</label>
                                                <div class="luxury-input-highlight"></div>
                                                <div class="luxury-invalid-feedback">Please provide a valid email</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="luxury-form-group luxury-floating-group">
                                                <input type="tel" class="luxury-form-control" id="luxuryPhone" name="phone" required>
                                                <label for="luxuryPhone" class="luxury-floating-label">Phone Number</label>
                                                <div class="luxury-input-highlight"></div>
                                                <div class="luxury-invalid-feedback">Please provide a valid phone number</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="luxury-form-group luxury-floating-group">
                                                <textarea class="luxury-form-control" id="luxuryMessage" name="message" rows="4" required></textarea>
                                                <label for="luxuryMessage" class="luxury-floating-label">Your Message</label>
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
            </div>
        </div>
    </div>
</section>

<!-- Luxury Social Media Section -->
<section class="luxury-social-feed py-6">
    <div class="container">
        <div class="luxury-social-content text-center">
            <i class="bi bi-facebook luxury-social-icon mb-4"></i>
            <h2 class="luxury-social-title mb-4">Connect with Us on Facebook</h2>
            <p class="luxury-social-text lead mb-5">Follow our page for design inspiration, latest projects, and exclusive offers</p>
            <a href="https://www.facebook.com/interiadecorbd" target="_blank" class="luxury-social-btn">Visit Our Facebook Page</a>
        </div>
    </div>
</section>
    </main>

<?php include('includes/footer-widget.php'); ?>

<script>
// Initialize product system with config
document.addEventListener('DOMContentLoaded', () => {
    // These values would come from your PHP config in real implementation
    const productSystemConfig = {
        animations: true,
        showPrices: <?= json_encode($productsConfig['show_prices']) ?>,
        showCart: <?= json_encode($productsConfig['show_cart']) ?>,
        currency: '<?= $productsConfig['currency'] ?>'
    };
    
    // Initialize the product system
    if (typeof ProductSystem !== 'undefined') {
        new ProductSystem(productSystemConfig);
    }
    
    // Optional: Auto-scroll for product carousel
    const scrollContainer = document.querySelector('.homepage-products-scroll-container');
    if (scrollContainer) {
        let scrollAmount = 0;
        const scrollStep = 1;
        const scrollInterval = setInterval(() => {
            scrollContainer.scrollLeft += scrollStep;
            scrollAmount += scrollStep;
            if (scrollAmount >= 300) {
                scrollAmount = 0;
                setTimeout(() => {
                    scrollContainer.scrollLeft = 0;
                }, 2000);
            }
        }, 30);
        
        // Pause on hover
        scrollContainer.addEventListener('mouseenter', () => clearInterval(scrollInterval));
    }
});

document.addEventListener('DOMContentLoaded', function() {
    // Manual button click handler
    const portfolioBtn = document.querySelector('.btn-outline-light[href="projects.php"]');
    if (portfolioBtn) {
        portfolioBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = 'projects.php';
        });
    }
});

// Mouse-Tracking Spotlight
const hero = document.querySelector('.th-home-hero');
const spotlight = document.querySelector('.th-spotlight');

hero.addEventListener('mousemove', (e) => {
  const { left, top } = hero.getBoundingClientRect();
  spotlight.style.left = `${e.clientX - left}px`;
  spotlight.style.top = `${e.clientY - top}px`;
});

<!-- about section  -->

// Counter animation for stats
document.addEventListener('DOMContentLoaded', function() {
  const counters = document.querySelectorAll('.interior-about-preview-stat-number');
  const speed = 200;
  
  function animateCounters() {
    counters.forEach(counter => {
      const target = +counter.getAttribute('data-count');
      const count = +counter.innerText;
      const increment = target / speed;
      
      if(count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(animateCounters, 1);
      } else {
        counter.innerText = target + '+';
      }
    });
  }
  
  // Only animate when section is in view
  const observer = new IntersectionObserver((entries) => {
    if(entries[0].isIntersecting) {
      animateCounters();
    }
  }, {threshold: 0.5});
  
  if(counters[0]) {
    observer.observe(counters[0].closest('.interior-about-preview'));
  }
});

</script>

  