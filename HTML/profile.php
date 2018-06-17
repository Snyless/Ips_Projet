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
                <h1>PROFILE</h1>
            </div>
        </div>
    </div>
</div>
<!--//END ABOUT IMAGE -->
<!--============================= BLOG =============================-->
<section class="blog-wrap">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
                <div class="contact-title">
                    <h2>Basic informations</h2>
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

   </div> 
        </div>
  
    </div></section>

<!--//END BLOG -->
<!--============================= Instagram Feed =============================-->
<!--//END Instagram feed JS -->
<!--============================= FOOTER =============================-->
<?php 
    include 'includes/footer.php';
?>
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
