<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
    <div class="main-wrapper">

        <div class="main-cover">

            <div class="contact-banner-box section-entry">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h3>Contact Us</h3>
                        </div>
                    </div>
                </div>
            </div>


            <section class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5362188571066!2d77.0853073!3d28.613687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03e4b3b5c3a1%3A0x7dac887432b854cf!2sDigilinkers%20-%20Best%20Digital%20Marketing%20Agency%20in%20Delhi%20%7C%20Website%20Development!5e0!3m2!1sen!2sin!4v1738940998370!5m2!1sen!2sin"
                    width="1920" height="650" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>

            

            <section class="contact-wrapper section-entry">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-sm-12 mb-4">
                            <div class="section-title text-center">
                                <h5>Get in Touch with Us</h5>
                                <h3>We’re Here to Help You Achieve Your IT Goals</h3>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque repellat nostrum
                                    suscipit tenetur nemo? Aperiam ducimus error facilis voluptatibus possimus. Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, maxime.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="cont3-box mb-4">
                                <div class="cont3-icon-box">
                                    <i class="fa-solid fa-phone-volume"></i>
                                </div>
                                <div class="cont3-txt-box">
                                    <h4>Call Us</h4>
                                    <p>
                                        +91 - 9818 00 0334
                                    </p>
                                </div>
                            </div>
                            <div class="cont3-box mb-4">
                                <div class="cont3-icon-box">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="cont3-txt-box">
                                    <h4>Email Us</h4>
                                    <p>
                                        info@digilinkers.com
                                    </p>
                                </div>
                            </div>
                            <div class="cont3-box mb-4">
                                <div class="cont3-icon-box">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="cont3-txt-box">
                                    <h4>Visit Us</h4>
                                    <p>
                                        RZ-1/A, 2nd Floor Sitapuri, Main Pankha Road, Delhi - 110045 (Near Dabri Mor
                                        Metro Station Gate No 3)
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="contact3-form-wrap">

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <form class="contact-form" action="mail/mail.php" method="POST">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group mrb-small contact-form__group">
                                                        <label class="contact-form__label" for="inputName">First
                                                            Name</label>
                                                        <input type="text" class="form-control contact-form__input"
                                                            id="inputName" name="name"
                                                            placeholder="Enter your first name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group mrb-small contact-form__group">
                                                        <label class="contact-form__label" for="inputMail">Last
                                                            Name</label>
                                                        <input type="text" class="form-control contact-form__input"
                                                            id="inputMail" name="email"
                                                            placeholder="Enter your last name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group mrb-small contact-form__group">
                                                        <label class="contact-form__label" for="inputPhone">Mobile
                                                            Number</label>
                                                        <input type="text" class="form-control contact-form__input"
                                                            id="inputPhone" name="phone"
                                                            placeholder="Enter your mobile">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group mrb-small contact-form__group">
                                                        <label class="contact-form__label" for="inputPhone">Email
                                                            Id</label>
                                                        <input type="email" class="form-control contact-form__input"
                                                            id="inputPhone" name="phone" placeholder="Enter your email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mrb-small contact-form__group">
                                                <label class="contact-form__label" for="inputMsg">Your Message</label>
                                                <textarea class="form-control contact-form__textarea" id="inputMsg"
                                                    name="message" placeholder="Write your message" rows="5"></textarea>
                                            </div>
                                            <div class="contact-form__button">
                                                <button type="submit" class="cont-btn"
                                                    name="contact_submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>


        </div>

        <div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>