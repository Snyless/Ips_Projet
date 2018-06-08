<?php
    include'includes/session.php';
    include 'includes/header.php';
    include 'includes/database.php';
    $data = mysqli_query($conn,"SELECT * FROM cours WHERE semestre=1");
    $data2 = mysqli_query($conn,"SELECT * FROM cours WHERE semestre=2");
    $data3 = mysqli_query($conn,"SELECT * FROM cours WHERE semestre=3");
    $data4 = mysqli_query($conn,"SELECT * FROM cours WHERE semestre=4");
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
                <h1>Our Courses</h1>
            </div>
        </div>
    </div>
</div>
<!--//END ABOUT IMAGE -->
<!--============================= ADMISSION COURCES =============================-->
<section class="admission_cources">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="course_filter" style="padding: 20px 20px 15px 20px;">
                    <h3>Semestre 1</h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
        <?php 
            while($info = mysqli_fetch_array($data, MYSQLI_BOTH )){
        ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="courses_box mb-5">
                        <div class="course-img-wrap">
                            <img src="<?=$info['image']?>" class="img-fluid" alt="courses-img">
                            <div class="courses_box-img">
                                <div class="courses-link-wrap">
                                    <a href="course-detail.php?id=<?php echo"{$info['id_cours']}"; ?>" class="course-link"><span>course Details </span></a>
                                </div>
                                <!-- // end .courses-link-wrap -->
                            </div>
                        </div>
                        <!-- // end .course-img-wrap -->
                        <div class="courses_icon">
                            <img src="images/plus-icon.png" class="img-fluid close-icon" alt="plus-icon">
                        </div>
                        <a href="course-detail.php?id=<?php echo"{$info['id_cours']}"; ?>" class="course-box-content">
                            <h3 style="color:#000;"><?php echo"{$info['titulaire']}"; ?></h3>
                            <p style="color:#000;"><?php
                                    $post = substr($info['description'], 0, 50); 
                                    echo $post . "..."; ?></p>
                        </a>
                    </div>
                </div>
        <?php } ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="course_filter" style="padding: 20px 20px 15px 20px;">
                    <h3>Semestre 2</h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
        <?php 
            while($info2 = mysqli_fetch_array($data2, MYSQLI_BOTH )){
        ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="courses_box mb-5">
                        <div class="course-img-wrap">
                            <img src="<?=$info2['image']?>" class="img-fluid" alt="courses-img">
                            <div class="courses_box-img">
                                <div class="courses-link-wrap">
                                    <a href="course-detail.php?id=<?php echo"{$info2['id_cours']}"; ?>" class="course-link"><span>course Details </span></a>
                                </div>
                                <!-- // end .courses-link-wrap -->
                            </div>
                        </div>
                        <!-- // end .course-img-wrap -->
                        <div class="courses_icon">
                            <img src="images/plus-icon.png" class="img-fluid close-icon" alt="plus-icon">
                        </div>
                        <a href="course-detail.php?id=<?php echo"{$info['id_cours']}"; ?>" class="course-box-content">
                            <h3 style="color:#000;"><?php echo"{$info2['titulaire']}"; ?></h3>
                            <p style="color:#000;"><?php
                                    $post = substr($info2['description'], 0, 50); 
                                    echo $post . "..."; ?></p>
                        </a>
                    </div>
                </div>
        <?php } ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="course_filter" style="padding: 20px 20px 15px 20px;">
                    <h3>Semestre 3</h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
        <?php 
            while($info3 = mysqli_fetch_array($data3, MYSQLI_BOTH )){
        ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="courses_box mb-5">
                        <div class="course-img-wrap">
                            <img src="<?=$info3['image']?>" class="img-fluid" alt="courses-img">
                            <div class="courses_box-img">
                                <div class="courses-link-wrap">
                                    <a href="course-detail.php?id=<?php echo"{$info3['id_cours']}"; ?>" class="course-link"><span>course Details </span></a>
                                </div>
                                <!-- // end .courses-link-wrap -->
                            </div>
                        </div>
                        <!-- // end .course-img-wrap -->
                        <div class="courses_icon">
                            <img src="images/plus-icon.png" class="img-fluid close-icon" alt="plus-icon">
                        </div>
                        <a href="course-detail.php?id=<?php echo"{$info['id_cours']}"; ?>" class="course-box-content">
                            <h3 style="color:#000;"><?php echo"{$info3['titulaire']}"; ?></h3>
                            <p style="color:#000;"><?php
                                    $post = substr($info3['description'], 0, 50); 
                                    echo $post . "..."; ?></p>
                        </a>
                    </div>
                </div>
        <?php } ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="course_filter" style="padding: 20px 20px 15px 20px;">
                    <h3>Semestre 4</h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row" style="a{color:#000;}">
        <?php 
            while($info4 = mysqli_fetch_array($data4, MYSQLI_BOTH )){
        ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="courses_box mb-5">
                        <div class="course-img-wrap">
                            <img src="<?=$info4['image']?>" class="img-fluid" alt="courses-img">
                            <div class="courses_box-img">
                                <div class="courses-link-wrap">
                                    <a href="course-detail.php?id=<?php echo"{$info4['id_cours']}"; ?>" class="course-link"><span>course Details </span></a>
                                </div>
                                <!-- // end .courses-link-wrap -->
                            </div>
                        </div>
                        <!-- // end .course-img-wrap -->
                        <div class="courses_icon">
                            <img src="images/plus-icon.png" class="img-fluid close-icon" alt="plus-icon">
                        </div>
                        <a href="course-detail.php?id=<?php echo"{$info['id_cours']}"; ?>" class="course-box-content">
                            <h3 style="color:#000;"><?php echo"{$info4['titulaire']}"; ?></h3>
                            <p style="color:#000;"><?php
                                    $post = substr($info4['description'], 0, 50); 
                                    echo $post . "..."; ?></p>
                        </a>
                    </div>
                </div>
        <?php } ?>
        </div>
    </div>
</section>
                                             <!--//END Instagram feed JS -->
                        <!--=============================FOOTER=============================-->
    <?php include 'includes/footer.php';
    ?>
    </body>

</html>
