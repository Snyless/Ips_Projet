<?php
    include 'includes/session.php';
    include 'includes/database.php';
    include 'includes/header.php';
    
   
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      //echo $myusername,$mypassword;
      $sql = "SELECT id_user FROM user WHERE username = '$myusername' and psw = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid" . $count;
      }
    }
            
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
                <h1>Login</h1>
            </div>
        </div>
    </div>
</div>
<!--//END ABOUT IMAGE -->

<!--============================= Login =============================-->
<div class="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
               <div id="login-overlay" class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="well">
                                      <form id="loginForm" method="POST" action="" novalidate="novalidate">
                                          <div class="form-group">
                                              <?php
                                                if(isset($error))
                                                    echo $error; 
                                              ?>
                                          </div>
                                          <div class="form-group">
                                              <label for="username" class="control-label">Username</label>
                                              <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                              <span class="help-block"></span>
                                          </div>
                                          <div class="form-group">
                                              <label for="password" class="control-label">Password</label>
                                              <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                              <span class="help-block"></span>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" name="remember" id="remember"> Remember login
                                              </label>
                                          </div>
                                          <button type="submit" class="btn btn-warning" id="js-subscribe-btn">LOG IN</button>                                          
                                      </form>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--//End Login -->
  <!--============================= FOOTER =============================-->
  <?php
            include 'includes/footer.php';
            ?>
    </body>

    </html>
