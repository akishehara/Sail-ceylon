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
    $manager = validate($_POST['manager']);
    $address = validate($_POST['address']);
    $tp_no = validate($_POST['tp_no']);

    if($_POST['send'] == 'update'){

        $sql = "UPDATE Location SET L_address='$address',L_name='$name', L_phone='$tp_no',manager='$manager' WHERE Location_ID = '$BID'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: branch.php?successs= successfull");
            exit();
    
        }else {
            header("Location: branch.php?errors=Try again");
            exit();
        }
    }
    if($_POST['send'] == 'delete'){
        $sql = "DELETE FROM Location WHERE Location_ID = '$BID'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: branch.php?successs= successfull");
            exit();
    
        }else {
            header("Location: branch.php?errors=Try again");
            exit();
        }
    }
    if($_POST['send'] == 'create'){
        $sql = "INSERT INTO  Location( L_address,L_name,Location_ID,L_phone,manager) VALUES('$address','$name' ,'$BID','$tp_no','$manager')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: branch.php?successs= successfull");
            exit();
    
        }else {
            header("Location: branch.php?errors=Try again");
            exit();
        }
    }
   

}else{
    header("Location:index.php?");
    session_destroy();
    exit();
 }
?>
