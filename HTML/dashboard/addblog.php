<?php
$db = new PDO('mysql:host=localhost;dbname=masterips;charset=utf8', 'root', '');
include'../includes/session.php';
$user=$_SESSION['login_user'] ; 
$req="SELECT * from user  where  username ='$user'";


if (isset($_POST['ok'])){
    $titre  = $_POST['titre'];
    $date = $_POST['date'];
    $firstname  = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    
    var_dump($_FILES);
    if(!empty($_FILES)){

        $file_name=$_FILES['fichier']['name'];
        $file_type=$_FILES['fichier']['type'];
        $file_extension=strrchr($file_name,".");
        $file_tmp_name=$_FILES['fichier']['tmp_name'];
        $file_dest='../files/'.$file_name;

        $extension_autorisees=array('.pdf', '.PDF', '.ppt', '.xls', '.doc', '.jpg', '.jpeg', '.csv', '.pptx', '.docx',);
        if(in_array($file_extension, $extension_autorisees)){
            if(move_uploaded_file($file_tmp_name, $file_dest)){ 
                   $sql3=" INSERT INTO blog (titre,date,nom_file,nom,prenom) VALUES ('$titre','$date','$file_dest','$firstname','$lastname')";
                   $query3 = $db->prepare($sql3);
                   $query3->execute();
            }
        }      
    }

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
                          <?php   $data=$db->prepare($req);
                $data->execute();
            while($ligne1=$data->fetch()){
            	?>
                            <span class="hidden-xs"><?php print($ligne1['nom']."&nbsp;".$ligne1['prenom']); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?php print($ligne1['picture'])?>" class="img-circle" alt="User Image">

                                <p>
                                    <?php print($ligne1['nom']."&nbsp;".$ligne1['prenom']); ?>
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
                    <p><?php print($ligne1['nom']."&nbsp;".$ligne1['prenom']); ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
<?php
 $id_enseignant=$ligne1['id_user'];
    }
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
                    <li><a href="addprof.php"><i class="fa fa-link"></i> <span>Add Prof</span></a></li>
                    <li><a href="addstudent.php"><i class="fa fa-link"></i> <span>Add Student</span></a></li>
                    <li><a href="addevent.php"><i class="fa fa-link"></i> <span>Add Event</span></a></li>
                    <li  class="active"><a href="addblog.php"><i class="fa fa-link"></i> <span>Add Blog</span></a></li>
                    <li><a href="edit_profile_etudiant.php"><i class="fa fa-link"></i> <span>Edit profile</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Add Blog</h1>
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
                            <h3 class="box-title">Blog informations</h3>
                        </div>
                        <div class="box-body">
                            <form action="addblog.php" method="post">
                                <div class="form-group">
                                    <label>Titre :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="ion ion-person"></i>
                                        </div>
                                        <input type="text" class="form-control" name="titre">
                                    </div>
                                </div>
                                                                <div class="form-group">
                                    <label>File :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-book"></i>
                                        </div>

                                    <input multiple  type="file" name="fichier"  class="form-control"  >
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label>Date :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control" name="date" value ="<?php
                                        $datetime = date("Y-m-d H:i:s");
                                        echo $datetime;?>"/>            
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>FirstName :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="ion ion-person"></i>
                                        </div>
                                        <input type="text" class="form-control" name="firstname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>LastName :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="ion ion-person"></i>
                                        </div>
                                        <input type="text" class="form-control" name="lastname">
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
            by Dream Team 
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2018 <a href="#">Master IPS</a>.</strong> All rights reserved.
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