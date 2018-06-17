<?php
include'../includes/database.php';

   
   
     $note_exam1 = $_POST['note'];
     $etudiant1= $_POST['etudiant'];
     $exam1 = $_POST['exam'];

$query="UPDATE note SET  note_exam='$note_exam1'  where id_exam='$exam1' and id_etudiant='$etudiant1' ";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:notes.php");
     
 ?>