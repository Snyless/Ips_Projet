<?php
include'../includes/database.php';
// menyimpan data id kedalam variabel

       $id_etudiant1= $_GET['id_etudiant'];
       $id_exam1= $_GET['id_exam'];
// query SQL untuk insert data
$query="DELETE from note where id_etudiant='$id_etudiant1' and id_exam='$id_exam1'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:notes.php");
?>