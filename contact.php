<!-- Contact Section -->
<section class="contact-section py-5 " >
    <div class="container">
        <div class="row g-4 align-items-center">

            <!-- Left Side: Contact Info + Map -->
            <div class="col-md-5">
                <div class="card border-0 shadow p-4 h-100">
                    <div class="head-title">
                        <h2 class="mb-1 fw-bold">Contact <span>Us</span></h2>

                    </div>
                    <!-- Address -->
                    <div class="mb-3 d-flex border-start border-success rounded">
                        <i class="bi bi-geo-alt-fill  fs-5 me-3"></i>
                        <div>
                            <h6 class="fw-semibold mb-1">Address</h6>
                            <p class="mb-0">C 178/112 Old Home Guard Office Daudpur Chauraha, Gorakhpur, Uttar Pradesh
                                273001</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="mb-3 d-flex border-start border-success rounded">
                        <i class="bi bi-telephone-fill  fs-5 me-3"></i>
                        <div>
                            <h6 class="fw-semibold mb-1">Phone</h6>
                            <p class="mb-0"><a href="tel:+917272818208" class="text-dark">+91 72728 18208</a></p>
                            <p class="mb-0"><a href="tel:+917272818209" class="text-dark">+91 72728 18209</a></p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-4 d-flex border-start border-success rounded">
                        <i class="bi bi-envelope-fill fs-5 me-3"></i>
                        <div>
                            <h6 class="fw-semibold mb-1">Email</h6>
                            <p class="mb-0"><a href="mailto:ehsaasgroup2015@gmail.com"
                                    class="text-dark">ehsaasgroup2015@gmail.com</a>
                            </p>
                            <p class="mb-0"><a href="mailto:infoehasaasgkp@gmail.com"
                                    class="text-dark">infoehasaasgkp@gmail.com</a>
                            </p>
                            <p class="mb-0"><a href="mailto:infoehasaaslku@gmail.com"
                                    class="text-dark">infoehasaaslku@gmail.com</a>
                            </p>
                        </div>
                    </div>

                    <!-- Google Map -->
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57014.39626378059!2d83.34069794941092!3d26.731616144099274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3991447ee4453c47%3A0x932f417761eefebe!2sEhsaas%20Nasha%20Mukti%20Kendra!5e0!3m2!1sen!2sin!4v1757935900100!5m2!1sen!2sin"
                            width="100%" height="100" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-md-7">
                <div class="card contact-card border-0 shadow p-4">
                    <div class="head-title">
                        <h2 class="mb-3 fw-bold">Send Us a <span>Message</span></h2>
                        <p class="mb-4">Reach out to <strong>Ehsaas Nasha Mukti Kendra</strong> for support and guidance
                            on recovery.</p>
                    </div>
                    <form id="mainContactForm" class="needs-validation" novalidate>
                        <div class="row">
                            <!-- Name -->
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="cname" placeholder="Enter Your Name"
                                    name="name" required>
                                <div class="invalid-feedback">Valid Name is required.</div>
                            </div>
                            <!-- Number -->
                            <div class="col-md-6 mb-3">
                                <label for="number" class="form-label">Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="cnumber" placeholder="Enter Your Number"
                                    name="number" pattern="[0-9]{10}" required>
                                <div class="invalid-feedback">Valid 10 Digit Number is required.</div>
                            </div>
                            <!-- Address -->
                            <div class="col-md-6 mb-3">
                                <label for="address" class="form-label">Address <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="caddress" placeholder="Enter Your Address"
                                    name="address" required>
                                <div class="invalid-feedback">Valid Address is required.</div>
                            </div>
                            <!-- Services -->
                            <div class="col-md-6 mb-3">
                                <label for="services" class="form-label">Service <span
                                        class="text-danger">*</span></label>
                                <select name="services" id="cservices" class="form-select" required>
                                    <option value="" disabled selected>Select a service</option>
                                    <option value="Alcohol Addiction Treatment">Alcohol Addiction Treatment</option>
                                    <option value="Drugs Addiction Treatment">Drugs Addiction Treatment</option>
                                    <option value="Marijuana Addiction Treatment">Marijuana Addiction Treatment</option>
                                    <option value="Whitener Addiction Treatment">Whitener Addiction Treatment</option>
                                    <option value="Heroin Addiction Treatment">Heroin Addiction Treatment</option>
                                    <option value="Cocaine Addiction Treatment">Cocaine Addiction Treatment</option>
                                    <option value="Detoxification">Detoxification</option>
                                    <option value="Depression Treatment">Depression Treatment</option>
                                    <option value="Mental Health">Mental Health</option>
                                </select>
                                <div class="invalid-feedback">Please select a service.</div>
                            </div>
                            <!-- Message -->
                            <div class="col-md-12 mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="cmessage" placeholder="Enter Your Message" rows="3"
                                    name="message"></textarea>
                            </div>
                            <!-- Submit -->
                            <div class="text-end">
                                <button type="submit" class="btn-pro px-4">Send Message</button>
                            </div>
                        </div>
                    </form>



                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact CSS -->
<style>
    .contact-section {
        background: linear-gradient(rgba(255, 255, 255, 0.9),
                rgba(255, 255, 255, 0.9)), url('assets/images/background/4.jpg') no-repeat center center/cover;
        background-attachment: fixed;
    }

    .map-container {
        border-radius: 10px;
        overflow: hidden;
    }

    .contact-section .form-control,
    .contact-section .form-select {
        background: rgba(255, 255, 255, 0.5);
        border: 1px solid var(--primary-color);
        border-radius: 0px;
    }

    .contact-section .card a {
        text-decoration: none;
        color: var(--primary-color);
    }


    /* Icons */
    .contact-section .card i {
        color: var(--secondary-color);
        background: rgba(0, 123, 255, 0.1);
        border-radius: 50%;
        padding: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
    }
</style>


<script>
    (function () {
        'use strict';

        var form = document.getElementById('mainContactForm');

        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                event.preventDefault(); // Prevent default form submit

                // Get form values
                var name = document.getElementById('cname').value;
                var number = document.getElementById('cnumber').value;
                var address = document.getElementById('caddress').value;
                var service = document.getElementById('cservices').value;
                var message = document.getElementById('cmessage').value;

                // WhatsApp number (replace with your number, include country code without +)
                var whatsappNumber = '919876543210';

                // Construct WhatsApp message
                var whatsappMessage = `*New Contact Form Submission*\n\n*Name:* ${name}\n*Number:* ${number}\n*Address:* ${address}\n*Service:* ${service}\n*Message:* ${message}`;

                // Encode message
                var encodedMessage = encodeURIComponent(whatsappMessage);

                // Open WhatsApp
                window.open(`https://wa.me/${whatsappNumber}?text=${encodedMessage}`, '_blank');
            }

            form.classList.add('was-validated');
        }, false);
    })();
</script>