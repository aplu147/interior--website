<?php include 'includes/header.php'; ?>

<!-- Blog Hero Section -->
<section class="blog-hero bg-light py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">Design Inspiration Gallery</h1>
        <p class="lead">Explore different ways to showcase interior design stories</p>
        <a href="create-blog.php" class="btn btn-primary btn-lg mt-3">
            <i class="bi bi-plus-circle"></i> Create Your Design Story
        </a>
    </div>
</section>

<!-- Layout Selection Header -->
<section class="layout-selection-header bg-light py-5">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">Create Your Design Story</h1>
        <p class="lead">Choose a layout that best showcases your content</p>
    </div>
</section>

<!-- Layout Options Grid -->
<section class="layout-options py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            
            <!-- Layout 1: Standard Article -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="layout-card card h-100 border-0 shadow-sm" data-layout="standard">
                    <div class="layout-preview">
                        <div class="preview-header"></div>
                        <div class="preview-image"></div>
                        <div class="preview-content">
                            <div class="line"></div>
                            <div class="line short"></div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="mb-1">Standard Article</h5>
                        <p class="text-muted small">Text-focused with featured image</p>
                        <div class="mt-3">
                            <button class="btn btn-sm btn-outline-primary select-layout">Select</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Layout 2: Image Gallery -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="layout-card card h-100 border-0 shadow-sm" data-layout="gallery">
                    <div class="layout-preview">
                        <div class="preview-header"></div>
                        <div class="preview-gallery">
                            <div class="gallery-row">
                                <div class="gallery-item"></div>
                                <div class="gallery-item"></div>
                            </div>
                            <div class="gallery-row">
                                <div class="gallery-item"></div>
                                <div class="gallery-item"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="mb-1">Image Gallery</h5>
                        <p class="text-muted small">Showcase multiple images</p>
                        <div class="mt-3">
                            <button class="btn btn-sm btn-outline-primary select-layout">Select</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Layout 3: Before/After -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="layout-card card h-100 border-0 shadow-sm" data-layout="comparison">
                    <div class="layout-preview">
                        <div class="preview-header"></div>
                        <div class="preview-comparison">
                            <div class="comparison-left"></div>
                            <div class="comparison-divider"></div>
                            <div class="comparison-right"></div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="mb-1">Before/After</h5>
                        <p class="text-muted small">Show transformations</p>
                        <div class="mt-3">
                            <button class="btn btn-sm btn-outline-primary select-layout">Select</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Layout 4: Step-by-Step -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="layout-card card h-100 border-0 shadow-sm" data-layout="steps">
                    <div class="layout-preview">
                        <div class="preview-header"></div>
                        <div class="preview-steps">
                            <div class="step">
                                <span class="step-number">1</span>
                                <div class="step-content"></div>
                            </div>
                            <div class="step">
                                <span class="step-number">2</span>
                                <div class="step-content"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="mb-1">Step-by-Step</h5>
                        <p class="text-muted small">Tutorials and guides</p>
                        <div class="mt-3">
                            <button class="btn btn-sm btn-outline-primary select-layout">Select</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Creation Form (Initially Hidden) -->
<section id="blog-creation-form" class="py-5 bg-light d-none">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white border-0 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">Create Your Article</h4>
                            <span class="badge bg-primary" id="current-layout-badge">Standard Article</span>
                        </div>
                    </div>
                    
                    <div class="card-body p-4">
                        <form id="blog-form">
                            <input type="hidden" name="layout_type" id="layout-type" value="standard">
                            
                            <!-- Common Fields for All Layouts -->
                            <div class="common-fields mb-5">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mb-4">
                                            <label for="blog-title" class="form-label fw-bold">Article Title*</label>
                                            <input type="text" class="form-control form-control-lg" id="blog-title" name="title" required>
                                        </div>
                                        
                                        <div class="mb-4">
                                            <label for="blog-excerpt" class="form-label fw-bold">Short Description*</label>
                                            <textarea class="form-control" id="blog-excerpt" name="excerpt" rows="3" required></textarea>
                                            <div class="form-text">This will appear on blog listing pages</div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="card bg-light border-0 h-100">
                                            <div class="card-body">
                                                <h6 class="mb-3">Article Settings</h6>
                                                
                                                <div class="mb-3">
                                                    <label for="blog-category" class="form-label">Category*</label>
                                                    <select class="form-select" id="blog-category" name="category" required>
                                                        <option value="">Select category</option>
                                                        <option value="living-room">Living Room</option>
                                                        <option value="bedroom">Bedroom</option>
                                                        <option value="kitchen">Kitchen</option>
                                                        <option value="bathroom">Bathroom</option>
                                                        <option value="office">Home Office</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="blog-tags" class="form-label">Tags</label>
                                                    <input type="text" class="form-control" id="blog-tags" name="tags" placeholder="modern, minimal, luxury">
                                                </div>
                                                
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input" type="checkbox" id="featured-post" name="featured">
                                                    <label class="form-check-label" for="featured-post">Featured Post</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Dynamic Fields Based on Layout -->
                            <div class="layout-specific-fields">
                                <!-- Standard Article Fields -->
                                <div class="layout-standard-fields">
                                    <div class="mb-4">
                                        <label for="featured-image" class="form-label fw-bold">Featured Image*</label>
                                        <input type="file" class="form-control" id="featured-image" name="featured_image" accept="image/*" required>
                                        <div class="image-preview mt-3" id="standard-image-preview"></div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="standard-content" class="form-label fw-bold">Article Content*</label>
                                        <textarea class="form-control" id="standard-content" name="content" rows="12" required></textarea>
                                    </div>
                                </div>
                                
                                <!-- Gallery Article Fields (Hidden Initially) -->
                                <div class="layout-gallery-fields d-none">
                                    <div class="mb-4">
                                        <label class="form-label fw-bold">Gallery Images* (4-10 images)</label>
                                        <div class="file-upload-area border rounded p-4 text-center">
                                            <input type="file" id="gallery-images" class="d-none" accept="image/*" multiple>
                                            <label for="gallery-images" class="btn btn-outline-primary">
                                                <i class="bi bi-images me-2"></i> Select Images
                                            </label>
                                            <p class="mt-2 mb-0 text-muted">Drag & drop or click to browse</p>
                                            <div class="gallery-preview mt-3 row g-2" id="gallery-preview"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="gallery-content" class="form-label fw-bold">Gallery Description*</label>
                                        <textarea class="form-control" id="gallery-content" name="gallery_description" rows="6" required></textarea>
                                    </div>
                                </div>
                                
                                <!-- Before/After Fields (Hidden Initially) -->
                                <div class="layout-comparison-fields d-none">
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label for="before-image" class="form-label fw-bold">Before Image*</label>
                                            <input type="file" class="form-control" id="before-image" name="before_image" accept="image/*" required>
                                            <div class="image-preview mt-3" id="before-image-preview"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="after-image" class="form-label fw-bold">After Image*</label>
                                            <input type="file" class="form-control" id="after-image" name="after_image" accept="image/*" required>
                                            <div class="image-preview mt-3" id="after-image-preview"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="comparison-content" class="form-label fw-bold">Transformation Story*</label>
                                        <textarea class="form-control" id="comparison-content" name="comparison_content" rows="8" required></textarea>
                                    </div>
                                </div>
                                
                                <!-- Step-by-Step Fields (Hidden Initially) -->
                                <div class="layout-steps-fields d-none">
                                    <div class="mb-4">
                                        <label for="steps-intro" class="form-label fw-bold">Introduction*</label>
                                        <textarea class="form-control" id="steps-intro" name="steps_intro" rows="3" required></textarea>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label class="form-label fw-bold">Project Steps*</label>
                                        <div class="steps-container" id="steps-container">
                                            <!-- Steps will be added here dynamically -->
                                        </div>
                                        <button type="button" class="btn btn-sm btn-outline-primary mt-3" id="add-step">
                                            <i class="bi bi-plus-circle me-1"></i> Add Step
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Author Information -->
                            <div class="author-info border-top pt-4 mt-4">
                                <h5 class="mb-4">Author Information</h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="author-name" class="form-label">Your Name*</label>
                                        <input type="text" class="form-control" id="author-name" name="author_name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="author-title" class="form-label">Your Title/Role</label>
                                        <input type="text" class="form-control" id="author-title" name="author_title" placeholder="Interior Designer, Homeowner, etc.">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="author-bio" class="form-label">Short Bio</label>
                                    <textarea class="form-control" id="author-bio" name="author_bio" rows="2"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="author-photo" class="form-label">Your Photo</label>
                                    <input type="file" class="form-control" id="author-photo" name="author_photo" accept="image/*">
                                    <div class="author-preview mt-3" id="author-preview"></div>
                                </div>
                            </div>
                            
                            <!-- Submission Buttons -->
                            <div class="d-flex justify-content-between mt-5">
                                <button type="button" class="btn btn-outline-secondary" id="save-draft">
                                    <i class="bi bi-file-earmark me-2"></i> Save Draft
                                </button>
                                <div>
                                    <button type="button" class="btn btn-outline-primary me-2" id="preview-btn">
                                        <i class="bi bi-eye me-2"></i> Preview
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-send-check me-2"></i> Submit for Review
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Preview Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Article Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="preview-content">
                <!-- Preview will be loaded here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit Now</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<!-- CSS for Layout System -->
<style>
    /* Layout Selection Styles */
    .layout-card {
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid transparent !important;
    }
    
    .layout-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .layout-card.active {
        border-color: var(--bs-primary) !important;
        box-shadow: 0 0 0 3px rgba(var(--bs-primary-rgb), 0.1);
    }
    
    .layout-preview {
        height: 200px;
        background: white;
        border-bottom: 1px solid #eee;
        position: relative;
        overflow: hidden;
    }
    
    /* Standard Layout Preview */
    .preview-header {
        height: 15px;
        background: var(--bs-primary);
    }
    
    .preview-image {
        height: 80px;
        width: 90%;
        margin: 15px auto;
        background: #f5f5f5;
        border-radius: 4px;
    }
    
    .preview-content {
        padding: 0 15px;
    }
    
    .preview-content .line {
        height: 8px;
        background: #f1f1f1;
        margin-bottom: 6px;
        border-radius: 4px;
    }
    
    .preview-content .line.short {
        width: 60%;
    }
    
    /* Gallery Layout Preview */
    .preview-gallery {
        padding: 15px;
    }
    
    .gallery-row {
        display: flex;
        margin-bottom: 8px;
    }
    
    .gallery-item {
        flex: 1;
        height: 40px;
        background: #f5f5f5;
        border-radius: 4px;
        margin: 0 4px;
    }
    
    /* Comparison Layout Preview */
    .preview-comparison {
        display: flex;
        height: 120px;
        margin: 15px;
    }
    
    .comparison-left, 
    .comparison-right {
        flex: 1;
        background: #f5f5f5;
    }
    
    .comparison-divider {
        width: 4px;
        background: var(--bs-primary);
    }
    
    /* Steps Layout Preview */
    .preview-steps {
        padding: 15px;
    }
    
    .step {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    
    .step-number {
        width: 24px;
        height: 24px;
        background: var(--bs-primary);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        margin-right: 10px;
    }
    
    .step-content {
        height: 10px;
        flex: 1;
        background: #f5f5f5;
        border-radius: 4px;
    }
    
    /* Form Styles */
    .file-upload-area {
        background-color: #f8f9fa;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .file-upload-area:hover {
        background-color: #e9ecef;
    }
    
    .image-preview {
        min-height: 100px;
    }
    
    .gallery-preview {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .gallery-thumbnail {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 4px;
        border: 1px solid #dee2e6;
    }
    
    /* Step Items */
    .step-item {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 15px;
        border-left: 3px solid var(--bs-primary);
    }
    
    .remove-step {
        color: var(--bs-danger);
        cursor: pointer;
    }
    
    /* Author Preview */
    .author-preview img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #dee2e6;
    }
</style>

<!-- JavaScript for Layout System -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Layout Selection
    const layoutCards = document.querySelectorAll('.layout-card');
    const layoutForm = document.getElementById('blog-creation-form');
    const layoutTypeInput = document.getElementById('layout-type');
    const layoutBadge = document.getElementById('current-layout-badge');
    
    layoutCards.forEach(card => {
        card.addEventListener('click', function() {
            // Set active card
            layoutCards.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
            
            // Get layout type
            const layout = this.dataset.layout;
            layoutTypeInput.value = layout;
            
            // Update badge
            const layoutName = this.querySelector('h5').textContent;
            layoutBadge.textContent = layoutName;
            
            // Show form section
            layoutForm.classList.remove('d-none');
            
            // Scroll to form
            layoutForm.scrollIntoView({ behavior: 'smooth' });
            
            // Hide all layout-specific fields
            document.querySelectorAll('.layout-specific-fields > div').forEach(field => {
                field.classList.add('d-none');
            });
            
            // Show fields for selected layout
            document.querySelector(`.layout-${layout}-fields`).classList.remove('d-none');
            
            // Initialize specific layout JS
            initLayoutSpecificJS(layout);
        });
    });
    
    // Initialize layout-specific JavaScript
    function initLayoutSpecificJS(layout) {
        if (layout === 'gallery') initGalleryUpload();
        if (layout === 'comparison') initComparisonUpload();
        if (layout === 'steps') initStepBuilder();
    }
    
    // Gallery Image Upload
    function initGalleryUpload() {
        const galleryInput = document.getElementById('gallery-images');
        const previewContainer = document.getElementById('gallery-preview');
        
        galleryInput.addEventListener('change', function() {
            previewContainer.innerHTML = '';
            
            if (this.files && this.files.length > 0) {
                Array.from(this.files).forEach(file => {
                    if (file.type.match('image.*')) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const thumb = document.createElement('img');
                            thumb.src = e.target.result;
                            thumb.className = 'gallery-thumbnail';
                            previewContainer.appendChild(thumb);
                        }
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    }
    
    // Before/After Image Upload
    function initComparisonUpload() {
        // Before Image
        document.getElementById('before-image').addEventListener('change', function() {
            previewImage(this, 'before-image-preview');
        });
        
        // After Image
        document.getElementById('after-image').addEventListener('change', function() {
            previewImage(this, 'after-image-preview');
        });
    }
    
    // Step Builder
    function initStepBuilder() {
        const container = document.getElementById('steps-container');
        let stepCount = 1;
        
        // Add initial step
        addStep();
        
        // Add step button
        document.getElementById('add-step').addEventListener('click', addStep);
        
        function addStep() {
            const stepItem = document.createElement('div');
            stepItem.className = 'step-item';
            stepItem.innerHTML = `
                <div class="d-flex align-items-start mb-3">
                    <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:30px;height:30px">
                        ${stepCount}
                    </div>
                    <div class="flex-grow-1">
                        <label class="form-label">Step Title*</label>
                        <input type="text" class="form-control mb-2" name="step_title[]" required>
                        
                        <label class="form-label">Step Description*</label>
                        <textarea class="form-control mb-2" name="step_content[]" rows="3" required></textarea>
                        
                        <label class="form-label">Step Image</label>
                        <input type="file" class="form-control" name="step_image[]" accept="image/*">
                        <div class="step-preview mt-2"></div>
                    </div>
                    <button type="button" class="btn btn-link text-danger remove-step ms-2">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
            `;
            
            container.appendChild(stepItem);
            stepCount++;
            
            // Add event for step image preview
            const imgInput = stepItem.querySelector('input[type="file"]');
            imgInput.addEventListener('change', function() {
                previewImage(this, this.closest('.flex-grow-1').querySelector('.step-preview'));
            });
            
            // Add remove event
            const removeBtn = stepItem.querySelector('.remove-step');
            removeBtn.addEventListener('click', function() {
                stepItem.remove();
                renumberSteps();
            });
        }
        
        function renumberSteps() {
            const steps = document.querySelectorAll('.step-item');
            steps.forEach((step, index) => {
                step.querySelector('.step-number').textContent = index + 1;
            });
            stepCount = steps.length + 1;
        }
    }
    
    // Generic Image Preview Function
    function previewImage(input, previewContainer, isCircle = false) {
        if (typeof previewContainer === 'string') {
            previewContainer = document.getElementById(previewContainer);
        }
        
        previewContainer.innerHTML = '';
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid rounded shadow-sm';
                img.style.maxHeight = '200px';
                
                if (isCircle) {
                    img.classList.add('rounded-circle');
                }
                
                previewContainer.appendChild(img);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    // Author Photo Preview
    document.getElementById('author-photo').addEventListener('change', function() {
        previewImage(this, 'author-preview', true);
    });
    
    // Standard Image Preview
    document.getElementById('featured-image').addEventListener('change', function() {
        previewImage(this, 'standard-image-preview');
    });
    
    // Preview Button
    document.getElementById('preview-btn').addEventListener('click', function() {
        // In a real implementation, this would generate a preview
        const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
        previewModal.show();
    });
});
</script>