<?php include 'nav.php';?> 
        
        
        
        <!-- Contact Start -->
        <section class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="contact__map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7832.371424232099!2d77.002127!3d11.024689!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x137d95bfd8909293!2sPSG%20College%20Of%20Technology!5e0!3m2!1sen!2sin!4v1624946320484!5m2!1sen!2sin" height="420px" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="contact-form" style="padding: 20px 10px 0px 20px;">
                                <div id="success"></div>
                                <h3 style="color: #414141; margin-bottom:0px; margin-top:10px">Contact Us</h3><br><form name="sentMessage" id="contactForm" novalidate="novalidate" action="form-to-email2.php" method="post">
                                    <div class="control-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Contact End -->


        
<?php include 'footer.php';?> 