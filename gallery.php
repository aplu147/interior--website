<?php include 'includes/header.php'; ?>

<!-- Gallery Section -->
<section class="gallery-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="dynamic-gallery-title">Our Interior Design Gallery</h2>
            <p class="dynamic-gallery-description">Explore our portfolio of completed projects</p>
        </div>

        <!-- Gallery Filter -->
        <div class="gallery-filter mb-4">
            <div class="filter-nav">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="residential">Residential</button>
                <button class="filter-btn" data-filter="commercial">Commercial</button>
                <button class="filter-btn" data-filter="hospitality">Hospitality</button>
                <button class="filter-btn" data-filter="office">Office Spaces</button>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid">
		<div class="grid-sizer"></div>
           <!-- Residential Projects -->
            <div class="gallery-item residential" data-category="residential">
                <div class="gallery-card">
                    <img src="images/gallery/residential-1.jpg" alt="Modern apartment design" class="gallery-image">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h3>Modern Apartment</h3>
                            <p>Residential Design</p>
                        </div>
                    </div>
                </div>
            </div>
			<!-- Commercial Projects -->
	<div class="gallery-item commercial" data-category="commercial">
		<div class="gallery-card">
			<img src="images/gallery/commercial-1.jpg" alt="Retail store design" class="gallery-image">
				<div class="gallery-overlay">
				<div class="gallery-info">
                <h3>Retail Space</h3>
                <p>Commercial Design</p>
            </div>
        </div>
    </div>
</div>

<div class="gallery-item commercial" data-category="commercial">
    <div class="gallery-card">
        <img src="images/gallery/commercial-2.jpg" alt="Restaurant interior" class="gallery-image">
        <div class="gallery-overlay">
            <div class="gallery-info">
                <h3>Upscale Restaurant</h3>
                <p>Commercial Design</p>
            </div>
        </div>
    </div>
</div>

<!-- Hospitality Projects -->
<div class="gallery-item hospitality" data-category="hospitality">
    <div class="gallery-card">
        <img src="images/gallery/hotel-1.jpg" alt="Hotel lobby design" class="gallery-image">
        <div class="gallery-overlay">
            <div class="gallery-info">
                <h3>Boutique Hotel</h3>
                <p>Hospitality Design</p>
            </div>
        </div>
    </div>
</div>

<div class="gallery-item hospitality" data-category="hospitality">
    <div class="gallery-card">
        <img src="images/gallery/hotel-2.jpg" alt="Resort interior" class="gallery-image">
        <div class="gallery-overlay">
            <div class="gallery-info">
                <h3>Luxury Resort</h3>
                <p>Hospitality Design</p>
            </div>
        </div>
    </div>
</div>

<!-- Office Projects -->
<div class="gallery-item office" data-category="office">
    <div class="gallery-card">
        <img src="images/gallery/office-1.jpg" alt="Corporate office design" class="gallery-image">
        <div class="gallery-overlay">
            <div class="gallery-info">
                <h3>Corporate Office</h3>
                <p>Office Space</p>
            </div>
        </div>
    </div>
</div>

<div class="gallery-item office" data-category="office">
    <div class="gallery-card">
        <img src="images/gallery/office-2.jpg" alt="Co-working space" class="gallery-image">
        <div class="gallery-overlay">
            <div class="gallery-info">
                <h3>Co-Working Space</h3>
                <p>Office Space</p>
            </div>
        </div>
    </div>
</div>

<!-- Additional Residential -->
<div class="gallery-item residential" data-category="residential">
    <div class="gallery-card">
        <img src="images/gallery/residential-3.jpg" alt="Minimalist home design" class="gallery-image">
        <div class="gallery-overlay">
            <div class="gallery-info">
                <h3>Minimalist Home</h3>
                <p>Residential Design</p>
            </div>
        </div>
    </div>
</div>

<!-- Additional Commercial -->
<div class="gallery-item commercial" data-category="commercial">
    <div class="gallery-card">
        <img src="images/gallery/commercial-3.jpg" alt="Showroom design" class="gallery-image">
        <div class="gallery-overlay">
            <div class="gallery-info">
                <h3>Automotive Showroom</h3>
                <p>Commercial Design</p>
            </div>
        </div>
    </div>
</div>
            
            <!-- Add all your gallery items here following the same structure -->
            
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="gallery-lightbox" class="lightbox">
    <span class="close-btn">&times;</span>
    <div class="lightbox-content">
		<div class="lightbox-image-container">
			<img id="lightbox-image" src="" alt="" class="lightbox-img">
		</div>
		<div class="lightbox-caption glass">
            <h3 id="lightbox-title" class="lightbox-text"></h3>
            <p id="lightbox-category" class="lightbox-subtext"></p>
        </div>
        <span class="nav-btn prev-btn">&#10094;</span>
        <span class="nav-btn next-btn">&#10095;</span>
    </div>
</div>

<?php include('includes/footer-widget.php'); ?>

<!-- Add these right before </body> -->
<link rel="stylesheet" href="css/gallery.css">
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="js/gallery.js"></script>


