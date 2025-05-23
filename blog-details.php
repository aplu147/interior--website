<?php 
include 'includes/header.php';

// Get parameters from URL
$layout = $_GET['layout'] ?? 'standard';
$blog_id = $_GET['id'] ?? 1;

// Sample data - in real app this would come from database
$blog_posts = [
    1 => [
        'layout' => 'standard',
        'title' => "Modern Living Room Makeover",
        'author' => "Sarah Johnson",
        'date' => "May 15, 2023",
        'image' => "https://images.unsplash.com/photo-1616486338812-3dadae4b4ace",
        'content' => "<p>This complete living room transformation took 6 weeks from concept to completion. We started by...</p>
                      <h3>Color Palette Selection</h3>
                      <p>Choosing the right neutral tones was crucial for this space...</p>
                      <img src='https://images.unsplash.com/photo-1616486338812-3dadae4b4ace' alt='Living room color palette' class='img-fluid my-4'>
                      <h3>Furniture Arrangement</h3>
                      <p>The sectional was positioned to maximize both conversation areas and TV viewing...</p>",
        'tags' => ["Living Room", "Modern", "Makeover"]
    ],
    2 => [
        'layout' => 'gallery',
        'title' => "Kitchen Renovation Journey",
        'author' => "Michael Chen",
        'date' => "April 28, 2023",
        'gallery_images' => [
            ["url" => "https://images.unsplash.com/photo-1600585152220-90363fe7e115", "caption" => "Original kitchen before renovation"],
            ["url" => "https://images.unsplash.com/photo-1600210492493-0946911123ea", "caption" => "Demolition phase"],
            ["url" => "https://images.unsplash.com/photo-1556911220-bff31c812dba", "caption" => "Custom cabinet installation"],
            ["url" => "https://images.unsplash.com/photo-1600566752355-35792bedcfea", "caption" => "Finished kitchen with quartz counters"]
        ],
        'content' => "<p>This kitchen renovation was completed in 8 weeks with custom cabinetry and...</p>",
        'tags' => ["Kitchen", "Renovation", "Process"]
    ],
    3 => [
        'layout' => 'comparison',
        'title' => "Bathroom Transformation",
        'author' => "Emma Wilson",
        'date' => "April 10, 2023",
        'before_image' => "https://images.unsplash.com/photo-1630569267625-157d7f7e1e09",
        'after_image' => "https://images.unsplash.com/photo-1600607687920-4e2a09cf159d",
        'content' => "<p>We transformed this outdated 1980s bathroom into a modern spa retreat by...</p>
                      <h3>Challenges</h3>
                      <p>The small 5'x8' footprint required creative solutions...</p>
                      <h3>Solutions</h3>
                      <p>We used large-format tiles to create the illusion of space...</p>",
        'tags' => ["Bathroom", "Transformation", "Small Space"]
    ],
    4 => [
        'layout' => 'steps',
        'title' => "DIY Accent Wall Guide",
        'author' => "David Kim",
        'date' => "March 22, 2023",
        'steps' => [
            [
                "title" => "Plan Your Design",
                "image" => "https://images.unsplash.com/photo-1618221195710-dd6b41faaea6",
                "content" => "Measure your wall and sketch your pattern. We chose a vertical slat design with 2-inch gaps between boards."
            ],
            [
                "title" => "Prepare the Surface",
                "image" => "",
                "content" => "Clean and prime the wall for optimal adhesion. Remove any outlet covers or wall fixtures."
            ],
            [
                "title" => "Install Wood Paneling",
                "image" => "https://images.unsplash.com/photo-1617806118233-18e1de247200",
                "content" => "Cut and attach wood slats following your design. We used 1x4 pine boards stained in walnut."
            ]
        ],
        'intro' => "This weekend project can dramatically transform any room with minimal tools required.",
        'tags' => ["DIY", "Tutorial", "Woodwork"]
    ]
];

// Get current post data
$post = $blog_posts[$blog_id] ?? $blog_posts[1];
?>

<!-- Blog Header Section -->
<section class="blog-header py-4 bg-light">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($post['title']) ?></li>
            </ol>
        </nav>
    </div>
</section>

<!-- Main Blog Content -->
<section class="blog-content py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article>
                    <!-- Layout Badge -->
                    <div class="mb-4">
                        <?php if($post['layout'] == 'standard'): ?>
                            <span class="badge bg-primary">Standard Article</span>
                        <?php elseif($post['layout'] == 'gallery'): ?>
                            <span class="badge bg-success">Gallery Layout</span>
                        <?php elseif($post['layout'] == 'comparison'): ?>
                            <span class="badge bg-warning text-dark">Before/After</span>
                        <?php else: ?>
                            <span class="badge bg-info">Step-by-Step</span>
                        <?php endif; ?>
                    </div>
                    
                    <h1 class="mb-3"><?= htmlspecialchars($post['title']) ?></h1>
                    
                    <div class="d-flex gap-3 mb-4 text-muted">
                        <span><i class="bi bi-person"></i> <?= htmlspecialchars($post['author']) ?></span>
                        <span><i class="bi bi-calendar"></i> <?= htmlspecialchars($post['date']) ?></span>
                    </div>
                    
                    <!-- Standard Layout Content -->
                    <?php if($post['layout'] == 'standard'): ?>
                        <img src="<?= htmlspecialchars($post['image']) ?>?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" 
                             alt="<?= htmlspecialchars($post['title']) ?>" 
                             class="img-fluid rounded mb-4">
                        <div class="blog-post-content">
                            <?= $post['content'] ?>
                        </div>
                    
                    <!-- Gallery Layout Content -->
                    <?php elseif($post['layout'] == 'gallery'): ?>
                        <div class="gallery-container mb-5">
                            <div class="row g-3">
                                <?php foreach($post['gallery_images'] as $image): ?>
                                    <div class="col-md-6">
                                        <a href="<?= htmlspecialchars($image['url']) ?>?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" 
                                           data-lightbox="blog-gallery" 
                                           data-title="<?= htmlspecialchars($image['caption']) ?>">
                                            <img src="<?= htmlspecialchars($image['url']) ?>?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" 
                                                 alt="<?= htmlspecialchars($image['caption']) ?>" 
                                                 class="img-fluid rounded shadow-sm">
                                        </a>
                                        <p class="text-muted small mt-2"><?= htmlspecialchars($image['caption']) ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="gallery-description">
                            <?= $post['content'] ?>
                        </div>
                    
                    <!-- Before/After Layout Content -->
                    <?php elseif($post['layout'] == 'comparison'): ?>
                        <div class="comparison-container mb-5">
                            <div class="position-relative" id="comparison-slider">
                                <img src="<?= htmlspecialchars($post['before_image']) ?>?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" 
                                     alt="Before renovation" 
                                     class="img-fluid rounded">
                                <img src="<?= htmlspecialchars($post['after_image']) ?>?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" 
                                     alt="After renovation" 
                                     class="img-fluid rounded position-absolute top-0 start-0 w-50" 
                                     style="clip-path: inset(0 0 0 50%)">
                                <div class="slider-handle"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <small class="text-muted">Before</small>
                                <small class="text-muted">After</small>
                            </div>
                        </div>
                        <div class="transformation-story">
                            <?= $post['content'] ?>
                        </div>
                    
                    <!-- Step-by-Step Layout Content -->
                    <?php else: ?>
                        <div class="steps-intro mb-4">
                            <p class="lead"><?= htmlspecialchars($post['intro']) ?></p>
                        </div>
                        <div class="steps-container">
                            <?php foreach($post['steps'] as $index => $step): ?>
                                <div class="step-item mb-5">
                                    <div class="d-flex align-items-start">
                                        <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:36px;height:36px">
                                            <?= $index + 1 ?>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3 class="h5"><?= htmlspecialchars($step['title']) ?></h3>
                                            <?php if(!empty($step['image'])): ?>
                                                <img src="<?= htmlspecialchars($step['image']) ?>?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                                     alt="Step <?= $index + 1 ?>: <?= htmlspecialchars($step['title']) ?>" 
                                                     class="img-fluid rounded my-3">
                                            <?php endif; ?>
                                            <p><?= htmlspecialchars($step['content']) ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Tags -->
                    <div class="tags mb-5">
                        <?php foreach($post['tags'] as $tag): ?>
                            <a href="blog.php?tag=<?= urlencode(strtolower($tag)) ?>" class="badge bg-light text-dark me-1"><?= htmlspecialchars($tag) ?></a>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Author Bio -->
                    <div class="author-card bg-light p-4 rounded mb-5">
                        <div class="row align-items-center">
                            <div class="col-md-2 text-center">
                                <img src="https://i.pravatar.cc/150?img=<?= rand(1, 70) ?>" alt="<?= htmlspecialchars($post['author']) ?>" class="img-fluid rounded-circle" width="80">
                            </div>
                            <div class="col-md-10">
                                <h4 class="mb-1"><?= htmlspecialchars($post['author']) ?></h4>
                                <p class="text-muted mb-2">Interior Design Specialist</p>
                                <p class="mb-0"><?= htmlspecialchars($post['author']) ?> has been transforming spaces for over 10 years, with expertise in residential makeovers and space optimization.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Comments Section -->
                    <div class="comments-section border-top pt-4">
                        <h3 class="mb-4">Comments (3)</h3>
                        
                        <div class="comment-list mb-5">
                            <div class="comment mb-4">
                                <div class="d-flex">
                                    <img src="https://i.pravatar.cc/60?img=<?= rand(1, 70) ?>" alt="User avatar" class="rounded-circle me-3" width="60">
                                    <div>
                                        <h5 class="mb-1">Robert Smith</h5>
                                        <div class="text-muted small mb-2">May 18, 2023</div>
                                        <p>This transformation is incredible! How did you decide on the color palette?</p>
                                        <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <form class="comment-form">
                            <h4 class="mb-3">Leave a Comment</h4>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Share your thoughts..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Post Comment</button>
                        </form>
                    </div>
                </article>
            </div>
            
            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="blog-sidebar ps-lg-4">
                    <div class="widget mb-4">
                        <h5 class="widget-title">Related Articles</h5>
                        <div class="related-post mb-3">
                            <a href="blog-details.php?layout=standard&id=1" class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" 
                                     alt="Related post" 
                                     class="rounded me-3" 
                                     width="60">
                                <div>
                                    <h6 class="mb-0">Living Room Makeovers</h6>
                                    <small class="text-muted">May 15, 2023</small>
                                </div>
                            </a>
                        </div>
                        <div class="related-post">
                            <a href="blog-details.php?layout=steps&id=4" class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" 
                                     alt="Related post" 
                                     class="rounded me-3" 
                                     width="60">
                                <div>
                                    <h6 class="mb-0">More DIY Projects</h6>
                                    <small class="text-muted">March 22, 2023</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="widget">
                        <h5 class="widget-title">Categories</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="blog.php?category=living-room">Living Room</a></li>
                            <li class="mb-2"><a href="blog.php?category=kitchen">Kitchen</a></li>
                            <li class="mb-2"><a href="blog.php?category=bathroom">Bathroom</a></li>
                            <li class="mb-2"><a href="blog.php?category=diy">DIY Projects</a></li>
                            <li><a href="blog.php?category=office">Home Office</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Custom Styles for Blog Details -->
<style>
    /* Blog Content Styles */
    .blog-post-content h2,
    .blog-post-content h3,
    .blog-post-content h4 {
        margin-top: 2rem;
        margin-bottom: 1rem;
    }
    
    .blog-post-content img {
        max-width: 100%;
        height: auto;
        border-radius: 0.5rem;
        margin: 1.5rem 0;
    }
    
    /* Comparison Slider */
    #comparison-slider {
        position: relative;
        overflow: hidden;
        border-radius: 0.5rem;
    }
    
    #comparison-slider .position-absolute {
        height: 100%;
        object-fit: cover;
    }
    
    .slider-handle {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 4px;
        background: white;
        cursor: ew-resize;
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        transform: translateX(-50%);
        z-index: 10;
    }
    
    .slider-handle::after {
        content: '';
        position: absolute;
        width: 30px;
        height: 30px;
        background: white;
        border-radius: 50%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        box-shadow: 0 0 5px rgba(0,0,0,0.3);
    }
    
    /* Steps Container */
    .steps-container {
        border-left: 3px solid #f1f1f1;
        padding-left: 1.5rem;
    }
    
    .step-item {
        position: relative;
        padding-bottom: 2rem;
    }
    
    .step-item:last-child {
        padding-bottom: 0;
    }
    
    .step-item::before {
        content: '';
        position: absolute;
        left: -1.65rem;
        top: 0;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #0d6efd;
        border: 3px solid white;
    }
    
    /* Author Card */
    .author-card {
        border-left: 4px solid #0d6efd;
    }
    
    /* Comments */
    .comment {
        padding-bottom: 1.5rem;
        border-bottom: 1px solid #eee;
    }
</style>

<!-- JavaScript for Interactive Elements -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Comparison Slider
    const slider = document.getElementById('comparison-slider');
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
            document.body.style.cursor = 'ew-resize';
        });
        
        document.addEventListener('mousemove', moveSlider);
        
        document.addEventListener('mouseup', () => {
            isDragging = false;
            document.body.style.cursor = '';
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
    
    // Initialize lightbox if available
    if (typeof lightbox !== 'undefined') {
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });
    }
});
</script>