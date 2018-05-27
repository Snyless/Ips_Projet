<!DOCTYPE html>
<html lang="en">
   <?php
            include 'includes/header.php';
            ?>

<body>
    <!-- ========================= Landing header =========================-->
    <section class="landing-header about_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.html"><img src="images/footer-logo.png" class="img-fluid landing-logo" alt="#"></a>
                </div>
            </div>
            <div class="landing-form">
                <div class="row">
                    <div class="col-md-8">
                        <div class="landing-title">
                            <h2>Advanced Certificate in Applied Management </h2>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered .</p>
                            <h4>Admission</h4>
                            <ul>
                                <li><a href="#">There are many variations of passages</a></li>
                                <li><a href="#">Contrary to popular belief</a></li>
                                <li><a href="#">Accompanied by English versions </a></li>
                                <li><a href="#">Lorem Ipsum passage, and going through</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="landing-form-wrap">
                            <h4 class="text-center mb-3">Join the Course</h4>
                            <form action="php/admission.php" method="post" id="admissionform">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control custom-select" name="course" required>
                                                <option selected="" value="">Course</option>
                                                <option value="select">One</option>
                                                <option value="select">Two</option>
                                                <option value="select">Three</option>
                                                <option value="select">Four</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                                        </div>
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-warning" id="js-admission-btn">APPLY NOW</button>
                                            <div id="js-admission-result" data-success-msg="Success, Your application has been sent" data-error-msg="Oops! Something went wrong"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END Landing header -->
    <!--============================= ADMISSION DETAILS COURCES =============================-->
    <section class="admission_cources">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-4">Course Details</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="admission_discription">
                        <h4>Advanced Certificate in Applied Management</h4>
                        <div class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <!-- // end .star-rating -->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>In consequat lacus dapibus, iaculis massa vitae, condimentum risus.</li>
                            <li>Curabitur varius magna quis ultrices lacinia.</li>
                            <li>Consequat lacus dapibus, iaculis massa vitae, condimentum.</li>
                        </ul>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="admission_insruction">
                        <h4>Instructors</h4>
                        <img src="images/admission-detail/instruction-img.jpg" class="img-fluid" alt="#">
                        <p>Frank Harvey
                            <br>
                            <span>Master of Science</span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-3">Student testimonial</h2>
                    <div class="landing-testimonial_block">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <h6><strong>Michelle Salazar</strong><h6>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--//END ADMISSION DETAILS COURCES -->
            <!--============================= Pricing =============================-->
            <div class="pricing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"> 
                            <div class="table-columns">
                                <ul class="price">
                                    <li class="header">Basic</li>
                                    <li>$ 9.99 / year</li>
                                    <li>Demoralized</li>
                                    <li>Looks Reasonable</li>
                                    <li>Weakness </li>
                                    <li>Annoyances</li>
                                    <li><a href="#" class="button">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">     
                            <div class="table-columns">
                                <ul class="price">
                                    <li class="header bg-gold">Gold</li>
                                    <li>$ 19.99 / year</li>
                                    <li>Demoralized</li>
                                    <li>Looks Reasonable</li>
                                    <li>Weakness </li>
                                    <li>Annoyances</li>
                                    <li><a href="#" class="button">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">   
                            <div class="table-columns">
                                <ul class="price">
                                    <li class="header">Premium</li>
                                    <li>$ 39.99 / year</li>
                                    <li>Demoralized</li>
                                    <li>Looks Reasonable</li>
                                    <li>Weakness </li>
                                    <li>Annoyances</li>
                                    <li><a href="#" class="button">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//End Pricing -->
            <!--============================= Call to Action =============================-->
            <section class="call-to_action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"> 
                          <a href="#admissionform" class="btn btn-warning pull-right">Join this course</a>
                            
                                <h3>Advanced Certificate in Applied Management</h3> 
                                <span>Join the Course now</span>
                              
                        </div>
                    </div>
                </div>
            </section>
            <!--//End Call to Action -->
            <!--============================= FOOTER =============================-->
           <?php
            include 'includes/footer.php';
            ?>
 </body>

</html>