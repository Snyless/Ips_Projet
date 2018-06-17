<?php
require_once("../includes/session.php");
 include 'header_dash';
?>
<!DOCTYPE html>
<html>


<body class="hold-transition skin-blue sidebar-mini">
<?php
if ($login_session['type'] == 1) {
<<<<<<< HEAD
    include'nav_admin.php';
=======
    include'nav_etudiant.php';
>>>>>>> 8e5099e66b6c5a89d00c2b97de22967fde272851
    ?>
    

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

                                $data = mysqli_query($conn,"SELECT count(*) as total FROM user WHERE type = 1");
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

                                $data = mysqli_query($conn,"SELECT count(*) as total FROM user WHERE type = 2");
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
                                $user=$_SESSION['login_user'];
                                $data = mysqli_query($conn,"SELECT count(*) as total FROM absence a,user u where a.id_etudiant=u.id_user and username ='$user'");
                                while ($row2 = mysqli_fetch_array( $data, MYSQLI_BOTH )) {
                                    ?>
                                    <h3><?php echo $row2['total']; ?></h3>
                                <?php } ?>

                                <p>Absences</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-checkmark-circle"></i>
                            </div>
                            <a href="leaveplanning.php" class="small-box-footer">More info 
                                <i class="fa fa-arrow-circle-right"></i></a>
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
            <strong>Copyright &copy; 2018 <a href="#">Master IPS</a>.</strong> All rights reserved.
        </footer>


    </div>
    <!-- /.tab-pane -->

    <div class="control-sidebar-bg"></div>

<?php
<<<<<<< HEAD
}
    
else if ($login_session['type'] == 2) { include "nav_etudiant.php";
    ?>
 

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
            <strong>Copyright &copy; 2018 <a href="#">Master IPS</a>.</strong> All rights reserved.
        </footer>


    </div>
    <!-- /.tab-pane -->

    <div class="control-sidebar-bg"></div>
    <?php
}

else if ($login_session['type'] == 3) { include "nav_enseignant.php";
    ?>
 
=======
}else { include "nav_enseignant";
    ?>
 
>>>>>>> 8e5099e66b6c5a89d00c2b97de22967fde272851

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
            <strong>Copyright &copy; 2018 <a href="#">Master IPS</a>.</strong> All rights reserved.
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