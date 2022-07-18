<?php 
session_start();

if(isset($_SESSION['Staff_ID'])){

include "db_conn.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: staff_prof.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: staff_prof.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: staff_prof.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	
        $id = $_SESSION['Staff_ID'];

        $sql = "SELECT S_password
                FROM staff WHERE 
                Staff_ID='$id' AND S_password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE staff
        	          SET S_password='$np'
        	          WHERE Staff_ID='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: staff_prof.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: staff_prof.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: staff_prof.php");
	exit();
}

}else{
     header("Location: index.php");
     session_destroy();
     exit();
}