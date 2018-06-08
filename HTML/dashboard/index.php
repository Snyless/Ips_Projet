<?php
require_once("../includes/session.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MASTER IPS | Control panel</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/style.min.css">

    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">
<?php
if ($login_session['type'] == 1) {
    ?>
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
            <nav class="navbar navbar-static-top" role="navigation">
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
                                <img src="<?php print($login_session['picture']); ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php print($login_session['nom']."&nbsp;".$login_session['prenom']); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="<?php print($login_session['picture']); ?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php print($login_session['nom']."&nbsp;".$login_session['prenom']); ?>
                                        <small><?php print($login_session['username']); ?></small>
                                        <small><?php print($login_session['username']); ?></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
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
                        <img src="<?php print($login_session['picture']); ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php print($login_session['nom']."&nbsp;".$login_session['prenom']); ?></p>
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
                    <li class="active"><a href="index.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
                    <li><a href="addemployee.php"><i class="fa fa-link"></i> <span>Add Employee</span></a></li>
                    <li><a href="listemployees.php"><i class="fa fa-link"></i> <span>list of all employees</span></a></li>
                    <li><a href="leaverequest.php"><i class="fa fa-link"></i> <span>Leave Request</span></a></li>
                    <li><a href="leaveplanning.php"><i class="fa fa-link"></i> <span>Leave request planning</span></a></li>
                    <li><a href="profile.php"><i class="fa fa-link"></i> <span>Edit profile</span></a></li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Dashboard</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Here</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <?php

                                $data = mysqli_query($conn,"SELECT count(*) as total FROM user WHERE type = 2");
                                while ($row = mysqli_fetch_array( $data, MYSQLI_BOTH )) {
                                    ?>
                                    <h3><?php echo $row['total']; ?></h3>
                                <?php } ?>
                                <p>etudiants</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-stalker"></i>
                            </div>
                            <a href="listemployees.php" class="small-box-footer">More info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <?php

                                $data = mysqli_query($conn,"SELECT count(*) as total FROM user WHERE type = 3");
                                while ($row = mysqli_fetch_array( $data, MYSQLI_BOTH )) {
                                    ?>
                                    <h3><?php echo $row['total']; ?></h3>
                                <?php } ?>

                                <p>Professeurs</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="leaverequest.php" class="small-box-footer">More info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <?php

                                $data = mysqli_query($conn,"SELECT count(*) as total FROM absence");
                                while ($row = mysqli_fetch_array( $data, MYSQLI_BOTH )) {
                                    ?>
                                    <h3><?php echo $row['total']; ?></h3>
                                <?php } ?>

                                <p>Absences</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-checkmark-circle"></i>
                            </div>
                            <a href="leaveplanning.php" class="small-box-footer">More info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <?php

                                $data = mysqli_query($conn,"SELECT count(*) as total FROM event");
                                while ($row = mysqli_fetch_array( $data, MYSQLI_BOTH )) {
                                    ?>
                                    <h3><?php echo $row['total']; ?></h3>
                                <?php } ?>

                                <p>Evenements</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-cancel"></i>
                            </div>
                            <a href="leaveplanning.php" class="small-box-footer">More info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                by Dream Team
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2017 <a href="#">Master IPS</a>.</strong> All rights reserved.
        </footer>


    </div>
    <!-- /.tab-pane -->

    <div class="control-sidebar-bg"></div>

<?php
}else {
    ?>
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
            <nav class="navbar navbar-static-top" role="navigation">
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
                                <img src="<?php print($login_session['picture']); ?>" class="user-image" alt="User Image">
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
                        <img src="<?php print($login_session['picture']); ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php print($login_session['firstname']."&nbsp;".$login_session['lastname'] ); ?></p>
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
                    <li class="active"><a href="index.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
                    <li><a href="listemployees.php"><i class="fa fa-link"></i> <span>list of all employees</span></a></li>
                    <li><a href="teamemployees.php"><i class="fa fa-link"></i> <span>Team members</span></a></li>
                    <li><a href="sendleaverequest.php"><i class="fa fa-link"></i> <span>send Leave Request</span></a></li>
                    <li><a href="employeerequest.php"><i class="fa fa-link"></i> <span>My Leave Requests</span></a></li>
                    <li><a href="profile.php"><i class="fa fa-link"></i> <span>Edit profile</span></a></li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Dashboard</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Here</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <?php

                                $data = mysqli_query($conn,"SELECT count(*) as total FROM user WHERE type = 2");
                                while ($row = mysqli_fetch_array( $data, MYSQLI_BOTH )) {
                                    ?>
                                    <h3><?php echo $row['total']; ?></h3>
                                <?php } ?>
                                <p>Etudiants</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-stalker"></i>
                            </div>
                            <a href="listemployees.php" class="small-box-footer">More info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <?php
                                $data = mysqli_query($conn,"SELECT count(*) as total FROM user WHERE type = 3");
                                while ($row = mysqli_fetch_array( $data, MYSQLI_BOTH )) {
                                    ?>
                                    <h3><?php echo $row['total']; ?></h3>
                                <?php } ?>

                                <p>Professeurs</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="teamemployees.php" class="small-box-footer">More info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                by DREAM TEAM
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2017 <a href="#">Master IPS</a>.</strong> All rights reserved.
        </footer>


    </div>
    <!-- /.tab-pane -->

    <div class="control-sidebar-bg"></div>
    <?php
}
?>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
    </div>
</body>
</html>