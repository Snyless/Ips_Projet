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
          <h1>Gallery</h1>
        </div>
      </div>
    </div>
  </div>
  <!--//END ABOUT IMAGE -->
  <!--============================= Gallery =============================-->
  <div class="gallery-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="gallery-style">Style One</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="images/gallery/large_1.jpg" class="grid image-link">
            <figure class="effect-bubba gallery-img-wrap">
              <img src="images/gallery/gallery_1.jpg" class="img-fluid" alt="#">
              <figcaption>
               <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
             </figcaption>     
           </figure>
         </a>
       </div>
       <div class="col-md-4">
        <a href="images/gallery/large_2.jpg" class="grid image-link">
          <figure class="effect-bubba gallery-img-wrap">
            <img src="images/gallery/gallery_2.jpg" class="img-fluid" alt="#">
            <figcaption>
             <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
           </figcaption>     
         </figure>
       </a>
     </div>
     <div class="col-md-4">
      <a href="images/gallery/large_3.jpg" class="grid image-link">
        <figure class="effect-bubba gallery-img-wrap">
         <img src="images/gallery/gallery_3.jpg" class="img-fluid" alt="#">
         <figcaption>
           <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
         </figcaption>     
       </figure>
     </a>
   </div>
 </div>
 <div class="row">
  <div class="col-md-4">
    <a href="images/gallery/large_4.jpg" class="grid image-link">
      <figure class="effect-bubba gallery-img-wrap">
       <img src="images/gallery/gallery_4.jpg" class="img-fluid" alt="#">
       <figcaption>
         <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
       </figcaption>     
     </figure>
   </a>
 </div>
 <div class="col-md-4">
  <a href="images/gallery/large_5.jpg" class="grid image-link">
    <figure class="effect-bubba gallery-img-wrap">
     <img src="images/gallery/gallery_5.jpg" class="img-fluid" alt="#">
     <figcaption>
       <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
     </figcaption>     
   </figure>
 </a>
</div>
<div class="col-md-4">
  <a href="images/gallery/large_6.jpg" class="grid image-link">
    <figure class="effect-bubba gallery-img-wrap">
     <img src="images/gallery/gallery_6.jpg" class="img-fluid" alt="#">
     <figcaption>
       <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
     </figcaption>     
   </figure>
 </a>
</div>
</div>
<br>
<br>
<!-- Style 2 -->
<div class="row">
  <div class="col-md-12">
    <h3 class="gallery-style">Style Two</h3>
  </div>
</div><br>
<div class="row">
  <div class="col-md-12">
    <div id="gallery">
      <div id="gallery-header">
        <div id="gallery-header-center">
          <div id="gallery-header-center-right">
            <div class="gallery-header-center-right-links" id="filter-all">All</div>
            <div class="gallery-header-center-right-links" id="filter-studio">Studio</div>
            <div class="gallery-header-center-right-links" id="filter-landscape">Landscapes</div>
          </div>
        </div>
      </div>
      <div id="gallery-content">
        <div id="gallery-content-center">
          <a href="images/gallery/large_5.jpg" class="image-link2">
           <img src="images/gallery/gallery_5.jpg" class="all studio img-fluid" alt="#" />
         </a>
         <a href="images/gallery/large_1.jpg" class="image-link2">
           <img src="images/gallery/gallery_1.jpg" class="all studio img-fluid" alt="#"/>
         </a>
         <a href="images/gallery/large_3.jpg" class="image-link2">
           <img src="images/gallery/gallery_3.jpg" class="all landscape img-fluid" alt="#"/>
         </a>
         <a href="images/gallery/large_2.jpg" class="image-link2">
           <img src="images/gallery/gallery_2.jpg" class="all studio img-fluid" alt="#"/>
         </a>
         <a href="images/gallery/large_6.jpg" class="image-link2">
           <img src="images/gallery/gallery_6.jpg" class="all studio img-fluid" alt="#" />
         </a>
         <a href="images/gallery/large_4.jpg" class="image-link2">
           <img src="images/gallery/gallery_4.jpg" class="all studio img-fluid" alt="#" />
         </a>
       </div>
     </div>
   </div>
 </div>
</div>
<!--//End Style 2 -->

</div>
</div>
<!--//End Gallery -->
<!--============================= FOOTER =============================-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="subscribe">
          <h3>Newsletter</h3>
          <form id="subscribeform" action="php/subscribe.php" method="post">
            <input class="signup_form" type="text" name="email" placeholder="Enter Your Email Address">
            <button type="submit" class="btn btn-warning" id="js-subscribe-btn">SUBSCRIBE</button>
            <div id="js-subscribe-result" data-success-msg="Success, Please check your email." data-error-msg="Oops! Something went wrong"></div>
            <!-- // end #js-subscribe-result -->
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="foot-logo">
          <a href="index.html">
            <img src="images/footer-logo.png" class="img-fluid" alt="footer_logo">
          </a>
          <p>2016 © copyright
            <br> All rights reserved.</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="sitemap">
            <h3>Navigation</h3>
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="admission-form.html">Admissions </a></li>
              <li><a href="admission.html">Academics</a></li>
              <li><a href="research.html">Research</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tweet_box">
            <h3>Tweets</h3>
            <div class="tweet-wrap">
              <div class="tweet"></div>
              <!-- // end .tweet -->
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="address">
            <h3>Contact us</h3>
            <p><span>Address: </span> Unisco university Albany, NY, USA. 11001</p>
            <p>Email : info@unisco.com
              <br> Phone : +91 555 668 986</p>
              <ul class="footer-social-icons">
                <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--//END FOOTER -->
    <!-- jQuery, Bootstrap JS. -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="js/slick.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/instafeed.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/tweetie.min.js"></script>
    <!-- Subscribe -->
    <script src="js/subscribe.js"></script>

    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/animated-masonry-gallery.js"></script>
    <!-- Magnific popup JS -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Script JS -->
    <script src="js/script.js"></script>

  </body>

  </html>
