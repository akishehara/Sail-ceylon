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

    <section class = " header" id="login"> 
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

    <div class="section3">
        <div class="contain3">
                <div class="division3" id="div3">
                    <h1>RESERVE NOW</h1>
                    <h2>Reserve the sailing tour of your dreams </h2>

                    <form action="reservationmake.php" method="POST">
                        
                        <h2><b><?php if (isset($_GET['errors'])){ ?>
                        <div class="errors"  ><?php echo $_GET['errors'];?></div>
                        <?php }?></b></h2><br>
                
                        <div class="bod">
                        <div class="head">
                            <label for="fname"> Name</label>
                        </div>
                        <div class="in">
                        <input type="text" id="fname" name="fname" required><br>
                        </div>
                        </div>
                        
                        <div class="bod">
                        <div class="head">
                        <label for="mobile">telephone </label>
                        </div>
                        <div class="in">
                        <input type="text" id="mobile" name="mobile"required><br>
                        </div>
                        </div>

                        <div class="bod">
                        <div class="head">
                        <label for="message">Message   </label>
                        </div>
                        <div class="in">
                        <textarea name="message" >
                        </textarea><br>
                        </div>
                        </div>

                        <div class="bod">
                        <div class="head">
                        <label for="location" required>location</label>
                        </div>
                        <div class="in">
                        <select id="location" name="location" required>
                        <option value="L001">pasikuda</option>
                        <option value="L002">galle</option>
                        <option value="L003">hambantota</option>
                        <option value="L005">mirissa</option>
                        <option value="L004">trincomalee</option>
                        </select><br>
                        </div>
                        </div>

                        <div class="bod">
                        <div class="head">
                        <label for="type" required>Package Type</label>
                        </div>
                        <div class="in">
                        <select id="type" name="type" required>
                        <option value="P001">basic package</option>
                        <option value="P002">silver package</option>
                        <option value="P003">gold package</option>
                        <option value="P004">diamond package</option>
                        <option value="P005">premium package</option>
                        </select><br>
                        </div>
                        </div>

                        <div class="bod">
                        <div class="head">
                        <label for="date" required>Date</label>
                        </div>
                        <div class="in">
                        <input type="date" id="date" name="date" required><br>
                        </div>
                        </div>

                        <div class="bod">
                        <div class="head">
                        <label for="time" required>Time</label>
                        </div>
                        <div class="in">
                        <select id="time" name="time" required>
                        <option value="08:0:00">8 AM - 10 AM</option>
                        <option value="10:00:00">10 AM - 12 PM</option>
                        <option value="12:00:00">12 PM - 2 PM</option>
                        <option value="14:00:00">2 PM - 4 PM</option>
                        <option value="16:00:00">4 PM - 6PM AM</option>
                        </select><br>
                        </div>
                        </div>
                        <br><button>Reserve now</button>
                    </form>
            </div>
            </div>
              </div>
        </div>
    </div>
   <div class="section4">
    <div class="footer-container">
        <div class="footer">
            <div class="footer-heading footer-1">

                <h2> About Us </h2>
                <a href="">Blog</a>
                <a href="">Out Team</a>
                <a href="">About Us</a>
                <a href="">Terms of Service</a>
            
            </div>

            <div class="footer-heading footer-2">

                <h2> Contact Us </h2>
                <a href="">Jobs</a>
                <a href="">Support Us</a>
                <a href="">Contact</a>
        
            </div>

            <div class="footer-heading footer-3">

                <h2> Social Media </h2>
                <a href="">Facebook</a>
                <a href="">Instergram</a>
                <a href="">Twitter</a>
           
            </div>
         </div>
    </div>
</div>
    
</body>
<script type="text/javascript" src="./js/main.js"></script>
</html>
