<div id="smooth-content">
    <!-- Start Contact Us 
    ============================================= -->
    <div class="contact-style-one-area overflow-hidden default-padding">
        <div class="container">
            <div class="contact-style-one-items" style="background-image: url(assets/img/shape/map.png);">
                <div class="row align-center">
                    <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-50">

                        <div class="contact-style-one-info">
                            <h2 class="split-text title">Get in touch with a transformation expert</h2>
                            <ul>
                                <li class="wow fadeInUp">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h4>Hotline</h4>
                                        <a href="">+91 977 712 6600 (India)</a>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="300ms">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Our Location</h4>
                                        <p>
                                            SRB Tower, 5th and 6th Floor, Infocity, Bhubaneswar -751024, Odisha, India
                                        </p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="500ms">
                                    <div class="icon">
                                        <i class="fas fa-envelope-open-text"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Official Email</h4>
                                        <a href="mailto:supplychain@cozentus.com">supplychain@cozentus.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                        <div class="contact-form-card" style="background-image: url(assets/img/shape/3.png);">
                            <h4 class="sub-title">Free Consultation</h4>
                            <p>
                                Fill out the form to get a personalized price quote and package solution from our global team of experts.
                            </p>
                            <form data-form="insertcontact" id="contactForm" data-aos="fade-right" data-aos-duration="1000" class="contact-form-custom">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="organisation" name="organisation" placeholder="Organisation" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="employees" name="employees" placeholder="Designation" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <select name="service" id="interested" class="form-control">
                                                <option value="">Select Service</option>
                                                <?php if (!empty($pservcont)) foreach ($pservcont as $ser) {
                                                    echo "<option value='" . $ser['name'] . "'>" . $ser['name'] . "</option>";
                                                } ?>
                                            </select>
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="checkbox" name="privacy_policy" id="agree">
                                            <label for="agree">&nbsp;&nbsp;I agree to the
                                                Cozentus Privacy Policy (<a
                                                    href="<?= base_url('privacy-statement') ?>">Privacy
                                                    Statement</a>)</label>
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Google ReCAPTCHA -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="<?= $recaptcha_site_key ?>"></div>
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification mb-3" role="alert">
                                    <div id="message" class="alert-msg text-danger"></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <button class="btn btn-style-one" type="submit" id="submitBtn" data-aos="fade-up" data-aos-duration="1200">
                                            Get in Touch <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Map 
    ============================================= -->
    <div class="maps-area default-padding-bottom overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48388.929990966964!2d-74.00332!3d40.711233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1653598669477!5m2!1sen!2sus"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Map -->
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const form = document.getElementById("contactForm");

        // Helper to grab the error span relative to the form group
        const getErrorSpan = (element) => {
            if (!element) return null;
            const group = element.closest(".form-group");
            return group ? group.querySelector(".alert-error") : null;
        };

        form.addEventListener("submit", function(event) {
            event.preventDefault();
            event.stopImmediatePropagation();

            let isValid = true;

            // 1. Validate Name
            const nameInput = document.getElementById("name");
            const nameError = getErrorSpan(nameInput);
            if (nameError) {
                if (nameInput.value.trim().length < 3) {
                    nameError.textContent = "Name must be at least 3 characters.";
                    nameInput.classList.add("error");
                    nameInput.classList.remove("valid");
                    isValid = false;
                } else {
                    nameError.textContent = "";
                    nameInput.classList.remove("error");
                    nameInput.classList.add("valid");
                }
            }

            // 2. Validate Email
            const emailInput = document.getElementById("email");
            const emailError = getErrorSpan(emailInput);
            if (emailError) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const emailValue = emailInput.value.trim();
                if (!emailRegex.test(emailValue)) {
                    emailError.textContent = "Please enter a valid email address.";
                    emailInput.classList.add("error");
                    emailInput.classList.remove("valid");
                    isValid = false;
                } else {
                    // Pre-check for blocked domains to give instant corporate email feedback
                    const domain = emailValue.split("@")[1]?.toLowerCase();
                    const blockedDomains = ["gmail.com", "gmail.in", "gmail.net", "gmail.org", "gmail.info", "gmail.edu", "yahoo.com", "outlook.com", "aol.com", "icloud.com", "zoho.com", "protonmail.com", "mail.com", "gmx.com", "yandex.com"];
                    if (blockedDomains.includes(domain)) {
                        emailError.textContent = "Please enter a business or corporate email address.";
                        emailInput.classList.add("error");
                        emailInput.classList.remove("valid");
                        isValid = false;
                    } else {
                        emailError.textContent = "";
                        emailInput.classList.remove("error");
                        emailInput.classList.add("valid");
                    }
                }
            }
            /*
            // 3. Validate Phone (Optional, but digits only if entered)
            const phoneInput = document.getElementById("phone");
            const phoneError = getErrorSpan(phoneInput);
            if (phoneError) {
                const phoneValue = phoneInput.value.trim();
                if (phoneValue !== "" && !/^\d+$/.test(phoneValue)) {
                    phoneError.textContent = "Phone number must contain digits only.";
                    phoneInput.classList.add("error");
                    phoneInput.classList.remove("valid");
                    isValid = false;
                } else {
                    phoneError.textContent = "";
                    phoneInput.classList.remove("error");
                    if (phoneValue !== "") {
                        phoneInput.classList.add("valid");
                    }
                }
            }

            // 4. Validate Service Dropdown
            const serviceSelect = document.getElementById("interested");
            const serviceError = getErrorSpan(serviceSelect);
            if (serviceError) {
                if (serviceSelect.value === "") {
                    serviceError.textContent = "Please select a service.";
                    serviceSelect.classList.add("error");
                    serviceSelect.classList.remove("valid");
                    isValid = false;
                } else {
                    serviceError.textContent = "";
                    serviceSelect.classList.remove("error");
                    serviceSelect.classList.add("valid");
                }
            }
            */
            // 5. Validate Privacy Checkbox
            const agreeInput = document.getElementById("agree");
            const agreeError = getErrorSpan(agreeInput);
            if (agreeError) {
                if (!agreeInput.checked) {
                    agreeError.textContent = "You must agree to the privacy policy.";
                    isValid = false;
                } else {
                    agreeError.textContent = "";
                }
            }

            // 6. Validate Google ReCAPTCHA
            const recaptchaDiv = document.querySelector(".g-recaptcha");
            const recaptchaError = getErrorSpan(recaptchaDiv);
            if (recaptchaError) {
                if (typeof grecaptcha === "undefined" || grecaptcha.getResponse() === "") {
                    recaptchaError.textContent = "Please complete the CAPTCHA.";
                    isValid = false;
                } else {
                    recaptchaError.textContent = "";
                }
            }

            // 7. Perform Submission if everything is valid
            if (isValid) {
                const formData = new FormData(form);
                const submitBtn = document.getElementById("submitBtn");
                const messageDiv = document.getElementById("message");

                // Build absolute destination URL: base_url + data-form
                const contextUrl = typeof site_url !== "undefined" ? site_url : (typeof base_url !== "undefined" ? base_url : "/");
                const actionEndpoint = contextUrl + form.dataset.form;

                submitBtn.disabled = true;
                const originalBtnHtml = submitBtn.innerHTML;
                submitBtn.innerHTML = 'Sending... <i class="fas fa-spinner fa-spin"></i>';
                messageDiv.innerHTML = "";

                fetch(actionEndpoint, {
                        method: "POST",
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error("Network response was not ok");
                        }
                        return response.json();
                    })
                    .then(data => {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnHtml;

                        if (data.status) {
                            // Display styled success alert
                            messageDiv.innerHTML = data.msg || '<p class="alert alert-success">Form Submitted Successfully!</p>';
                            form.reset();
                            if (typeof grecaptcha !== "undefined") {
                                grecaptcha.reset();
                            }
                            // Remove validation classes
                            document.querySelectorAll(".form-control").forEach(el => el.classList.remove("valid", "error"));

                            // Redirect after short delay so user can read message
                            setTimeout(() => {
                                window.location.href = contextUrl + "thankyou";
                            }, 1500);
                        } else {
                            // Display server validation error
                            messageDiv.innerHTML = data.msg || '<p class="alert alert-warning">Please correct the inputs and try again.</p>';
                        }
                    })
                    .catch(error => {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnHtml;
                        messageDiv.innerHTML = '<p class="alert alert-danger">An error occurred during submission. Please try again.</p>';
                        console.error("Error submitting form:", error);
                    });
            }
        });
    });
</script>