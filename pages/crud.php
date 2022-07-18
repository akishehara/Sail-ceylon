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
    $BID = validate($_POST['BID']);
    $license = validate($_POST['license']);
    $type = validate($_POST['Bottype']);
    $location = validate($_POST['location']);

    if($_POST['send'] == 'update'){

        $sql = "UPDATE Boat SET B_license='$license', B_type='$type', L_ID='$location' WHERE Boat_ID = '$BID'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: boat.php?successs= successfull");
            exit();
    
        }else {
            header("Location: boat.php?errors=Try again");
            exit();
        }
    }
    if($_POST['send'] == 'delete'){
        $sql = "DELETE FROM Boat WHERE Boat_ID = '$BID'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: boat.php?successs= successfull");
            exit();
    
        }else {
            header("Location: boat.php?errors=Try again");
            exit();
        }
    }
    if($_POST['send'] == 'create'){
        $sql = "INSERT INTO  Boat( B_license, B_type,L_ID,Boat_ID) VALUES('$license','$type' ,'$location','$BID')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: boat.php?successs= successfull");
            exit();
    
        }else {
            header("Location: boat.php?errors=Try again");
            exit();
        }
    }
   

}else{
    header("Location:index.php?");
    session_destroy();
    exit();
 }
?>
