<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/scale.css">
    <link rel="stylesheet" href="../css/header.css">

    <title>Sail Ceylon</title>

</head>

<body>

    <section class = " header " id="login"> 
        <nav>
            <?php  
                session_start();
                if (isset($_SESSION['C_username'])){ ?>
                <div class="logout"><a href="logout.php"  id="logout" onclick="confirm()">logout</a><?php }
            ?></div>
            <div class="name">Hello <?php  
                                    if (isset($_SESSION['C_username'])){
                                    echo $_SESSION['C_username'];}
                                    else{
                                      echo "care to  ";?><a href="indexw.php" class="href">login?</a><?php } ?>
            </div>

            <a href = "index.html"><img src="../images/sailing.png"></a>
            <div class = "nav-links">
                   <ul>
                   <li><a href="../index.html">HOME</a></li>
                    <li><a href="aboutUs.html">ABOUT US</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="../OurTeam/Ourteam.html">OUR TEAM</a></li>
                    <li><a href="Gallery.html">GALLERY</a></li>
                    <li><a href="new_pck.php">PACKAGES</a></li>
                    <li><a href="indexw.php">LOGIN</a></li>
                    <li><a href="reserv.php">RESERVATION</a></li>
    
                   </ul> 
    
            </div> 
    
        </nav>
    </section>
    <div class="section2">    
        <div class="contain2">
            <div class="idiv" id="1"> 
                <img src="../images/b.jpg" alt="">
            </div>
            <div class="division2">
                <h1>CHECK AVAILABILITY</h1>
                <h2>Check the availability of the package you desire to reserve it efore its too late!</h2>

                <form action="reservation.php" method="POST">
                    <h2><b><?php if (isset($_GET['error'])){ ?>
                    <div class="error" ><?php echo $_GET['error'];?></div>
                    <?php }?></b></h2>
               
                    <br><label for="location" required>location</label><br>
                    <select id="location" name="location"  required>
                        <option value="L001">pasikuda</option>
                        <option value="L002">galle</option>
                        <option value="L003">hambantota</option>
                        <option value="L005">mirissa</option>
                        <option value="L004">trincomalee</option>
                    </select>

                    <br><br><label for="type" required>Package Type</label><br>
                    <select id="type" name="type"  required>
                        <option value="P001">basic package</option>
                        <option value="P002">silver package</option>
                        <option value="P003">gold package</option>
                        <option value="P004">diamond package</option>
                        <option value="P005">premium package</option>
                    </select>

                    <br><br><label for="date" required>Date</label><br>
                    <input type="date" id="date" name="date"  required>

                    <br><br><label for="time">Time</label><br>
                    <select id="time" name="time"  required>
                        <option value="08:00:00">8 AM - 10 AM</option>
                        <option value="10:00:00">10 AM - 12 PM</option>
                        <option value="12:00:00">12 PM - 2 PM</option>
                        <option value="14:00:00">2 PM - 4 PM</option>
                        <option value="16:00:00">4 PM - 6PM AM</option>
                    </select>
                    
                    <br><br><br><button Type=submit class=submit >check now</button>

                </form> 
            </div>
        </div>
    </div>
    </body>
<script type="text/javascript" src="../js/main.js"></script>
</html>