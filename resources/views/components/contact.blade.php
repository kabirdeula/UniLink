{{-- Contact Section --}}
<section id="contact" class="contact vh-100">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Contact Us</h2>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-about">
                    <h3>UniLink</h3>
                    {{-- <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus.
                        Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p> --}}
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="info">
                    <div>
                        <i class="fas fa-map-pin"></i>
                        <p>Paknajol<br>Kathmandu</p>
                    </div>

                    <div>
                        <i class="ri-mail-send-line"></i>
                        <p>info@unilink.com</p>
                    </div>

                    <div>
                        <i class="ri-phone-line"></i>
                        <p>+977 981-234-5678</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                            required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section>
