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
    $name = validate($_POST['name']);
    $location = validate($_POST['location']);
    $email = validate($_POST['email']);
    $tp_no = validate($_POST['number']);

    if($_POST['send'] == 'update'){

        $sql = "UPDATE STAFF SET email='$email',S_fname='$name', tp_number='$tp_no',L_ID='$location' WHERE Staff_ID = '$BID'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: manager.php?successs= successfull");
            exit();
    
        }else {
            header("Location:  manager.php?errors=Try again");
            exit();
        }
    }
    if($_POST['send'] == 'delete'){
        $sql = "DELETE FROM Staff WHERE Staff_ID = '$BID'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location:  manager.php?successs= successfull");
            exit();
    
        }else {
            header("Location:  manager.php?errors=Try again");
            exit();
        }
    }
    if($_POST['send'] == 'create'){
        $sql = "INSERT INTO  Staff( Staff_ID,L_ID,email,tp_number,s_fname) VALUES('$BID','$location','$email','$tp_no','$name')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: manager.php?successs= successfull");
            exit();
    
        }else {
            header("Location:  manager.php?errors=Try again");
            exit();
        }
    }
   

}else{
    header("Location:index.php?");
    session_destroy();
    exit();
 }
?>
