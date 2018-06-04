<?php
    include'includes/session.php';
    include 'includes/header.php';
    include 'includes/database.php';
    if(isset($_GET['id'])){
      $id = $_GET['id'];
    } else {
      echo "failed";
    }
    $data = mysqli_query($conn,"SELECT * FROM cours WHERE id_cours=$id");
?>
<!DOCTYPE html>
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
                <h1>Course Details</h1>
            </div>
        </div>
    </div>
</div>
<!--//END ABOUT IMAGE -->
<!--============================= ADMISSION DETAILS COURCES =============================-->
<?php 
    while($info = mysqli_fetch_array( $data, MYSQLI_BOTH )){
?>
<section class="admission_cources">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6">
                <div class="admission_discription">
                    <h4><?php echo"{$info['titulaire']}"; ?></h4>
                    <div class="star-rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <!-- // end .star-rating -->
                    <p><?php echo"{$info['description']}"; ?> </p>
                </div>
                <div class="admission-pdf">
                    <i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i>
                    <p>course details PDF
                        <br>
                        <a href="#">DOWNLOAD</a>
                    </p>
                </div>
            </div>
                    <div class="col-lg-4">
                        <ul class="admission_rating">
                            <li>Module<span>:</span></li>
                            <li class="admission_star"><?php echo"{$info['module']}"; ?></li>
                            <li class="admission_star-second">Semestre<span>:</span></li>
                            <li class="admission_star"><?php echo"S"."{$info['semestre']}"; ?></li>
                            <li>Start date<span>:</span></li>
                            <li class="admission_star"><?php echo"{$info['date_debut']}"; ?></li>
                            <li class="admission_star-second">End date<span>:</span></li>
                            <li class="admission_star"><?php echo"{$info['date_fin']}"; ?></li>
                            <li>Hour<span>:</span></li>
                            <li class="admission_star"><?php echo"{$info['heure']}"; ?></li>
                        </ul>
                        <div class="admission_insruction">
                            <h4>Instructors</h4>
                            <img src="images/admission-detail/instruction-img.jpg" class="img-fluid" alt="#">
                            <p>Frank Harvey
                                <br>
                                <span>Master of Science</span></p>
                            </div>
                            <div class="admission_share-icon">
                                <h4>Share Course</h4>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php } ?>
            <!--//END ADMISSION DETAILS COURCES -->
            <!--============================= Instagram Feed =============================-->
            <!--//END Instagram feed JS -->
            <!--============================= FOOTER =============================-->
             <?php 
    include 'includes/footer.php';
    ?>
           
                </body>

                </html>
