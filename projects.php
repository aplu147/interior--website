<?php 
include 'includes/header.php';
include 'includes/projects-data.php';
?>

<link rel="stylesheet" href="css/modern-projects.css">
<nav class="navbar">
    </nav>
<div class="navbar-placeholder"></div>
<main class="main-content">
    </main>

<section class="mp-container">
    <!-- Filter and Sort Controls -->
    <div class="mp-controls">
        <div class="mp-filter-group">
            <button class="mp-filter-btn active" data-filter="all">All Projects</button>
            <button class="mp-filter-btn" data-filter="residential">Residential</button>
            <button class="mp-filter-btn" data-filter="commercial">Commercial</button>
            <button class="mp-filter-btn" data-filter="interior">Interior</button>
            <button class="mp-filter-btn" data-filter="hospitality">Hospitality</button>
        </div>
        <div class="mp-sort-group">
            <button class="mp-sort-btn active" data-sort="newest">Newest First</button>
            <button class="mp-sort-btn" data-sort="oldest">Oldest First</button>
        </div>
    </div>

    <!-- Projects Grid -->
    <div class="mp-grid">
        <?php foreach ($projects as $id => $project): ?>
        <div class="mp-card" 
             data-categories="<?= implode(' ', $project['category']) ?>" 
             data-year="<?= $project['year'] ?>">
            <div class="mp-card-img-container">
                <img src="<?= $project['images']['main'] ?>" alt="<?= $project['title'] ?>" class="mp-card-img">
                <?php if ($project['badge']): ?>
                <span class="mp-card-badge"><?= $project['badge'] ?></span>
                <?php endif; ?>
            </div>
            <div class="mp-card-content">
                <h3 class="mp-card-title"><?= $project['title'] ?></h3>
                <div class="mp-card-meta">
                    <span class="mp-card-location"><i class="fas fa-map-marker-alt"></i> <?= $project['location'] ?></span>
                    <span class="mp-card-size"><i class="fas fa-ruler-combined"></i> <?= $project['size'] ?></span>
                </div>
                <p class="mp-card-desc"><?= $project['short_description'] ?></p>
                <div class="mp-card-footer">
                    <span class="mp-card-year"><?= $project['year'] ?></span>
                    <a href="project-details.php?id=<?= $id ?>" class="mp-card-btn">
                        View Project <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<script src="js/modern-projects.js"></script>

<?php include('includes/footer-widget.php'); ?>