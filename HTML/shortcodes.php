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
                  <?php
            include 'includes/nav_bar.php';
            ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Shortcodes</h1>
            </div>
        </div>
    </div>
</div>
<!--//END ABOUT IMAGE -->
<!--============================= TABS =============================-->
<section class="tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Tabs</h3>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active tab-list" data-toggle="tab" href="#home" role="tab">Tab One</a>
                            </li>
                            <li class="nav-item nav-special-br">
                                <a class="nav-link tab-list" data-toggle="tab" href="#profile" role="tab">Tab Two</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tab-list" data-toggle="tab" href="#messages" role="tab">Tab Three</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Tab panes -->
                        <div class="tab-content shortcode-tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. </div>
                            <div class="tab-pane" id="profile" role="tabpanel">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</div>
                            <div class="tab-pane" id="messages" role="tabpanel">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Accordion</h3>
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" class="accordian-link" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Accordion 1
                              </a>
                          </h5>
                      </div>
                      <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-block">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                            <a class="collapsed accordian-link" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Accordion 2
                          </a>
                      </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                    <h5 class="mb-0">
                        <a class="collapsed accordian-link" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Accordion 3
                      </a>
                  </h5>
              </div>
              <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="card-block">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<!--//END TABS -->
<!--============================= ALERT BOX =============================-->
<section class="alert-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert-title">
                    <h3>Allert Message</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="alert alert-success" role="alert">
                    <p><i class="fa fa-check-circle-o" aria-hidden="true"></i>Success message goes here</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="alert alert-info" role="alert">
                    <p><i class="fa fa-sticky-note-o" aria-hidden="true"></i>Information message goes here</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="alert alert-warning" role="alert">
                    <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Warning message goes here</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="alert alert-danger" role="alert">
                    <p><i class="fa fa-times" aria-hidden="true"></i>Error message goes here</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END ALERT BOX -->
<!--============================= TYPOGRAPHY =============================-->
<section class="typography">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="typography-title">Typography</h3>
                <h1>h1. heading</h1>
                <h2>h2. heading</h2>
                <h3>h3. heading</h3>
                <h4>h4. heading</h4>
                <h5>h5. heading</h5>
                <h6>h6. heading</h6>
            </div>
            <div class="col-md-4">
                <div class="shortcode-list">
                    <h3>List</h3>
                    <ul>
                        <li>General</li>
                        <li>Hospital treatment</li>
                        <li>Billing Manager</li>
                        <li>Payment method</li>
                        <li>Biologist</li>
                        <li>Biomedical Technician</li>
                        <li>Business Analyst</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-general">
                    <ul>
                        <li><span>1</span>General</li>
                        <li><span>2</span>Hospital treatment</li>
                        <li><span>3</span>Billing Manager</li>
                        <li><span>4</span>Payment method</li>
                        <li><span>5</span>Biologist</li>
                        <li><span>6</span>Biomedical Technician</li>
                        <li><span>7</span>Business Analyst</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END TYPOGRAPHY -->
<!--============================= COLUMNS =============================-->
<section class="shortcode-columns">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Columns</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5>Column 1/2</h5>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed </p>
            </div>
            <div class="col-md-6">
                <h5>Column 1/2</h5>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed</p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <h5>Column 1/3</h5>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
            </div>
            <div class="col-md-4">
                <h5>Column 1/3</h5>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
            </div>
            <div class="col-md-4">
                <h5>Column 1/3</h5>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <h5>Column 1/4</h5>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when </p>
            </div>
            <div class="col-md-3">
                <h5>Column 1/4</h5>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when </p>
            </div>
            <div class="col-md-3">
                <h5>Column 1/4</h5>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when </p>
            </div>
            <div class="col-md-3">
                <h5>Column 1/4</h5>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when </p>
            </div>
        </div>
    </div>
</section>
<!--//END COLUMNS -->
<!--============================= BUTTON & TOGGLE =============================-->
<section class="button-toggle">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Buttons</h3>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-warning btn-1">BUTTON</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-warning btn-2">BUTTON</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-warning btn-3">BUTTON</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-warning btn-1 bnt-border_1">BUTTON</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-warning btn-2 bnt-border_2">BUTTON</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-warning btn-3 bnt-border_3">BUTTON</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-simple btn-1 btn-default-clr">BUTTON</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-simple btn-1 btn-default-clr1">BUTTON</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-simple btn-1 btn-default-clr2">BUTTON</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Toggle</h3>
                <button class="accordion">Accordion title</button>
                <div class="panel">
                    <p>Established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                </div>
                <button class="accordion">Accordion title</button>
                <div class="panel">
                    <p>Established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                </div>
                <button class="accordion">Accordion title</button>
                <div class="panel panel-last">
                    <p>Established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END BUTTON & TOGGLE -->
<!--============================= Instagram Feed =============================-->
<div id="instafeed"></div>
<!--//END Instagram feed JS -->
<!--============================= FOOTER =============================-->
<?php
            include 'includes/footer.php';
            ?>
    </body>

    </html>
