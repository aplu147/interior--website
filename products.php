<?php include 'includes/header.php'; ?>
<?php $productsConfig = include 'includes/products-config.php'; ?>

<!-- Hero Section -->
<section class="ic-home-hero">
  <div class="ic-hero-media">
    <div class="ic-hero-media">
      <video class="ic-hero-video" autoplay muted loop playsinline>
        <source src="assets/video/hero-loop.mp4" type="video/mp4">
      </video>
      <div class="ic-hero-video-overlay"></div>
    </div>
  </div>
  <div class="ic-hero-content">
    <img 
      src="assets/img/interia-logo-3d.png" 
      alt="INTERIA DECOR - Luxury Interior Design" 
      class="ic-hero-logo"
      width="300" 
      height="auto"
    >
    <h1 class="ic-hero-title">Crafting Timeless Interiors</h1>
    <p class="ic-hero-subtitle">Where Elegance Meets Innovation</p>
    <a href="/projects" class="ic-hero-btn">Explore Our Masterpieces</a>
  </div>
  <div class="ic-scroll-hint">
    <span class="ic-scroll-text">Scroll</span>
    <div class="ic-scroll-line"></div>
  </div>
</section>

<!-- Unique Products Section -->
<section class="ic-products-section py-5">
  <div class="container-fluid px-lg-5">
    <div class="row">
      <!-- Filter Sidebar -->
      <div class="col-lg-3 col-xxl-2 d-none d-lg-block">
        <div class="ic-filter-sidebar">
          <!-- Mobile Filter Toggle (hidden on desktop) -->
          <button class="btn btn-dark w-100 d-lg-none mb-4 ic-filter-toggle">
            <i class="fas fa-filter me-2"></i> Filters
          </button>
          
          <!-- Filter Content -->
          <div class="ic-filter-content">
            <!-- Categories -->
            <div class="ic-filter-group">
              <h5 class="ic-filter-title">Categories</h5>
              <div class="ic-filter-options">
                <button class="ic-filter-btn active" data-category="all">All Categories</button>
                <?php 
                $categories = array_unique(array_column($productsConfig['products'], 'category'));
                foreach($categories as $category): 
                  $categoryClass = strtolower(str_replace(' ', '-', $category));
                ?>
                <button class="ic-filter-btn" data-category="<?= $categoryClass ?>">
                  <?= htmlspecialchars($category) ?>
                </button>
                <?php endforeach; ?>
              </div>
            </div>
            
            <!-- Price Range -->
            <div class="ic-filter-group">
              <h5 class="ic-filter-title">Price Range</h5>
              <div class="ic-price-slider-container">
                <div id="ic-price-slider" class="mb-3"></div>
                <div class="d-flex justify-content-between">
                  <span id="ic-price-min">$0</span>
                  <span id="ic-price-max">$<?= max(array_column($productsConfig['products'], 'price')) ?></span>
                </div>
              </div>
            </div>
            
            <!-- Rating -->
            <div class="ic-filter-group">
              <h5 class="ic-filter-title">Rating</h5>
              <div class="ic-filter-options">
                <button class="ic-rating-filter" data-rating="4">
                  <div class="ic-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span>& Up</span>
                  </div>
                </button>
                <button class="ic-rating-filter" data-rating="3">
                  <div class="ic-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <span>& Up</span>
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Products Grid -->
      <div class="col-lg-9 col-xxl-10">
        <!-- Products Header -->
        <div class="ic-products-header mb-4">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h1 class="ic-products-title">Our Collection</h1>
              <p class="ic-products-subtitle"><?= count($productsConfig['products']) ?> premium designs available</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end align-items-center">
                <!-- Grid Options -->
                <div class="ic-grid-options me-3">
                  <button class="ic-grid-option active" data-cols="3" title="3 Columns">
                    <i class="fas fa-th-large"></i>
                  </button>
                  <button class="ic-grid-option" data-cols="2" title="2 Columns">
                    <i class="fas fa-th"></i>
                  </button>
                  <button class="ic-grid-option" data-cols="1" title="List View">
                    <i class="fas fa-list"></i>
                  </button>
                </div>
                
                <!-- Sort Dropdown -->
                <div class="dropdown">
                  <button class="btn btn-outline-dark dropdown-toggle" type="button" id="ic-sort-dropdown" data-bs-toggle="dropdown">
                    <i class="fas fa-sort me-1"></i> Sort By
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#" data-sort="default">Default</a></li>
                    <li><a class="dropdown-item" href="#" data-sort="price-low">Price: Low to High</a></li>
                    <li><a class="dropdown-item" href="#" data-sort="price-high">Price: High to Low</a></li>
                    <li><a class="dropdown-item" href="#" data-sort="rating">Top Rated</a></li>
                    <li><a class="dropdown-item" href="#" data-sort="newest">Newest</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Products Grid -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ic-products-grid">
          <?php foreach ($productsConfig['products'] as $id => $product): 
            $categoryClass = strtolower(str_replace(' ', '-', $product['category']));
          ?>
          <div class="col ic-product-item" 
               data-category="<?= $categoryClass ?>" 
               data-price="<?= $product['price'] ?>" 
               data-rating="<?= $product['rating'] ?>"
               data-date="<?= $product['date_added'] ?? '2023-01-01' ?>">
            <div class="ic-product-card">
              <!-- Product Image -->
              <div class="ic-product-image">
                <img src="<?= $product['images'][0] ?>" 
                     class="img-fluid" 
                     alt="<?= htmlspecialchars($product['name']) ?>"
                     loading="lazy">
                <div class="ic-product-badge">
                  <?php if(isset($product['old_price'])): ?>
                  <span class="ic-sale-badge">Sale</span>
                  <?php endif; ?>
                  <?php if($product['rating'] >= 4.5): ?>
                  <span class="ic-rating-badge">Top Rated</span>
                  <?php endif; ?>
                </div>
                <div class="ic-product-actions">
                  <button class="ic-quick-view" data-id="<?= $id ?>">
                    <i class="fas fa-eye"></i> Quick View
                  </button>
                  <?php if ($productsConfig['show_cart']): ?>
                  <button class="ic-add-to-cart snipcart-add-item"
                    data-item-id="<?= $id ?>"
                    data-item-name="<?= htmlspecialchars($product['name']) ?>"
                    data-item-price="<?= $product['price'] ?>"
                    data-item-url="/product-details.php?id=<?= $id ?>"
                    data-item-image="<?= $product['images'][0] ?>">
                    <i class="fas fa-shopping-cart"></i> Add to Cart
                  </button>
                  <?php endif; ?>
                </div>
              </div>
              
              <!-- Product Info -->
              <div class="ic-product-info">
                <span class="ic-product-category"><?= htmlspecialchars($product['category']) ?></span>
                <h3 class="ic-product-title">
                  <a href="product-details.php?id=<?= $id ?>"><?= htmlspecialchars($product['name']) ?></a>
                </h3>
                <div class="ic-product-rating">
                  <?php for ($i = 1; $i <= 5; $i++): ?>
                    <i class="<?= $i <= $product['rating'] ? 'fas' : 'far' ?> fa-star"></i>
                  <?php endfor; ?>
                  <span>(<?= $product['review_count'] ?>)</span>
                </div>
                <div class="ic-product-price">
                  <span class="ic-current-price"><?= $productsConfig['currency'] ?><?= number_format($product['price'], 2) ?></span>
                  <?php if(isset($product['old_price'])): ?>
                  <span class="ic-old-price"><?= $productsConfig['currency'] ?><?= number_format($product['old_price'], 2) ?></span>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        
        <!-- No Results Message (hidden by default) -->
        <div class="ic-no-results text-center py-5" style="display: none;">
          <i class="fas fa-search fa-3x mb-3"></i>
          <h4>No products found</h4>
          <p>Try adjusting your filters to find what you're looking for</p>
          <button class="btn btn-dark ic-reset-filters">Reset All Filters</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Quick View Modal -->
<div class="modal fade" id="ic-quick-view-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <!-- Content will be loaded via AJAX -->
    </div>
  </div>
</div>

<?php include 'includes/footer-widget.php'; ?>