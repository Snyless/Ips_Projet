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
                <h1>Sign Up</h1>
            </div>
        </div>
    </div>
</div>
<!--//END ABOUT IMAGE -->

<!--============================= Login =============================-->
<div class="login sign-up">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-xs-12 col-sm-12 col-md-5 well well-sm">
              <form action="#" class="form sign-up-form">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="firstname" placeholder="First Name" type="text"
                            required autofocus />
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="lastname" placeholder="Last Name" type="text" required />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input class="form-control" name="youremail" placeholder="Your Email" type="email" />
                </div>
                <div class="form-group">
                    <input class="form-control" name="reenteremail" placeholder="Re-enter Email" type="email" />
                </div>
                <div class="form-group">
                    <input class="form-control" name="password" placeholder="New Password" type="password" />
                </div>
                <label>
                    Birth Date</label>
                    <div class="row">
                        <div class="col-xs-4 col-md-4">
                            <select class="form-control custom-select">
                             <option selected="" value="">Month</option>
                             <option value="select">One</option>
                             <option value="select">Two</option>
                             <option value="select">Three</option>
                             <option value="select">Four</option>
                         </select>
                     </div>
                     <div class="col-xs-4 col-md-4">
                        <select class="form-control custom-select">
                            <option selected="" value="">Day</option>
                            <option value="select">One</option>
                            <option value="select">Two</option>
                            <option value="select">Three</option>
                            <option value="select">Four</option>
                        </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <select class="form-control custom-select">
                            <option selected="" value="">Year</option>
                            <option value="select">One</option>
                            <option value="select">Two</option>
                            <option value="select">Three</option>
                            <option value="select">Four</option>
                        </select>
                    </div>
                </div>
                <label class="radio-inline">
                    <input type="radio" name="sex" id="inlineCheckbox1" value="male" />
                    Male
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sex" id="inlineCheckbox2" value="female" />
                    Female
                </label>
                <br />
                <br />
                <button type="submit" class="btn btn-warning" id="js-subscribe-btn">SIGN UP</button>
            </form>
        </div>
    </div>
</div>
</div>
<!--//End Login -->
       <!--  ============================= Instagram Feed =============================
       <div id="instafeed"></div>
       //END Instagram feed JS -->
       <!--============================= FOOTER =============================-->
       <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subscribe">
                        <h3>Newsletter</h3>
                        <form id="subscribeform" action="php/subscribe.php" method="post">
                            <input class="signup_form" type="text" name="email" placeholder="Enter Your Email Address">
                            <button type="submit" class="btn btn-warning">SUBSCRIBE</button>
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
            <script src="js/slick.min.js"></script>
            <script src="js/waypoints.min.js"></script>
            <script src="js/counterup.min.js"></script>
            <script src="js/instafeed.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/validate.js"></script>
            <script src="js/tweetie.min.js"></script>
            <!-- Subscribe -->
            <script src="js/subscribe.js"></script>
            <!-- Script JS -->
            <script src="js/script.js"></script>
        </body>

        </html>
