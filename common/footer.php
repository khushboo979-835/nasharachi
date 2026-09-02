<!-- Bootstrap 5.3.3 JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- ========================================================================================= -->
<!-- Footer CSS -->
<style>
    /* Enhanced Footer */
    footer {
        background: var(--secondary-color);
        color: var(--tertiary-color);
        padding: 60px 0 30px;
        font-family: "Segoe UI", sans-serif;
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
        background: var(--tertiary-color);
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

    /* Social Icons */
    .social-icons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        font-size: 18px;
        color: #fff;
        background: rgba(255, 255, 255, 0.15);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        transition: all 0.4s ease;
    }

    .social-icons a:hover {
        background: #ffd700;
        color: #000;
        transform: rotate(360deg);
    }

    /* Bottom Footer */
    .bottom-footer {
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        text-align: center;
        font-size: 13.5px;
        padding-top: 15px;
        margin-top: 40px;
        color: #ccc;
    }

    .bottom-footer a {
        color: #ffd700;
    }

    .bottom-footer a:hover {
        text-decoration: underline;
    }
</style>

<!-- Footer HTML -->
<footer>
    <div class="container">
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
                        and professional care.
                    </p>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-lg-2 col-md-2 col-6">
                <h3>Quick Links</h3>
                <ul class="list-unstyled">
                    <li><a href="<?= $base_url ?>">Home</a></li>
                    <li><a href="<?= $base_url ?>about-us.php">About Us</a></li>
                    <li><a href="<?= $base_url ?>gallery.php">Gallery</a></li>
                    <li><a href="<?= $base_url ?>contact-us.php">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3: Services -->
            <div class="col-lg-2 col-md-2 col-6">
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

            <!-- Column 4: Contact + Social -->
            <div class="col-lg-4 col-md-6">
                <h3>Contact Us</h3>
                <div class="footer-contact">
                    <p><strong>Address:</strong><br> Ormanjhi, Irba, Rukka, dam road, Dhobiya Ghat, Hutup, Ranchi, Jharkhand 835219
                    </p>
                    <p><strong>Phone:</strong> <a href="tel:+919955118285">+91 99551 18285</a><br>
                        <strong>WhatsApp:</strong> <a href="https://wa.me/919955118285" target="_blank">+91 99551 18285</a>
                    </p>
                    
                    <!-- <div class="social-icons d-flex mt-3">
                        <a href="https://www.facebook.com/photo/?fbid=122106119504988011&set=a.122106119522988011"
                            target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/rahularyan9191/" target="_blank"><i
                                class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div> -->
                </div>
            </div>

        </div>

        <!-- Bottom Footer -->
        <div class="bottom-footer mt-5">
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