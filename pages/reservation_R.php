<?php
include "db_conn.php";
session_start();

 
 if(isset($_SESSION['Staff_ID'])){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Sailceylon</title>
    <link rel="stylesheet" href="../css/styledashboard.css">
    <link rel="stylesheet" href="../css/stylesnav.css">
    <link rel="stylesheet" href="../css/stylecal.css" />
    <link rel="stylesheet" href="../css/student_course.css">
    <link rel="stylesheet" href="../css/scale.css" />
    <link rel="stylesheet" href="../css/profile.css"/>
  </head>
  <body>
    <div class="wrapper">
      <div class="progressP">
        <div class="name">
          <div class="description">
            <div class="head">Hello <?php echo $_SESSION['S_fname'];?>!<br>
            you are logged in as <?php echo $_SESSION['role'];?>!</div>
          </div>
          <div class="logout"><a href="logout.php"  id="logout" onclick="confirm()">logout</a></div>
        </div>
      </div>
      <div class="sidebar">
        <div class="logo"><img src="./images/sailing.png" alt=""><div class="na">SAILCEYLON</div></div>
          <ul>
            <li><a href="manage_dashboard.php"><i class="fas fa-home"></i><h5>overview</h5></a></li>
            <li><a href="reservation_R.php"><i class="fas fa-user"></i><h5>Reserve requests</h5></a></li>
            <li><a href="boat.php"><i class="fas fa-address-card"></i><h5>Boat details</h5></li>
            <li><a href="branch.php"><i class="fas fa-project-diagram"></i><h5>Location Details</h5></a></li>
            <li><a href="manager.php"><i class="fas fa-blog"></i><h5>Manager Details</h5></a></li>
            <li><a href="staff_prof.php"><i class="fas fa-blog"></i><h5>Account Settings</h5></a></li>    
          </ul> 
      </div>

      <div class="main_content">

        <div class="seperator"><div class="heading">Resrvation requests</div><hr></div><br>
        <div class="profile">
            

        <div class="containerP" id="boder">
          <table >
              <tr>
                <th style="width:20%;">Reservation ID</th>
                <th style="width:20%;">Customer</th>
                <th style="width:20%;">Package</th>
                <th style="width:20%;">location</th>
                <th style="width:20%;">date</th>
              </tr>
              
              <?php
              $sql = "SELECT A.Reservation_ID,P.P_name,L.L_name,A.tour_date,A.customer 
                      FROM assignresource A , Package P,Location L
                      where A.Package_ID = P.Package_ID And L.Location_ID=A.Location_ID";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Reservation_ID"]. "</td><td>" . $row["customer"] . "</td><td>" . $row["P_name"] . "</td><td>" . $row["L_name"] . 
                    "</td><td>" . $row["tour_date"] . "</tr>";}
                    echo "</table>";
                    }else{echo "</table>";}
                    ?>
        </div>  

        <div class="containerP">
          <table>
            <form action="reserveB.php" method="POST">
              <tr>
                <td><div class="seperator">Allocate boat to reservation</div>
              </tr>
              <tr>
                <td colspan="2">
                  <?php if (isset($_GET['error'])) { ?>
     		          <p class="error"><?php echo $_GET['error']; ?></p>
     	            <?php } ?>

     	            <?php if (isset($_GET['success'])) { ?>
                  <p class="success"><?php echo $_GET['success']; ?></p>
                  <?php } ?>
                </td>
              </tr>
                           
              <tr>
                <th><label>Reservation ID</label></th>
                  <td><input type="text" name="RID" id="RID"></td>
              </tr>
              <th><label>Boat ID</label></th>
                  <td><input type="text" name="BID" id="BID"></td>
              </tr>
              <tr>
                <td colspan="2"><button type="submit" >Allocate Boat</button></td>
              </tr>
            </form >
          </table>                
        </div>
            
      </div>
    </div>
  </body>


</html>




<?php
 }else{
    header("Location:index.php?");
    exit();
 }
?>

                    