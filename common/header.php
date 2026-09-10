<style>
    /* ================= Top Header & Navbar ================= */
    header {
        position: sticky;
        top: 0;
        width: 100%;
        z-index: 1030;
        background: #ffffff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }

    .custom-navbar {
        background: #ffffff !important;
        padding: 8px 15px;
        transition: all 0.3s ease;
    }

    .navbar-brand img {
        height: 60px;
        width: auto;
        object-fit: contain;
        transition: all 0.3s ease;
    }

    /* Mobile Only Action Buttons (WhatsApp + Call + Hamburger) */
    .mobile-header-actions {
        display: none;
    }

    /* WhatsApp Button in Mobile Header */
    .btn-nav-whatsapp {
        background-color: #0e8345;
        color: #ffffff !important;
        font-weight: 700;
        font-size: 13px;
        padding: 6px 12px;
        border-radius: 6px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-nav-whatsapp:hover {
        background-color: #0b6837;
        color: #ffffff !important;
    }

    /* Phone Button in Mobile Header */
    .btn-nav-phone {
        background-color: #dc2626;
        color: #ffffff !important;
        font-weight: 800;
        font-size: 13px;
        padding: 6px 12px;
        border-radius: 6px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-nav-phone:hover {
        background-color: #b91c1c;
        color: #ffffff !important;
    }

    /* Hamburger Toggler */
    .navbar-toggler-btn {
        background: transparent;
        border: none;
        padding: 4px 6px;
        display: inline-flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 5px;
        cursor: pointer;
    }

    .navbar-toggler-btn:focus {
        outline: none;
        box-shadow: none;
    }

    .navbar-toggler-btn .bar {
        width: 26px;
        height: 3px;
        background-color: #1f2937;
        border-radius: 2px;
        transition: all 0.3s ease;
    }

    /* Navigation Links */
    .navbar-nav .nav-item {
        margin: 0 6px;
    }

    .navbar-nav .nav-link {
        color: #1f2937 !important;
        font-weight: 600;
        font-size: 15px;
        padding: 8px 12px;
        transition: all 0.25s ease;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link:focus {
        color: var(--primary-color, #28a745) !important;
    }

    /* Dropdown */
    .navbar-nav .dropdown-menu {
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        background: #ffffff;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
        padding: 8px 0;
        animation: fadeInMenu 0.25s ease;
    }

    .navbar-nav .dropdown-item {
        color: #374151;
        font-weight: 500;
        padding: 8px 20px;
        font-size: 14.5px;
        transition: all 0.2s ease;
    }

    .navbar-nav .dropdown-item:hover {
        background-color: #f0fdf4;
        color: var(--primary-color, #16a34a);
    }

    .btn-nav-book {
        background: var(--primary-color, #16a34a);
        color: #ffffff !important;
        font-weight: 600;
        font-size: 14px;
        padding: 7px 18px;
        border-radius: 25px;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-nav-book:hover {
        background: #15803d;
        box-shadow: 0 4px 12px rgba(22, 163, 74, 0.25);
    }

    @keyframes fadeInMenu {
        from {
            opacity: 0;
            transform: translateY(6px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Mobile Responsive Header Styles (Only max-width: 991px) */
    @media (max-width: 991px) {
        .custom-navbar {
            padding: 6px 12px;
        }

        .navbar-brand img {
            height: 48px;
        }

        /* Show mobile buttons and toggle on mobile ONLY */
        .mobile-header-actions {
            display: flex !important;
            align-items: center;
            gap: 8px;
        }

        .navbar-collapse {
            background: #ffffff;
            border-top: 1px solid #f3f4f6;
            padding: 15px 10px;
            margin-top: 8px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.06);
            border-radius: 0 0 12px 12px;
        }

        .navbar-nav .nav-link {
            padding: 10px 15px;
            border-radius: 6px;
        }

        .navbar-nav .nav-link:hover {
            background-color: #f9fafb;
        }
    }

    @media (max-width: 420px) {
        .btn-nav-whatsapp,
        .btn-nav-phone {
            font-size: 11.5px;
            padding: 5px 8px;
        }
        .mobile-header-actions {
            gap: 6px;
        }
    }
</style>

<!-- ================= Header & Navbar ================= -->
<header>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="<?= $base_url ?>">
                <img src="<?= $base_url ?>assets/images/logo/logo.png?v=2" alt="Nasha Mukti Kendra Ranchi Logo">
            </a>

            <!-- Mobile Only Action Buttons & Hamburger (Hidden on Desktop) -->
            <div class="mobile-header-actions ms-auto">
                <!-- WhatsApp Button (Mobile only) -->
                <a href="https://wa.me/919288287732" target="_blank" class="btn-nav-whatsapp">
                    WhatsApp
                </a>

                <!-- Phone Button (Mobile only) -->
                <a href="tel:+919288287732" class="btn-nav-phone">
                    92882 87732
                </a>

                <!-- Hamburger Toggle (Mobile only) -->
                <button class="navbar-toggler-btn" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>

            <!-- Desktop & Mobile Nav Links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center my-2 my-lg-0 ms-lg-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>about-us.php">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu shadow-sm" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/alcohol-addiction.php">Alcohol Addiction</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/drugs-addiction.php">Drugs Addiction</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/whitener-addiction.php">Whitener Addiction</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/heroin-addiction.php">Heroin Addiction</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/marijuana-addiction.php">Marijuana Addiction</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/detoxification.php">Detoxification</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/cocaine-addiction.php">Cocaine Addiction</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/mental-health.php">Mental Health</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>services/depression-treatment.php">Depression Treatment</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>blogs">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>contact-us.php">Contact Us</a></li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="btn-nav-book" href="<?= $base_url ?>book-now.php">Book Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>