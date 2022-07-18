<?php
include "db_conn.php";
session_start();
if(isset($_SESSION['Staff_ID'])){

    function validate($data){
        $data =trim($data);
        $data =stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $RID = validate($_POST['RID']);
    $BID = validate($_POST['BID']);

    $sql = "UPDATE assignresource SET Boat_ID ='$BID' WHERE Reservation_ID = '$RID'";
    $result = mysqli_query($conn,$sql);

    if($result){
        header("Location: reservation_R.php?success=BOat assigned successfully");
        exit();

    }else {
        header("Location: reservation_R.php?error=Try again");
        exit();
    }

 }else{
    header("Location:index.php?");
    exit();
 }
?>