<?php
    include'includes/session.php';
    include 'includes/header.php';
    include 'includes/database.php';
    

         
                     
                  
                 
?>

<html lang="en">
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

<section class="tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Tabs</h3>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active tab-list" data-toggle="tab" href="#s1" role="tab">Semestre 1</a>
                            </li>
                            <li class="nav-item nav-special-br">
                                <a class="nav-link tab-list" data-toggle="tab" href="#s2" role="tab">Semestre 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tab-list" data-toggle="tab" href="#s3" role="tab">Semestre 3</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Tab panes -->
                        <div class="tab-content shortcode-tab-content">
                            <div class="tab-pane active" id="s1" role="tabpanel">
                                    <div  class="modal-dialog modal-lg">
        <div class="col-md-12">
                    
            <?php   
                $user=$_SESSION['login_user'] ;      
                $db = new PDO('mysql:host=localhost;dbname=masterips;charset=utf8', 'root', '');
                $sql='SELECT * FROM cours WHERE semestre =1';
                $query = $db->prepare($sql);
                $query->execute();
                while($ligne = $query->fetch()){
               
            ?>
          
               
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" class="accordian-link" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <?php echo"{$ligne['titulaire']}"; ?>

                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-block">
                              
                            </div>
                        </div>
                    </div>
                </div>
                 <?php } ?>
        </div>
    </div> 

                            </div>
                                <div class="tab-pane" id="s2" role="tabpanel"> meme chose </div>
                                    <div class="tab-pane" id="s3" role="tabpanel">meme chose </div>
                    </div>
                </div>
            </div>
            
                
            
</div>
</div>
</div>
</section>


<section class="blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                        <div class="blog-category_block pt-0">
                            <h3>Personal settings</h3>
                            <ul>
                                <li><a href="profile.php">Profile<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                                <li><a href="absence.php">Absence  <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                                <li><a href="note.php">Note  <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                                <li><a href="account.php">Account<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
            </div>

<div class="col-md-8">
                <div class="teacher-profile_block ">
                            <h4>Semestre I </h4>
               
                </div> 
    <div  class="modal-dialog modal-lg">
        <div class="col-md-12">
                    
            <?php   
                $user=$_SESSION['login_user'] ;      
                $db = new PDO('mysql:host=localhost;dbname=masterips;charset=utf8', 'root', '');
                $sql='SELECT * FROM cours WHERE semestre =1';
                $query = $db->prepare($sql);
                $query->execute();
                while($ligne = $query->fetch()){
               
            ?>
          
               
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" class="accordian-link" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <?php echo"{$ligne['titulaire']}"; ?>

                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-block">
                              
                            </div>
                        </div>
                    </div>
                </div>
                 <?php } ?>
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
