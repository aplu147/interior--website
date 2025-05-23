<?php 
include 'includes/header.php';
$aboutConfig = include 'includes/about-config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - <?= $aboutConfig['about_content']['title'] ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <style>
    :root {
      --primary: <?= $aboutConfig['styles']['primary_color'] ?>;
      --secondary: <?= $aboutConfig['styles']['secondary_color'] ?>;
      --light: <?= $aboutConfig['styles']['light_color'] ?>;
      --dark: <?= $aboutConfig['styles']['dark_color'] ?>;
      --text: <?= $aboutConfig['styles']['text_color'] ?>;
      --text-light: <?= $aboutConfig['styles']['text_light'] ?>;
    }
    body {
      font-family: 'Poppins', sans-serif;
      color: var(--text);
      line-height: 1.6;
    }
    .about-hero {
      background: linear-gradient(rgba(0, 49, 63, 0.8), url('<?= $aboutConfig['about_content']['hero_image'] ?>');
      background-size: cover;
      background-position: center;
      min-height: 60vh;
      display: flex;
      align-items: center;
      color: white;
      text-align: center;
      padding: 80px 20px;
    }
    .about-section {
      padding: 60px 0;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    /* Add all other CSS styles from previous examples */
  </style>
  <link rel="stylesheet" href="css/about.css">
</head>
<body>
  <nav class="navbar"></nav>
  <div class="navbar-placeholder"></div>

  <main class="about-page">
    <!-- Hero Section -->
    <section class="about-hero">
      <div class="container">
        <h1 class="about-main-title"><?= $aboutConfig['about_content']['title'] ?></h1>
        <div class="about-hero-content">
          <p><?= $aboutConfig['about_content']['home_content'] ?></p>
        </div>
      </div>
    </section>

    <!-- Our Story -->
    <section class="about-section">
      <div class="container">
        <h2 class="section-title">Our Design Journey</h2>
        <div class="about-content">
          <?= $aboutConfig['about_content']['content'] ?>
        </div>
      </div>
    </section>

    <!-- Stats -->
    <?php if ($aboutConfig['settings']['show_stats']): ?>
    <section class="about-stats-section">
      <div class="container">
        <div class="stats-grid">
          <?php foreach ($aboutConfig['about_content']['stats'] as $stat): ?>
          <div class="stat-card">
            <i class="fas <?= $stat['icon'] ?> stat-icon"></i>
            <div class="stat-number" data-count="<?= $stat['value'] ?>">0</div>
            <div class="stat-label"><?= $stat['label'] ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- Values -->
    <?php if ($aboutConfig['settings']['show_values']): ?>
    <section class="about-values-section">
      <div class="container">
        <h2 class="section-title">Our Core Values</h2>
        <p class="section-subtitle"><?= $aboutConfig['team']['subtitle'] ?></p>
        
        <div class="values-grid">
          <?php foreach ($aboutConfig['values'] as $value): ?>
          <div class="value-card">
            <div class="value-icon">
              <i class="fas <?= $value['icon'] ?>"></i>
            </div>
            <h3 class="value-title"><?= $value['title'] ?></h3>
            <p class="value-description"><?= $value['description'] ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- Team -->
    <?php if ($aboutConfig['team']['show_team']): ?>
    <section class="about-team-section">
      <div class="container">
        <h2 class="section-title"><?= $aboutConfig['team']['title'] ?></h2>
        <p class="section-subtitle"><?= $aboutConfig['team']['subtitle'] ?></p>
        
        <div class="team-grid">
          <?php foreach ($aboutConfig['team']['members'] as $member): ?>
          <div class="team-card">
            <div class="team-image">
              <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>">
              <div class="team-social">
                <?php foreach ($member['social'] as $platform => $url): ?>
                <a href="<?= $url ?>" class="social-link">
                  <i class="fab fa-<?= $platform ?>"></i>
                </a>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="team-info">
              <h3 class="team-name"><?= $member['name'] ?></h3>
              <p class="team-position"><?= $member['position'] ?></p>
              <p class="team-bio"><?= $member['bio'] ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- Testimonials -->
    <?php if ($aboutConfig['settings']['show_testimonials']): ?>
    <section class="about-testimonials-section">
      <div class="container">
        <h2 class="section-title">Client Experiences</h2>
        <p class="section-subtitle">What our clients say about us</p>
        
        <div class="testimonials-slider">
          <?php foreach ($aboutConfig['testimonials'] as $testimonial): ?>
          <div class="testimonial">
            <div class="testimonial-content">
              <p class="testimonial-text">"<?= $testimonial['text'] ?>"</p>
            </div>
            <div class="testimonial-author">
              <img src="<?= $testimonial['image'] ?>" alt="<?= $testimonial['author'] ?>" class="author-image">
              <div class="author-info">
                <h4 class="author-name"><?= $testimonial['author'] ?></h4>
                <p class="author-role"><?= $testimonial['role'] ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>
  </main>

  <?php include('includes/footer-widget.php'); ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <script>
    // Counter Animation
    $(document).ready(function() {
      $('.stat-number').each(function() {
        $(this).prop('Counter', 0).animate({
          Counter: $(this).data('count')
        }, {
          duration: 2000,
          easing: 'swing',
          step: function(now) {
            $(this).text(Math.ceil(now));
          }
        });
      });

      // Testimonial Slider
      $('.testimonials-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
      });
    });
  </script>
</body>
</html>