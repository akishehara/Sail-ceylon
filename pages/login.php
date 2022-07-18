<?php
session_start();
include "db_conn.php";

if(isset($_POST['uname'])&& isset($_POST['password'])){

    function validate($data){
        $data =trim($data);
        $data =stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if(empty($uname)){
        header("Location:indexw.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location:indexw.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM customer WHERE C_username='$uname' AND C_password='$pass'";
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) == 1){
            $row= mysqli_fetch_assoc($result);
            if($row['C_username']===$uname && $row['C_password']===$pass ){
                $_SESSION['C_username'] = $row['C_username'];
                header("Location:indexw.php?error=successfull login welcome back");
                exit();
            }
        }
        else{
            header("Location:indexw.php?error=incorrect password or username");
            exit();
           
        }
    }

}

?>