<!DOCTYPE html>
<html>
<head>
  <title>Sail Ceylon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/stylew.css">
  <link rel="stylesheet" type="text/css" href="../css/header.css">

 
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
  <div class="new">
  <div class="cont">
    <div class="form sign-in">
      <form action="login.php" method="POST">
        <h2>Sign In</h2>
        <?php if (isset($_GET['error'])){ ?>
                <div class="error"><?php echo $_GET['error'];?></div>
        <?php }?>
         <label>
            <span>Uername</span>
            <input type="text" name="uname" required>
        </label>
        <label>
            <span>Password</span>
            <input type="password" name="password" required>
        </label>
        <button class="submit" type="submit">Sign In</button>
        </form>
      <a href="user.html"><p class="forgot-pass">MY USER ACCOUNT -></p></a>

      <a href="index.php"><button class="submit" type="submit" >Staff login</button></a>

      <div class="social-media">
        <ul>
          <li><i class="fab fa-facebook"></i></li>
          <li><i class="fab fa-instagram"></i></li>
        </ul>
      </div>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already have an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
    <form action="register.php" method="POST">
        <h2>Sign Up</h2>
        <?php if (isset($_GET['error'])){ ?>
                <div class="error"><?php echo $_GET['error'];?></div>
        <?php }?>
        <label>
          <span>Name</span>
          <input type="text" name="name"required required>
        </label>
        <label>
          <span>Username</span>
          <input type="text" name="uname" required required>
        </label>
        <label>
          <span>Password</span>
          <input type="password"name="password" pattern ="(?=.+\d)(?=.+[a-z])(?=/+[A-Z]).{5-10}" required>
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" name="c_password"required>
        </label>
        <button type="submit" class="submit">Sign Up Now</button>
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

    
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>