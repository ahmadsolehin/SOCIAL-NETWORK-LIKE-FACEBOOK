<?php

include_once("../php_includes/check_login_status.php");
     //Start your session
if(!isset($_SESSION['username']))
{
  header("Location: ../index.php");
}


   //Read your session (if it is set)
if (isset($_SESSION['fname']))
  $fn =  $_SESSION['fname'];
$userid = $_SESSION['userid'];
$usertype = $_SESSION['user_type'];
$u = $_SESSION['username'];



  $fn = mysqli_real_escape_string($db_conx, $_POST['fn']); 

  $ln = mysqli_real_escape_string($db_conx, $_POST['ln']); 

  $ayam = mysqli_real_escape_string($db_conx, $_POST['add_skill']); 


// Perform queries 
mysqli_query($db_conx,"INSERT INTO skills (username , skill_service_provider , first_name , last_name ) 
  VALUES ('$u' , '$ayam' , '$fn' , '$ln' )");



mysqli_close($db_conx);


header("Location: ../user_cv_new.php");
die();
?>