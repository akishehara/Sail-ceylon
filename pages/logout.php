<?php
session_start();
unset($_SESSION["C_username"]);
header("Location:indexw.php");
?>