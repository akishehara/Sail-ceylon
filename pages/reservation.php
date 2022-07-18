<?php
include 'db_conn.php';


function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

 $package = validate($_POST['type']);
 $date = validate($_POST['date']);
 $location = validate($_POST['location']);
 $start_time = validate($_POST['time']);
 $end_time;

 switch($start_time){
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

 

$sql = "SELECT IF (( (SELECT count(B.boat_ID)
                         FROM boat B, boat_type BT,package P,location L
                         WHERE B.B_type = BT.B_typeID AND P.boat_type = BT.B_typeID AND L.Location_ID = B.L_ID 
                         AND P.Package_ID = '$package' AND B.L_ID = '$location' ) > 
                    (SELECT count(Boat_ID) 
                        FROM assignresource
                         WHERE Package_ID = '$package'AND Location_ID = '$location'
                         AND tour_date = '$date' AND (( '$start_time' BETWEEN tour_start_time and tour_end_time) 
                         OR ('$end_time' BETWEEN tour_start_time and tour_end_time)))) ,'Great news!its available','unavailable!please try again') 
                         AS 'availability'";

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        header("Location:checkavail.php?error=".$row['availability']." on the ".$date);
        exit();
    }
} else {
    echo "0 results";
}

?>