<?php
session_start();
include 'db_conn.php';

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

 $contact = validate($POST['name']);
 $email = validate($POST['email']);
 $subject = validate($POST['subject']);
 $message =($POST['message']);

 $sql = "INSERT INTO contact(c_name,c_email,c_subject,c_message)
        VALUES ('$contact','$email','$subject','$message')";

$result = mysqli_query($conn, $sql);

if($result == 1){
    header("Location:contact.php?errors=we will get in touch with you soon!");
    exit();
}
else{
    header("Location:contact.php?errors=message was not recieved can you please try again?");
    exit();
}

?>

