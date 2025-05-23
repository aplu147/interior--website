<?php 
include 'includes/header.php';
$servicesConfig = include 'includes/services-config.php';
?>
<nav class="navbar">
    </nav>
<div class="navbar-placeholder"></div>
<main class="main-content">
    </main>
	
<!-- Services Grid -->
<section class="services-grid py-5">
    <!-- Background Shapes -->
    <div class="services-bg-shape shape-1"></div>
    <div class="services-bg-shape shape-2"></div>
    
    <div class="container">
        <div class="section-header text-center mb-5">
            <h1 class="section-title dynamic-services-main-title animate__animated animate__fadeInDown">
                <?= $servicesConfig['services']['main_title'] ?>
            </h1>
            <p class="section-subtitle dynamic-services-main-description animate__animated animate__fadeIn animate__delay-1s">
                <?= $servicesConfig['services']['main_description'] ?>
            </p>
            <div class="divider mx-auto"></div>
        </div>

        <div class="row g-4 dynamic-services-list">
            <?php foreach ($servicesConfig['service_list'] as $id => $service): ?>
            <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp">
                <div class="service-card <?= $id == $servicesConfig['services']['featured_service'] ? 'featured' : '' ?>">
                    <div class="service-icon dynamic-service-icon">
                        <i class="fas <?= $service['icon'] ?>"></i>
                    </div>
                    <h3 class="dynamic-service-title"><?= $service['title'] ?></h3>
                    <p class="dynamic-service-short-description"><?= $service['short_description'] ?></p>
                    <ul class="service-features dynamic-service-features">
                        <?php foreach (array_slice($service['features'], 0, 3) as $feature): ?>
                        <li><i class="fas fa-check"></i> <?= $feature ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="d-flex gap-2">
                        <a href="service-details.php?id=<?= $id ?>" class="btn btn-outline-primary dynamic-service-button">Learn More</a>
                        <button class="btn btn-primary get-quote-btn" data-service="<?= $service['title'] ?>">Get Quote</button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Service Process -->
<section class="service-process py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title dynamic-process-title animate__animated animate__fadeInDown">
                <?= $servicesConfig['services']['process_title'] ?>
            </h2>
            <p class="section-subtitle dynamic-process-subtitle animate__animated animate__fadeIn animate__delay-1s">
                <?= $servicesConfig['services']['process_subtitle'] ?>
            </p>
            <div class="divider mx-auto"></div>
        </div>

        <div class="process-steps dynamic-process-steps">
            <?php foreach ($servicesConfig['design_process'] as $index => $step): ?>
            <div class="process-step animate__animated animate__fadeInUp" style="animation-delay: <?= $index * 0.1 ?>s">
                <div class="step-number dynamic-step-number"><?= $index + 1 ?></div>
                <div class="step-content">
                    <h3 class="dynamic-step-title"><?= $step ?></h3>
                    <p class="dynamic-step-description"><?= $servicesConfig['service_list'][1]['process'][$index] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Quote Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quoteModalLabel">Get a Quote</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="quoteForm">
                    <input type="hidden" id="serviceName" name="service_name">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Project Details</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer-widget.php'); ?>