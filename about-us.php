<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/config.php"); ?>
    <?php include("common/head.php"); ?>
    <?php include("common/plugins.php"); ?>
</head>

<body>
    <?php include("common/header.php"); ?>
    <!-- ========================================= -->
    <section class="py-4">
        <div class="container">
            <div class="breadcrumb-box p-3 d-flex justify-content-between align-items-center flex-wrap">
                <h1 class="h3 fw-bold mb-0">About Us</h1>
                <ul class="breadcrumb-list d-flex flex-wrap mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">About Us</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <section class="about py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="head-title text-center mb-3">
                    <h2>Dr. <span>Sachidanand Sir</span></h2>
                </div>

                <div class="col-md-6">
                    <img src="<?= $base_url ?>/assets/images/about/about.jpg" alt="Dr. Sachidanand Sir"
                        class="img-fluid ">
                </div>

                <div class="col-md-6">
                    <div class="py-2">
                        <h2 class="">Best Nasha Mukti Kendra In <span>Gorakhpur</span></h2>
                    </div>
                    <p class="text-justify text-muted">
                        Ehsaas Life Care Treatments & Mental Rehabilitation Centre in Gorakhpur is a trusted and
                        well-recognized
                        <strong>rehab centre in Gorakhpur</strong> offering complete care for individuals seeking
                        guidance, support,
                        and a healthier lifestyle. Under the leadership of Dr. Sachidanand Sir, we focus on ethical,
                        effective, and
                        professional care designed around each patient’s personal needs.
                    </p>
                    <p class="text-justify text-muted">
                        Our centre follows a structured program that nurtures physical, emotional, and mental well-being
                        through
                        personalized care plans. With a team of experienced professionals, modern facilities, and a calm
                        environment,
                        we ensure that every individual receives the attention and guidance they need for steady
                        progress and recovery.
                    </p>
                    <p class="text-justify text-muted">
                        We believe that recovery is not only about medical treatment but also about building confidence,
                        improving
                        lifestyle, and strengthening family relationships. At Ehsaas Life Care, our mission is to create
                        a safe and
                        positive space where people can focus on growth, balance, and long-term wellness.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================== -->
    <section class="mission-vision-motto py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="head-title">
                    <h2 class="fw-bold">Our <span>Mission, Vision & Motto</span></h2>
                    <p class="text-muted">Guiding lives towards care, support, and recovery at our trusted rehab centre
                        in
                        Gorakhpur.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 card h-100">
                        <h4 class="mb-3">Our Mission</h4>
                        <p>To provide compassionate and ethical care at our <strong>rehab centre in Gorakhpur</strong>,
                            offering structured programs focused on physical health, emotional balance, and mental
                            well-being.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 card h-100">
                        <h4 class="mb-3">Our Vision</h4>
                        <p>To build a healthier community through accessible <strong>mental health care in
                                Gorakhpur</strong> and become a leading <strong>rehabilitation centre in Uttar
                                Pradesh</strong> recognized for trust and recovery support.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 card h-100">
                        <h4 class="mb-3">Our Motto</h4>
                        <p><em>“Care. Support. Recovery.”</em> — Healing starts with care, grows with support, and lasts
                            with recovery at Ehsaas Life Care.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================== -->
    <?php include("common/footer.php"); ?>
    <!-- ============================================= -->
</body>

</html>