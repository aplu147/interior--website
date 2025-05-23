<?php
/**
 * Footer Widget with Google Maps and Particle Background
 * PHP include file with HTML structure only
 */
?>
<footer class="footer-with-ft-map">
  <canvas id="particle-canvas" class="particle-background"></canvas>
  
  <div class="footer-content">
    <?php $contactConfig = include 'includes/contact-config.php'; ?>
    
    <div class="footer-section">
      <h4>Quick Links</h4>
      <ul class="animated-links">
         <li><a href="gallery.php"><i class="fas fa-images"></i> Gallery</a></li>
         <li><a href="blog.php"><i class="fas fa-newspaper"></i> Blog</a></li>
         <li><a href="testimonial.php"><i class="fas fa-quote-right"></i> Testimonials</a></li>
         <li><a href="career.php"><i class="fas fa-user-tie"></i> Career</a></li>
         <li><a href="discount.php"><i class="fas fa-gift"></i> Offers</a></li>
      </ul>
    </div>
    
    <div class="footer-section">
      <h4>Additional Info</h4>
      <p>Try our Tools</p>
      <ul>
        <li><a href="calculator.html"><i class="fas fa-chevron-right"></i> Calculator</a></li>
        <li><a href="project-dashboard.php"><i class="fas fa-chevron-right"></i> Privilege Section  </a></li>
      </ul>
    </div>
    
    <div class="footer-section">
      <h4>Contact Info</h4>
      <div class="contact-info">
        <p><i class="fas fa-map-marker-alt pulse-icon"></i> <?= $contactConfig['contact_info']['address'] ?></p>
        <p><i class="fas fa-phone flip-icon"></i> <?= $contactConfig['contact_info']['phone'] ?></p>
        <p><i class="fas fa-envelope swing-icon"></i> <?= $contactConfig['contact_info']['email'] ?></p>
      </div>
      
      <div class="social-links">
        <a href="<?= $contactConfig['social_links']['facebook'] ?>" class="social-icon" aria-label="Facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="<?= $contactConfig['social_links']['instagram'] ?>" class="social-icon" aria-label="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="<?= $contactConfig['social_links']['whatsapp'] ?>" class="social-icon" aria-label="WhatsApp">
          <i class="fab fa-whatsapp"></i>
        </a>
      </div>
    </div>
    
    <div class="footer-section ft-map-widget">
      <div class="ft-map-header">
        <h4><i class="fas fa-map-marked-alt location-icon"></i> Our Location</h4>
        <button class="direction-btn" anim="sheen">
          <i class="fas fa-route"></i> Get Directions
        </button>
      </div>
      <div class="ft-mini-map">
        <iframe src="<?= $contactConfig['map_embed'] ?>" 
                width="100%" 
                height="150" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="ft-map-iframe"></iframe>
        <div class="ft-map-overlay">
          <i class="fas fa-expand expand-icon"></i>
        </div>
      </div>
    </div>
  </div>
  
  <div class="footer-bottom">
    <div class="main-footer-row">
		<div class="language-select">
        <i class="fa-solid fa-language"></i>
        <span>Language:</span>
        <select class="language-select">
			<option value="en" data-flag="us">🇺🇸 English</option>
			<option value="bn" data-flag="bd">🇧🇩 বাংলা</option>
		</select>
        </div>
        <div class="footer-links">
            <a href="privacy-policy.php"><i class="fa-regular fa-file-lines"></i> Privacy Policy</a>
            <span class="separator">|</span>
            <a href="#"><i class="fa-solid fa-cookie-bite"></i> Cookie Notice</a>
			<span class="separator">|</span>
            <a href="terms-of-service.php"><i class="fa-regular fa-folder-open"></i> Terms of Use</a>
            <span class="separator">|</span>
            <a href="sitemap.xml"><i class="fa-regular fa-map"></i> Site Map</a>
        </div>
    </div>
	<div
		<p>© <?php echo date('Y'); ?> Interia Decor. All Rights Reserved.</p>
    </div>
    <div class="scroll-top" id="scrollToTop">
        <i class="fas fa-arrow-up"></i>
    </div>
  </div>
</footer>

<style>
  /* Particle Background */
  .particle-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    opacity: 0.7;
  }
  
  /* Footer Structure */
  .footer-with-ft-map {
    position: relative;
    background: linear-gradient(90deg, #002f3f, #004651, #002f3f);
    color: #fff;
    padding: 3rem 0 0;
    overflow: hidden;
  }
  
  .footer-content {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
	box-shadow: 0 15px 25px rgba(12, 75, 98, 0.4);
  }
  
  /* Existing footer styles remain the same */
  /* ... your existing footer CSS ... */
</style>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js"></script>
	<script src="js/footer-scripts.js"></script>
	<script src="js/projects-script.js" defer></script>
	<script src="js/contact-scripts.js"></script>
	<script src="js/create-blog.js"></script>
	<script src="js/gallery.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/blog.js"></script>
	<script src="js/services.js" </script>
	<script src="js/discounts.js" </script>
	<script src="js/products-system.js" </script>
	<script src="js/id-hero.js"></script>
	<script src="js/about.js"></script>
	<script src="js/hom-project.js"></script>
	<script src="js/luxury-contact-home.js"></script>
	<script src="js/product-ic.js" </script>
	<script src="js/odern-projects.js" </script>




<script>
// Particle Animation - Add this to your footer-scripts.js or include here
document.addEventListener('DOMContentLoaded', function() {
  // Only run if canvas exists
  const canvas = document.getElementById('particle-canvas');
  if (!canvas) return;
  
  const ctx = canvas.getContext('2d');
  const footer = document.querySelector('.footer-with-ft-map');
  
  function initParticles() {
    // Set canvas size
    canvas.width = footer.offsetWidth;
    canvas.height = footer.offsetHeight;
    
    // Particle settings
    const particles = [];
    const particleCount = Math.floor(canvas.width * 0.1); // Adjust density
    
    // Create particles
    for (let i = 0; i < particleCount; i++) {
      particles.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        size: Math.random() * 2 + 1,
        speedX: Math.random() * 0.5 - 0.25,
        speedY: Math.random() * 0.5 - 0.25,
        color: `rgba(169, 201, 255, ${Math.random() * 0.5 + 0.3})`
      });
    }
    
    // Animation loop
    function animate() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      
      particles.forEach(particle => {
        // Update position
        particle.x += particle.speedX;
        particle.y += particle.speedY;
        
        // Bounce off edges
        if (particle.x < 0 || particle.x > canvas.width) particle.speedX *= -1;
        if (particle.y < 0 || particle.y > canvas.height) particle.speedY *= -1;
        
        // Draw particle
        ctx.beginPath();
        ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
        ctx.fillStyle = particle.color;
        ctx.fill();
        
        // Draw connections
        particles.forEach(other => {
          const dx = particle.x - other.x;
          const dy = particle.y - other.y;
          const distance = Math.sqrt(dx * dx + dy * dy);
          
          if (distance < 100) {
            ctx.beginPath();
            ctx.strokeStyle = `rgba(169, 201, 255, ${0.3 - distance/300})`;
            ctx.lineWidth = 0.5;
            ctx.moveTo(particle.x, particle.y);
            ctx.lineTo(other.x, other.y);
            ctx.stroke();
          }
        });
      });
      
      requestAnimationFrame(animate);
    }
    
    animate();
  }
  
  // Initialize and handle resize
  initParticles();
  window.addEventListener('resize', () => {
    initParticles();
  });
});
</script>