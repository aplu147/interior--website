<?php 
include 'includes/header.php';
$productsConfig = include 'includes/products-config.php';

// Get product ID from URL
$productId = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Get product data with error handling
if (!isset($productsConfig['products'][$productId])) {
    header("Location: products.php");
    exit();
}
$product = $productsConfig['products'][$productId];

// Get related products (excluding current product)
$relatedProducts = array_diff_key($productsConfig['products'], [$productId => '']);
$relatedProducts = array_slice($relatedProducts, 0, $productsConfig['related_products_count'], true);
?>

<div class="container mt-4 mb-5 <?= $productsConfig['animations'] ? 'animate-system' : '' ?>">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="products.php">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($product['name']) ?></li>
        </ol>
    </nav>

    <div class="row g-4">
        <!-- Product Images -->
        <div class="col-lg-6">
            <div class="product-image-main mb-3 border rounded-3 overflow-hidden">
                <img src="<?= $product['images'][0] ?>" 
                     alt="<?= htmlspecialchars($product['name']) ?>" 
                     class="img-fluid w-100" 
                     id="mainProductImage" 
                     loading="lazy">
            </div>
            <div class="product-thumbnails d-flex flex-wrap gap-2">
                <?php foreach ($product['images'] as $index => $image): ?>
                    <div class="thumbnail-item border rounded-2 overflow-hidden" style="width: 80px; height: 80px; cursor: pointer;">
                        <img src="<?= $image ?>" 
                             alt="<?= htmlspecialchars($product['name']) ?> - thumbnail <?= $index+1 ?>" 
                             class="img-fluid h-100 w-100" 
                             loading="lazy" 
                             onclick="changeMainImage('<?= $image ?>')">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-lg-6">
            <div class="product-details-card p-4 border rounded-3">
                <?php if ($productsConfig['show_prices'] && isset($product['old_price'])): ?>
                    <div class="badge bg-danger mb-2">Save <?= $productsConfig['currency'] ?><?= number_format($product['old_price'] - $product['price'], 2) ?></div>
                <?php endif; ?>
                
                <h1 class="h2 mb-2"><?= htmlspecialchars($product['name']) ?></h1>
                <p class="text-muted mb-3"><?= htmlspecialchars($product['category']) ?></p>
                
                <div class="d-flex align-items-center mb-3">
                    <div class="product-rating text-warning me-2">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <?php if ($i <= floor($product['rating'])): ?>
                                <i class="fas fa-star"></i>
                            <?php elseif ($i == ceil($product['rating']) && $product['rating'] != floor($product['rating'])): ?>
                                <i class="fas fa-star-half-alt"></i>
                            <?php else: ?>
                                <i class="far fa-star"></i>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <span class="small text-muted"><?= $product['review_count'] ?> reviews</span>
                    <a href="#reviews" class="small ms-2">Write a review</a>
                </div>
                
                <?php if ($productsConfig['show_prices']): ?>
                <div class="mb-4">
                    <?php if (isset($product['old_price'])): ?>
                        <span class="text-muted text-decoration-line-through me-2"><?= $productsConfig['currency'] ?><?= number_format($product['old_price'], 2) ?></span>
                    <?php endif; ?>
                    <span class="h4 text-primary"><?= $productsConfig['currency'] ?><?= number_format($product['price'], 2) ?></span>
                </div>
                <?php endif; ?>
                
                <p class="mb-4"><?= htmlspecialchars($product['description']) ?></p>
                
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-2">
                        <span class="fw-bold me-2">Availability:</span>
                        <span class="text-success"><?= $product['stock'] ?? 'In Stock' ?></span>
                    </div>
                    <?php if (isset($product['sku'])): ?>
                    <div class="d-flex align-items-center mb-2">
                        <span class="fw-bold me-2">SKU:</span>
                        <span><?= $product['sku'] ?></span>
                    </div>
                    <?php endif; ?>
                    <?php if (isset($product['shipping'])): ?>
                    <div class="d-flex align-items-center">
                        <span class="fw-bold me-2">Shipping:</span>
                        <span><?= $product['shipping'] ?></span>
                    </div>
                    <?php endif; ?>
                </div>
                
                <hr>
                
                <div class="mb-4">
                    <h3 class="h5 mb-3">Key Features</h3>
                    <ul class="list-unstyled">
                        <?php foreach ($product['features'] as $feature): ?>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i><?= htmlspecialchars($feature) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <?php if ($productsConfig['show_cart']): ?>
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="quantity-selector">
                        <button class="btn btn-outline-secondary btn-sm" onclick="decreaseQuantity()">-</button>
                        <input type="number" id="productQuantity" value="1" min="1" class="form-control form-control-sm text-center" style="width: 50px; display: inline-block;">
                        <button class="btn btn-outline-secondary btn-sm" onclick="increaseQuantity()">+</button>
                    </div>
                    <button class="btn btn-primary flex-grow-1 snipcart-add-item"
                        data-item-id="<?= $productId ?>"
                        data-item-name="<?= htmlspecialchars($product['name']) ?>"
                        data-item-price="<?= $product['price'] ?>"
                        data-item-url="/product-details.php?id=<?= $productId ?>"
                        data-item-image="<?= $product['images'][0] ?>"
                        data-item-quantity="1">
                        <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($product['tags'])): ?>
                <div class="product-tags mb-4">
                    <?php foreach ($product['tags'] as $tag): ?>
                        <span class="badge bg-light text-dark me-1"><?= $tag ?></span>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                
                <div class="share-buttons">
                    <span class="me-2">Share:</span>
                    <a href="#" class="text-dark me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-dark me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-dark me-2"><i class="fab fa-pinterest"></i></a>
                    <a href="#" class="text-dark"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Product Tabs -->
    <div class="row mt-5">
        <div class="col-12">
            <ul class="nav nav-tabs" id="productTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications" type="button" role="tab">Specifications</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab">Reviews</button>
                </li>
            </ul>
            <div class="tab-content p-4 border border-top-0 rounded-bottom" id="productTabsContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel">
                    <h3 class="h4 mb-3">Product Description</h3>
                    <p><?= nl2br(htmlspecialchars($product['description'])) ?></p>
                </div>
                <div class="tab-pane fade" id="specifications" role="tabpanel">
                    <h3 class="h4 mb-3">Technical Specifications</h3>
                    <table class="table table-bordered">
                        <tbody>
                            <?php foreach ($product['features'] as $feature): ?>
                            <?php $parts = explode(':', $feature, 2); ?>
                            <?php if (count($parts) === 2): ?>
                            <tr>
                                <th scope="row" style="width: 30%"><?= trim($parts[0]) ?></th>
                                <td><?= trim($parts[1]) ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <!-- Reviews content here -->
                </div>
            </div>
        </div>
    </div>
    
    <!-- Replace the Related Products section with this: -->
<?php if (!empty($relatedProducts)): ?>
<section class="mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h4 mb-0">You May Also Like</h2>
        <a href="products.php" class="btn btn-sm btn-outline-primary">View All</a>
    </div>
    
    <div class="related-products-container position-relative">
        <button class="scroll-btn scroll-left position-absolute start-0 top-50 translate-middle-y z-3 bg-white rounded-circle shadow-sm border-0" style="width: 40px; height: 40px;">
            <i class="fas fa-chevron-left"></i>
        </button>
        
        <div class="related-products-scroll">
            <div class="related-products-track d-flex gap-3">
                <?php foreach ($relatedProducts as $id => $relatedProduct): ?>
                <div class="related-product-card flex-shrink-0" style="width: 200px;">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="product-thumb" style="height: 120px;">
                            <img src="<?= $relatedProduct['images'][0] ?>" 
                                 alt="<?= htmlspecialchars($relatedProduct['name']) ?>" 
                                 class="card-img-top img-fluid h-100 object-fit-cover" 
                                 loading="lazy">
                        </div>
                        <div class="card-body p-2">
                            <h5 class="card-title small mb-1"><?= htmlspecialchars($relatedProduct['name']) ?></h5>
                            <?php if ($productsConfig['show_prices']): ?>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h6 mb-0 small"><?= $productsConfig['currency'] ?><?= number_format($relatedProduct['price'], 2) ?></span>
                                <a href="product-details.php?id=<?= $id ?>" class="btn btn-sm btn-outline-dark">View</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <button class="scroll-btn scroll-right position-absolute end-0 top-50 translate-middle-y z-3 bg-white rounded-circle shadow-sm border-0" style="width: 40px; height: 40px;">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</section>
<?php endif; ?>
</div>

<?php include('includes/footer-widget.php'); ?>

