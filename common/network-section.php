<!-- ================= Our Nasha Mukti Kendra Network Across Jharkhand ================= -->
<section class="network-section py-5" id="network">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="network-title fw-bold">
                Our <span>Nasha Mukti Kendra</span> Network
            </h2>
            <div class="network-accent-bar"></div>
            <p class="network-subtitle text-muted mt-3">
                Fast immediate emergency medical response across all key structural nodes.
            </p>
        </div>

        <?php
        $districts = [
            'Ranchi',
            'Bokaro',
            'Chatra',
            'Deoghar',
            'Dhanbad',
            'Dumka',
            'East Singhbhum',
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
            'West Singhbhum'
        ];
        ?>

        <!-- 24 Districts Cards Grid -->
        <div class="row g-4">
            <?php foreach ($districts as $district): ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="tel:+919288287732" class="network-card-link text-decoration-none" title="Contact Nasha Mukti Kendra <?= htmlspecialchars($district) ?>">
                        <div class="network-card">
                            <h3 class="network-card-title mb-0">
                                Nasha Mukti Kendra <?= htmlspecialchars($district) ?>
                            </h3>
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
        font-size: 2.3rem;
        letter-spacing: -0.5px;
    }

    .network-title span {
        color: var(--primary-color, #28a745);
    }

    .network-accent-bar {
        width: 60px;
        height: 4px;
        background: var(--primary-color, #28a745);
        margin: 12px auto 0;
        border-radius: 2px;
    }

    .network-subtitle {
        font-size: 1.05rem;
        max-width: 650px;
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
        padding: 28px 22px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 105px;
    }

    .network-card-title {
        color: #0b3954;
        font-size: 1.18rem;
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

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .network-title {
            font-size: 1.75rem;
        }
        .network-card {
            padding: 22px 18px;
            min-height: 85px;
            border-radius: 14px;
            border-top-width: 4px;
        }
        .network-card-title {
            font-size: 1.08rem;
        }
    }
</style>
