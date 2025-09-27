<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/config.php"); ?>
    <?php include("common/head.php"); ?>
    <?php include("common/plugins.php"); ?>
</head>

<body>
    <?php include("common/header.php"); ?>
    <!-- ==================================== -->
    <section class="hero">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/banner/1.jpg" class="d-block w-100"
                        alt="Ehsaas Nasha Mukti Kendra Gorakhpur">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/banner/2.jpg" class="d-block w-100" alt="Rehabilitation Centre Gorakhpur">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/banner/3.jpg" class="d-block w-100" alt="Best Nasha Mukti Kendra Gorakhpur">
                </div>
            </div>

            <!-- ✅ Appointment Form Overlay -->
            <div class="hero-card d-flex justify-content-center align-items-center">
                <div class="card shadow-lg p-4">
                    <h3 class="mb-4 text-center title">Book an Appointment</h3>
                    <form id="appointmentForm" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <!-- Name -->
                            <div class="col-md-6 col-6">
                                <input type="text" id="name" class="form-control" placeholder="Full Name *" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <!-- Mobile -->
                            <div class="col-md-6 col-6">
                                <input type="tel" id="number" class="form-control" placeholder="Mobile Number *" pattern="[0-9]{10}"
                                    required>
                                <div class="invalid-feedback">Enter valid 10-digit number.</div>
                            </div>
                            <!-- Email -->
                            <div class="col-md-6 col-6">
                                <input type="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <!-- Address -->
                            <div class="col-md-6 col-6">
                                <input type="text" id="address" class="form-control" placeholder="Address">
                            </div>
                            <!-- Service -->
                            <div class="col-md-6 col-6">
                                <select id="service" class="form-select" required>
                                    <option value="" disabled selected>Select Service *</option>
                                    <option class="Alcohol Addiction Treatment">Alcohol Addiction Treatment</option>
                                    <option class="Drugs Addiction Treatment">Drugs Addiction Treatment</option>
                                    <option class="Marijuana Addiction Treatment">Marijuana Addiction Treatment</option>
                                    <option class="Whitener Addiction Treatment">Whitener Addiction Treatment</option>
                                    <option class="Heroin Addiction Treatment">Heroin Addiction Treatment</option>
                                    <option class="Cocaine Addiction Treatment">Cocaine Addiction Treatment</option>
                                    <option class="Detoxification">Detoxification</option>
                                    <option class="Depression Treatment">Depression Treatment</option>
                                    <option class="Mental Health">Mental Health</option>
                                </select>
                                <div class="invalid-feedback">Please select a service.</div>
                            </div>
                            <!-- Date -->
                            <div class="col-md-3 col-6">
                                <input type="date" id="date" class="form-control" required>
                                <div class="invalid-feedback">Select a date.</div>
                            </div>
                            <!-- Time -->
                            <div class="col-md-3 col-6">
                                <input type="time" id="time" class="form-control" required>
                                <div class="invalid-feedback">Select a time.</div>
                            </div>
                            <!-- Message -->
                            <div class="col-md-12 col-6">
                                <textarea class="form-control" id="message" rows="1" placeholder="Message (optional)"></textarea>
                            </div>
                            <!-- Submit -->
                            <div class="col-md-12  text-center mt-3">
                                <button type="submit" class="btn-pro">Schedule Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

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
    <section class="py-5 about-us bg-white">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="head-title text-center mb-3">
                    <h2>About <span>Dr. Sachidanand</span></h2>
                </div>

                <div class="col-md-6 mb-3">
                    <img src="<?= $base_url ?>/assets/images/about/about.jpg" alt="Dr. Sachidanand" class="img-fluid ">
                </div>

                <div class="col-md-6">
                    <p class="text-muted">
                        <strong class="text-primary">Ehsaas Life Care Treatments & Mental Rehabilitation Centre</strong>
                        is
                        one of the leading centres in Gorakhpur, trusted as the <strong class="text-primary">best nasha
                            mukti</strong>
                        facility for those struggling with addiction. We are committed to helping individuals and
                        families
                        overcome the challenges of substance abuse with compassion, expertise, and a structured recovery
                        process.
                    </p>

                    <p class="text-muted">
                        Our <strong class="text-primary">nasha mukti kendra</strong> is designed to provide a safe and
                        healing
                        environment where patients feel supported at every step. From medically supervised detox
                        programs to
                        personalized counseling, therapy sessions, and wellness activities, we ensure complete physical,
                        emotional, and psychological care. Each recovery journey is guided by experienced doctors,
                        therapists, and counselors who are dedicated to long-term healing.
                    </p>

                    <p class="text-muted">
                        At Ehsaas, we follow a holistic approach that not only addresses addiction but also promotes
                        positive lifestyle changes. Our treatment plans include group therapy, one-to-one counseling,
                        yoga, meditation, and continuous family support. By combining medical expertise with mental and
                        emotional rehabilitation, our <strong class="text-primary">rehabilitation centre</strong>
                        empowers
                        individuals to regain self-confidence and live a healthier, addiction-free life.
                    </p>

                    <p class="text-muted">
                        We believe that recovery is not just about quitting addiction but building a new path filled
                        with
                        hope, positivity, and personal growth. If you are searching for a trusted place in Gorakhpur,
                        Ehsaas
                        stands as your reliable partner in transformation – where every recovery is possible and every
                        life
                        is valued.
                    </p>

                    <div class="py-1">
                        <a href="about-us.php" class="btn-pro">
                            Read More
                        </a>
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
                    <h2>Our <span>Nasha Mukti Services & Treatments in Gorakhpur</span></h2>
                    <p class="text-muted">
                        At <strong>Ehsaas Nasha Mukti Kendra</strong>, we provide effective and
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
                                alt="Alcohol Addiction Treatment in Gorakhpur">
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
                                alt="Drug Addiction Treatment in Gorakhpur">
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
                                alt="Marijuana Addiction Rehabilitation Gorakhpur">
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
                                alt="Whitener Addiction Treatment in Gorakhpur">
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
                                alt="Heroin Addiction Treatment in Gorakhpur">
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
                                alt="Cocaine Addiction Treatment in Gorakhpur">
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
                                alt="Detoxification Treatment in Gorakhpur">
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
                                alt="Depression Treatment in Gorakhpur">
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
                                alt="Mental Health Treatment in Gorakhpur">
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
    <!-- ============================================================== -->
    <?php include("youtube.php"); ?>
    <!-- =============================================================== -->
    <section class="why-choose py-2">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-md-5 mb-1 mb-md-0">
                    <div class="row">
                        <div class="col-12 mb-2 image-1">
                            <img src="assets/images/banner/3.jpg"
                                alt="Why Choose Ehsaas Nasha Mukti Kendra in Gorakhpur" class="img-fluid ">
                        </div>
                        <div class="col-12 mb-2 image-2">
                            <img src="assets/images/gallery/6.jpg"
                                alt="Why Choose Ehsaas Nasha Mukti Kendra in Gorakhpur" class="img-fluid ">
                        </div>
                    </div>
                </div>

                <!-- Right Side Content -->
                <div class="col-md-7">
                    <div class="head-title mb-2">
                        <h2>Why Choose <span>Ehsaas Nasha Mukti Kendra</span>?</h2>
                    </div>
                    <p>
                        At <strong>Ehsaas Nasha Mukti Kendra in Gorakhpur</strong>, we are committed to providing
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
                    <ul class="list-unstyled mt-3">
                        <li class="list-group-item">✔ 24/7 Medical Supervision & Support</li>
                        <li class="list-group-item">✔ Safe & Peaceful Rehabilitation Environment</li>
                        <li class="list-group-item">✔ Expert Team of Doctors, Psychologists & Therapists</li>
                        <li class="list-group-item">✔ Tailored Programs for <strong>alcohol</strong>,
                            <strong>drugs</strong>,
                            <strong>heroin</strong>, <strong>cocaine</strong>, and <strong>marijuana addiction</strong>
                        </li>
                        <li class="list-group-item">✔ Focus on <strong>mental health care</strong> & <strong>depression
                                treatment</strong></li>
                    </ul>
                    <p class="mt-3  text-danger">
                        Choose <strong>Ehsaas Nasha Mukti Kendra</strong> to start your journey
                        towards recovery, positivity, and a healthy, addiction-free life.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================================ -->
    <?php include("testimonials.php"); ?>
    <!-- ================================================================ -->
    <section class="network py-5">
        <div class="container">
            <div class="row">
                <div class="head-title mb-4 text-center">
                    <h2>Our <span>Network Area</span></h2>
                    <p>We provide rehabilitation and mental health support to individuals and families across Gorakhpur
                        and nearby regions.</p>
                </div>
            </div>
            <div class="row g-3 justify-content-center text-center">
                <div class="col-md-3 col-6">
                    <div class="p-3 border rounded shadow-sm">Gorakhpur</div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 border rounded shadow-sm">Kushinagar</div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 border rounded shadow-sm">Maharajganj</div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 border rounded shadow-sm">Deoria</div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 border rounded shadow-sm">Basti</div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 border rounded shadow-sm">Sant Kabir Nagar</div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 border rounded shadow-sm">Azamgarh</div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 border rounded shadow-sm">Ballia</div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 border rounded shadow-sm">Jaunpur</div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="p-3 border rounded shadow-sm">Varanasi</div>
                </div>
            </div>
        </div>
    </section>

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
                var whatsappNumber = '919876543210';

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