<!-- Start Contact Us 
    ============================================= -->
<div class="contact-area default-padding" style="background-image: url(assets/img/shape/28.png);">
    <div class="container">
        <div class="row align-center">

            <div class="col-tact-stye-one col-lg-7 mb-md-50">
                <div class="contact-form-style-one">
                    <h5 class="sub-title">Have Questions?</h5>
                    <h2 class="heading">Send us a Massage</h2>
                    <form action="includes/contact.php" method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input required class="form-control" id="name" name="name" placeholder="Name"
                                        type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input required class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input required class="form-control" id="phone" name="phone" placeholder="Phone"
                                        type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea required class="form-control" id="comments" name="comments"
                                        placeholder="Tell Us *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="submit">
                                    <i class="fa fa-paper-plane"></i> Get in Touch
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-lg-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-tact-stye-one col-lg-5 pl-60 pl-md-15 pl-xs-15">
                <div class="contact-style-one-info">
                    <h2>
                        Contact
                        <span>
                            Information
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                                <path
                                    d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0"
                                    style="animation-play-state: running;"></path>
                            </svg>
                        </span>
                    </h2>
                    <p>
                        Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why
                        she shewing.
                    </p>
                    <ul>
                        <li class="wow fadeInUp">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <h5 class="title">Hotline</h5>
                                <a href="tel:9928024428">+91 9928024428</a><br>
                                <a href="tel:9119166751">+91 9119166751</a>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="300ms">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info">
                                <h5 class="title">Our Location</h5>
                                <p>
                                    A-129 (M), Road No 9C, Vishwakarma Industrial Area (VKI Area), <br> Jaipur, Rajasthan- 302013
                                </p>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="500ms">
                            <div class="icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="info">
                                <h5 class="title">Official Email</h5>
                                <a href="mailto:info@srnseeds.com">info@srnseeds.com</a><br>
                                <a href="mailto:srnseeds@gmail.com">srnseeds@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                    <div class="contact-social-section mt-4">
                        <h5 class="mb-2">Follow Us</h5>
                        <div class="contact-social-icons">
                            <a href="https://www.facebook.com/share/1Ae34wyYME/?mibextid=wwXIfr" target="_blank" rel="noopener" title="Facebook" class="contact-social-circle facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/srnseedsllp?igsh=NGo2ejJtcWtueG0z" target="_blank" rel="noopener" title="Instagram" class="contact-social-circle instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Contact -->
<style>
.contact-social-section {
    text-align: left;
}
.contact-social-icons {
    display: flex;
    gap: 16px;
    margin-top: 8px;
}
.contact-social-circle {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    font-size: 22px;
    color: #fff;
    background: #333;
    transition: background 0.2s, color 0.2s, transform 0.2s;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}
.contact-social-circle.facebook {
    background: #3b5998;
}
.contact-social-circle.instagram {
    background: radial-gradient(circle at 30% 110%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
}
.contact-social-circle:hover {
    transform: scale(1.1);
    color: #fff;
    text-decoration: none;
}
</style>