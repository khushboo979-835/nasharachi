<!-- ================= Our Nasha Mukti Kendra Network Across Ranchi & Jharkhand ================= -->
<section class="network-section py-5" id="network">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="network-title fw-bold">
                Our <span>Nasha Mukti Kendra</span> Network in Ranchi & Jharkhand
            </h2>
            <div class="network-accent-bar"></div>
            <p class="network-subtitle text-muted mt-3">
                Fast immediate 24/7 emergency ambulance & medical response across all key locations, pin codes & districts.
            </p>
        </div>

        <?php
        // All Ranchi Localities, Blocks, and Pin Code Areas specified by client
        $ranchi_locations = [
            'Lalpur',
            'Doranda',
            'Harmu Housing Colony',
            'Kanke Road',
            'Morabadi',
            'Bariatu',
            'Ratu',
            'Namkum',
            'Ormanjhi',
            'Hatia',
            'Dhurwa',
            'Chutia',
            'Ashok Nagar',
            'Argora',
            'Hehal',
            'Kokar',
            'Hinoo',
            'Kantatoli',
            'Kadru',
            'Hindpiri',
            'BIT Mesra Campus',
            'Tatisilwai',
            'Nagri',
            'Boreya',
            'Bukru',
            'Gagi',
            'Bargai',
            'Ayodhya Enclave',
            'Bariatu Housing Colony',
            'Ranchi University',
            'CMPDI',
            'Banhora',
            'Piska Nagri',
            'Raj Bhawan Area',
            'Governor\'s House Area',
            'Sector 2 Dhurwa',
            'Sector 3 Dhurwa',
            'Balalong',
            'Bara Ghaghra',
            'Bijjulia',
            'Chipra',
            'Buti',
            'Chandwa',
            'Chakla',
            'Chandra',
            'Baredih',
            'Bundu',
            'Adalahatu',
            'Baruhatu',
            'Angara',
            'Silli',
            'Mandar',
            'Chanho',
            'Bero',
            'Itki',
            'Burmu',
            'Khelari',
            'Lapung',
            'Rahe',
            'Sonahatu',
            'Tamar',
            'Ranchi G.P.O.',
            'Lower Bazar',
            'AG Colony',
            'Birsa Munda Airport'
        ];

        // 24 Districts of Jharkhand
        $jharkhand_districts_list = [
            'Ranchi',
            'Bokaro',
            'Chatra',
            'Deoghar',
            'Dhanbad',
            'Dumka',
            'East Singhbhum (Jamshedpur)',
            'Garhwa',
            'Giridih',
            'Godda',
            'Gumla',
            'Hazaribagh',
            'Jamtara',
            'Khunti',
            'Kodarma',
            'Latehar',
            'Lohardaga',
            'Pakur',
            'Palamu',
            'Ramgarh',
            'Sahibganj',
            'Saraikela-Kharsawan',
            'Simdega',
            'West Singhbhum (Chaibasa)'
        ];

        // Pin Code Mapping for Ranchi
        $ranchi_pincodes = [
            '834001' => 'Ranchi G.P.O., Chutia, Lalpur, Kokar, Lower Bazar, Kantatoli',
            '834002' => 'Doranda, Hinoo, Ashok Nagar, Argora, Harmu Housing Colony, AG Colony, Birsa Munda Airport',
            '834003' => 'Raj Bhawan, Governor\'s House Area, Kanke Road (lower parts)',
            '834004' => 'Dhurwa, Sector 2, Sector 3, Balalong, Hatia',
            '834005' => 'Banhora, Hehal, Piska Nagri',
            '834006' => 'Kanke Road, Boreya, Bukru, Gagi',
            '834008' => 'Morabadi, Bariatu (lower), Ranchi University, CMPDI',
            '834009' => 'Bariatu, Bariatu Housing Colony, Ayodhya Enclave, Bargain',
            '834010' => 'Bara Ghaghra, Namkum, Tatisilwai',
            '835215' => 'BIT Mesra Campus',
            '835222' => 'Ratu, Bijjulia, Chipra',
            '835217' => 'Buti, Chandwa',
            '835219' => 'Ormanjhi, Chakla, Chandra, Baredih',
            '835204' => 'Bundu, Adalahatu, Baruhatu',
        ];
        ?>

        <!-- Ranchi Localities Header -->
        <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
            <h3 class="h4 fw-bold mb-0 text-dark">
                <i class="bi bi-geo-alt-fill text-success me-2"></i> Ranchi Key Areas & Localities Coverage
            </h3>
            <span class="badge bg-success py-2 px-3 rounded-pill fs-6">24/7 Service Available</span>
        </div>

        <!-- Ranchi Locations Cards Grid -->
        <div class="row g-3 g-md-4 mb-5">
            <?php foreach ($ranchi_locations as $loc): ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="tel:+919288287732" class="network-card-link text-decoration-none" title="Call Nasha Mukti Kendra <?= htmlspecialchars($loc) ?>">
                        <div class="network-card">
                            <h4 class="network-card-title mb-0">
                                Nasha Mukti Kendra <?= htmlspecialchars($loc) ?>
                            </h4>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pin Code Service Hub Section -->
        <div class="pincode-hub-wrapper p-4 p-md-5 rounded-4 bg-white border shadow-sm mb-5">
            <div class="text-center mb-4">
                <h3 class="fw-bold text-dark mb-2">
                    <i class="bi bi-pin-map-fill text-danger me-2"></i> Ranchi Pin Code Wise Service Network
                </h3>
                <p class="text-muted small">Instant ambulance pickup and admission support across all postal zones of Ranchi.</p>
            </div>

            <div class="row g-3">
                <?php foreach ($ranchi_pincodes as $pin => $areas): ?>
                    <div class="col-lg-6 col-12">
                        <div class="pincode-item-card p-3 rounded-3 h-100">
                            <div class="d-flex align-items-start gap-3">
                                <span class="pin-badge"><?= htmlspecialchars($pin) ?></span>
                                <div>
                                    <h5 class="fw-bold fs-6 mb-1 text-dark">PIN: <?= htmlspecialchars($pin) ?> Coverage Area</h5>
                                    <p class="text-muted small mb-0"><?= htmlspecialchars($areas) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Jharkhand All Districts Header -->
        <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
            <h3 class="h4 fw-bold mb-0 text-dark">
                <i class="bi bi-building-fill-check text-primary me-2"></i> All 24 Districts of Jharkhand
            </h3>
            <span class="badge bg-primary py-2 px-3 rounded-pill fs-6">State-wide Network</span>
        </div>

        <!-- 24 Districts Cards Grid -->
        <div class="row g-3 g-md-4">
            <?php foreach ($jharkhand_districts_list as $district): ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="tel:+919288287732" class="network-card-link text-decoration-none" title="Call Nasha Mukti Kendra <?= htmlspecialchars($district) ?>">
                        <div class="network-card district-card">
                            <h4 class="network-card-title mb-0">
                                Nasha Mukti Kendra <?= htmlspecialchars($district) ?>
                            </h4>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<style>
    /* ================= Network Section Styles ================= */
    .network-section {
        background-color: #f8fafc;
        position: relative;
        border-top: 1px solid #eef2f6;
    }

    .network-title {
        color: #0b3954;
        font-size: 2.2rem;
        letter-spacing: -0.5px;
    }

    .network-title span {
        color: var(--primary-color, #28a745);
    }

    .network-accent-bar {
        width: 65px;
        height: 4px;
        background: var(--primary-color, #28a745);
        margin: 12px auto 0;
        border-radius: 2px;
    }

    .network-subtitle {
        font-size: 1.05rem;
        max-width: 720px;
        margin: 0 auto;
        color: #64748b !important;
    }

    /* Network Card */
    .network-card-link {
        display: block;
        height: 100%;
    }

    .network-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-top: 5px solid #005f73;
        border-radius: 16px;
        padding: 24px 18px;
        text-align: center;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 95px;
    }

    .network-card.district-card {
        border-top-color: #0284c7;
    }

    .network-card-title {
        color: #0b3954;
        font-size: 1.12rem;
        font-weight: 700;
        line-height: 1.35;
        transition: color 0.3s ease;
    }

    /* Hover effect */
    .network-card-link:hover .network-card {
        transform: translateY(-5px);
        box-shadow: 0 14px 28px rgba(0, 95, 115, 0.16);
        border-top-color: var(--primary-color, #28a745);
        background: #ffffff;
    }

    .network-card-link:hover .network-card-title {
        color: var(--primary-color, #28a745);
    }

    /* Pin Code Hub */
    .pincode-hub-wrapper {
        background: #ffffff;
        border: 1px solid #e2e8f0;
    }

    .pincode-item-card {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-left: 4px solid #16a34a;
        transition: all 0.25s ease;
    }

    .pincode-item-card:hover {
        background: #f0fdf4;
        transform: translateX(3px);
    }

    .pin-badge {
        background: #0b3954;
        color: #ffffff;
        font-weight: 700;
        font-size: 0.95rem;
        padding: 5px 12px;
        border-radius: 8px;
        display: inline-block;
        white-space: nowrap;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .network-title {
            font-size: 1.65rem;
        }
        .network-card {
            padding: 18px 14px;
            min-height: 75px;
            border-radius: 12px;
            border-top-width: 4px;
        }
        .network-card-title {
            font-size: 1.02rem;
        }
        .pincode-hub-wrapper {
            padding: 20px 15px !important;
        }
    }
</style>
