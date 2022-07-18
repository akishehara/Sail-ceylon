<?php
//The Connection object

$con = new mysqli("localhost","root","","scdb");

//Check Connection
        if($con->connect_error){
			       die("Connection failed:".$con->connect_error);
		}
		
?>