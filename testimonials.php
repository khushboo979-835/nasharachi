<!-- Swiper CSS (no jQuery required) -->
<link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />

<!-- TESTIMONIALS -->
<section class="testimonials">
    <div class="container">
        <div class="head-title text-center mb-4">
            <h2>What Our <span>client Say</span></h2>
        </div>

        <div class="swiper testimonialsSwiper" aria-label="Testimonials slider">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="shadow-effect">
                        <img src="assets/images/others/user.jpg" alt="Rajesh Kumar">
                        <p>
                            best rehab center in Gorakhpur pichle 10 saal se maine yha pe bahut logo ko thik hote dekha
                            hu aur mere wha ka khud patient jo bahut bigra hua tha voh aaj khud itna acha h ki usko dekh
                            ke log wha ja rhe h aur ilaj kra rhe h</p>
                    </div>
                    <div class="testimonial-name">Mohd Faiz khan</div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="shadow-effect">
                        <img src="assets/images/others/user.jpg" alt="Priya Singh">
                        <p>Ek hafte pahle mareej ko wahan se laaya bilkul hi badal gaya hai
                            Thanks ehsaas team</p>
                    </div>
                    <div class="testimonial-name">Anita masih</div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="shadow-effect">
                        <img src="assets/images/others/user.jpg" alt="Amit Verma">
                        <p>I have visited almost 1an half months for study which is related to my subject psychology,
                            overall my experience was the staff empathetic & mannered ,who truly put client cares as a
                            priority. If a family member we're struggling with addiction . I would not hesitate in the
                            slightest to send them to Ehsaas Nasha Mukti kendra🙂🧿</p>
                    </div>
                    <div class="testimonial-name">Annu Sharma</div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="shadow-effect">
                        <img src="assets/images/others/user.jpg" alt="Sunita Devi">
                        <p>best rehab centre in gkp because i am very happy with our patient after meet and also their
                            staff is very sensitive and sweet speak of family
                            very very thanks of this rehab</p>
                    </div>
                    <div class="testimonial-name">Irfan Bhai</div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <div class="shadow-effect">
                        <img src="assets/images/others/user.jpg" alt="Manoj Yadav">
                        <p>Bahut achi jagah Maine apne ladko ko admit krwaya aur aaj mera ladka ekdm thik ho gya hai
                            bahut bahut dhanyabad ehsaas rehab center</p>
                    </div>
                    <div class="testimonial-name">Gabbu Singh</div>
                </div>


                <div class="swiper-slide">
                    <div class="shadow-effect">
                        <img src="assets/images/others/user.jpg" alt="Manoj Yadav">
                        <p>Good service best treatement and alcohol addiction best doctor in psychiatrist best counselor
                            in Gorakhpur thank you so much as ehsaas</p>
                    </div>
                    <div class="testimonial-name">Shubhashini Mishra</div>
                </div>

                <div class="swiper-slide">
                    <div class="shadow-effect">
                        <img src="assets/images/others/user.jpg" alt="Manoj Yadav">
                        <p>Ehsaas is a very good rehab center here in Drug addicts are admitted as patients and treated
                            very well and thousands of people have found a new life through this experience. 👍👍👍</p>
                    </div>
                    <div class="testimonial-name">Iftekhar Hussain</div>
                </div>

            </div>

            <!-- pagination + navigation -->
            <!-- <div class="swiper-pagination testimonials-pagination"></div> -->
            <div class="swiper-button-prev" aria-label="Previous testimonial"></div>
            <div class="swiper-button-next" aria-label="Next testimonial"></div>
        </div>
    </div>
</section>


<!-- Testimonial Styles (copy into your CSS file or directly below) -->
<style>
    .testimonials {
        background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(245, 245, 245, 0.8)), url("assets/images/background/2.jpg") center/cover fixed;
        padding: 80px 0;
    }

    .testimonials .head-title h2 {
        margin-bottom: 10px;
    }

    .testimonials .head-title h2 span {
        color: var(--primary-color);
    }

    .testimonials .shadow-effect {
        background:
            var(--tertiary-color);
        padding: 28px 24px;
        border-radius: 12px;
        text-align: center;
        border: 1px solid #eaeaea;
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);
        transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .shadow-effect:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 35px rgba(0, 0, 0, 0.12);
    }

    .shadow-effect p {
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        line-height: 1.6;
        margin: 12px 0 0;
        font-weight: 400;
        color: grey;
    }

    .testimonial-name {
        margin: -20px auto 0;
        display: inline-block;
        background: var(--primary-color);
        padding: 10px 30px;
        border-radius: 30px;
        font-weight: 600;
        color: #fff;
        font-size: 15px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        letter-spacing: 0.4px;
        z-index: 3;
    }

    /* Swiper slide basic layout */
    .testimonials .swiper-slide {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 16px 8px;
        transition: transform 0.4s ease, opacity 0.4s ease;
    }

    /* Dim and scale non-active slides */
    .testimonials .swiper-slide {
        opacity: 0.35;
        transform: scale(0.86);
    }

    .testimonials .swiper-slide.swiper-slide-active {
        opacity: 1;
        transform: scale(1);
    }

    /* Avatar image */
    .testimonials .shadow-effect img {
        border-radius: 50%;
        border: 4px solid #fff;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        max-width: 100px;
        display: block;
        margin: 0 auto 18px;
    }

    /* Pagination dots */
    .testimonials .testimonials-pagination {
        margin-top: 18px;
    }

    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background: #d4d4d4;
        opacity: 1;
        margin: 0 6px !important;
        transition: transform .25s ease, background .25s ease;
    }

    .swiper-pagination-bullet-active {
        background: var(--primary-color);
        transform: scale(1.25);
    }

    /* Navigation arrows */
    .swiper-button-next,
    .swiper-button-prev {
        background: #fff;
        color: var(--primary-color);
        border-radius: 50%;
        width: 44px;
        height: 44px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 16px;
        font-weight: 700;
    }

    /* Responsive tweaks */
    @media (max-width: 768px) {
        .testimonials {
            padding: 40px 0;
        }

        .testimonial-name {
            padding: 8px 20px;
            font-size: 14px;
        }

        .shadow-effect {
            padding: 22px 16px;
        }
    }
</style>

<!-- Swiper JS (no jQuery) -->
<script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialization script in vanilla JS -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const testimonialsSwiper = new Swiper('.testimonialsSwiper', {
            loop: true,
            centeredSlides: true,
            speed: 600,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false
            },
            breakpoints: {
                0: { slidesPerView: 1, spaceBetween: 12 },
                768: { slidesPerView: 2, spaceBetween: 20 },
                1170: { slidesPerView: 3, spaceBetween: 30 }
            },
            pagination: {
                el: '.testimonials-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });

        // Pause autoplay on hover (better UX)
        const swiperEl = document.querySelector('.testimonialsSwiper');
        if (swiperEl) {
            swiperEl.addEventListener('mouseenter', () => testimonialsSwiper.autoplay.stop());
            swiperEl.addEventListener('mouseleave', () => testimonialsSwiper.autoplay.start());
        }
    });
</script>