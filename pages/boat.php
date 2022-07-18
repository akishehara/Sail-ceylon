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
          <div class="logout"><button  id="logout" onclick="return confirm('Are you sure to logout?');">logout</button></div>
        </div>
      </div>
      <div class="sidebar">
        <div class="logo"><img src="./images/sailing.png" alt=""><div class="na">SAILCEYLON</div></div>
          <ul>
            <li><a href="manage_dashboard.php"><i class="fas fa-home"></i><h5>overview</h5></a></li>
            <li><a href="Reservation.php"><i class="fas fa-user"></i><h5>Reserve requests</h5></a></li>
            <li><a href="boat.php"><i class="fas fa-address-card"></i><h5>Boat details</h5></li>
            <li><a href="branch.php"><i class="fas fa-project-diagram"></i><h5>Location Details</h5></a></li>
            <li><a href="manager.php"><i class="fas fa-blog"></i><h5>Manager Details</h5></a></li>
            <li><a href="staff_prof.php"><i class="fas fa-blog"></i><h5>Account Settings</h5></a></li>   
          </ul> 
      </div>

      <div class="main_content">

        <div class="seperator"><div class="heading">Resrvation requests</div><hr></div><br>
        <div class="profile">
            

        <div class="containerP" id="boder" >
          <table >
              <tr>
                <th style="width:20%;">Boat ID</th>
                <th style="width:20%;">License Number</th>
                <th style="width:20%;">Type</th>
                <th style="width:20%;">location</th>
              </tr>
              
              <?php
              $sql = "SELECT B.Boat_ID,B.B_license,BT.B_typeName,L.L_name
                      FROM Boat B, boat_type BT,Location L
                      where B.L_ID = L.Location_ID And B.b_type = BT.B_typeID";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Boat_ID"]. "</td><td>" . $row["B_license"] . "</td><td>" . $row["B_typeName"] . "</td><td>" . $row["L_name"] . "</tr>";}
                    echo "</table>";
                    }else{echo "</table>";}
                    ?>
        </div>  

        <div class="containerP">
          <table>
            <form action="check.php" method="POST">
              <tr>
                <td><div class="seperator">Check Availability of Boat</div>
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
                <th><label>Boat ID</label></th>
                  <td><input type="text" name="BID" id="BID"></td>
              </tr>
              <th><label>Date</label></th>
                  <td><input type="date" name="date" id="date"></td>
              </tr>
              <tr>
                <td colspan="2"><button type="submit" >Check Availability</button></td>
              </tr>
            </form >
          </table>                
        </div>

        <div class="containerP">
          <table>
            <form action="crud.php" method="POST">
              <tr>
                <td><div class="seperator">Boat Management</div>
              </tr>
              <tr>
                <td colspan="2">
                  <?php if (isset($_GET['errors'])) { ?>
     		          <p class="error"><?php echo $_GET['errors']; ?></p>
     	            <?php } ?>

     	            <?php if (isset($_GET['successs'])) { ?>
                  <p class="success"><?php echo $_GET['successs']; ?></p>
                  <?php } ?>
                </td>
              </tr>
                           
              <tr>
                <th><label>Boat ID</label></th>
                  <td><input type="text" name="BID" id="BID"></td>
              </tr>
              <th><label>License</label></th>
                  <td><input type="text" name="license" id="date"></td>
              </tr>
              <th><label>Type Name</label></th>
                  <td><select id="location" name="location"  required>
                        <option value="L001">pasikuda</option>
                        <option value="L002">galle</option>
                        <option value="L003">hambantota</option>
                        <option value="L005">mirissa</option>
                        <option value="L004">trincomalee</option>
                    </select></td>
              </tr>
              <th><label>Location</label></th>
                  <td>
                    <select id="location" name="Bottype"  required>
                        <option value="T001">tourist_boat</option>
                        <option value="T002">Sail boat</option>
                        <option value="T003">company boat</option>
                        <option value="T004">fishing Boat</option>
                        <option value="T005">underwater boat</option>
                    </select>
                  </td>
              </tr>
              <td colspan="3"><br><br></td>
              <tr>
              </tr>
              <tr>
                <td style="width:30%"><button type="submit" name="send" value="delete" >Delete</button></td>
                <td style="width:30%"><button type="submit" name="send" value="create" >Create</button></td>
                <td style="width:30%" ><button type="submit" name="send" value="update" >Update</button></td>
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

                    