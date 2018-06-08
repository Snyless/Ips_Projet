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
<section class="blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                        <div class="blog-category_block pt-0">
                            <h3>Personal settings</h3>
                            <ul>
                                <li><a href="profile.php">Profile<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                               <!-- <li><a href="absence.php">Absence  <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                                <li><a href="note.php">Note  <i class="fa fa-caret-right" aria-hidden="true"></i></a></li> -->
                                <li><a href="account.php">Account<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
            </div>

        <div class="col-md-8">
                 <div class="teacher-profile_block ">
                            <h4>Basic information</h4>
               
                </div> 

            <div  class="modal-dialog modal-lg">

            <?php   $user=$_SESSION['login_user'] ;      
 
  

  
                        $db = new PDO('mysql:host=localhost;dbname=masterips;charset=utf8', 'root', '');
                        $sql='SELECT * FROM user u,etudiant e WHERE e.id_user=u.id_user and username=? ';
                     $query = $db->prepare($sql);
                     $query-> bindValue(1,$user,PDO::PARAM_STR);
                    $query->execute();
                                      
    while($ligne = $query->fetch()){
               if($ligne['type']==1){
?>

                                
                                <ul class=" admission_rating">
                                    <li> FULL NAME<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['nom']}"."  "."{$ligne['prenom']}"; ?></li>
                                     <li> USERNAME<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['username']}"; ?></li>
                                    <li >STUDENT ID(CNE)<span>:</span></li>
                                        <li class="admission_star"> <?php echo"{$ligne['CNE']}"; ?></li>
                                    <li >EMAIL<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['email']}"; ?></li>
                                    <li >DOB<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['date_N']}"; ?></li>
                                   <li> ADRESSE<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['adresse']}"; ?></li>
                                     <li>MOBILE NO<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['tel']}"; ?></li>
                                     <li>ADMISSION YEAR<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['annee_admission']}"; ?></li>
                                     <li>LICENCE<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['licence']}"; ?></li>
                                </ul>
                     
          

<?php                           }else if($ligne['type']==2){

?>
                                <ul class=" admission_rating">
                                    <li> FULL NAME<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['nom']}"."  "."{$ligne['prenom']}"; ?></li>
                                     <li> USERNAME<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['username']}"; ?></li>
                                   
                                    <li >EMAIL<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['email']}"; ?></li>
                                    <li >DOB<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['date_N']}"; ?></li>
                                   <li> ADRESSE<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['adresse']}"; ?></li>
                                     <li>MOBILE NO<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['tel']}"; ?></li>
                                    
                                </ul>
<?php
    
                                  }else if($ligne['type']==0){
?>
                                <ul class=" admission_rating">
                                    <li> FULL NAME<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['nom']}"."  "."{$ligne['prenom']}"; ?></li>
                                     <li> USERNAME<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['username']}"; ?></li>
                                   
                                    <li >EMAIL<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['email']}"; ?></li>
                                    <li >DOB<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['date_N']}"; ?></li>
                                   <li> ADRESSE<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['adresse']}"; ?></li>
                                     <li>MOBILE NO<span>:</span></li>
                                        <li class="admission_star"><?php echo"{$ligne['tel']}"; ?></li>
                                    
                                </ul>

              <?php                   }                          

                                }?>

            </div>

<div class='row'>
<div class='col-md-5 offset-md-7'>
<!-- Button trigger modal -->
<button type="button" class="btn btn-simple btn-1 btn-default-clr" data-toggle="modal"  data-target="#modify">Modify informations
</button>
</div>
         </div>

            </div>
        </div>
    </div>
</section>

</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modify" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      



       <div class="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
               <div id="login-overlay" class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="well">
                                      <form id="loginForm" method="POST" action="" novalidate="novalidate">
                                          <div class="form-group">
                                              <label  class="control-label">Username</label>
                                              <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                              <span class="help-block"></span>
                                          </div>
                                          <div class="form-group">
                                              <label  class="control-label">Password</label>
                                              <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                              <span class="help-block"></span>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" name="remember" id="mod"> Remember login
                                              </label>
                                          </div>
                                          <button type="submit" class="btn btn-warning" id="js-subscribe-btn">SAVE</button>                                          
                                      </form>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--//End Login -->


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


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
