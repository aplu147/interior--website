<?php
// You might include your header here
include 'includes/header.php';
?>

<div class="container mt-5">
    <h1 class="dynamic-discounts-title text-center mb-4">Current Discounts & Offers</h1>
    <div class="dynamic-discounts-list row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
            <div class="card offer-card clickable" onclick="window.location.href='discount-details.php?id=OFFER_ID_HERE';">
                <img src="img/offer-thumb-placeholder.jpg" class="card-img-top dynamic-offer-image" alt="Offer Thumbnail">
                <div class="card-body">
                    <h5 class="card-title dynamic-offer-title">Offer Title Goes Here</h5>
                    <p class="card-text dynamic-offer-description">Brief description of the offer.</p>
                    <p class="card-text"><small class="text-muted">Valid until: <span class="dynamic-offer-validity">[Date]</span></small></p>
                    <span class="badge dynamic-offer-type bg-primary">Discount</span>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card offer-card clickable" onclick="window.location.href='discount-details.php?id=ANOTHER_OFFER_ID';">
                <img src="img/another-offer-thumb.jpg" class="card-img-top dynamic-offer-image" alt="Another Offer">
                <div class="card-body">
                    <h5 class="card-title dynamic-offer-title">Another Exciting Offer</h5>
                    <p class="card-text dynamic-offer-description">Details about this other offer.</p>
                    <p class="card-text"><small class="text-muted">Valid until: <span class="dynamic-offer-validity">[Another Date]</span></small></p>
                    <span class="badge dynamic-offer-type bg-success">Limited Time</span>
                </div>
            </div>
        </div>
        </div>

    <nav aria-label="Discounts page navigation" class="mt-4 dynamic-discounts-pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><span class="page-link">Previous</span></li>
            <li class="page-item active"><span class="page-link">1</span></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</div>


<?php include('includes/footer-widget.php'); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const viewTypeSelect = document.querySelector('.dynamic-view-type-select');
        const offerItems = document.querySelectorAll('.offer-item');

        viewTypeSelect.addEventListener('change', function() {
            const selectedView = this.value;

            offerItems.forEach(item => {
                const dataViewType = item.getAttribute('data-view-type');
                if (dataViewType && dataViewType.includes(selectedView)) {
                    item.style.display = 'table-row';
                } else if (selectedView === 'all') {
                    item.style.display = 'table-row';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>