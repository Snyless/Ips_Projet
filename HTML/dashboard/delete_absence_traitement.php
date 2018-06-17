<?php


include'../includes/session.php';
include'../includes/database.php';
       $id_etudiant= $_GET['id_etudiant'];
       $id_cours= $_GET['id_cours'];
       $id_date= $_GET['date'];
// query SQL untuk insert data
$query="DELETE from absence where id_etudiant='$id_etudiant' and date='$id_date' and id_cours='$id_cours'" ;
mysqli_query($conn, $query);
header("location:absence.php");
?>