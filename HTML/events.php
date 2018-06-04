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
                    <a href="index.php"><img src="images/responsive-logo.png" class="responsive-logo img-fluid" alt="responsive-logo"></a>
                </div>
            </div>
              <?php
            include 'includes/nav_bar.php';
            ?>
        <div class="row">
            <div class="col-md-12">
                <h1>Events</h1>
            </div>
        </div>
    </div>
</div>
<!--//END ABOUT IMAGE -->
<!--============================= EVENTS =============================-->
<section class="events">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="event-title">Events</h2>
            </div>
            <div class="col-md-8">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item nav-tab1">
                        <a class="nav-link tab-list active" data-toggle="tab" href="#upcoming-events" role="tab">Upcoming events </a>
                    </li>
                    <li class="nav-item nav-special-br">
                        <a class="nav-link tab-list" data-toggle="tab" href="#completed-events" role="tab">Completed events </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <!-- Tab panes -->
            <div class="tab-content">
                 <?php
               $db = new PDO('mysql:host=localhost;dbname=masterips;charset=utf8', 'root', '');
                $sql='SELECT * FROM event';
                  $query = $db->prepare($sql);
                  $query->execute();
                  
                    while($ligne = $query->fetch()){
                     if($ligne['completed']==0){
                     
                  
                    ?>
                <div class="tab-pane active" id="upcoming-events" role="tabpanel">
            
              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <div class="event-date">
                            <h4><?php echo date('D',strtotime($ligne['date_event'])); ?>
                                </h4> <span><?php 
                                echo date('M',strtotime($ligne['date_event']));
                                echo date ('Y',strtotime($ligne['date_event'])); ?>
                            </span>
                        </div>
                        <span class="event-time">
                            <?php echo $ligne['heure_debut']."-".$ligne['heure_fin'];  ?>
                            </span>
                    </div>
                    <div class="col-md-10">
                        <div class="event-heading">
                            <h3><?php echo $ligne['titre']; ?></h3>
                            <p><?php echo $ligne['description_min']; ?></p>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="event-hilights">
                                    
                                    <h5>Event Highlights Photos</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src=<?php echo $ligne['id_image']; ?> class="img-fluid" alt="event-img">
                                    </div>
                                 
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="event-highlight-discription">
                                            <p><?php echo $ligne['description_max']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="event-highlight-discription">
                                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" class="event-toggle" data-parent="#accordion" href="#collapse3">Show Details</a>
                          </h4>
                      </div>
                  </div>
              </div>
              <hr class="event-underline">
          </div>
          
      <div class="col-md-12 text-center">
        <a href="#" class="btn btn-default btn-courses my-5">Show More</a>
    </div>
</div>
                <?php 
                        }else if ($ligne['completed']==1){ ?>
                <div class="tab-pane" id="completed-events" role="tabpanel">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="event-date">
                                    <h4>20</h4>
                                    <span>Aug 2017</span>
                                </div>
                                <span class="event-time">9.00 AM - 4.00 PM</span>
                            </div>
                            <div class="col-md-10">
                            <div class="event-heading">
                                <h3>Event Mauris egestas lorem viverra</h3>
                                <p>Chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum...</p>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse in show">
                                <div class="panel-body">
                                    <div class="event-hilights">
                                        <h5>Event Highlights Photos</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="images/events/event-img_1.jpg" class="img-fluid" alt="event-img">
                                        </div>
                                        <div class="col-md-4">
                                        <img src="images/events/event-img_2.jpg" class="img-fluid" alt="event-img">
                                        </div>
                                        <div class="col-md-4">
                                        <img src="images/events/event-img_3.jpg" class="img-fluid" alt="event-img">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="event-highlight-discription">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="event-highlight-discription">
                                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="event-toggle" data-parent="#accordion" href="#collapse5">Hide Details</a>
                                </h4>
                            </div>
                        </div>
      </div>
      <hr class="event-underline">
  </div>
  <div class="col-md-12">
    <div class="row">
        <div class="col-md-2">
            <div class="event-date">
                <h4>05</h4> <span>Sep 2017</span>
            </div>
            <span class="event-time">9.00 AM - 4.00 PM</span>
        </div>
        <div class="col-md-10">
            <div class="event-heading">
                <h3>Event Heading</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
            </div>
            <div id="collapse6" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="event-hilights">
                        <h5>Event Highlights Photos</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/events/event-img_1.jpg" class="img-fluid" alt="event-img">
                        </div>
                        <div class="col-md-4">
                            <img src="images/events/event-img_2.jpg" class="img-fluid" alt="event-img">
                        </div>
                        <div class="col-md-4">
                            <img src="images/events/event-img_3.jpg" class="img-fluid" alt="event-img">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="event-highlight-discription">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="event-highlight-discription">
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" class="event-toggle" data-parent="#accordion" href="#collapse6">Show Details</a>
              </h4>
          </div>
      </div>
  </div>
</div>
</div>
                <?php } } ?>
<div class="tab-pane" id="calander-view" role="tabpanel">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!--//END EVENTS -->
<!--============================= Instagram Feed =============================-->
<div id="instafeed"></div>
<!--//END Instagram feed JS -->
<!--============================= FOOTER =============================-->
 <?php 
    include 'includes/footer.php';
    ?>
           
    </body>

    </html>
