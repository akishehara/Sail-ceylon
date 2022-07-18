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
      </div>

      <div class="main_content">

        <div class="seperator"><div class="heading">Manager Details</div><hr></div><br>
        <div class="profile">
            
        <div class="containerP" id="boder" >
          <table >
              <tr>
                <th style="width:20%;">Employee ID</th>
                <th style="width:20%;">Employee name</th>
                <th style="width:20%;">location</th>
                <th style="width:20%;">EMail</th>
                <th style="width:20%;">Telephone number</th>
              </tr>
              
              <?php
              $sql = "SELECT L.manager,S.S_fname,S.tp_number,S.email,L.L_name
                      FROM Staff S,Location L
                      where S.Staff_ID = L.manager";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["manager"]. "</td><td>" . $row["S_fname"] . "</td><td>" . $row["L_name"] . "</td><td>" . $row["email"] . 
                    "</td><td>" . $row["tp_number"] . "</tr>";}
                    echo "</table>";
                    }else{echo "</table>";}
                    ?>
        </div> 
        
        <div class="containerP">
          <table>
            <form action="crud_M.php" method="POST">
              <tr>
                <td><div class="seperator">Staff Management</div>
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
                <th><label>Employee ID</label></th>
                  <td><input type="text" name="BID" id="BID"></td>
              </tr>
              <th><label>Employee Name</label></th>
                  <td><input type="text" name="name" id="date"></td>
              </tr>
              <th><label>Location</label></th>
                  <td><select id="location" name="location"  required>
                        <option value="L001">pasikuda</option>
                        <option value="L002">galle</option>
                        <option value="L003">hambantota</option>
                        <option value="L005">mirissa</option>
                        <option value="L004">trincomalee</option>
                    </select></td>
              </tr>
              <tr>
                <th><label>E-mail</label></th>
                  <td><input type="text" name="email" id="BID"></td>
              </tr>
              <th><label>Phone Number</label></th>
                  <td><input type="text" name="number" id="date"></td>
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

                    