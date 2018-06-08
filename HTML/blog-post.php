<?php
    include'includes/session.php';
    include 'includes/header.php';
    include 'includes/database.php';
    if(isset($_GET['id'])){
      $id = $_GET['id'];
    } else {
      echo "failed";
    }
    $data = mysqli_query($conn,"SELECT * FROM blog WHERE id_blog=$id");
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
                <h1>Blog Post</h1>
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
                <div class="blog-img_block">
                    <img src="images/blog/blog-img_01.jpg" class="img-fluid" alt="blog-img">
                    <div class="blog-date">
                         <?php 
    while($info = mysqli_fetch_array( $data, MYSQLI_BOTH )){
?>
                        <span><?php echo date('D',strtotime($info['date'])); ?>-<?php echo date('M',strtotime($info['date'])); ?>-<?php echo date('Y',strtotime($info['date'])); ?></span>
                    </div>
                </div>
               
                <div class="blog-tiltle_block">
                    <h4><?php echo"{$info['titre']}"; ?> </h4>
                    <h6> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo"{$info['nom']}"; ?><?php echo"{$info['prenom']}"; ?></span> </a>  |   <a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span>Education</span></a></h6>
                   
                </div>
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
                     <?php 
   }
   ?>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs blogpost-tab-wrap" role="tablist">
                        <li class="nav-item blogpost-nav-tab">
                            <a class="nav-link active" data-toggle="tab" href="#comments" role="tab">Comments</a>
                        </li>
                        <li class="nav-item blogpost-nav-tab">
                            <a class="nav-link" data-toggle="tab" href="#write-comment" role="tab">Write a Comment</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="blogpost-tabs">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="comments" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="blodpost-tab-img">
                                                    <img src="images/admission-detail/admission_testi-img.jpg" alt="#">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="blogpost-tab-description">
                                                    <h6>Hanna Gover</h6>
                                                    <p>Hey, Great Article, i have read it so many times and felt in love with it Sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                                    <p class="blogpost-rply"><a href="#">Reply</a> <span>few hours ago</span></p>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="blodpost-tab-img">
                                                    <img src="images/admission-detail/admission_testi-img.jpg" alt="#">
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="blogpost-tab-description">
                                                    <h6>Hanna Gover</h6>
                                                    <p>Hey, Great Article, i have read it so many times and felt in love with it Sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                                    <p class="blogpost-rply"><a href="#">Reply</a> <span>March 28</span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="write-comment" role="tabpanel">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" placeholder="Full Name">
                                            </div>
                                            <!-- // end .form-group -->
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Email ID</label>
                                                <input type="email" class="form-control" placeholder="Email ID">
                                            </div>
                                            <!-- // end .form-group -->
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Your Comments</label>
                                                <textarea class="form-control" rows="6"> </textarea>
                                            </div>
                                            <!-- // end .form-group -->
                                        </div>
                                        <div class="col-12">
                                            <input type="submit" value="Submit Comment" class="btn btn-warning" />
                                        </div>
                                        <!-- // end .col-12 -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
 <?php 
    include 'includes/footer.php';
    ?>
           
    </body>

    </html>
