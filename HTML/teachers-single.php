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
                <h1>Teachers Single</h1>
            </div>
        </div>
    </div>
</div>
<!--//END ABOUT IMAGE -->

<!--============================= Teachers Single =============================-->
<div class="teachers-single">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="teachers-img_block">
                    <img src="images/our-teachers_01.jpg" class="img-fluid" alt="#">
                    <div class="teachers-title_block">
                        <h4><strong>Melissa Baker</strong></h4>
                        <h6>MBA, PhD</h6>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="teacher-profile_block qualification_detaile">
                            <h4>Professional Profile</h4>
                            <ul>
                                <li><span>*</span>Nanny with over 5+ years of experiance providing exeptional care to children aged 2 to 20.</li>
                                <li><span>*</span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</li>
                                <li><span>*</span>It is a long established fact that a reader will be distracted by the readable</li>
                                <li><span>*</span>Contrary to popular belief, Lorem Ipsum is not simply random text. </li>
                                <li><span>*</span>If you are going to use a passage of Lorem Ipsum</li>
                            </ul>

                        <!-- <h3>Luise, Dennison, DDS, MS, phD </h3>
                        <span>Syllabus : Economics, Marketing & Finance</span>
                        <p>There are many variations of passages of Lorem Ipsum available</p> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="teacher-profile_block qualification_detaile">
                       <h4 class="mt-4">Professional Experiance</h4>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="personal">
                                <h6><strong>The Brown family</strong>(Ny Brooklyn)</h6>
                                <h6><i>Lives in Nanny</i></h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="experiance">
                            <h6><strong>New york,Ny</strong></h6>
                            <h6><i>September 2014-Present</i></h6>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="teacher-profile_block qualification_detaile">
                <ul>
                    <li><span>*</span>Care for two boys, aged 10 and 20</li>
                    <li><span>*</span>There are many variations of passages of Lorem</li>
                    <li><span>*</span>Contrary to popular belief, Lorem Ipsum is not simply random</li>
                    <li><span>*</span>Many desktop publishing packages and web page editors now</li>
                    <li><span>*</span>If you are going to use a passage of Lorem Ipsum</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="teacher-profile_block qualification_detaile">
                <h4 class="mt-4">Education</h4>
                <div class="personal">
                    <h6><strong>Bluen Ridge Community College, Weyers Cave, VA</strong></h6>
                    <h6><i>Syllabus : Economics, Marketing & Finance</i></h6>
                    <hr>
                    <ul>
                        <li><span>*</span>GPA:3.5/4.0</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="teacher-profile_block qualification_detaile">
                <h4 class="mt-4">Additional Skills</h4>
                <div class="personal">
                    <ul>
                        <li><span>*</span>New York Drivers License</li>
                        <li><span>*</span>Various versions have evolved over the years</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
<!--//End Teachers Single -->

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
                    <a href="index.php">
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
                            <li><a href="about.php">About</a></li>
                            <li><a href="admission-form.php">Admissions </a></li>
                            <li><a href="admission.php">Academics</a></li>
                            <li><a href="research.php">Research</a></li>
                            <li><a href="contact.php">Contact</a></li>
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
