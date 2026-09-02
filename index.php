<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/config.php"); ?>
    <?php include("common/head.php"); ?>
    <?php include("common/plugins.php"); ?>
</head>

<body>
    <?php include("common/header.php"); ?>
    <!-- ================= Hero Section (Reference Design with Cyan Phone Button & Hindi Heading) ================= -->
    <section class="hero-section">
        <div id="heroSlider" class="carousel slide carousel-fade w-100" data-bs-ride="carousel" data-bs-interval="4500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="hero-slide-bg" style="background-image: url('<?= $base_url ?>assets/images/services/services/depression.jpg');"></div>
                </div>
                <div class="carousel-item">
                    <div class="hero-slide-bg" style="background-image: url('<?= $base_url ?>assets/images/banner/banner.jpg');"></div>
                </div>
                <div class="carousel-item">
                    <div class="hero-slide-bg" style="background-image: url('<?= $base_url ?>assets/images/background/3.jpg');"></div>
                </div>
            </div>

            <!-- Left and Right Slider Arrows (< and >) -->
            <button class="carousel-control-prev custom-hero-arrow" type="button" data-bs-target="#heroSlider" data-bs-slide="prev" aria-label="Previous Slide">
                <span class="hero-arrow-icon">&lsaquo;</span>
            </button>
            <button class="carousel-control-next custom-hero-arrow" type="button" data-bs-target="#heroSlider" data-bs-slide="next" aria-label="Next Slide">
                <span class="hero-arrow-icon">&rsaquo;</span>
            </button>
        </div>

        <!-- Hero Centered Overlay Content -->
        <div class="hero-overlay-content">
            <p class="hero-tagline-text">
                सबसे Affordable और सुरक्षित केंद्र in Ranchi
            </p>

            <h1 class="hero-main-heading">
                Nasha Mukti Kendra Ranchi
            </h1>

            <div class="hero-contact-prompt">
                <span class="red-phone-icon">📞</span> संपर्क करें
            </div>

            <div>
                <a href="tel:+919288287732" class="hero-cyan-phone-btn" title="Call Now">
                    92882 87732
                </a>
            </div>
        </div>
    </section>

    <!-- ================= Slogan Banner ================= -->
    <section class="py-3 text-center" style="background: #eef7f0; border-top: 2px solid var(--primary-color, #28a745); border-bottom: 2px solid var(--primary-color, #28a745);">
        <div class="container">
            <h4 class="fw-bold mb-1 text-success">“ नशा का जो हुआ शिकार, बिखरा उसका घर परिवार। ”</h4>
            <p class="mb-0 text-dark fw-semibold fs-6">रांची का एकमात्र भरोसेमंद नशा मुक्ति केंद्र — 100% रिकवरी रेट | Call: +91 92882 87732</p>
        </div>
    </section>

    <!-- =============================================================== -->
    
    <!-- =============================================================== -->
    <section class="py-5 about-us bg-white">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="head-title text-center mb-3">
                    <h2>About <span>Nasha Mukti Kendra Ranchi</span></h2>
                </div>

                
                <div class="col-md-6">
                    <p class="text-muted">
                        <strong class="text-muted">Nasha Mukti Kendra Ranchi</strong>
                        is
                        one of the leading centres in Ranchi, Jharkhand, trusted as the <strong class="text-muted">best nasha
                            mukti</strong>
                        facility for those struggling with addiction. We are committed to helping individuals and
                        families
                        overcome the challenges of substance abuse with compassion, expertise, and a structured recovery
                        process.
                    </p>

                    <p class="text-muted">
                        Our <strong class="text-muted">nasha mukti kendra</strong> is designed to provide a safe and
                        healing
                        environment where patients feel supported at every step. From medically supervised detox
                        programs to
                        personalized counseling, therapy sessions, and wellness activities, we ensure complete physical,
                        emotional, and psychological care. Each recovery journey is guided by experienced doctors,
                        therapists, and counselors who are dedicated to long-term healing.
                    </p>

                    

                    <div class="py-1">
                        <a href="about-us.php" class="btn-pro">
                            Read More
                        </a>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="ranchi-poster-card shadow-lg text-center">
                        <div class="poster-icon mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 160" width="85" height="85">
                                <defs>
                                    <linearGradient id="capGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#4ade80" />
                                        <stop offset="50%" stop-color="#22c55e" />
                                        <stop offset="100%" stop-color="#15803d" />
                                    </linearGradient>
                                    <linearGradient id="leafGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#86efac" />
                                        <stop offset="100%" stop-color="#16a34a" />
                                    </linearGradient>
                                </defs>
                                <path d="M 50 35 C 30 20, 25 50, 48 65 C 65 55, 60 40, 50 35 Z" fill="url(#leafGrad)" stroke="#166534" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M 110 125 C 130 140, 135 110, 112 95 C 95 105, 100 120, 110 125 Z" fill="url(#leafGrad)" stroke="#166534" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                <g transform="rotate(-45 80 80)">
                                    <path d="M 56 80 L 56 110 A 24 24 0 0 0 104 110 L 104 80 Z" fill="url(#capGrad)" stroke="#166534" stroke-width="4"/>
                                    <path d="M 56 80 L 56 50 A 24 24 0 0 1 104 50 L 104 80 Z" fill="#ffffff" stroke="#166534" stroke-width="4"/>
                                    <line x1="56" y1="80" x2="104" y2="80" stroke="#166534" stroke-width="4"/>
                                    <path d="M 64 45 A 16 16 0 0 1 80 36" fill="none" stroke="rgba(255,255,255,0.9)" stroke-width="3" stroke-linecap="round"/>
                                </g>
                            </svg>
                        </div>

                        <div class="poster-title-badge mb-3">
                            नशा मुक्ति केंद्र रांची
                        </div>

                        <div class="poster-quote-box mb-3">
                            <span class="quote-mark quote-left">“</span>
                            <div class="quote-text">
                                नशा का जो हुआ शिकार,<br>
                                बिखरा उसका घर परिवार।
                            </div>
                            <span class="quote-mark quote-right">”</span>
                        </div>

                        <div class="poster-sub-badge">
                            रांची का एकमात्र भरोसेमंद नशा मुक्ति केंद्र - 100% रिकवरी रेट
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ================================================================ -->
    <section class="py-5 services">
        <div class="container">
            <div class="row">
                <div class="head-title mb-4 text-center">
                    <h2>Our <span>Nasha Mukti Services & Treatments in Ranchi</span></h2>
                    <p class="text-muted">
                        At <strong>Nasha Mukti Kendra Ranchi</strong>, we provide effective and
                        result-oriented <strong>addiction treatments</strong> and
                        <strong>mental health care</strong> to help individuals recover and live a healthier life.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Alcohol Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/1.jpg" class="card-img-top"
                                alt="Alcohol Addiction Treatment in Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/alcohol-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Alcohol Addiction Treatment</h5>
                            <p class="card-text">Comprehensive recovery programs for <strong>alcohol addiction</strong>
                                including medical detox, therapy sessions, and counseling for long-term sobriety.</p>
                        </div>
                    </div>
                </div>

                <!-- Drug Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/2.jpg" class="card-img-top"
                                alt="Drug Addiction Treatment in Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/drugs-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Drug Addiction Treatment</h5>
                            <p class="card-text">Specialized programs for <strong>drug addiction</strong> including
                                heroin,
                                cocaine, and other substances, with structured therapy and rehab care.</p>
                        </div>
                    </div>
                </div>

                <!-- Marijuana Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/3.jpg" class="card-img-top"
                                alt="Marijuana Addiction Rehabilitation Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/marijuana-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Marijuana Addiction Treatment</h5>
                            <p class="card-text">Tailored recovery plans for individuals struggling with
                                <strong>marijuana addiction</strong>, focusing on behavioral therapy and relapse
                                prevention.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Whitener Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/4.jpg" class="card-img-top"
                                alt="Whitener Addiction Treatment in Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/whitener-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Whitener Addiction Treatment</h5>
                            <p class="card-text">Effective therapy and counseling sessions to overcome
                                <strong>whitener addiction</strong> and promote healthier coping mechanisms.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Heroin Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/5.jpg" class="card-img-top"
                                alt="Heroin Addiction Treatment in Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/heroin-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Heroin Addiction Treatment</h5>
                            <p class="card-text">A combination of <strong>detoxification</strong>, therapy, and medical
                                supervision to help patients recover from <strong>heroin addiction</strong>.</p>
                        </div>
                    </div>
                </div>

                <!-- Cocaine Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/6.png" class="card-img-top"
                                alt="Cocaine Addiction Treatment in Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/cocaine-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cocaine Addiction Treatment</h5>
                            <p class="card-text">Structured recovery plans for <strong>cocaine addiction</strong>, with
                                therapy, counseling, and relapse prevention techniques.</p>
                        </div>
                    </div>
                </div>

                <!-- Detoxification -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/7.jpg" class="card-img-top"
                                alt="Detoxification Treatment in Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/detoxification.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Detoxification Programs</h5>
                            <p class="card-text">Safe and medically supervised <strong>detoxification</strong>
                                treatments
                                to cleanse the body and prepare individuals for rehabilitation.</p>
                        </div>
                    </div>
                </div>

                <!-- Depression Treatment -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/8.jpg" class="card-img-top"
                                alt="Depression Treatment in Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/depression-treatment.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Depression Treatment</h5>
                            <p class="card-text">Professional therapy and medical support to manage and recover from
                                <strong>depression</strong>, ensuring emotional and mental well-being.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mental Health -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/9.jpg" class="card-img-top"
                                alt="Mental Health Treatment in Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/mental-health.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mental Health Counseling</h5>
                            <p class="card-text text-muted">Holistic <strong>mental health treatment</strong> and
                                counseling
                                sessions
                                to build positivity, emotional strength, and long-term recovery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================================================ -->
    <?php include("slider.php"); ?>
    <!-- =============================================================== -->
    <section class="second-section py-5">
        <div class="container">
            <div class="row g-4 text-center">
                <!-- Yoga and Meditation -->
                <div class="col-md-4">
                    <div class="card feature-card h-100 shadow-sm">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-flower1"></i>
                        </div>
                        <h5 class="mb-3 text-white">Yoga & Meditation</h5>
                        <p class="text-white px-3">
                            Daily <strong>yoga</strong> and <strong>meditation</strong> sessions help patients stay
                            calm,
                            focused, and mentally strong during their recovery journey.
                        </p>
                    </div>
                </div>

                <!-- Nutritious Meals -->
                <div class="col-md-4">
                    <div class="card feature-card h-100 shadow-sm">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-egg-fried"></i>
                        </div>
                        <h5 class="mb-3 text-white">Nutritious, Balanced Meals</h5>
                        <p class="text-white px-3">
                            We provide <strong>healthy meals</strong> prepared under expert supervision to boost
                            immunity,
                            energy levels, and overall well-being.
                        </p>
                    </div>
                </div>

                <!-- 12 Step Program -->
                <div class="col-md-4">
                    <div class="card feature-card h-100 shadow-sm">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-layers"></i>
                        </div>
                        <h5 class="mb-3 text-white">12 Step Program</h5>
                        <p class="text-white px-3">
                            Our structured <strong>12 Step Program</strong> guides individuals through a proven recovery
                            path, ensuring long-term sobriety and relapse prevention.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =============================================================== -->
    <section class="why-choose py-2">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-md-5 mb-1 mb-md-0">
                    <div class="row">
                        <div class="col-12 mb-2 image-1">
                            <img src="assets/images/gallery/1.jpg"
                                alt="Why Choose Nasha Mukti Kendra Ranchi" class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <!-- Right Side Content -->
                <div class="col-md-7">
                    <div class="head-title mb-2">
                        <h2>Why Choose <span>Nasha Mukti Kendra Ranchi</span>?</h2>
                    </div>
                    <p>
                        At <strong>Nasha Mukti Kendra Ranchi</strong>, we are committed to providing
                        ethical, compassionate, and effective care for individuals struggling with
                        <strong>alcohol addiction</strong>, <strong>drug addiction</strong>,
                        and <strong>mental health challenges</strong>.
                        Our team of experienced doctors, counselors, and therapists create
                        personalized recovery plans for each patient.
                    </p>
                    <p>
                        With structured programs including <strong>detoxification</strong>,
                        <strong>counseling sessions</strong>, <strong>yoga and meditation</strong>,
                        and <strong>12-step recovery programs</strong>, we ensure a holistic approach
                        that focuses on the physical, mental, and emotional well-being of every individual.
                    </p>
                    
                    <p class="mt-3  text-danger">
                        Choose <strong>Nasha Mukti Kendra Ranchi</strong> to start your journey
                        towards recovery, positivity, and a healthy, addiction-free life.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================================ -->
    <?php include("testimonials.php"); ?>
    <!-- ================================================================ -->
    
    <!-- =============================================================== -->
    <?php include("faq.php"); ?>
    <!-- ================================================================ -->
    <?php include("contact.php"); ?>
    <!-- ================================================================ -->
    <?php include("common/footer.php"); ?>
</body>
<script>
    (function () {
        'use strict';
        var form = document.getElementById('appointmentForm');

        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                event.preventDefault();

                // Get form values
                var name = document.getElementById('name').value;
                var number = document.getElementById('number').value;
                var email = document.getElementById('email').value || 'N/A';
                var address = document.getElementById('address').value || 'N/A';
                var service = document.getElementById('service').value;
                var date = document.getElementById('date').value;
                var time = document.getElementById('time').value;
                var message = document.getElementById('message').value || 'N/A';

                // WhatsApp number (replace with your number, country code without +)
                var whatsappNumber = '919288287732';

                // Construct message
                var whatsappMessage = `*New Appointment Request*\n\n*Name:* ${name}\n*Mobile:* ${number}\n*Email:* ${email}\n*Address:* ${address}\n*Service:* ${service}\n*Date:* ${date}\n*Time:* ${time}\n*Message:* ${message}`;

                var encodedMessage = encodeURIComponent(whatsappMessage);

                // Open WhatsApp
                window.open(`https://wa.me/${whatsappNumber}?text=${encodedMessage}`, '_blank');
            }

            form.classList.add('was-validated');
        }, false);
    })();
</script>

</html>