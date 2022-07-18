<?php
?>
<!doctype html>
<html>
<head>
<meta name=" viewport" content = "with = device - width, initial - scale = 1.0">
<title>Comment Box</title>
<link rel="stylesheet" href="styles2.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <section class = " header "> 
        


</head>

<body>
<center><h2 class="text1"><br>Write a comment about Our Staff </h2></center>
<div class="tr">
<table bgcolor="#1CA9C9" style="padding:50px" align="center" >
<form action="" method="post">

<tr>
<center><h2><b><?php if (isset($_GET['errors'])){ ?>
                <div class="errors"  ><?php echo $_GET['errors'];?></div>
                <?php }?></b></h2><br><center>
</tr>
<tr>	
<td> Name : </td><td><input type="text" name="name"></td>
</tr>
<tr>
<td> Staff Name : </td><td><input type="text" name="staffName"></td>
</tr>
<tr>
<td> Comment : </td><td><textarea name="comment" rows="15" cols="60" ></textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td></tr>
</form>
</table>
</div>


<?php
if(isset($_POST["submit"]))
{
	 //Including dbconfig file.
     include 'db_conn.php';

	$name = $_POST["name"];
	$staffName = $_POST["staffName"] ?? "" ;
    $comment = $_POST["comment"];
	
	$sql = "INSERT INTO comment_table(namedd,staff_name,comment)VALUES('$name','$staffName','$comment')";
	$result = mysqli_query($conn,$sql);
	               
	if($result)
	{
		header("Location:comments.php?errors= successfully submitted!");
		exit();
	
	}
	else{
		echo $conn->error;
		exit();
	}

}
?>
	

 
    

</body>
</html>	
<?php
?>


