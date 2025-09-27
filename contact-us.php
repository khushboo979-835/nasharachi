<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/config.php"); ?>
    <?php include("common/head.php"); ?>
    <?php include("common/plugins.php"); ?>
</head>

<body>
    <?php include("common/header.php"); ?>
    <!-- ===================================== -->
    <section class="py-4">
        <div class="container">
            <div class="breadcrumb-box p-3 d-flex justify-content-between align-items-center flex-wrap">
                <h1 class="h3 fw-bold mb-0">Contact Us</h1>
                <ul class="breadcrumb-list d-flex flex-wrap mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ===================================== -->
    <section class="contact-details py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Phone -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center p-4 h-100">
                        <div class="contact-details-item-icon mb-3">
                            <i class="fa-solid fa-phone fa-2x text-primary"></i>
                        </div>
                        <div class="contact-details-item-info">
                            <h5 class="mb-2 title">Call Us</h5>
                            <p class="mb-0"><a href="tel:+917272818208">+91 72728 18208</a></p>
                            <p class="mb-0"><a href="tel:+917272818209">+91 72728 18209</a></p>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center p-4 h-100">
                        <div class="contact-details-item-icon mb-3">
                            <i class="fa-solid fa-envelope fa-2x text-primary"></i>
                        </div>
                        <div class="contact-details-item-info">
                            <h5 class="mb-2 title">Email Us</h5>
                            <p class="mb-0"><a href="mailto:ehsaasgroup2015@gmail.com">ehsaasgroup2015@gmail.com</a></p>
                            <p class="mb-0"><a href="mailto:infoehasaasgkp@gmail.com">infoehasaasgkp@gmail.com</a></p>
                            <p class="mb-0"><a href="mailto:infoehasaaslku@gmail.com">infoehasaaslku@gmail.com</a></p>
                        </div>
                    </div>
                </div>

                <!-- Address -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center p-4 h-100">
                        <div class="contact-details-item-icon mb-3">
                            <i class="fa-solid fa-location-dot fa-2x text-primary"></i>
                        </div>
                        <div class="contact-details-item-info">
                            <h5 class="mb-2 title">Visit Us</h5>
                            <p class="mb-0">C 178/112 Old Home Guard Office Daudpur Chauraha, Gorakhpur, Uttar Pradesh
                                273001</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- ====================================== -->
    <?php include("contact.php"); ?>
    <!-- ======================================= -->
    <section>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57014.39626378059!2d83.34069794941092!3d26.731616144099274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3991447ee4453c47%3A0x932f417761eefebe!2sEhsaas%20Nasha%20Mukti%20Kendra!5e0!3m2!1sen!2sin!4v1757935900100!5m2!1sen!2sin"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!-- ====================================== -->
    <?php include("common/footer.php"); ?>
</body>

</html>