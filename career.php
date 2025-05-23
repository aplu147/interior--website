<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <section class="py-5 dynamic-carrier-section">
        <h2 class="dynamic-carrier-title">Careers</h2>
        <p class="dynamic-carrier-subtitle">Explore opportunities to join our dynamic and growing team.</p>

        <div class="dynamic-career-opportunities">
            <h3>Current Openings</h3>
            <ul class="list-group dynamic-job-listings">
                <li class="list-group-item d-flex justify-content-between align-items-start dynamic-job-item">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold dynamic-job-title">Job Title 1</div>
                        <span class="dynamic-job-location">Location</span>
                    </div>
                    <a href="job-details.php?id=1" class="btn btn-outline-primary btn-sm dynamic-job-apply-button">View Details & Apply</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start dynamic-job-item">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold dynamic-job-title">Another Job Title</div>
                        <span class="dynamic-job-location">Another Location</span>
                    </div>
                    <a href="job-details.php?id=2" class="btn btn-outline-primary btn-sm dynamic-job-apply-button">View Details & Apply</a>
                </li>
                </ul>

            <p class="mt-3 dynamic-no-openings">We currently have no open positions. Please check back later.</p>
        </div>

        <div class="mt-5 dynamic-work-culture">
            <h3>Our Work Culture</h3>
            <p class="dynamic-culture-description">Learn about our values, work environment, and the benefits of working with us.</p>
            <ul class="list-unstyled dynamic-culture-highlights">
                <li class="dynamic-culture-item"><i class="fas fa-users"></i> Collaborative Environment</li>
                <li class="dynamic-culture-item"><i class="fas fa-lightbulb"></i> Innovation Focused</li>
                <li class="dynamic-culture-item"><i class="fas fa-graduation-cap"></i> Opportunities for Growth</li>
                </ul>
        </div>

        <div class="mt-5 dynamic-career-inquiry-form">
            <h3>General Inquiry / Resume Submission</h3>
            <p>If you don't see a suitable opening but are interested in joining our team, feel free to send us your information.</p>
            <div class="card p-4">
                <form id="careerInquiryForm" action="process_career.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control dynamic-career-name-field" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control dynamic-career-email-field" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="resume" class="form-label">Upload Resume (PDF or DOC)</label>
                        <input type="file" class="form-control dynamic-career-resume-field" id="resume" name="resume" accept=".pdf,.doc,.docx">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message (Optional)</label>
                        <textarea class="form-control dynamic-career-message-field" id="message" name="message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary dynamic-career-submit-button">Submit Inquiry</button>
                </form>
            </div>
        </div>
    </section>
</div>

<?php include('includes/footer-widget.php'); ?>