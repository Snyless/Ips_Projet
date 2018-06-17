<?php
require_once("../includes/session.php");
<<<<<<< HEAD
$db = new PDO('mysql:host=localhost;dbname=masterips;charset=utf8', 'root', '');
 

 include'../includes/session.php';
      $user=$_SESSION['login_user'] ; 
            $req="SELECT * from user  where  username ='$user'";
   
$cours1=$_GET['id_cours'];
$nbheure1=$_GET['nbheure'];
$date1=$_GET['date'];


if (isset($_POST['valider'])){


   
 $id_etudiant = $_POST['etudiant'];
 $id_cours = $_POST['id_cours'];
 $date_absence = $_POST['date_absence'];
 $nbheures = $_POST['nbheures'];
     

$sql3="INSERT INTO absence (id_etudiant,id_cours,date,nb_heure) VALUES ('$id_etudiant','$id_cours','$date_absence','$nbheures')";
     $query3 = $db->prepare($sql3);
     $query3->execute();
         header("location:absence.php?id_cours=$id_cours&nbheure=$nbheures&date=$date_absence");

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

    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
 
        <link rel="stylesheet" href="../css/table_css_absence.css" />
      

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
                    <li  ><a href="add_exam.php"><i class="fa fa-link"></i> <span>Add Marks </span></a></li>
                    <li  ><a href="absence_detail.php."><i class="fa fa-link"></i> <span>Absence</span></a></li>
                    <li ><a href="cours.php"><i class="fa fa-link"></i> <span>Update Courses</span></a></li>
                     <li class="active"><a href="notes.php"><i class="fa fa-link"></i> <span>Update Marks </span></a></li>
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
            <h1>Students : </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" style="height: 904px;">



                  <!--  <div class="col-md-4">
                        <div class="box box-widget widget-user-2">

                              
                            <div class="widget-user-header bg-yellow">
                                <div class="widget-user-image">
                                   

                                  
 


                                </div>
                                <h3 class="widget-user-username"></h3>
                                <h5 class="widget-user-desc"></h5>
                            </div>


<br><br><br>-->

 <table>

                    </div>
   <tr>
       <th>Last Name</th>
       <th>First Name</th>
    
        <th>ADD :</th>
   </tr>
                            <div class="box-footer no-padding">
                                <?php
             
          $sql="SELECT * FROM user where type='2'";
                  $query = $db->prepare($sql);
                  $query->execute();

                               
                                while ($row =$query->fetch()) {

                                    ?>
                               <!-- <ul class="nav nav-stacked"> -->

      <form action="absence.php" method="post">

                                      <tr>


        <input type="hidden" value="<?php echo "$nbheure1"; ?>" name="nbheures">
          <input type="hidden" value="<?php echo "$cours1"; ?>" name="id_cours">
            <input type="hidden" value="<?php echo "$date1"; ?>" name="date_absence">

        <td><?php echo $row['nom']; ?></td>
       <td><?php echo $row['prenom']; ?></td>
    
     <td  hidden ><input type="hidden" value="<?php echo $row['id_user']; ?>" name="etudiant"></td>
       
    
     
  
                                  <td> <input  type="submit" name="valider"  value="ADD"></td>
                                      </tr> 
                                  </form>
                                
                                       
 <?php
                }
                ?>
              
                            </div>
                              </table>
               <!--         </div>
                    </div>-->
             
        </section>
  
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
       
        </div>
        <!-- Default to the left -->
       
    </footer>


</div>
<!-- /.tab-pane -->

<div class="control-sidebar-bg"></div>
=======
 include 'header_dash';
 $user=$_SESSION['login_user'] ;      
                $db = new PDO('mysql:host=localhost;dbname=masterips;charset=utf8', 'root', '');
               
$sql2="Select distinct semestre from cours c ,absence a where a.id_cours=c.id_cours ";
?>
<!DOCTYPE html>
<html>


<body class="hold-transition skin-blue sidebar-mini">
<?php
if ($login_session['type'] == 1) {
    include'nav_etudiant.php';
    ?>
    

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Absence</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Here</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="container">
  <!-- Content here -->

<div id="page-wrapper">
    <div class="container-fluid">
       
              <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                         <?php 
          
                                    $query2 = $db->prepare($sql2);
                                    $query2->execute();

           
                                     while($row2 = $query2->fetch()){
                                    ?>
                        <h1 class="page-header">
                           <?php
                           echo "  SEMESTRE ";
                                echo $row2['semestre'] ;
                                $semestre=$row2['semestre'];
                            ?>
                             
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
 <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
                
        
<table class="table table-sm">
  <thead>
    <tr>
       
      <th>COURS</th>
      <th>Date</th>
      <th>nombre d'heure</th>
       
      
        
    </tr>
  </thead>
  <tbody>
 <?php 
           $sql1="Select c.titulaire as cours ,a.nb_heure as nb ,a.date as date 
                From cours as c ,absence as a ,user as u 
                where a.id_cours=c.id_cours
                 and a.id_etudiant= u.id_user
                 And semestre='1' And u.username='$user' order by cours,date ";
                $query = $db->prepare($sql1);
                $query->execute();

           
             while($row = $query->fetch()){
                ?><tr>
                        <td scope="row">
                        <?php echo $row['cours']; ?>   
                        </td>
                        <td><?php echo $row['date'] ;?></td>
                        
      <td><?php echo $row['nb'] ;?></td>
    
       
      
 <?php } ?>

  </tbody>
</table>


</div>

</div>
</div>
</div>

 <?php } ?>
</div>
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
}
?>
<!-- ./wrapper -->

>>>>>>> 8e5099e66b6c5a89d00c2b97de22967fde272851
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<<<<<<< HEAD

=======
    </div>
>>>>>>> 8e5099e66b6c5a89d00c2b97de22967fde272851
</body>
</html>