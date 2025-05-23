<?php
// Include your header
include 'includes/header.php';

// You'll need to retrieve the offer ID from the URL (e.g., $_GET['id'])
// and then fetch the detailed offer information from your backend here.
// For now, we'll use placeholder data for demonstration.

$offerId = isset($_GET['id']) ? $_GET['id'] : null;

// Example placeholder data for the current offer
$currentOffer = [
    'title' => 'Exclusive Summer Savings!',
    'image' => 'img/summer-exclusive-details.jpg',
    'details' => "Unlock exclusive savings this summer on our premium range of interior decor. This limited-time offer gives you 30% off on all orders over $500. Transform your living spaces with high-quality furniture, elegant lighting, and stylish accessories. Don't miss out on this chance to elevate your home's aesthetic. Offer valid from June 1st to July 31st, 2025.",
    'validity' => 'Valid from June 1st to July 31st, 2025',
];

// Example placeholder data for other valid offers
$otherValidOffers = [
    [
        'id' => 11,
        'thumbnail' => 'img/decor-sale-thumb.jpg',
        'title' => 'Big Decor Sale',
    ],
    [
        'id' => 18,
        'thumbnail' => 'img/rug-discount-thumb.jpg',
        'title' => 'Special Rug Discount',
    ],
];

// Example placeholder data for related products
$relatedProducts = [
    [
        'id' => 301,
        'image' => 'img/luxury-sofa-thumb.jpg',
        'name' => 'Luxury Velvet Sofa',
    ],
    [
        'id' => 308,
        'image' => 'img/designer-lamp-thumb.jpg',
        'name' => 'Designer Floor Lamp',
    ],
    [
        'id' => 315,
        'image' => 'img/art-piece-thumb.jpg',
        'name' => 'Modern Abstract Art Piece',
    ],
];
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h2 class="dynamic-offer-title mb-4"><?php echo htmlspecialchars($currentOffer['title']); ?></h2>
            <img src="<?php echo htmlspecialchars($currentOffer['image']); ?>" class="img-fluid rounded shadow-sm mb-4 dynamic-offer-image" alt="<?php echo htmlspecialchars($currentOffer['title']); ?>">
            <p class="lead dynamic-offer-details"><?php echo nl2br(htmlspecialchars($currentOffer['details'])); ?></p>
            <p class="text-muted dynamic-offer-validity"><?php echo htmlspecialchars($currentOffer['validity']); ?></p>
        </div>
        <div class="col-md-4">
            <h4 class="mb-3">Other Valid Offers</h4>
            <div class="row row-cols-2 row-cols-md-1 g-2 other-offers-thumbnails">
                <?php foreach ($otherValidOffers as $offer): ?>
                    <div class="col">
                        <a href="discount-details.php?id=<?php echo htmlspecialchars($offer['id']); ?>">
                            <img src="<?php echo htmlspecialchars($offer['thumbnail']); ?>" class="img-fluid rounded shadow-sm" alt="<?php echo htmlspecialchars($offer['title']); ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php if (empty($otherValidOffers)): ?>
                    <p class="text-muted">No other valid offers available.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <section id="related-products" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Explore Related Products</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 dynamic-related-products-list">
                <?php foreach ($relatedProducts as $product): ?>
                    <div class="col">
                        <div class="card h-100 product-card clickable" onclick="window.location.href='product-details.php?id=<?php echo htmlspecialchars($product['id']); ?>';">
                            <img src="<?php echo htmlspecialchars($product['image']); ?>" class="card-img-top dynamic-homepage-product-image" alt="<?php echo htmlspecialchars($product['name']); ?>">
                            <div class="card-body">
                                <h5 class="card-title dynamic-homepage-product-name"><?php echo htmlspecialchars($product['name']); ?></h5>
                                <a href="product-details.php?id=<?php echo htmlspecialchars($product['id']); ?>" class="btn btn-primary dynamic-homepage-product-button">View Product</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php if (empty($relatedProducts)): ?>
                    <p class="text-muted text-center">No related products found for this offer.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>

<?php
// Include your footer
include 'includes/footer-widget.php';
?>