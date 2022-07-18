<?php
include 'db_conn.php';
session_start();
$customer_username = 'null';
if (isset($_SESSION['C_username'])){
    $customer_username = $_SESSION['C_username'];
}


function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

 $package = validate($_POST['type']);
 $date = $_POST['date'];
 $location = validate($_POST['location']);
 $start_time = validate($_POST['time']);
 $end_time;
 $fname = validate($_POST['fname']);
 $mobile = validate($_POST['mobile']);
 $message = validate($_POST['message']);


 switch($start_time){
    case "08:00:00":
        $end_time = "10:00:00";
        break;
    case "10:00:00":
       $end_time = "12:00:00";
       break;
   case "12:00:00":
       $end_time = "14:00:00";
       break;
   case "14:00:00":
       $end_time = "16:00:00";
       break;
   case "16:00:00":
       $end_time = "18:00:00";
       break;
   default:
       $end_time="0";
}
echo $package .$location.$start_time.$end_time.$fname.$mobile.$message;
$sql1 = "INSERT INTO assignresource(Package_ID,Location_ID,tour_date,tour_start_time,tour_end_time,customer,mobile,instructions,c_username)
VALUES ('$package','$location','$date','$start_time','$end_time','$fname','$mobile','$message','$customer_username')";

$result1 = mysqli_query($conn, $sql1);

if($result1)
{
    header("Location:reservenow.php?errors= successfully submitted!");
    exit();

}
else{
    header("Location:reservenow.php?errors= ran into an error!please try again!");
    exit();
}


?>