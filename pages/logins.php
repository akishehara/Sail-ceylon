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
    $role = $_POST['role'];

    if(empty($uname)){
        header("Location:index.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location:index.php?error=Password is required");
        exit();
    }else{
        
        $sql = "SELECT * FROM staff WHERE Staff_ID='$uname' AND S_password='$pass'";
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) == 1){
            $row= mysqli_fetch_assoc($result);
            if($row['Staff_ID']===$uname && $row['S_password']===$pass ){
                $_SESSION['Staff_ID'] = $row['Staff_ID'];
                $_SESSION['S_fname'] = $row['S_fname'];
                $_SESSION['L_ID'] = $row['L_ID'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['tp_number'] = $row['tp_number'];
                $_SESSION['S_address'] = $row['S_address'];


                $roles = $_SESSION['role']; 

                switch($roles)
                 {
                case 'recep':
                    header("Location:recep_dashboard.php");
                    exit();
                    break;
                case 'manager':
                    header("Location:manage_dashboard.php");
                    exit();
                    break;
                case 'admin':
                    header("Location:admin_dashboard.php");
                    exit();
                    break;
                } 
            }
        }
        else{
            header("Location:index.php?error=incorrect password or username");
            exit();
           
        }
    }

}

?>