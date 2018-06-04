<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
        
    include('database.php');

    if(isset($_SESSION['login_user'])){
            
            //echo "OK";
       
        $user_check = $_SESSION['login_user'];
   
        $ses_sql = mysqli_query($conn,"select username from user where username = '$user_check' ");
        
        $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
        $login_session = $row['username'];
        
    }else{
             //print_r(debug_backtrace());
            
    }
   
   /*/}else{
      header("location:index.php");
   }*/
?>