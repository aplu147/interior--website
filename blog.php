<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="blog-hero bg-light py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">Design Insights & Inspiration</h1>
        <p class="lead">Discover the latest trends, tips and stories from our interior design experts</p>
    </div>
</section>

<!-- Featured Posts Section -->
<section class="py-5">
    <div class="container">
        <div class="section-title text-center mb-5">
            <span class="text-primary">Featured Articles</span>
            <h2 class="mb-3">Trending Design Stories</h2>
            <p class="lead">Our most popular articles selected by our editors</p>
        </div>
        
        <div class="row g-4">
            <!-- Featured Post 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="featured-post-card card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Modern living room design trends" 
                             class="card-img-top">
                        <div class="badge-overlay">
                            <span class="badge bg-primary">Featured</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="post-meta mb-3">
                            <span class="text-primary"><i class="bi bi-person-fill me-1"></i> Sarah Johnson</span>
                            <span class="text-muted ms-3"><i class="bi bi-calendar-fill me-1"></i> May 15, 2023</span>
                        </div>
                        <h3 class="h5"><a href="blog-details.php?id=1&layout=standard" class="text-dark">Modern Living Room Design Trends for 2023</a></h3>
                        <p class="card-text">Discover the top living room design trends that will dominate this year...</p>
                        <div class="tags mb-3">
                            <span class="badge bg-light text-dark">Living Room</span>
                            <span class="badge bg-light text-dark">Trends</span>
                        </div>
                        <a href="blog-details.php?id=1&layout=standard" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
            
            <!-- Featured Post 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="featured-post-card card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Small space interior solutions" 
                             class="card-img-top">
                        <div class="badge-overlay">
                            <span class="badge bg-primary">Popular</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="post-meta mb-3">
                            <span class="text-primary"><i class="bi bi-person-fill me-1"></i> Michael Chen</span>
                            <span class="text-muted ms-3"><i class="bi bi-calendar-fill me-1"></i> April 28, 2023</span>
                        </div>
                        <h3 class="h5"><a href="blog-details.php?id=2&layout=gallery" class="text-dark">Kitchen Renovation Journey</a></h3>
                        <p class="card-text">A visual journey through our 6-week kitchen transformation...</p>
                        <div class="tags mb-3">
                            <span class="badge bg-light text-dark">Kitchen</span>
                            <span class="badge bg-light text-dark">Renovation</span>
                        </div>
                        <a href="blog-details.php?id=2&layout=gallery" class="btn btn-sm btn-outline-primary">View Gallery</a>
                    </div>
                </div>
            </div>
            
            <!-- Featured Post 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="featured-post-card card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                             alt="Eco-friendly materials guide" 
                             class="card-img-top">
                        <div class="badge-overlay">
                            <span class="badge bg-primary">Editor's Pick</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="post-meta mb-3">
                            <span class="text-primary"><i class="bi bi-person-fill me-1"></i> Emma Wilson</span>
                            <span class="text-muted ms-3"><i class="bi bi-calendar-fill me-1"></i> April 10, 2023</span>
                        </div>
                        <h3 class="h5"><a href="blog-details.php?id=3&layout=comparison" class="text-dark">Bathroom Transformation Story</a></h3>
                        <p class="card-text">See how we turned this cramped 1980s bathroom into a spa-like retreat...</p>
                        <div class="tags mb-3">
                            <span class="badge bg-light text-dark">Bathroom</span>
                            <span class="badge bg-light text-dark">Makeover</span>
                        </div>
                        <a href="blog-details.php?id=3&layout=comparison" class="btn btn-sm btn-outline-primary">See Transformation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Blog Posts Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="section-title mb-5">
            <h2 class="mb-3">Latest Articles</h2>
            <p>Fresh design ideas and inspiration for your home</p>
        </div>
        
        <div class="row g-4">
            <!-- Blog Post 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-post-card card border-0 shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Color psychology in interior design" 
                         class="card-img-top">
                    <div class="card-body">
                        <div class="post-meta mb-2">
                            <span class="text-primary"><i class="bi bi-person-fill me-1"></i> Jessica Lee</span>
                            <span class="text-muted ms-3"><i class="bi bi-calendar-fill me-1"></i> May 5, 2023</span>
                        </div>
                        <h3 class="h5"><a href="blog-details.php?id=4&layout=standard" class="text-dark">The Psychology of Color in Interior Design</a></h3>
                        <p class="card-text">How different colors affect mood and perception in your living spaces...</p>
                        <div class="tags mb-3">
                            <span class="badge bg-light text-dark">Color Theory</span>
                            <span class="badge bg-light text-dark">Psychology</span>
                        </div>
                        <a href="blog-details.php?id=4&layout=standard" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-post-card card border-0 shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1617806118233-18e1de247200?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Minimalist bedroom design tips" 
                         class="card-img-top">
                    <div class="card-body">
                        <div class="post-meta mb-2">
                            <span class="text-primary"><i class="bi bi-person-fill me-1"></i> David Kim</span>
                            <span class="text-muted ms-3"><i class="bi bi-calendar-fill me-1"></i> April 22, 2023</span>
                        </div>
                        <h3 class="h5"><a href="blog-details.php?id=5&layout=steps" class="text-dark">DIY Accent Wall Guide</a></h3>
                        <p class="card-text">Step-by-step instructions for creating a beautiful wood slat accent wall...</p>
                        <div class="tags mb-3">
                            <span class="badge bg-light text-dark">DIY</span>
                            <span class="badge bg-light text-dark">Tutorial</span>
                        </div>
                        <a href="blog-details.php?id=5&layout=steps" class="btn btn-sm btn-outline-primary">View Guide</a>
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-post-card card border-0 shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Vintage modern fusion decor" 
                         class="card-img-top">
                    <div class="card-body">
                        <div class="post-meta mb-2">
                            <span class="text-primary"><i class="bi bi-person-fill me-1"></i> Olivia Martinez</span>
                            <span class="text-muted ms-3"><i class="bi bi-calendar-fill me-1"></i> April 15, 2023</span>
                        </div>
                        <h3 class="h5"><a href="blog-details.php?id=6&layout=standard" class="text-dark">Sustainable Materials for Modern Homes</a></h3>
                        <p class="card-text">Eco-friendly material options that don't compromise on style or durability...</p>
                        <div class="tags mb-3">
                            <span class="badge bg-light text-dark">Sustainability</span>
                            <span class="badge bg-light text-dark">Materials</span>
                        </div>
                        <a href="blog-details.php?id=6&layout=standard" class="btn btn-sm btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <nav aria-label="Blog pagination" class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><span class="page-link">Previous</span></li>
                <li class="page-item active"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</section>

<!-- Create Blog CTA -->
<section class="py-5 bg-white">
    <div class="container text-center">
        <h2 class="mb-4">Share Your Design Story</h2>
        <p class="lead mb-4">Have a project or design tip to share? Contribute to our blog community!</p>
        <a href="create-blog.php" class="btn btn-primary btn-lg px-4">
            <i class="bi bi-pencil-fill me-2"></i> Create Your Article
        </a>
    </div>
</section>

<?php include('includes/footer-widget.php'); ?>


<!-- Comparison Slider JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Simple comparison slider functionality
    const slider = document.querySelector('.comparison-slider');
    if (slider) {
        const handle = slider.querySelector('.slider-handle');
        const beforeImg = slider.querySelector('.position-absolute');
        let isDragging = false;
        
        function moveSlider(e) {
            if (!isDragging) return;
            
            const rect = slider.getBoundingClientRect();
            let x = e.clientX - rect.left;
            x = Math.max(0, Math.min(x, rect.width));
            
            const percent = (x / rect.width) * 100;
            beforeImg.style.clipPath = `inset(0 0 0 ${percent}%)`;
            handle.style.left = `${percent}%`;
        }
        
        handle.addEventListener('mousedown', () => {
            isDragging = true;
        });
        
        document.addEventListener('mousemove', moveSlider);
        
        document.addEventListener('mouseup', () => {
            isDragging = false;
        });
        
        // Touch support
        handle.addEventListener('touchstart', () => {
            isDragging = true;
        });
        
        document.addEventListener('touchmove', (e) => {
            moveSlider(e.touches[0]);
        });
        
        document.addEventListener('touchend', () => {
            isDragging = false;
        });
    }
});
</script>