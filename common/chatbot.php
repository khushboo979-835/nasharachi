<!-- Floating Contact Widget (Call + WhatsApp) -->
<div class="floating-contact-container">
    <!-- Floating Call Button with Phone Pill -->
    <div class="floating-call-wrap">
        <a href="tel:+919288287732" class="floating-phone-pill">
            +91 92882 87732
        </a>
        <a href="tel:+919288287732" class="floating-btn floating-call-btn" title="Call Us">
            <i class="bi bi-telephone-fill"></i>
        </a>
    </div>

    <!-- Floating WhatsApp Button with Tooltip -->
    <div class="floating-wa-wrap">
        <span class="floating-wa-tooltip">Chat on WhatsApp</span>
        <a href="https://wa.me/919288287732" target="_blank" class="floating-btn floating-wa-btn" title="Chat on WhatsApp">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>
</div>

<style>
    .floating-contact-container {
        position: fixed;
        bottom: 25px;
        right: 25px;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 15px;
    }

    .floating-call-wrap,
    .floating-wa-wrap {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* Floating Call Button */
    .floating-btn {
        width: 54px;
        height: 54px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff !important;
        font-size: 24px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.25);
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        text-decoration: none;
    }

    .floating-call-btn {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        animation: pulseCall 2s infinite;
    }

    .floating-call-btn:hover {
        transform: scale(1.12);
        box-shadow: 0 8px 22px rgba(220, 38, 38, 0.45);
    }

    /* Floating Phone Pill */
    .floating-phone-pill {
        background: #ffffff;
        color: #1f2937 !important;
        font-weight: 700;
        font-size: 13.5px;
        padding: 6px 14px;
        border-radius: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        text-decoration: none;
        border: 1px solid #e5e7eb;
        white-space: nowrap;
        transition: all 0.3s ease;
    }

    .floating-phone-pill:hover {
        background: #f9fafb;
        color: #dc2626 !important;
    }

    /* Floating WhatsApp Button */
    .floating-wa-btn {
        background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
        font-size: 28px;
    }

    .floating-wa-btn:hover {
        transform: scale(1.12);
        box-shadow: 0 8px 22px rgba(37, 211, 102, 0.45);
    }

    /* WhatsApp Tooltip */
    .floating-wa-tooltip {
        background: #ffffff;
        color: #1f2937;
        font-size: 13px;
        font-weight: 600;
        padding: 5px 12px;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        border: 1px solid #e5e7eb;
        white-space: nowrap;
        pointer-events: none;
    }

    @keyframes pulseCall {
        0% {
            box-shadow: 0 0 0 0 rgba(220, 38, 38, 0.6);
        }
        70% {
            box-shadow: 0 0 0 14px rgba(220, 38, 38, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(220, 38, 38, 0);
        }
    }

    @media (max-width: 576px) {
        .floating-contact-container {
            bottom: 18px;
            right: 18px;
            gap: 12px;
        }

        .floating-btn {
            width: 48px;
            height: 48px;
            font-size: 22px;
        }

        .floating-wa-btn {
            font-size: 24px;
        }

        .floating-phone-pill {
            font-size: 12px;
            padding: 5px 10px;
        }

        .floating-wa-tooltip {
            display: none;
        }
    }
</style>