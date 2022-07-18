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
        <title>SAILCEYLON</title>
        <link rel="stylesheet" href="../css/stylesnav.css">
        <link rel="stylesheet" href="../css/scale.css" />
        <link rel="stylesheet" href="../css/style_main.css">
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
            </div>

            <div class="main_content">

                <div class="card-group">
                  
                    <div class="card" id="cardbi">
                        <div class="card-body">
                            <div class="para">
                                <h4 class="card-title">Reservation Requests</h4>
                                <p>Check new alerts</p><br>
                            </div>
                            <a href="reservation.php"><p class="card-text"><button type="button" class="btn btn-primary btn-sm"></button></p></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="para">
                                <h4 class="card-title">Boat Details</h4>
                                <p>manage Boat details</p><br>
                            </div>
                            <a href="boat.php"><p class="card-text"><button type="button" class="btn btn-primary btn-sm"></button></p></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="para">
                                <h4 class="card-title">location Details</h4>
                                <p>manage location details</p><br>
                            </div>
                            <a href="branch.php"><p class="card-text"><button type="button" class="btn btn-primary btn-sm"></button></p></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="para">
                                <h4 class="card-title">Contact manager</h4>
                                <p>view manager details</p><br>
                            </div>
                            <a href="manager.php"><p class="card-text"><button type="button" class="btn btn-primary btn-sm"></button></p></a>
                        </div>
                    </div>
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

                    