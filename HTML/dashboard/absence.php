<?php
require_once("../includes/session.php");
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