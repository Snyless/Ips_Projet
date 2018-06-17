     <?php
include'../includes/database.php';

   
   
     $date_post = $_POST['date_post'];
     $type_file= $_POST['type_file'];
     $id_file = $_POST['id_file'];


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

$query="UPDATE files SET  file='$file_dest',date_post='$date_post',type_file='$type_file' where id_file='$id_file'  ";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
     }}}
 ?>