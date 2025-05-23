<?php 
include 'includes/header.php';
$servicesConfig = include 'includes/services-config.php';

// Get service ID from URL
$serviceId = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$service = $servicesConfig['service_list'][$serviceId] ?? $servicesConfig['service_list'][1];
?>

<!-- Service Hero Section -->
<section class="service-hero py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($service['title']) ?></li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold mb-3 dynamic-service-title"><?= htmlspecialchars($service['title']) ?></h1>
                <p class="lead dynamic-service-description"><?= htmlspecialchars($service['short_description']) ?></p>
                <button class="btn btn-primary btn-lg get-quote-btn" data-service="<?= htmlspecialchars($service['title']) ?>">Get a Quote</button>
            </div>
            <div class="col-lg-6">
                <div class="service-icon-lg text-center">
                    <i class="fas <?= $service['icon'] ?> fa-4x text-primary"></i>
                </div>
                <img src="<?= $service['image'] ?>" alt="<?= htmlspecialchars($service['title']) ?>" class="img-fluid rounded-3 shadow mt-4" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Service Details Section -->
<section class="service-details py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-4">About Our <?= htmlspecialchars($service['title']) ?> Service</h2>
                <div class="dynamic-service-full-description">
                    <?= $service['full_description'] ?>
                </div>
                
                <div class="mt-5">
                    <h3 class="mb-4">Our <?= htmlspecialchars($service['title']) ?> Process</h3>
                    <div class="process-steps">
                        <?php foreach ($service['process'] as $index => $step): ?>
                        <div class="process-step mb-4 animate__animated animate__fadeInUp" style="animation-delay: <?= $index * 0.1 ?>s">
                            <div class="step-number"><?= $index + 1 ?></div>
                            <div class="step-content">
                                <p><?= htmlspecialchars($step) ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="service-features-card p-4 rounded-3 shadow-sm border">
                    <h3 class="h4 mb-4">Service Features</h3>
                    <ul class="service-features-list">
                        <?php foreach ($service['features'] as $feature): ?>
                        <li class="mb-3"><i class="fas fa-check text-primary me-2"></i><?= htmlspecialchars($feature) ?></li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <div class="mt-4 pt-3 border-top">
                        <h4 class="h5 mb-3">Ready to Get Started?</h4>
                        <button class="btn btn-primary w-100 get-quote-btn" data-service="<?= htmlspecialchars($service['title']) ?>">
                            Request a Consultation
                        </button>
                    </div>
                </div>
                
                <div class="mt-4 p-4 rounded-3 shadow-sm border">
                    <h3 class="h4 mb-3">Have Questions?</h3>
                    <p>Contact our design team to discuss your project and how we can help bring your vision to life.</p>
                    <a href="contact.php" class="btn btn-outline-primary w-100 mt-2">
                        <i class="fas fa-envelope me-2"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Services -->
<section class="related-services py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Explore Our Other Services</h2>
        <div class="row g-4">
            <?php 
            // Display 3 related services (excluding current service)
            $relatedServices = array_diff_key($servicesConfig['service_list'], [$serviceId => '']);
            $relatedServices = array_slice($relatedServices, 0, 3, true);
            
            foreach ($relatedServices as $id => $relatedService): 
            ?>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="service-icon mb-3">
                            <i class="fas <?= $relatedService['icon'] ?>"></i>
                        </div>
                        <h3 class="h5"><?= htmlspecialchars($relatedService['title']) ?></h3>
                        <p class="text-muted small"><?= htmlspecialchars($relatedService['short_description']) ?></p>
                        <a href="service-details.php?id=<?= $id ?>" class="btn btn-outline-primary btn-sm">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>