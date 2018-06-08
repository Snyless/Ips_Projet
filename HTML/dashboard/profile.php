<?php
require_once("session.php");

require_once("class.user.php");
$user = new USER();

if (isset($_POST['ok'])){
    $employee_id = $login_session['id_emp'];
    $firstname = $login_session['firstname'] = $_POST['firstname'];
    $lastname = $login_session['lastname'] = $_POST['lastname'];
    $phone = $login_session['phone'] = $_POST['phone'];
    $email = $login_session['email'] = $_POST['email'];
    $city = $login_session['city'] = $_POST['city'];
    $country = $login_session['country'] =  $_POST['country'];
    $stmt = $user->runQuery("UPDATE employee SET firstname='$firstname',lastname='$lastname',phone='$phone',email='$email',city='$city',country='$country' WHERE id_emp='$employee_id'");
    $stmt->execute();

    if ($_POST['password'] == $_POST['repassword']){
        $password = $_POST['password'];
        $stmt = $user->runQuery("UPDATE employee SET password = '$password'");
    }else {
        echo "Password are not the same!";
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Coligz | Control panel</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/style.min.css">
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>COL</b>IGZ</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>COL</b>IGZ</span>
        </a>

        <!-- Header Navbar -->
        <nav  class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="dist/img/admin.png" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php print($login_session['firstname']."&nbsp;".$login_session['lastname']); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?php print($login_session['picture'])?>" class="img-circle" alt="User Image">

                                <p>
                                    <?php print($login_session['firstname']."&nbsp;".$login_session['lastname']."<small>".$login_session['title']."</small>"); ?>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="profile.php" class="btn btn-default btn-flat">Edit profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="logout.php?logout=true" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/admin.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php print($login_session['firstname']."&nbsp;".$login_session['lastname']); ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <?php
                if ($login_session['permission'] == 1) {
                    ?>
                    <li><a href="index.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
                    <li><a href="addemployee.php"><i class="fa fa-link"></i> <span>Add Employee</span></a></li>
                    <li><a href="listemployees.php"><i class="fa fa-link"></i> <span>list of all employees</span></a></li>
                    <li><a href="leaverequest.php"><i class="fa fa-link"></i> <span>Leave Request</span></a></li>
                    <li><a href="leaveplanning.php"><i class="fa fa-link"></i> <span>Leave request planning</span></a></li>
                    <li class="active"><a href="profile.php"><i class="fa fa-link"></i> <span>Edit profile</span></a></li>
                <?php }else { ?>
                    <li><a href="index.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
                    <li><a href="listemployees.php"><i class="fa fa-link"></i> <span>list of all employees</span></a></li>
                    <li><a href="teamemployees.php"><i class="fa fa-link"></i> <span>Team members</span></a></li>
                    <li><a href="sendleaverequest.php"><i class="fa fa-link"></i> <span>send Leave Request</span></a></li>
                    <li><a href="employeerequest.php"><i class="fa fa-link"></i> <span>My Leave Requests</span></a></li>
                    <li class="active"><a href="profile.php"><i class="fa fa-link"></i> <span>Edit profile</span></a></li>
                <?php } ?>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Edit profile</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <section class="content">
                <div class="row">
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">Profile informations</h3>
                        </div>
                        <div class="box-body">
                            <form action="profile.php" method="post">
                                <div class="form-group">
                                    <label>First name :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="ion ion-person"></i>
                                        </div>
                                        <input type="text" class="form-control" name="firstname" value="<?php print($login_session['firstname'])?>" onfocus="(this.value == '<?php print($login_session['firstname'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['firstname'])?>')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Last name :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="ion ion-person"></i>
                                        </div>
                                        <input type="text" class="form-control" name="lastname" value="<?php print($login_session['lastname'])?>" onfocus="(this.value == '<?php print($login_session['lastname'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['lastname'])?>')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Phone number :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control" name="phone"  value="<?php print($login_session['phone'])?>" onfocus="(this.value == '<?php print($login_session['phone'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['phone'])?>')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope-o"></i>
                                        </div>
                                        <input type="text" class="form-control" name="email"  value="<?php print($login_session['email'])?>" onfocus="(this.value == '<?php print($login_session['email'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['email'])?>')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>City :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <input type="text" class="form-control" name="city"  value="<?php print($login_session['city'])?>" onfocus="(this.value == '<?php print($login_session['city'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['city'])?>')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Country :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                        <input type="text" class="form-control" name="country"  value="<?php print($login_session['country'])?>" onfocus="(this.value == '<?php print($login_session['country'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['country'])?>')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>New Password :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-unlock-alt"></i>
                                        </div>
                                        <input type="password" class="form-control" name="password"  placeholder="***********">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Re-type new password :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-unlock-alt"></i>
                                        </div>
                                        <input type="password" class="form-control" name="repassword"  placeholder="***********">
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" name="ok" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            by love <3
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2017 <a href="#">Coligz App</a>.</strong> All rights reserved.
    </footer>


</div>
<div class="control-sidebar-bg"></div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script src="plugins/select2/select2.full.min.js"></script>
</body>
</html>