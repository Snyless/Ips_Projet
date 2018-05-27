<!DOCTYPE html>
<html lang="en">

   <?php
            include 'includes/header.php';
            ?>
<body>
    <!-- ========================= ABOUT IMAGE =========================-->
    <div class="about_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.html"><img src="images/responsive-logo.png" class="responsive-logo img-fluid" alt="responsive-logo"></a>
                </div>
            </div>
              <?php
            include 'includes/nav_bar.php';
            ?>
            <div class="row">
                <div class="col-md-12">
                    <h1>Admissions</h1>
                </div>
            </div>
        </div>
    </div>
    <!--//END ABOUT IMAGE -->
    <div class="container">
        <!--============================= ADMISSION FORM RULES =============================-->
        <section class="admission-form_rules">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 admission-form_mr">
                        <h2>Admission Rules</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. It has survived not only five centuries, but also the leap into electronic.</p>
                    </div>
                    <div class="col-md-5 admission-form_mr">
                        <ul class="admission-form_listed">
                            <li>Donec molestie felis eget justo pellentesque</li>
                            <li>Phasellus et justo sit amet nisl fringilla semper.</li>
                            <li>Nam vitae ligula at risus posuere laoreet.</li>
                            <li>Mauris tempor ex id sapien tincidunt porta</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--//END ADMISSION FORM RULES -->
        <hr />
        <!-- ================ ADMISSION FORM BADGE ================-->
        <section class="admission_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 my-5">
                        <img src="images/badge-icon.png" class="img-fluid" alt="#">
                        <h2>Admission Form</h2>
                    </div>
                </div>
                <form action="php/admission.php" method="post" id="admissionform">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row form-group">
                                <div class="col-lg-4">
                                    <label>
                                        Course Name</label>
                                </div>
                                <div class="col-lg-8">
                                    <select class="form-control custom-select" name="course" required>
                                        <option selected="" value="">Select</option>
                                        <option value="select">One</option>
                                        <option value="select">Two</option>
                                        <option value="select">Three</option>
                                        <option value="select">Four</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4">
                                    <label>
                                        Join date</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="date" name="join" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4">
                                    <label>
                                        First name</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="first_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4">
                                    <label>
                                        Last name</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="last_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4">
                                    <label>
                                        Email address</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4">
                                    <label>
                                        Phone</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4">
                                    <label>
                                        Date of birth </label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="date" name="dob" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row form-group">
                                <div class="col-lg-4">
                                    <label>
                                        Address</label>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input type="text" name="address1" class="form-control" placeholder="City" required>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="text" name="address2" class="form-control" placeholder="State" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4">
                                    <label>
                                        Education</label>
                                </div>
                                <div class="col-lg-8">
                                    <input type="text" name="education" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-4">
                                    <label>
                                        Message</label>
                                </div>
                                <div class="col-lg-8">
                                    <textarea class="form-control" name="message" placeholder="Any other comments?" rows="11"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-default btn-courses mt-4" id="js-admission-btn">Submit Now</button>
                        </div>
                        <div class="col-md-12">
                            <div id="js-admission-result" data-success-msg="Success, Your application has been sent" data-error-msg="Oops! Something went wrong"></div>
                            <!-- // end #js-admission-result -->
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--//END ADMISSION FORM BADGE -->
    </div>
    <!-- // end .container -->
    <!--============================= Instagram Feed =============================-->
    <div id="instafeed"></div>
    <!--//END Instagram feed JS -->
    <!--============================= FOOTER =============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subscribe">
                        <h3>Newsletter</h3>
                        <form id="subscribeform" action="php/subscribe.php" method="post">
                            <input class="signup_form" type="text" name="email" placeholder="Enter Your Email Address">
                            <button type="submit" class="btn btn-warning" id="js-subscribe-btn">SUBSCRIBE</button>
                            <div id="js-subscribe-result" data-success-msg="Success, Please check your email." data-error-msg="Oops! Something went wrong"></div>
                            <!-- // end #js-subscribe-result -->
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="foot-logo">
                        <a href="index.html">
                                                                <img src="images/footer-logo.png" class="img-fluid" alt="footer_logo">
                                                            </a>
                        <p>2016 © copyright
                            <br> All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="sitemap">
                        <h3>Navigation</h3>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="admission-form.html">Admissions </a></li>
                            <li><a href="admission.html">Academics</a></li>
                            <li><a href="research.html">Research</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tweet_box">
                        <h3>Tweets</h3>
                        <div class="tweet-wrap">
                            <div class="tweet"></div>
                            <!-- // end .tweet -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Contact us</h3>
                        <p><span>Address: </span> Unisco university Albany, NY, USA. 11001</p>
                        <p>Email : info@unisco.com
                            <br> Phone : +91 555 668 986</p>
                        <ul class="footer-social-icons">
                            <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="js/instafeed.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/tweetie.min.js"></script>
    <!-- Admission -->
    <script src="js/admission.js"></script>
    <!-- Subscribe -->
    <script src="js/subscribe.js"></script>
    <!-- Script JS -->
    <script src="js/script.js"></script>
</body>

</html>