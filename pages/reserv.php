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

    <section class = " header "> 
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


    <div class="section">

        <div class="heading"><h1>RESERVATION</h1></div>
        <div class="subheading">
            <h2>Reserve your Tour now, for an experience to remember<br>It's all about Sail</h2> 
        </div>
        <div class="buttoncl">
        <div class="button"><a href="reservenow.php"><button class="button b1"> Reserve now</button></a></div>
        <div class="button"><a href="checkavail.php"><button class="button b1"> check availability</button></a></div>
        </div>

        <div class="video-container">
            <div class="color-overlay"></div>
            <video autoplay loop muted>
                <source src="../images/9convert.com - Waves  Drone View 4K_1080p_Trim.mp4">
            </video>
        </div>

    </div>
    
    
</body>
<script type="text/javascript" src="./js/main.js"></script>
</html>
