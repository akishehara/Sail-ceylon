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
    $RID = validate($_POST['BID']);
    $BID = validate($_POST['date']);

    $sql = "SELECT count(Reservation_ID) as 'availability'FROM assignresource where Boat_ID='$RID' and tour_date = '$BID'"  ;
    $result = mysqli_query($conn,$sql);

    if ($result !== false && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            header("Location:boat.php?error=".$row['availability']."allocations on date " .$BID);
            exit();
        }
    } 

    else {
        echo  ($conn -> error);
    }


 }else{
    header("Location:index.php?");
    session_destroy();
    exit();
 }
 

?>