<?php
include'../includes/database.php';
// menyimpan data id kedalam variabel

       $id_file= $_GET['id_file'];
 
// query SQL untuk insert data
$query="DELETE from files where id_file='$id_file'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>