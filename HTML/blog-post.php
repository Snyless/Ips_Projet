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
                        <span>5-08-16</span>
                    </div>
                </div>
                <div class="blog-tiltle_block">
                    <h4>Blog Heading here One line</h4>
                    <h6> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>admin</span> </a>  |   <a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span>Education</span></a></h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                </div>
                <blockquote class="blogpost-quotes">
                    <span><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                    <p>Many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. </p>
                    <span class="quote-right"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                </blockquote>
                <div class="blog-tiltle_block">
                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.</p>
                    <span class="blogpost_list">Cras sed ante sagittis, imperdiet purus non, molestie nisi.</span>
                    <br>
                    <span class="blogpost_list">Quisque pellentesque ligula sed augue euismod, sit amet accumsa</span>
                    <br>
                    <span class="blogpost_list">Sed varius velit sit amet tortor interdum tincidunt.</span>
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
            <div class="col-md-4">
                <form>
                    <input type="text" placeholder="Search" class="blog-search">
                    <a href="#" class="btn btn-warning btn-blogsearch">SEARCH</a>
                </form>
                <div class="blog-category_block">
                    <h3>Category</h3>
                    <ul>
                        <li><a href="#">Vivamus elementum elit<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                        <li><a href="#">Maecenas ut dui at lorem  <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                        <li><a href="#">Quisque quis libero quis augue  <i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                        <li><a href="#">Curabitur consequat odio<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                        <li><a href="#">Aliquam tristique turpis<i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="blog-featured_post">
                    <h3>Featured Post</h3>
                    <div class="blog-featured-img_block">
                        <img src="images/blog/blogpost-img_01.jpg" class="img-fluid" alt="blog-featured-img">
                        <h5>Heading</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typeset</p>
                    </div>
                    <hr>
                </div>
                <div class="blog-featured_post">
                    <div class="blog-featured-img_block">
                        <img src="images/blog/blogpost-img_02.jpg" class="img-fluid" alt="blog-featured-img">
                        <h5>Heading</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typeset</p>
                    </div>
                    <hr>
                </div>
                <div class="blog-featured_post">
                    <div class="blog-featured-img_block">
                        <img src="images/blog/blogpost-img_03.jpg" class="img-fluid" alt="blog-featured-img">
                        <h5>Heading</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typeset</p>
                    </div>
                </div>
                <div class="blog-tags_wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Tags</h3>
                        </div>
                        <a href="#" class="blog-tags">
                            <span>Education</span>
                        </a>
                        <a href="#" class="blog-tags">
                            <span>Calass</span>
                        </a>
                        <a href="#" class="blog-tags">
                            <span>Seat</span>
                        </a>
                        <a href="#" class="blog-tags">
                            <span>Teachers</span>
                        </a>
                        <a href="#" class="blog-tags">
                            <span>Library</span>
                        </a>
                        <a href="#" class="blog-tags">
                            <span>Food</span>
                        </a>
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
