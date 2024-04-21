<!-- Modal -->
<div class="modal fade job-form-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Get a custom qoute for Web Development Services</h3>
            </div>
            <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close">
                close
                <span>
                    <i class="bi bi-x-lg"></i>
                </span>
            </button>
            <div class="modal-body">
                <form method="POST" action="{{ route('order.store') }}">
                    @csrf
                    <div class="single-info mb-30">
                        <h5 class="info-title">Personal Info</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-inner mb-25">
                                    <label for="full_name">Your Name:</label>
                                    <input type="text" name="name" id="full_name" maxlength="255" required
                                        value="{{ auth()->user()->name ?? '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-inner mb-25">
                                    <label for="email">Your email:</label>
                                    <input type="email" name="email" id="email" required
                                        value="{{ auth()->user()->email ?? '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-inner mb-25">
                                    <label for="phone_number">Your Phone Number:</label>
                                    <input type="tel" name="phone" id="phone_number" required
                                        value="{{ auth()->user()->phone_number ?? '' }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-info mb-30">
                        <h5 class="info-title">Business Info</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-inner mb-25">
                                    <label for="business_name">Your Business Name:</label>
                                    <input type="text" name="business_name" id="business_name" maxlength="255" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-inner mb-25">
                                    <label for="category">Select Website Category you need:</label>
                                    <select id="category" name="category"
                                        class="form-control @error('category') is-invalid @enderror">
                                        <option value="presentation">My Business Presentation</option>
                                        <option value="e-commerce">E-commerce</option>
                                        <option value="blog">Blog/Portal</option>
                                        <option value="custom">Custom</option>
                                    </select>
                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-inner mb-25">
                                    <label for="business_description">Short description about your business:</label>
                                    <textarea name="business_description" id="business_description" rows="5"
                                        maxlength="4012" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-inner2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="contactCheck" required>
                                        <label class="form-check-label" for="contactCheck">
                                            I have read & accepted Terms & Conditions.
                                        </label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-inner">
                        <button class="primary-btn5 black btn-hover" type="submit">
                            Submit Now
                            <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.0035 3.40804L1.41153 12L0 10.5885L8.59097 1.99651H1.01922V0H12V10.9808H10.0035V3.40804Z">
                                </path>
                            </svg>
                            <span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
