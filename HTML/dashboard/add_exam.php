<?php
require_once("../includes/session.php");
 $db = new PDO('mysql:host=localhost;dbname=masterips;charset=utf8', 'root', '');
 


   include'../includes/session.php';
      $user=$_SESSION['login_user'] ; 
         $sql=" SELECT  * FROM  cours,user where user.username='$user'and user.id_user=cours.id_enseignant";
$req="SELECT * from user  where  username ='$user'";
   $sql1='SELECT * FROM user where type="2" ';

?>




<?php




if (isset($_POST['valider'])){

    $cours = $_POST['cours'];
    $type =  $_POST['type'];
    $date_exam =  $_POST['date_exam'];
    $coeff =  $_POST['coeff'];




 $sql4=" INSERT INTO exam (type,date_exam,coefficient,id_cours) VALUES ('$type','$date_exam','$coeff','$cours')";
               $query4 = $db->prepare($sql4);
               $query4->execute();

          $id = $db->lastInsertId();  
          
if(!empty($id)){
               header("location:ajouter_notes.php?id_exam=$id");}



}


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
            <span class="logo-mini"><b>MASTER</b>IPS</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>MASTER</b>IPS</span>
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
                            <?php   $data1=$db->prepare($req);
                $data1->execute();
            while($ligne=$data1->fetch()){
            	?>
                                                        <span class="hidden-xs"><?php print($ligne['nom']."&nbsp;".$ligne['prenom']); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?php print($ligne['picture'])?>" class="img-circle" alt="User Image">

                                <p>
                                    <?php print($ligne['nom']."&nbsp;".$ligne['prenom']); ?>
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
                    <p><?php print($ligne['nom']."&nbsp;".$ligne['prenom']); ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
 <?php    }
            	?>
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
                    <li><a href="index.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
                    <li><a href="addCourses.php"><i class="fa fa-link"></i> <span>Add Courses </span></a></li>
                    <li  class="active"><a href="add_exam.php"><i class="fa fa-link"></i> <span>Add Marks </span></a></li>
                    <li><a href="absence_detail.php."><i class="fa fa-link"></i> <span>Absence</span></a></li>
                    <li><a href="cours.php"><i class="fa fa-link"></i> <span>Update Courses</span></a></li>
                     <li><a href="notes.php"><i class="fa fa-link"></i> <span>Update Marks </span></a></li>
                       <li  ><a href="delete_absence.php"><i class="fa fa-link"></i> <span>Update Absence  </span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Add Exam</h1>
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
                            <h3 class="box-title"> Exam  informations : </h3>
                        </div>
                        <div class="box-body">
                            
                            <form action="add_exam.php" method="post" >
                               
                                <div class="form-group">
                                    <label>Course :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-book"></i>
                                        </div>
                                       <select class="form-control" name="cours">
   
       <?php
             
              
                  $query = $db->prepare($sql);
                  $query->execute();

                               
                                while ($ligne =$query->fetch()) {
                                    ?>
  <option value=<?php echo"{$ligne['id_cours']}"; ?>  > <?php echo"{$ligne['titulaire']}"; ?> </option>
  <?php
                    }?>
</select>
                                    </div>
  


                                </div>


                                <div class="form-group">
                                    <label>Type :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        
                                         <select class="form-control" name="type">
                                            <option value="Contunie" >Exam 1</option>
                                             <option value="Final" >Final Exam</option>
                                              <option value="TP" >Exam TP</option>
   </select>
                                    </div>
                                </div>
                              <div class="form-group">
                                    <label>Date Exam:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>

                        <input   type="date" name="date_exam"  class="form-control"   >
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label>Coefficient:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-pencil"></i>
                                        </div>

                        <input   type="number"    name="coeff"  class="form-control"   >
                                    </div>
                                </div>
                               
                                <div class="box-footer">
                                    <button type="submit" name="valider" class="btn btn-primary">Submit</button>
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