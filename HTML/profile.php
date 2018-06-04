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
                <h1>Sample Page</h1>
            </div>
        </div>
    </div>
</div>
<!--//END ABOUT IMAGE -->
<!--============================= BLOG =============================-->
<section class="blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="blog-category_block pt-0">
                    <h3>Personal settings</h3>
                    <ul>
                        <li><a href="#">Profile<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                        <li><a href="#">Absence  <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                        <li><a href="#">Note  <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                        <li><a href="#">Account<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="teacher-profile_block ">
                            <h4>Basic information</h4>
               
                                    <ul class=" admission_rating">
                            <li> FULL NAME<span>:</span></li>
                                <li class="admission_star">oumaima zniber</li>
                            <li class="admission_star-second">STUDENT ID<span>:</span></li>
                                 <li class="admission_star">123434545</li>
                            <li>EMAIL ADDRESS<span>:</span></li>
                                <li class="admission_star">OUMAIMAZR@gmail.com</li>
                            <li class="admission_star-second">DOB<span>:</span></li>
                                <li class="admission_star">10/12/95</li>
                            <li>MOBILE NO<span>:</span></li>
                                 <li class="admission_star">064742888</li>
                            <li>ADDRESS<span>:</span></li>
                                <li class="admission_star">90</li>
                            <li>NATIONNALITY<span>:</span></li>
                                <li class="admission_star">MAROCAIN</li>  
                             <li>GENDER<span>:</span></li>
                                <li class="admission_star">90</li>
                            <li>ADMISSION YEAR<span>:</span></li>
                                <li class="admission_star">MAROCAIN</li>    
                        </ul>
                            </div> 
                        <!-- <h3>Luise, Dennison, DDS, MS, phD </h3>
                        <span>Syllabus : Economics, Marketing & Finance</span>
                        <p>There are many variations of passages of Lorem Ipsum available</p> -->
                   
               


                <div class="blog-icons">
                    <div class="blog-share_block">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li>Share :</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END BLOG -->
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
        <!-- Subscribe -->
        <script src="js/subscribe.js"></script>
        <!-- Script JS -->
        <script src="js/script.js"></script>
    </body>

    </html>
