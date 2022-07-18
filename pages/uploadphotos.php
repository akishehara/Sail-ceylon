<?php
include 'db_conn.php';


$named = $_POST['name'] ?? "";
$emailed = $_POST['email'] ?? "";
$dcs = $_POST['desc'];
$imagename = $_POST['uploadfile'];


$sql = " INSERT INTO photos(C_name,e_mail,descrip,image_name) VALUES ('$named','$emailed','$dcs','$imagename')";

$result = mysqli_query($conn,$sql);

if($result)
{
    header("Location:addphotos.php?errors= successfully submitted!");
    exit();

}
else{
    echo $conn->error;
    exit();
}

mysqli_close($conn);

?>