<?php
    include'includes/session.php';
    include 'includes/header.php';
    include 'includes/database.php';
    $datab = mysqli_query($conn,"SELECT * FROM blog LIMIT 3"); 
    $data = mysqli_query($conn,"SELECT * FROM cours LIMIT 4");
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <!--============================= HEADER =============================-->
    <header>
        <div class="container nav-menu">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.html"><img src="images/logo2.png" class="responsive-logo img-fluid" alt="responsive-logo"></a>
                </div>
            </div>
            <?php include 'includes/nav_bar.php'; ?>
    </div>
    <div class="slider_img">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="images/slider.jpg" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>MASTER INTELLIGENT PROCESSING SYSTEMS</h1>
                            <h4>The first master in Morocco of artificial intelligence. <br></h4>
                            <div class="slider-btn">
                                <a href="#our_courses" class="btn btn-default">SEE Programs</a>
                                <a href="#footern" class="btn btn-default">Newsletters</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="images/slider-2.jpg" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>MASTER INTELLIGENT PROCESSING SYSTEMS</h1>
                            <h4>: Big Data, Data Science, Business Intelligence, Deep Learning, Datamining, Mobile Cloud Computing, Mobile Edge Computing (5G), Internet of Things </h4>
                            <div class="slider-btn">
                                <a href="#our_courses" class="btn btn-default">SEE Programs</a>
                                <a href="#footern" class="btn btn-default">Newsletters</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="images/slider-3.jpg" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>MASTER INTELLIGENT PROCESSING SYSTEMS</h1>
                            <h4>Intelligence artificielle, Recherche et traitement de l’information, Conception, Développement, etc.</h4>
                            <div class="slider-btn">
                                <a href="#our_courses" class="btn btn-default">SEE Programs</a>
                                <a href="#footern" class="btn btn-default">Newsletters</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</header>
<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<section class="clearfix about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Welcome</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>With the advancement of research and the development of new information and communication technologies, several applications can be developed for companies, service companies as well as for laboratories and research and development centers.
                <br>In this sense, to contribute to the development of laboratories, companies and society in general, we offer training in these new technologies. This training will lead to a Master's degree in Computer Science specializing in Intelligent Processing Systems. The degree holder will design and develop systems that can effectively meet the needs of applicants. It will be able to exploit the existing possibilities to design programs dealing with a particular class of problems. 
                <br>It is also required to measure the degree of relevance of each solution to a given problem and make decisions with knowledge of all the constraints involved.</p>
                <img src="images/welcom_sign.png" class="img-fluid" alt="welcom-img">
            </div>
        </div>
        </div>
    </section>
    <!--//END ABOUT -->
    <!--============================= OUR COURSES =============================-->
    <section class="our_courses" id="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Courses</h2>
                </div>
            </div>
            <div class="row">
                <?php 
                    while($info = mysqli_fetch_array( $data, MYSQLI_BOTH )){
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
                            <h3><?php echo"{$info['titulaire']}"; ?></h3>
                            <p><?php
                                    $post = substr($info['description'], 0, 50); 
                                    echo $post . "..."; ?></p>
                        </a>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="academics.php" class="btn btn-default btn-courses">View all courses</a>
                </div>
            </div>
        </div>
    </section>
    <!--//END OUR COURSES -->
    <!--============================= EVENTS =============================-->
    <section class="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Upcoming Events</h2>
                    <div class="event-img">
                        <span class="event-img_date">06-Nov-17</span>
                        <img src="images/upcoming-event-img.jpg" class="img-fluid" alt="event-img">
                        <div class="event-img_title">
                            <h3>Event Heading</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2>Important Dates</h2>
                    <div class="event-date-slide">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="event_date">
                                    <div class="event-date-wrap">
                                        <p>06</p>
                                        <span>Nov.17</span>
                                    </div>
                                </div>
                                <div class="date-description">
                                    <h3>Eestibulum sodales metus.</h3>
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book ...</p>
                                    <hr class="event_line">
                                </div>
                                <div class="event_date">
                                    <div class="event-date-wrap">
                                        <p>10</p>
                                        <span>Nov.17</span>
                                    </div>
                                </div>
                                <div class="date-description">
                                    <h3>Integer faucibus nulla a ligula.</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever...</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="event_date">
                                    <div class="event-date-wrap">
                                        <p>05</p>
                                        <span>Oct.17</span>
                                    </div>
                                </div>
                                <div class="date-description">
                                    <h3>Eestibulum sodales metus.</h3>
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book ...</p>
                                    <hr class="event_line">
                                </div>
                                <div class="event_date">
                                    <div class="event-date-wrap">
                                        <p>06</p>
                                        <span>Nov.17</span>
                                    </div>
                                </div>
                                <div class="date-description">
                                    <h3>Integer faucibus nulla a ligula.</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever...</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="event_date">
                                    <div class="event-date-wrap">
                                        <p>06</p>
                                        <span>Sep.18</span>
                                    </div>
                                </div>
                                <div class="date-description">
                                    <h3>Eestibulum sodales metus.</h3>
                                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book ...</p>
                                    <hr class="event_line">
                                </div>
                                <div class="event_date">
                                    <div class="event-date-wrap">
                                        <p>06</p>
                                        <span>Mar.17</span>
                                    </div>
                                </div>
                                <div class="date-description">
                                    <h3>Integer faucibus nulla a ligula.</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END EVENTS -->
    <!--============================= DETAILED CHART =============================-->
    <div class="detailed_chart">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                    <div class="chart-img">
                        <img src="images/chart-icon_1.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter">20</span> Teachers
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                    <div class="chart-img">
                        <img src="images/chart-icon_2.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter">25</span> Students
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                    <div class="chart-img">
                        <img src="images/chart-icon_3.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter">24</span> Courses
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="chart-img">
                        <img src="images/chart-icon_4.png" class="img-fluid" alt="chart_icon">
                    </div>
                    <div class="chart-text">
                        <p><span class="counter">2</span> Years Exp.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//END DETAILED CHART -->
    <!--============================= OUR BLOG =============================-->
  
 
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Blog</h2>
                </div>
            </div>

            <div>
                 
            <div class="row">
                <?php
               $db = new PDO('mysql:host=localhost;dbname=masterips;charset=utf8', 'root', '');
                $sql='SELECT * FROM blog';
                  $query = $db->prepare($sql);
                  $query->execute();
                  
                    while($ligne = $query->fetch()){
                    
                     
                  
                    ?>
                <div class="col-md-4">
                    
                     
                    <a href="blog-post.php?id=<?php echo"{$ligne['id_blog']}"; ?>" class="home_blog_link">

                        <div class="blog-img_box">
                           
                            <img src="images/blog-img_3.jpg" class="img-fluid blog_display" alt="blog-img">
                            <div class="blogtitle">
                                <h3><?php echo"{$ligne['titre']}"; ?></h3>
                                <i class="icon-user fa-common" aria-hidden="true"></i>
                                <p>by: <?php echo $ligne['nom'] ; ?><?php echo $ligne['prenom'] ; ?></p>
                                <br>
                                <i class="icon-speedometer fa-common" aria-hidden="true"></i>
                                   <p> <?php echo date('D',strtotime($ligne['date'])); ?>-<?php echo date('M',strtotime($ligne['date'])); ?>-<?php echo date('Y',strtotime($ligne['date'])); ?></p>
                                   <p>
                                    <a href="blog-post.php?id=<?php echo"{$ligne['id_blog']}"; ?>" ><center>details</center></a>
</p>

                            </div> 
                                                 
                        </div>

                    </a>
                
                </div>

               <?php
    }
    ?>  
                
            </div>
   
        </div>
   <br>
           <div class="row">
                <div class="col-md-12 text-center">
                    <a href="blog.php" class="btn btn-default btn-courses"><center>VIEW ALL BLOG</center></a>
                </div>
            </div>

        </div>
    </section>
   
    <!--//END OUR BLOG -->
    <!--============================= FOOTER =============================-->
     <?php 
    include 'includes/footer.php';
    ?>
    <div id="footern"></div>
           
        </body>

        </html>