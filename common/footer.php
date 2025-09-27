<!-- Bootstrap 5.3.3 JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- ========================================================================================= -->
<!-- Footer CSS -->
<style>
    /* Enhanced Footer */
    footer {
        background: linear-gradient(135deg, var(--primary-color), #003366);
        color: var(--tertiary-color);
        padding: 60px 0 30px;
        font-family: "Segoe UI", sans-serif;
        position: relative;
    }

    footer::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: var(--tertiary-color);
        opacity: 0.2;
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
            <!-- About -->
            <div class="col-md-5">
                <img src="assets/images/logo/logo.png" alt="Hansraj Enterprises Logo" class="footer-logo"
                    style="width:80px">
                <div class="py-2">
                    <h3>About Ehsaas Nasha Mukti Kendra</h3>
                    <p class="text-justify">
                        Ehsaas Life Care Treatments & Mental Rehabilitation Centre is an innovative, top-notch
                        rehabilitation centre that focuses on patients’ personal needs by delivering ethical, effective,
                        and professional care.
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-3">
                <h3>Quick Links</h3>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="<?= $base_url ?>" class="text-white">Home</a></li>
                    <li class="mb-2"><a href="#about" class="text-white">About Us</a></li>
                    <li class="mb-2"><a href="#services" class="text-white">Our Services</a></li>
                    <li class="mb-2"><a href="#gallery" class="text-white">Gallery</a></li>
                    <li class="mb-2"><a href="#contact" class="text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info + Social -->
            <div class="col-md-4">
                <h3>Contact Us</h3>
                <p>
                    <strong>Address:</strong>
                    C 178/112 Old Home Guard Office Daudpur Chauraha, Gorakhpur, Uttar Pradesh 273001
                </p>

                <p><strong>Phone:</strong> <a href="tel:+917272818208" class="text-white"> +91 72728 18208</a></p>
                <p><strong>Phone:</strong> <a href="tel:+917272818209" class="text-white"> +91 72728 18209</a></p>

                <p><strong>Email:</strong> <a href="mailto:ehsaasgroup2015@gmail.com"
                        class="text-white">ehsaasgroup2015@gmail.com</a></p>
                <p><strong>Email:</strong> <a href="mailto:infoehasaasgkp@gmail.com"
                        class="text-white">infoehasaasgkp@gmail.com</a></p>
                <p><strong>Email:</strong> <a href="mailto:infoehasaaslku@gmail.com"
                        class="text-white">infoehasaaslku@gmail.com</a></p>

                <div class="social-icons d-flex mt-3">
                    <a href="https://www.facebook.com/photo/?fbid=122106119504988011&set=a.122106119522988011"
                        target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/rahularyan9191/" target="_blank"><i
                            class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                    <!-- <a href="#"><i class="bi bi-linkedin"></i></a> -->
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="bottom-footer mt-4">
            <p class="mb-0">
                &copy;
                <script>document.write(new Date().getFullYear());</script> Ehsaas Nasha Mukti Kendra | All Rights
                Reserved |
                Website Design & Maintained By: <a href="http://coralwebtechnology.com/"
                    class="text-white text-decoration-none" target="_blank">Coral Web Technology</a>
            </p>
        </div>
    </div>
</footer>