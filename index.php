<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/config.php"); ?>
    <?php include("common/head.php"); ?>
    <?php include("common/plugins.php"); ?>
    <style>
        /* ================= Bulletproof Hero Banner Styles ================= */
        .hero-banner-section {
            position: relative;
            width: 100%;
            min-height: 520px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-color: #0f172a;
        }

        .hero-bg-media {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .hero-bg-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 25%;
            display: block;
        }

        .hero-shade-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.7) 0%, rgba(15, 23, 42, 0.8) 100%);
            z-index: 2;
        }

        .hero-text-container {
            position: relative;
            z-index: 5;
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            padding: 45px 15px;
            text-align: center;
            color: #ffffff;
        }

        .hero-tagline {
            color: #ffffff;
            font-size: 1.35rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.9);
            letter-spacing: 0.3px;
        }

        .hero-heading {
            color: #ffffff;
            font-size: 2.75rem;
            font-weight: 800;
            margin-bottom: 18px;
            line-height: 1.25;
            text-shadow: 0 3px 10px rgba(0, 0, 0, 0.95);
        }

        .hero-contact-callout {
            color: #ffffff;
            font-size: 1.55rem;
            font-weight: 700;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.9);
        }

        .hero-cyan-call-btn {
            display: inline-block;
            background: #4ec6e0;
            color: #ffffff !important;
            font-size: 2.35rem;
            font-weight: 800;
            padding: 12px 45px;
            border-radius: 18px;
            border: 3.5px solid #ffffff;
            box-shadow: 0 8px 25px rgba(78, 198, 224, 0.5), 0 4px 12px rgba(0, 0, 0, 0.4);
            text-decoration: none;
            letter-spacing: 1.5px;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .hero-cyan-call-btn:hover {
            background: #3bb2cd;
            transform: scale(1.04);
            box-shadow: 0 12px 30px rgba(78, 198, 224, 0.7);
            color: #ffffff !important;
        }

        @media (max-width: 768px) {
            .hero-banner-section {
                min-height: 440px;
            }
            .hero-tagline {
                font-size: 1.1rem;
            }
            .hero-heading {
                font-size: 1.95rem;
                margin-bottom: 14px;
            }
            .hero-contact-callout {
                font-size: 1.25rem;
                margin-bottom: 14px;
            }
            .hero-cyan-call-btn {
                font-size: 1.65rem;
                padding: 10px 28px;
                border-radius: 14px;
                border-width: 2.5px;
            }
        }

        @media (max-width: 420px) {
            .hero-heading {
                font-size: 1.6rem;
            }
            .hero-cyan-call-btn {
                font-size: 1.4rem;
                padding: 8px 20px;
            }
        }
    </style>
</head>

<body>
    <?php include("common/header.php"); ?>
    
    <!-- ================= Hero Section (Single Static Building Image with Cyan Phone Box) ================= -->
    <section class="hero-banner-section">
        <div class="hero-bg-media">
            <img src="<?= $base_url ?>assets/images/banner/banner.jpg" alt="Nasha Mukti Kendra Ranchi Building">
            <div class="hero-shade-overlay"></div>
        </div>

        <div class="hero-text-container">
            <p class="hero-tagline">
                सबसे Affordable और सुरक्षित केंद्र in Ranchi
            </p>

            <h1 class="hero-heading">
                Nasha Mukti Kendra Ranchi
            </h1>

            <div class="hero-contact-callout">
                <span>📞</span> संपर्क करें
            </div>

            <div>
                <a href="tel:+919288287732" class="hero-cyan-call-btn" title="Call Now">
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

                <!-- Drugs Addiction -->
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
                            <p class="card-text">Holistic rehabilitation for <strong>substance abuse</strong> and drug
                                dependence with expert medical care, psychiatric support, and relapse prevention.</p>
                        </div>
                    </div>
                </div>

                <!-- Whitener Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/3.jpg" class="card-img-top"
                                alt="Inhalant & Whitener Addiction Treatment Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/whitener-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Whitener Addiction Treatment</h5>
                            <p class="card-text">Specialized therapy and counseling for individuals addicted to
                                <strong>inhalants and whiteners</strong>, focusing on behavioral recovery.</p>
                        </div>
                    </div>
                </div>

                <!-- Heroin Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/4.jpg" class="card-img-top"
                                alt="Heroin Addiction Treatment in Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/heroin-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Heroin Addiction Treatment</h5>
                            <p class="card-text">Structured <strong>opiate de-addiction programs</strong> including
                                medical detoxification, psychological support, and long-term rehabilitation.</p>
                        </div>
                    </div>
                </div>

                <!-- Marijuana Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/5.jpg" class="card-img-top"
                                alt="Marijuana / Weed De-Addiction Centre Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/marijuana-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Marijuana Addiction Treatment</h5>
                            <p class="card-text">Therapeutic support to help individuals break free from <strong>cannabis
                                    and marijuana dependence</strong> with lifestyle modifications.</p>
                        </div>
                    </div>
                </div>

                <!-- Detoxification -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/6.png" class="card-img-top"
                                alt="Medical Detoxification Program Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/detoxification.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Detoxification Treatment</h5>
                            <p class="card-text">24/7 medically supervised <strong>detox programs</strong> to safely
                                eliminate toxins from the body and manage withdrawal symptoms comfortably.</p>
                        </div>
                    </div>
                </div>

                <!-- Cocaine Addiction -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/7.jpg" class="card-img-top"
                                alt="Cocaine Addiction Treatment in Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/cocaine-addiction.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cocaine Addiction Treatment</h5>
                            <p class="card-text">Intensive rehabilitation for <strong>stimulant addiction</strong>,
                                combining cognitive therapy, behavioral modification, and counseling.</p>
                        </div>
                    </div>
                </div>

                <!-- Mental Health -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/8.jpg" class="card-img-top"
                                alt="Mental Health & Psychological Care Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/mental-health.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mental Health Treatment</h5>
                            <p class="card-text">Comprehensive psychological support and psychiatric care for
                                <strong>anxiety, bipolar disorder, and emotional wellness</strong>.</p>
                        </div>
                    </div>
                </div>

                <!-- Depression Treatment -->
                <div class="col-md-4">
                    <div class="card service-card h-100 shadow-sm">
                        <div class="card-img-wrapper">
                            <img src="<?= $base_url ?>/assets/images/services/9.jpg" class="card-img-top"
                                alt="Depression Treatment & Counseling Ranchi">
                            <div class="card-overlay">
                                <a href="<?= $base_url ?>services/depression-treatment.php" class="btn btn-overlay">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Depression Treatment</h5>
                            <p class="card-text">Professional psychotherapy, lifestyle coaching, and counseling to help
                                overcome <strong>clinical depression and stress</strong>.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================================================================ -->
    <!-- Video Section -->
    <section class="video-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Video Thumbnail with Play Button -->
                <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                    <div class="video-wrapper">
                        <img src="<?= $base_url ?>assets/images/background/2.jpg" alt="Centre Video"
                            class="img-fluid rounded shadow">
                        <a href="https://www.youtube.com/watch?v=YOUR_VIDEO_ID" target="_blank" class="play-btn">
                            <i class="bi bi-play-fill"></i>
                        </a>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="col-lg-6 text-white text-md-start text-center">
                    <h2 class="fw-bold mb-3 text-white">Experience Recovery at Our Centre</h2>
                    <p class="lead mb-4">
                        Watch how our dedicated team and world-class facilities help individuals reclaim their lives
                        from addiction.
                    </p>
                    <a href="contact-us.php" class="btn-pro">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================================================== -->
    <section class="py-5 who-we-are">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Side Image -->
                <div class="col-md-5 mb-4 mb-md-0 text-center">
                    <div class="about-images">
                        <img src="<?= $base_url ?>assets/images/about/about.jpg" alt="About Nasha Mukti Kendra Ranchi"
                            class="img-fluid rounded shadow">
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
                    
                    <p class="mt-3 text-danger">
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
    <?php include("common/network-section.php"); ?>
    <!-- =============================================================== -->
    <?php include("faq.php"); ?>
    <!-- ================================================================ -->
    <?php include("contact.php"); ?>
    <!-- ================================================================ -->
    <?php include("common/footer.php"); ?>
</body>

</html>