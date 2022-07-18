<?php 
session_start();
include "db_conn.php";


	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname= validate($_POST['uname']);
	$p = validate($_POST['password']);
	$c_p = validate($_POST['c_password']);
    $name=($_POST['name']);

    $sql = "SELECT C_username
                FROM customer WHERE 
                C_username='$uname' limit 1";
    $result = mysqli_query($conn, $sql);
    $username_check = mysqli_fetch_assoc($result);
    if($username_check){
        header("Location:indexw.php?error=username taken");
	    exit();
    }
    else{
    if($p == $c_p ){

    $sql_1 = "INSERT INTO customer(C_username,C_fname,C_password)
                VALUES ('$uname','$name','$c_p')";
    $res= mysqli_query($conn, $sql_1);
    if($res){
        	header("Location:indexw.php?error=registration successfull");
	        exit();}
    else{
        header("Location: indexw.php?error=registration unsuccessfull please try again");    
    }
    }
    else{
        header("Location: indexw.php?error=registration unsuccessfull please try again");    
    }
    }
exit();
?> 