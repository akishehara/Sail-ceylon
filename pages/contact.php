
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sail Ceylon</title>
    <link rel="stylesheet" href="../css/stylec.css">
    <link type="text/css" rel="stylesheet" href="../css/header.css" > 
</head>

<body>
    <section class = " header " id="ca"> 
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


        <div class="section1">
            <h1>CONTACT US</h1>
            <div class="subheading">
                <h2>Contact us to learn more<br>It's all about Sail</h2> 
            </div>
        </div>
        <div class="section2">
            
            <div class="container" id="con">
                <div class="locations">
                    <div class="box">               
                        <h1>Locations <br>Available</h1><br>
                        <input type="text" id="Enter" onkeyup="SearchLocation()" placeholder="Search for names.." title="Type in a name">
                        <ul id="location">
                            <li><button onclick="display(1)">Pasikuda</button></li>
                            <li><button onclick="display(2)">Galle</button></li>
                            <li><button onclick="display(3)">Trincomalee</button></li>
                            <li><button onclick="display(4)">Hambantota</button></li>
                            <li><button onclick="display(5)">Mirissa</button></li>
                        </ul>
                        
                        <script>
                                function SearchLocation() {
                                    var ent, search, ul, li, button, i, textV;
                                    ent = document.getElementById("Enter");
                                    search = ent.value.toUpperCase();

                                    ul = document.getElementById("location");
                                    li = ul.getElementsByTagName("li");
                                    
                                    for (i = 0; i < li.length; i++) {
                                    button = li[i].getElementsByTagName("button")[0];
                                    textV = button.textContent || button.innerText;

                                    if (textV.toUpperCase().indexOf(search) > -1) {
                                    li[i].style.display = "";
                                    } else {
                                    li[i].style.display = "none";
                                    }}
                                }   

                                function display(y){
                                    switch(y){
                                        case 1:
                                            document.getElementById("name").innerHTML = "Pasikuda";
                                            document.getElementById("address").innerHTML = " NO.34 Pasikuda";
                                            document.getElementById("phone_number").innerHTML = "078900345";
                                            document.getElementById("email").innerHTML = "pasisailcey@gmail.com";
                                            break;
                                        case 2:
                                            document.getElementById("name").innerHTML = "Galle";
                                            document.getElementById("address").innerHTML = " NO.2/1 Galle";
                                            document.getElementById("phone_nsumber").innerHTML = "0789094345";
                                            document.getElementById("email").innerHTML = "gallesailcey@gmail.com";
                                            break;
                                        case 3:
                                            document.getElementById("name").innerHTML = "Trincomalee";
                                            document.getElementById("address").innerHTML = " 5/6 Trincomalee";
                                            document.getElementById("phone_number").innerHTML = "0756780345";
                                            document.getElementById("email").innerHTML = "Trincosailcey@gmail.com";
                                            break;
                                        case 4:
                                            document.getElementById("name").innerHTML = "hambantota";
                                            document.getElementById("address").innerHTML = "N.67 hambantota";
                                            document.getElementById("phone_number").innerHTML = "0726326345";
                                            document.getElementById("email").innerHTML = "haTsailcey@gmail.com";
                                            break;
                                        case 5:
                                            document.getElementById("name").innerHTML = "Mirissa";
                                            document.getElementById("address").innerHTML = " N0.8 Mirissa";
                                            document.getElementById("phone_number").innerHTML = "07383900345";
                                            document.getElementById("email").innerHTML = "Mirisailcey@gmail.com";
                                            document.getElementByID("maps").src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15873.25074667149!2d80.45532697609401!3d5.951582531020739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae13fce3177dc59%3A0xa2d8a78b36dc9c90!2sMirissa!5e0!3m2!1sen!2slk!4v1622400434755!5m2!1sen!2slk";
                                            break;
                                            
                                    }
                                }
                            </script>
                    </div>
                </div>
                <div class="contactInfo">
                    <div class="box">
                            <h1>Contact Information</h1><br>
                            <div class="text">
                                <div class="icone"><i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                                <p id="name">GALLE </p><br>
                                <h3>Address</h3>
                                <p id="address">NO.2/1<br> Galle</p><br>
                            </div>
                    
                            <div class="text">
                                <div class="icone"><i class="fa fa-phone" aria-hidden="true"></i> </div>
                                <h3>Phone</h3>
                                <p id="phone_number">0789094345</p><br>
                            </div>    
    
                            <div class="text">
                                <div class="icone"><i class="fa fa-envelope" aria-hidden="true"></i> </div>
                                <h3>E-Mail</h3>
                                <p id="email">gallesailcey@gmail.com</p>
                                <i class="fab fa-google"></i>
                            </div> 
                        </div>
                </div>   
                
                
               <div class="contactIn">
                   <form action="submitcon.php" method="POST">
                    <i class="fab fa-facebook-square"></i>
                           <h1>Send a message</h1>
                           <?php if (isset($_GET['errors'])){ ?>
                            <div class="error"><?php echo $_GET['errors'];?></div>
                            <?php }?>
                            <input type="text" placeholder="Full name" class="contact-in-input" name='name' required>
                            <input type="email" placeholder="Email"class="contact-in-input" name='email' pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" required>
                            <input type="text" placeholder="Subject"class="contact-in-input" name='subject' >
                        <textarea placeholder="Subject" class="input-type-textarea" name='message' ></textarea>
                        <button Type=submit class=submit >contact us</button>
                   </form>
                </div>

               <div class="contactMap" >
               <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31699.291269747533!2d80.0473766641475!3d6.719547660071611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24b475a084f91%3A0xf0beeaf3b66bd8be!2sHorana!5e0!3m2!1sen!2slk!4v1613641906952!5m2!1sen!2slk" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
