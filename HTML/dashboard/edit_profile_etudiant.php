<?php
require_once("../includes/session.php");
 include 'header_dash';
 $user=$_SESSION['login_user'] ;      
include "nav_etudiant.php";
    ?>


<?php


if (isset($_POST['ok'])){


                $db = new PDO('mysql:host=localhost;dbname=masterips;charset=utf8', 'root', '');
               
            $req="SELECT * from user u,etudiant e where  u.id_user=e.id_user and username ='$user'";
            $data=$db->prepare($req);
                $data->execute();
            while($ligne=$data->fetch()){
   
       
      $nom = $login_session['nom'] = $_POST['nom'];
    $prenom = $login_session['prenom'] = $_POST['prenom'];
    $cne = $login_session['cne'] = $_POST['cne'];
    $tel = $login_session['tel'] = $_POST['tel'];
    $email = $login_session['email'] = $_POST['email'];
     $adresse = $login_session['adresse'] = $_POST['adresse'];
    $bourse = $login_session['bourse'] = $_POST['bourse'];
    $year = $login_session['year'] =  $_POST['year'];
    $dob = $login_session['dob'] =  $_POST['dob'];
      $psw = $login_session['psw'] =  $_POST['psw']; 
        $npsw = $login_session['npsw'] =  $_POST['npsw']; 
        $licence = $login_session['licence'] =  $_POST['licence']; 
        if(empty($nom)){
             $nom=$ligne['nom'];
        }
        if(empty($licence)){
             $licence=$ligne['licence'];
        }
        if(empty($prenom)){
            $prenom=$ligne['prenom'];
        }
        if(empty($email)){
            $email=$ligne['email'];
        }
        if(empty($cne)){
            $cne=$ligne['cne'];
            
        }
        
        if(empty($adresse)){
            $adresse=$ligne['adresse'];
            
        }
         if(empty($licence)){
            $licence=$ligne['licence'];
            
        }
        if(empty($tel)){
            $tel=$ligne['tel'];
        }
        if(empty($year)){
            $year=$ligne['annee_admission'];
            
        }
        if(empty($dob)){
            $dob=$ligne['date_N'];
            
        }
        if(empty($bourse)){
            $bourse=$ligne['bourse'];
            
        }
        if($ligne['psw']==$psw && !empty($npsw))
        {
        $update=$db->prepare('update user set nom=?,prenom=?,tel=?,email=?,role=?,date_N,psw where username=?');
        $update->execute(array($nom,$prenom,$tel,$mdp,$email,$dob,$role,$npsw,$user));
        }else{

        $update=$db->prepare('update user set nom=?,prenom=?,tel=?,email=?,role=?,date_N where username=?');
        $update->execute(array($nom,$prenom,$tel,$mdp,$email,$dob,$role,$user));
            }
      
 
  
}

}

?>







<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 
    <!-- Left side column. contains the logo and sidebar -->
  

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
                                    <label>LAST name :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="ion ion-person"></i>
                                        </div>
                                        <input type="text" class="form-control" name="firstname" value="<?php print($login_session['nom'])?>" onfocus="(this.value == '<?php print($login_session['nom'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['nom'])?>')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>First name :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="ion ion-person"></i>
                                        </div>
                                        <input type="text" class="form-control" name="prenom" value="<?php print($login_session['prenom'])?>" onfocus="(this.value == '<?php print($login_session['prenom'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['prenom'])?>')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Phone number :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control" name="tel"  value="<?php print($login_session['tel'])?>" onfocus="(this.value == '<?php print($login_session['tel'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['tel'])?>')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>BOURSE :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="text" class="form-control" name="tel"  value="<?php print($login_session['bourse'])?>" onfocus="(this.value == '<?php print($login_session['bourse'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['bourse'])?>')">
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
                                    <label>Adresse :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="  fa fa-home"></i>
                                        </div>
                                        <input type="text" class="form-control" name="adresse"  value="<?php print($login_session['adresse'])?>" onfocus="(this.value == '<?php print($login_session['adresse'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['adresse'])?>')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>LICENCE :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-globe"></i>
                                        </div>
                       <input type="text" class="form-control" name="licence"  value="<?php print($login_session['licence'])?>" onfocus="(this.value == '<?php print($login_session['licence'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['licence'])?>')">
                                  
                                </div>        </div>
                                <div class="form-group">
                                    <label>ADMISSION YEAR :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="number" class="form-control" name="year"  value="<?php print($login_session['year'])?>" onfocus="(this.value == '<?php print($login_session['year'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['year'])?>')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>DOB :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control" name="dob"  value="<?php print($login_session['dob'])?>" onfocus="(this.value == '<?php print($login_session['dob'])?>') && (this.value = '')"
                                               onblur="(this.value == '') && (this.value = '<?php print($login_session['dob'])?>')">
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
                                        <input type="password" class="form-control" name="new password"  placeholder="***********">
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
<?php print($login_session['dob']);
echo "lklklkkl";

?>





















    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          
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