<!-- 1. Swiper + Fancybox CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

<!-- 2. YouTube Video Gallery Section -->
<section class="video-slider" id="videos">
    <div class="container">
        <div class="head-title text-center mb-2">
            <h2>Our <span>Videos</span></h2>
        </div>
        <div class="swiper videoSwiper">
            <div class="swiper-wrapper">

                <!-- Video 1 -->
                <div class="swiper-slide">
                    <a data-fancybox="video-gallery" data-type="iframe"
                        href="https://www.youtube.com/embed/9dwq42dNfHg">
                        <div class="video-thumb">
                            <img src="https://img.youtube.com/vi/9dwq42dNfHg/maxresdefault.jpg" alt="video 1" />
                            <span class="play-btn">▶</span>
                        </div>
                    </a>
                </div>

                <!-- Video 2 -->
                <div class="swiper-slide">
                    <a data-fancybox="video-gallery" data-type="iframe"
                        href="https://www.youtube.com/embed/1vDQdOTcQwo">
                        <div class="video-thumb">
                            <img src="https://img.youtube.com/vi/1vDQdOTcQwo/maxresdefault.jpg" alt="video 2" />
                            <span class="play-btn">▶</span>
                        </div>
                    </a>
                </div>

                <!-- Video 3 -->
                <div class="swiper-slide">
                    <a data-fancybox="video-gallery" data-type="iframe"
                        href="https://www.youtube.com/embed/9amFSR-HPhE?si=nLcdfU6XC_E--uj7">
                        <div class="video-thumb">
                            <img src="https://img.youtube.com/vi/9amFSR-HPhE/maxresdefault.jpg" alt="video 3" />
                            <span class="play-btn">▶</span>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a data-fancybox="video-gallery" data-type="iframe"
                        href="https://www.youtube.com/embed/NfL-rYxVx9M?si=oD0smL6bHiD3ccWP">
                        <div class="video-thumb">
                            <img src="https://img.youtube.com/vi/NfL-rYxVx9M/maxresdefault.jpg" alt="video 3" />
                            <span class="play-btn">▶</span>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a data-fancybox="video-gallery" data-type="iframe"
                        href="https://www.youtube.com/embed/Y158lPKpzFE?si=urKbRUrKTPNMQJG6">
                        <div class="video-thumb">
                            <img src="https://img.youtube.com/vi/Y158lPKpzFE/maxresdefault.jpg" alt="video 3" />
                            <span class="play-btn">▶</span>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a data-fancybox="video-gallery" data-type="iframe"
                        href="https://www.youtube.com/embed/V6axPizIcZE?si=s1mhKOGTgnmkqHLy">
                        <div class="video-thumb">
                            <img src="https://img.youtube.com/vi/V6axPizIcZE/maxresdefault.jpg" alt="video 3" />
                            <span class="play-btn">▶</span>
                        </div>
                    </a>
                </div>

                <div class="swiper-slide">
                    <a data-fancybox="video-gallery" data-type="iframe"
                        href="https://www.youtube.com/embed/1zI1N8oheL8?si=EFAONgbQFrX8M3ya">
                        <div class="video-thumb">
                            <img src="https://img.youtube.com/vi/1zI1N8oheL8/maxresdefault.jpg" alt="video 3" />
                            <span class="play-btn">▶</span>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- 3. Custom Styling -->
<style>
    .video-slider {
        margin: 40px 0;
        padding: 60px 20px;
        background: var(--tertiary-color);
        border-radius: 20px;
    }

    .video-slider .video-thumb {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.9);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .video-slider .video-thumb img {
        width: 100%;
        height: 260px;
        object-fit: cover;
        display: block;
    }

    .video-slider .video-thumb .play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 50px;
        color: #fff;
        background: rgba(0, 0, 0, 0.6);
        border-radius: 50%;
        padding: 15px 20px;
        transition: background 0.3s ease;
    }

    .video-slider .video-thumb:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
        border-color: var(--primary-color);
    }

    .video-slider .video-thumb:hover .play-btn {
        background: rgba(0, 0, 0, 0.8);
    }

    @media (min-width: 768px) {
        .video-slider .video-thumb img {
            height: 220px;
        }
    }

    @media (min-width: 1200px) {
        .video-slider .video-thumb img {
            height: 280px;
        }
    }
</style>

<!-- 4. Swiper + Fancybox JS -->
<script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script>
    // Swiper init for Videos
    const videoSlider = new Swiper(".videoSwiper", {
        loop: true,
        autoplay: { delay: 4000, disableOnInteraction: false },
        speed: 700,
        breakpoints: {
            0: { slidesPerView: 1, spaceBetween: 12 },
            768: { slidesPerView: 2, spaceBetween: 16 },
            1200: { slidesPerView: 3, spaceBetween: 20 }
        },
        pagination: { el: ".swiper-pagination", clickable: true },
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" }
    });

    // Fancybox init for videos
    Fancybox.bind("[data-fancybox='video-gallery']", {
        Toolbar: { display: ["close"] }
    });
</script>