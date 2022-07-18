<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
  color:black;
  font-weight:bolder;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 40px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #FFD700;
  border: none;
  color: black;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
img {
  border-radius: 0%;
}







*{

    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}
.header{

    min-height: 10vh;
    width: 100%;
    background-color:Black;
    background-position: center;
    background-size: cover;
    position: relative;

}
nav {

    display: flex;
    padding: 1% 6%;
    justify-content: space-between;
    align-items: center;
}

nav img {

    width: 50px;
    
}

.nav-links{

        flex: 1;
        text-align: right;
}

.nav-links ul li{

    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}


/*fonts*/
.nav-links ul li a{

    color: #fff;
    text-decoration: none;
    font-size: 14px;

}
/*hover effect*/
.nav-links ul li::after{

    content: '';
    width: 0%;
    height: 2px;
    background: #bfcec3;
    display: block;
    margin: auto;
    transition: 0.5s;

}
.nav-links ul li:hover::after{

    width: 100%;
}









.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:10s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  background-color:rgba(255,255,255,.8);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;
  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}



.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
 
 
 
 /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

</style>
</head>
<body>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div> 


<section class = "header "> 
        <nav>
            <a href = "#"><img src="../s_images/sailing.png"></a>
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
<hr>




<h2 style="text-align:center"><br><br>SailCeylon Packages</h2>
<hr>


<?php
 $sname ="localhost";
 $uname="root";
 $password="";
 $db_name ="sailceylon";

 $conn = mysqli_connect($sname,$uname,$password,$db_name);

 if(!$conn){
     echo "connection failes";
 }

$sql = "SELECT id,name,price,details,status,image_name,pck_type,discount,other1,other2,link FROM pck";
$result = $conn->query($sql);

if ($result->num_rows >= 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id=$row["id"];
	$name=$row["name"];
	$price=$row["price"];
	$details=$row["details"];
	$status=$row["status"];
	$image_name=$row["image_name"];
	$pck_type=$row["pck_type"];
	$discount=$row["discount"];
	$other1=$row["other1"];
	$other2=$row["other2"];
  $link =$row['link'];
	$color_p_type="";
	
	if($pck_type="Silver"){
			$color_p_type='green';	
	}else if($pck_type="Gold"){
		$color_p_type='yellow';
	}else{
		$color_p_type='grey';
	}
	if($status=="1"){
			echo "<div class='columns' id='".$id."'>
			  <ul class='price'>
				<li class='price' style='background-color:#FFD700;font-weight: bold'>".$name."</li>
				<li style='color:balck;font-size:15px;'>".$details."</li>
				<li ><img src=../pack_img/".$image_name." alt=".$image_name." width='280' height='150'></li>
			   	<li><a href='".$link."' class='button'>More info</a></li>
			  </ul>
			</div>";
	}
	

  }
  
  
} else {
  echo "No Data To show";
}
$conn->close();
?>




<div class="footer">
  <p>Author: SailCeylon <a href="#">SailCeylon.lk</a></p>

</div>








</body>
</html>
