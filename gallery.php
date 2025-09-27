<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("common/config.php"); ?>
    <?php include("common/head.php"); ?>
    <?php include("common/plugins.php"); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
</head>

<body>
    <?php include("common/header.php"); ?>
    <!-- ================================= -->
    <section class="py-4">
        <div class="container">
            <div class="breadcrumb-box p-3 d-flex justify-content-between align-items-center flex-wrap">
                <h1 class="h3 fw-bold mb-0">Gallery</h1>
                <ul class="breadcrumb-list d-flex flex-wrap mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= $base_url ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Gallery</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================================== -->
    <!-- Gallery Section -->
    <style>
        .gallery img {
            height: 200px;
            object-fit: cover;
            border-radius: 10% 20% 10% 20% / 20% 10% 20% 0;
            border: 5px solid var(--tertiary-color);
        }

        .gallery .card {
            height: 200px;
            object-fit: cover;
            border-radius: 10% 20% 10% 20% / 20% 10% 20% 0;
            border: 5px solid var(--primary-color);
        }

        .gallery {
            margin-top: 60px;
        }
    </style>
    <section class="py-5 gallery ">
        <div class="container">
            <div class="row">
                <div class="head-title text-center mb-3">
                    <h2>Our <span>Gallery</span></h2>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/1.png" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/1.png" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/2.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/2.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/3.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/3.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/4.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/4.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/5.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/5.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/6.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/6.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/7.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/7.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/8.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/8.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/9.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/9.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/10.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/10.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/11.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/11.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/12.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/12.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/13.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/13.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/14.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/14.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/15.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/15.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/16.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/16.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/17.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/17.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/18.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/18.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/19.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/19.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/20.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/20.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/21.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/21.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/22.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/22.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/23.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/23.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/24.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/24.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/25.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/25.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/26.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/26.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/27.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/27.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/28.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/28.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/29.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/29.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/30.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/30.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/31.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/31.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/32.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/32.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/33.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/33.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/34.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/34.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/35.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/35.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/36.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/36.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/37.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/36.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/38.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/38.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/39.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/39.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/40.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/40.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/41.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/41.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/42.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/42.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/43.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/43.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="<?= $base_url; ?>assets/images/gallery/44.jpg" data-fancybox="gallery" data-caption="">
                            <img src="<?= $base_url; ?>assets/images/gallery/44.jpg" class="card-img-top img-fluid"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <?php include("common/footer.php"); ?>
</body>
<script>
    // Initialize AOS (Animate on Scroll)
    AOS.init({
        duration: 1000, // Animation duration
        once: true      // Animation happens only once while scrolling
    });

    // Fancybox initialization (optional, Fancybox 5 auto-inits)
    Fancybox.bind("[data-fancybox='gallery']", {
        Thumbs: {
            autoStart: true, // Show thumbnails in the lightbox
        },
        Toolbar: {
            display: [
                "close",
                "thumbs",
                "zoom",
                "slideshow"
            ]
        }
    });
</script>

</html>