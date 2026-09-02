<!-- Floating Chatbot -->
<div class="chatbot-widget">
    <div class="chatbot-toggle" id="chatbotToggle">
        <i class="bi bi-chat-dots"></i>
    </div>
    <div class="chatbot-options" id="chatbotOptions">
        <a href="tel:+919288287732" class="chatbot-btn call-btn">
            <i class="bi bi-telephone"></i>
        </a>
        <a href="https://wa.me/919288287732" target="_blank" class="chatbot-btn whatsapp-btn">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>
</div>


<style>
    /* Chatbot base */
    .chatbot-widget {
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 9999;
    }

    /* Main toggle button */
    .chatbot-toggle {
        width: 55px;
        height: 55px;
        background: var(--primary-color);
        color: #fff;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        font-size: 24px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .chatbot-toggle:hover {
        transform: rotate(15deg) scale(1.05);
    }

    /* Options container */
    .chatbot-options {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        position: absolute;
        bottom: 70px;
        left: 10px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(20px);
        transition: all 0.4s ease;
    }

    /* Show options when active */
    .chatbot-options.active {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    /* Each button */
    .chatbot-btn {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .chatbot-btn:hover {
        transform: scale(1.1);
    }

    /* Custom colors */
    .call-btn {
        background: #007bff;
        /* Blue */
    }

    .whatsapp-btn {
        background: #25d366;
        /* WhatsApp green */
    }
</style>

<script>
    const chatbotToggle = document.getElementById("chatbotToggle");
    const chatbotOptions = document.getElementById("chatbotOptions");

    chatbotToggle.addEventListener("click", () => {
        chatbotOptions.classList.toggle("active");
    });
</script>