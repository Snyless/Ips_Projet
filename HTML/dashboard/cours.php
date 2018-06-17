<?php
include'../includes/session.php';
include'../includes/database.php';

$user=$_SESSION['login_user'] ;      
 $db = new PDO('mysql:host=localhost;dbname=masterips;charset=utf8', 'root', '');

 $sql7=" SELECT  * FROM  cours,files,user where user.username='$user' and user.id_user=cours.id_enseignant and files.id_enseignant=cours.id_enseignant";
    $req="SELECT * from user  where  username ='$user'";
      
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

           <ul class="sidebar-menu">
                    <li><a href="index.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
                    <li><a href="addCourses.php"><i class="fa fa-link"></i> <span>Add Courses </span></a></li>
                    <li  ><a href="add_exam.php"><i class="fa fa-link"></i> <span>Add Marks </span></a></li>
                    <li  ><a href="absence_detail.php."><i class="fa fa-link"></i> <span>Absence</span></a></li>
                    <li class="active"><a href="cours.php"><i class="fa fa-link"></i> <span>Update Courses</span></a></li>
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
            <h1>Update Courses : </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            

               
  <section class="content">
                
                <div class="row">
                    <div class="col-xs-12" style="background-color: #FFFFFF;">
                    <div class="box-body table-responsive no-padding">
                    <table class="table table-hover" style ="text-align:center;" >
                        <tr>
                            <th>Date :</th>
                            <th>Type :</th>
                            <th>File:</th>
                            <th>Update:</th>
                            <th>Delete:</th>

                        </tr>
                       
                        
                          
                        


                                <?php
                              
  
 
                                  
                                        $query7 = $db->prepare($sql7);
                                                $query7->execute();
                                      
                                  
                                      
                                  
                               

 //$sql7="SELECT * FROM  note n INNER JOIN exam e ON e.id_exam= n.id_exam  and e.id_cours='1'  INNER JOIN user  u ON n.id_etudiant= u.id_user ";



                               
                                while ($row7 =$query7->fetch()) {

                                          $file_name=basename($row7['file'])

                        
                                ?>
                                 <tr>  
                                    <th hidden><?php echo $row7['id_file']; ?></th>
                         <th><?php echo $row7['date_post']; ?></th>
                          <th><?php echo $row7['type_file']; ?></th> 
                          <th><a href="<?php echo"{$row7['file']}"; ?>"><?php echo $file_name; ?></a></th> 
                        
                      
    <th><a style="color:#228e35" href="cours_update_form.php?id_file=<?php echo"{$row7['id_file']}"; ?>&amp;date_post=<?php echo"{$row7['date_post']}"; ?>&amp;type_file=<?php echo"{$row7['type_file']}"; ?>&amp;file=<?php echo"$file_name"; ?>" >    <i class=" fa fa-edit green-icon"></i></a></th>
        <th> <a   style="color:red"  href="Delete_cours_traitement.php?id_file=<?php echo"{$row7['id_file']}"; ?>" >  <i class=" fa fa-trash"></i> </a></th>  
                        
     

                          
                        </tr>
 <?php
                          }   
                            
                            ?>

                    </table>
                    </div>
                    </div>
                </div>
 </section>
            </section>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
   


</div>
<!-- /.tab-pane -->
</div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

</body>
</html>