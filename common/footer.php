<!-- Bootstrap 5.3.3 JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- ========================================================================================= -->
<!-- Footer CSS -->
<style>
    /* Enhanced Footer */
    footer {
        background: var(--secondary-color, #0b3954);
        color: var(--tertiary-color, #ffffff);
        padding: 60px 0 25px;
        font-family: "Segoe UI", Roboto, -apple-system, BlinkMacSystemFont, sans-serif;
        position: relative;
    }

    .footer-logo {
        max-width: 120px;
        margin-bottom: 15px;
    }

    footer h3 {
        font-size: 20px;
        margin-bottom: 18px;
        font-weight: 700;
        color: #fff;
        position: relative;
    }

    footer h3::after {
        content: '';
        display: block;
        width: 45px;
        height: 3px;
        background: #ffd700;
        margin-top: 6px;
        border-radius: 2px;
    }

    footer p,
    footer a {
        font-size: 15px;
        line-height: 1.7;
        color: #eaeaea;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    footer a:hover {
        color: #ffd700;
        text-decoration: underline;
    }

    /* Quick Links */
    footer ul li {
        margin-bottom: 10px;
    }

    footer ul li a::before {
        content: "› ";
        color: #ffd700;
        font-weight: bold;
    }

    /* Footer Branch Locations Section */
    .footer-branches-wrapper {
        background: rgba(0, 0, 0, 0.22);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 18px;
        padding: 30px 25px;
        margin-top: 45px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .footer-branches-heading {
        font-size: 22px;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: -0.3px;
        margin-bottom: 22px;
    }

    .footer-branch-item {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-left: 4px solid #ffd700;
        border-radius: 12px;
        padding: 16px 18px;
        margin-bottom: 16px;
        transition: all 0.3s ease;
    }

    .footer-branch-item:hover {
        background: rgba(255, 255, 255, 0.12);
        border-color: rgba(255, 255, 255, 0.25);
        border-left-color: #28a745;
        transform: translateY(-2px);
    }

    .footer-branch-title {
        font-size: 15.5px;
        font-weight: 700;
        color: #ffd700;
        margin-bottom: 6px;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 6px;
    }

    .footer-branch-title i {
        color: #ffd700;
        font-size: 17px;
    }

    .footer-branch-name {
        color: #ffffff;
        font-weight: 600;
        font-size: 14.5px;
        margin-bottom: 4px;
    }

    .footer-branch-address {
        font-size: 13.5px;
        line-height: 1.55;
        color: #d1d5db;
        margin-bottom: 10px;
    }

    .footer-branch-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        align-items: center;
        margin-top: 6px;
    }

    .btn-branch-phone {
        background: #198754;
        color: #ffffff !important;
        font-size: 12.5px;
        font-weight: 600;
        padding: 4px 12px;
        border-radius: 20px;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        text-decoration: none !important;
        transition: all 0.25s ease;
    }

    .btn-branch-phone:hover {
        background: #157347;
        color: #ffffff !important;
        transform: scale(1.03);
    }

    .btn-branch-map {
        background: rgba(255, 255, 255, 0.15);
        color: #ffffff !important;
        font-size: 12.5px;
        font-weight: 500;
        padding: 4px 12px;
        border-radius: 20px;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        text-decoration: none !important;
        transition: all 0.25s ease;
    }

    .btn-branch-map:hover {
        background: #0284c7;
        color: #ffffff !important;
        transform: scale(1.03);
    }

    /* Bottom Footer */
    .bottom-footer {
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        text-align: center;
        font-size: 13.5px;
        padding-top: 18px;
        margin-top: 35px;
        color: #ccc;
    }

    .bottom-footer a {
        color: #ffd700;
    }

    .bottom-footer a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .footer-branches-wrapper {
            padding: 20px 14px;
            margin-top: 30px;
            border-radius: 14px;
        }
        .footer-branches-heading {
            font-size: 18px;
        }
        .footer-branch-item {
            padding: 14px 12px;
        }
        .footer-branch-title {
            font-size: 14.5px;
        }
        .footer-branch-address {
            font-size: 13px;
        }
    }
</style>

<?php
// 11 Branches / Centre Locations with Google Links and Phone Numbers
$footer_branches = [
    [
        'title' => 'Corporate Office',
        'badge' => 'Head Office',
        'name' => 'Nasha Mukti Kendra Ranchi (Main Centre)',
        'address' => 'Ormanjhi, Irba, Rukka Dam Road, Dhobiya Ghat, Hutup, Ranchi, Jharkhand - 835219',
        'phone' => '+91 92882 87732',
        'phone_link' => 'tel:+919288287732',
        'map_link' => 'https://maps.google.com/?q=Ormanjhi+Ranchi+Jharkhand+835219'
    ],
    [
        'title' => '1st Branch',
        'badge' => 'Ramgarh',
        'name' => 'Punahsthapanaa Foundation Trust | Nasha Mukti Kendra Ramgarh',
        'address' => 'Sahera Road, Kochatoli, Namkum-Ramgarh Road, Ranchi-Ramgarh Zone, Jharkhand',
        'phone' => '+91 62070 95651',
        'phone_link' => 'tel:+916207095651',
        'map_link' => 'https://share.google/MyCHwNMfw9Nd0Rq3B'
    ],
    [
        'title' => '2nd Branch',
        'badge' => 'Jamshedpur',
        'name' => 'Sthapanaa Nasha Mukti Kendra Jamshedpur',
        'address' => 'Tamulia Main Road, Opposite Dukhid Mandir, Kapali, Jamshedpur, Jharkhand - 831020',
        'phone' => '+91 79799 53418',
        'phone_link' => 'tel:+917979953418',
        'map_link' => 'https://share.google/okVxLnHdJsawq2AwO'
    ],
    [
        'title' => '3rd Branch',
        'badge' => 'Hazaribagh',
        'name' => 'Bright Hope Foundation | Rehabilitation Center',
        'address' => 'Singhani Road, Amrit Nagar, Hazaribagh, Jharkhand - 825303',
        'phone' => '+91 97712 88737',
        'phone_link' => 'tel:+919771288737',
        'map_link' => 'https://share.google/xchpqLFFYxsrPnQjK'
    ],
    [
        'title' => '4th Branch',
        'badge' => 'Dhanbad',
        'name' => 'Dhanbad Arogya Bhawan | Nasha Mukti Kendra',
        'address' => 'Damkara, Barwa, Shivam Nagar, Barwadda Road, Near Krishi Bazar, Dhanbad, Jharkhand - 826004',
        'phone' => '+91 84342 69039',
        'phone_link' => 'tel:+918434269039',
        'map_link' => 'https://www.google.com/search?sca_esv=cc12825c4d4cb41c&cs=1&output=search&kgmid=%2Fg%2F11rt_sng8b&q=Dhanbad%20Arogya%20bhawan%2CNASHA%20MUKTI%20KENDRA'
    ],
    [
        'title' => '5th Branch',
        'badge' => 'Hazaribagh',
        'name' => 'Hazaribagh Sankalp Foundation | Nasha Mukti Kendra',
        'address' => 'Vikash Nagar, Dipugarha, Hazaribagh, Jharkhand - 825301',
        'phone' => '+91 62020 64413',
        'phone_link' => 'tel:+916202064413',
        'map_link' => 'https://share.google/FyMgOynKGkGxqtUtO'
    ],
    [
        'title' => '6th Branch',
        'badge' => 'Palamu / Daltonganj',
        'name' => 'Nasha Mukti Kendra Heritage Centre Daltonganj',
        'address' => 'P.O. Chianki, Ranchi Road, Daltonganj, Palamu, Jharkhand - 822102',
        'phone' => '+91 93080 09619',
        'phone_link' => 'tel:+919308009619',
        'map_link' => 'https://share.google/DR7NE73YHynOxYorQ'
    ],
    [
        'title' => '7th Branch',
        'badge' => 'Palamu',
        'name' => 'Nasha Mukti Kendra Palamu Regional Centre',
        'address' => 'Main Road, Medininagar (Daltonganj), Palamu, Jharkhand - 822101',
        'phone' => '+91 92882 87732',
        'phone_link' => 'tel:+919288287732',
        'map_link' => 'https://share.google/dqD3gN2CqmcwjWCVY'
    ],
    [
        'title' => '8th Branch',
        'badge' => 'West Singhbhum',
        'name' => 'Nasha Mukti Kendra West Singhbhum',
        'address' => 'Near Sadar Chowk, Chaibasa, West Singhbhum, Jharkhand - 833201',
        'phone' => '+91 92882 87732',
        'phone_link' => 'tel:+919288287732',
        'map_link' => 'https://share.google/dqD3gN2CqmcwjWCVY'
    ],
    [
        'title' => '9th Branch',
        'badge' => 'Seraikela-Kharsawan',
        'name' => 'Nasha Mukti Kendra Seraikela',
        'address' => 'Near Police Station Road, Seraikela, Seraikela-Kharsawan, Jharkhand - 833219',
        'phone' => '+91 92882 87732',
        'phone_link' => 'tel:+919288287732',
        'map_link' => 'https://share.google/EzFOHG1Dn9f0iOsXz'
    ],
    [
        'title' => '10th Branch',
        'badge' => 'Sahebganj',
        'name' => 'Nasha Mukti Kendra Sahebganj',
        'address' => 'Near Surya Super Speciality Hospital, Sahebganj, Jharkhand - 816109',
        'phone' => '+91 92882 87732',
        'phone_link' => 'tel:+919288287732',
        'map_link' => 'https://share.google/CN9rsod0dBHCyECjV'
    ],
];
?>

<!-- Footer HTML -->
<footer>
    <div class="container">
        <!-- Top Footer Row: About, Quick Links, Services, Contact -->
        <div class="row gy-5">

            <!-- Column 1: Logo + About -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-about">
                    <img src="<?= $base_url ?>assets/images/logo/logo.png?v=2" alt="Nasha Mukti Kendra Ranchi Logo"
                        class="footer-logo" style="width:90px">
                    <h3>About Nasha Mukti Kendra Ranchi</h3>
                    <p>
                        Nasha Mukti Kendra Ranchi is an innovative, top-notch
                        rehabilitation centre that focuses on patients’ personal needs by delivering ethical, effective,
                        and professional care across Ranchi and Jharkhand.
                    </p>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-lg-2 col-md-3 col-6">
                <h3>Quick Links</h3>
                <ul class="list-unstyled">
                    <li><a href="<?= $base_url ?>">Home</a></li>
                    <li><a href="<?= $base_url ?>about-us.php">About Us</a></li>
                    <li><a href="<?= $base_url ?>contact-us.php">Contact Us</a></li>
                    <li><a href="<?= $base_url ?>#network">Network Areas</a></li>
                    <li><a href="<?= $base_url ?>#faq">FAQs</a></li>
                </ul>
            </div>

            <!-- Column 3: Services -->
            <div class="col-lg-2 col-md-3 col-6">
                <h3>Services</h3>
                <ul class="list-unstyled">
                    <li><a href="<?= $base_url ?>services/alcohol-addiction.php">Alcohol Addiction</a></li>
                    <li><a href="<?= $base_url ?>services/drugs-addiction.php">Drugs Addiction</a></li>
                    <li><a href="<?= $base_url ?>services/marijuana-addiction.php">Marijuana Addiction</a></li>
                    <li><a href="<?= $base_url ?>services/whitener-addiction.php">Whitener Addiction</a></li>
                    <li><a href="<?= $base_url ?>services/heroin-addiction.php">Heroin Addiction</a></li>
                    <li><a href="<?= $base_url ?>services/cocaine-addiction.php">Cocaine Addiction</a></li>
                    <li><a href="<?= $base_url ?>services/detoxification.php">Detoxification</a></li>
                    <li><a href="<?= $base_url ?>services/depression-treatment.php">Depression Treatment</a></li>
                    <li><a href="<?= $base_url ?>services/mental-health.php">Mental Health</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact + 24/7 Helpline -->
            <div class="col-lg-4 col-md-6">
                <h3>24/7 Helpline</h3>
                <div class="footer-contact">
                    <p>
                        <strong><i class="bi bi-geo-alt-fill text-warning me-1"></i> Main Centre:</strong><br>
                        Ormanjhi, Irba, Rukka dam road, Dhobiya Ghat, Hutup, Ranchi, Jharkhand 835219
                    </p>
                    <p class="mb-2">
                        <strong><i class="bi bi-telephone-fill text-success me-1"></i> 24/7 Call:</strong>
                        <a href="tel:+919288287732" class="fw-bold text-white fs-6 ms-1">+91 92882 87732</a>
                    </p>
                    <p class="mb-3">
                        <strong><i class="bi bi-whatsapp text-success me-1"></i> WhatsApp:</strong>
                        <a href="https://wa.me/919288287732" target="_blank" class="fw-bold text-white fs-6 ms-1">+91 92882 87732</a>
                    </p>
                    <a href="#footer-branches" class="btn btn-outline-warning btn-sm rounded-pill px-3 py-1">
                        <i class="bi bi-pin-map-fill me-1"></i> View All 11 Centre Locations
                    </a>
                </div>
            </div>

        </div>

        <!-- Middle Footer: 11 Branches & Centre Locations (Matches Reference Layout) -->
        <div class="footer-branches-wrapper" id="footer-branches">
            <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
                <h4 class="footer-branches-heading mb-0">
                    <i class="bi bi-geo-alt-fill text-warning me-2"></i> Our Branches & Centre Locations Across Jharkhand (11 Locations)
                </h4>
                <span class="badge bg-warning text-dark py-2 px-3 rounded-pill fw-bold">24/7 Admission & Ambulance Support</span>
            </div>

            <div class="row g-3">
                <?php foreach ($footer_branches as $branch): ?>
                    <div class="col-lg-6 col-12">
                        <div class="footer-branch-item">
                            <div class="footer-branch-title">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span><?= htmlspecialchars($branch['title']) ?>:</span>
                                <span class="badge bg-secondary text-white ms-1 fw-normal" style="font-size:11px;"><?= htmlspecialchars($branch['badge']) ?></span>
                            </div>
                            <div class="footer-branch-name">
                                <?= htmlspecialchars($branch['name']) ?>
                            </div>
                            <div class="footer-branch-address">
                                <?= htmlspecialchars($branch['address']) ?>
                            </div>
                            <div class="footer-branch-actions">
                                <a href="<?= htmlspecialchars($branch['phone_link']) ?>" class="btn-branch-phone" title="Call <?= htmlspecialchars($branch['name']) ?>">
                                    <i class="bi bi-telephone-fill"></i> <?= htmlspecialchars($branch['phone']) ?>
                                </a>
                                <a href="<?= htmlspecialchars($branch['map_link']) ?>" target="_blank" rel="noopener noreferrer" class="btn-branch-map" title="View location on Google Map">
                                    <i class="bi bi-box-arrow-up-right"></i> Google Map
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="bottom-footer">
            <p class="mb-0">
                &copy;
                <script>document.write(new Date().getFullYear());</script> Nasha Mukti Kendra Ranchi | All Rights
                Reserved |
                Website Design & Maintained By:
                <a href="http://coralwebtechnology.com/" target="_blank">Coral Web Technology</a>
            </p>
        </div>
    </div>
</footer>

<?php include(__DIR__ . "/chatbot.php"); ?>