<style>
    .modal-content{
        background: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)),
            url('assets/images/background/3.jpg') no-repeat center center/cover;
    }
    .modal-content .form-control, .modal-content .form-select {
        background: rgba(255, 255, 255, 0.5);
        border: 1px solid var(--primary-color);
        border-radius: 0px;
    }
    .modal-content label{
        color: var(--primary-color);
        font-weight: 600;
    }
</style>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title fs-5" id="exampleModalLabel">Book An Appointment</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="modalContactForm" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label"> Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name"
                                required>
                            <div class="invalid-feedback">
                                Valid Name is required.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="number" class="form-label"> Number <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="name" placeholder="Enter Your Number"
                                name="number" required>
                            <div class="invalid-feedback">
                                Valid 10 Digit Number is required.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label"> Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" placeholder="Enter Your Address"
                                name="address" required>
                            <div class="invalid-feedback">
                                Valid Address is required.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="services" class="form-label"> Services <span
                                    class="text-danger">*</span></label>
                            <select name="services" id="services" class="form-select" required>
                                <option value="" disabled selected>Select a service</option>
                                <option value="mens">Mens</option>
                                <option value="body-massage">Body Massage</option>
                                <option value="cardiopractic">Chiropractic</option>
                            </select>
                            <div class="invalid-feedback">
                                Valid Address is required.
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="message" class="form-label"> Message</label>
                            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                            <div class="invalid-feedback">
                                Valid Address is required.
                            </div>
                        </div>

                        <div class="mb-2 text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>