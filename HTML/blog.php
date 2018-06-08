<?php
    include'includes/session.php';
    include 'includes/header.php';
    include 'includes/database.php';
   
    $data = mysqli_query($conn,"SELECT * FROM blog ");
?>


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
                <h1>Blog</h1>
            </div>
        </div>
    </div>
</div>
<!--//END ABOUT IMAGE -->
<!--============================= BLOG =============================-->

<section class="blog-wrap">
    <div class="container">
  
        <div class="row">

            <div class="col-md-8">

                <div class="blog-single-item">
                                                   <?php 
    while($info = mysqli_fetch_array( $data, MYSQLI_BOTH )){
?>
                    <div class="blog-img_block">
                        <img src="images/blog/blog-img_01.jpg" class="img-fluid" alt="blog-img">
                        <div class="blog-date">
                            <span><?php echo date('D',strtotime($info['date'])); ?>-<?php echo date('M',strtotime($info['date'])); ?>-<?php echo date('Y',strtotime($info['date'])); ?></span>
                        </div>
                    </div>
                    <div class="blog-tiltle_block">
                        <h4><a href="blog-post.html"><?php echo"{$info['titre']}"; ?> </a></h4>
                        <h6> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo"{$info['nom']}"; ?><?php echo"{$info['prenom']}"; ?></span> </a> </span> </a>  |   <a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span>Education</span></a></h6>
                         <br>
                <br>
                 <div class="admission-pdf">
                    <i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i>
                    <p> details PDF
                        <?php  
                        $nom=$info['nom_file'] ;?>
                        <br>
                        
                        <a href="<?php echo"{$info['nom_file']}"; ?>">DOWLOAD</a>
                    </p>
                    
                </div>
   <br><br>
               
                       
                       
                    </div>


                                  <?php 
   }
?>
               </div>
               
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link page-next" href="#" aria-label="Previous">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link page-next" href="#" aria-label="Next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
         
        </div>
    </div>
</section>
<!--//END BLOG -->
<!--============================= Instagram Feed =============================-->
<div id="instafeed"></div>
<!--//END Instagram feed JS -->
<!--============================= FOOTER =============================-->
 <?php 
    include 'includes/footer.php';
    ?>
           
    </body>

    </html>
