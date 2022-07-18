<?php
include "db_conn.php";
session_start();
 $id=$_SESSION['Staff_ID'];
 
 if(isset($_SESSION['Staff_ID'])){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
      <title>Sailceylon</title>
      <link rel="stylesheet" href=".,/css/styledashboard.css">
      <link rel="stylesheet" href="../css/stylesnav.css">
      <link rel="stylesheet" href="../css/student_course.css">
      <link rel="stylesheet" href="../css/stylesss.css">
      <link rel="stylesheet" href="../css/scale.css" />
      <link rel="stylesheet" href="../css/profile.css"/>
  </head>
  <body>
    <div class="wrapper">

      <div class="progressP">
        <div class="name">
          <div class="description">
            <div class="head">
              Hello <?php echo $_SESSION['S_fname'];?>!<br>
              you are logged in as <?php echo $_SESSION['role'];?>!
            </div>
          </div>
          <div class="logout">
            <a href="logout.php"  id="logout" onclick="confirm()">logout</a>
          </div>
        </div>
      </div>

      <div class="sidebar">
        <div class="logo">
          <img src="./images/sailing.png" alt="">
          <div class="na">SAILCEYLON</div>
        </div>
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

        <div class="mainheading">
          <div class="seperator"><div class="heading">My profile</div></div>
        </div>
                
        <div class="profile">

          <form action="change_password.php" method="POST">
            <div class="containerP">

              <table>
                <tr>
                  <td colspan="2">
                    <div class="seperator">
                      <div class="heading">Account Details</div>
                    </div>
                </tr>
                <tr id="no">
                  <th><label>Username</label></th>
                  <td><input type="text" name="uname" placeholder="" value=<?php echo $_SESSION['Staff_ID']?>></td>
                </tr>
                <tr id="no">
                  <th><label>E-mail</label></th>
                  <td><input type="text" name="sname" placeholder="" value=<?php echo $_SESSION['email']?>></td>
                </tr>
                <tr id="no">
                  <th><label>Mobile Number</label></th>
                  <td><input type="text" name="sname" placeholder="" value=<?php echo $_SESSION['tp_number']?>></td>
                </tr>
                <tr id="no">
                  <th><label>Name</label></th>
                <td><input type="text" name="sname" placeholder="" value=<?php echo $_SESSION['S_fname']?>></td>
                </tr>    
              </table>

            </div>
                      
            <div class="containerP">

              <table>
                <tr>
                  <td><div class="seperator"><div class="heading">Change Password</div></div>
                </tr>
                <tr>
                  <td colspan="2"><?php if (isset($_GET['error'])) { ?>
     		            <p class="error"><?php echo $_GET['error']; ?></p>
     	               <?php } ?>
     	               <?php if (isset($_GET['success'])) { ?>
                     <p class="success"><?php echo $_GET['success']; ?></p>
                     <?php } ?>
                  <td>
                </tr>
                <tr>
                  <th><label>Old Password</label></th>
                      <td><input type="password" name="op" placeholder="Old Password"></td>
                </tr>

                <tr id="no">
                  <th><label>New Password</label></th>
                    <td><input type="password" name="np" placeholder="New Password"></td>
                </tr>

                <tr id="no">
                  <th><label>Confirm New Password</label></th>
                    <td><input type="password"  name="c_np" placeholder="Confirm New Password"></td>
                </tr>
                <br>

                <tr>
                  <td colspan="2"><button type="submit">Change passwword</button></td>
                </tr>
              </table>

            </div>
          </form>  
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

                    