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
                            <p class="mb-0"><a href="tel:+919288287732">+91 92882 87732</a></p>
                        </div>
                    </div>
                </div>

                <!-- Email / Website -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 text-center p-4 h-100">
                        <div class="contact-details-item-icon mb-3">
                            <i class="fa-solid fa-envelope fa-2x text-primary"></i>
                        </div>
                        <div class="contact-details-item-info">
                            <h5 class="mb-2 title">Website</h5>
                            <p class="mb-0"><a href="<?= $base_url ?>" target="_blank"><?= $base_url ?></a></p>
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
                            <p class="mb-0">Ormanjhi, Irba, Rukka, dam road, Dhobiya Ghat, Hutup, Ranchi, Jharkhand 835219</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ====================================== -->
    <?php include("contact.php"); ?>
    <!-- ======================================= -->
   
    <!-- ====================================== -->
    <?php include("common/footer.php"); ?>
</body>

</html>