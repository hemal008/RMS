<?php
session_start();
if(!isset($_SESSION['email'])){
  header("Location: ./login.php");
}

include("./connect_database.php");
  $username = $_POST['uname'];
  $user_email = $_POST['uemail'];
  $user_phone_number =$_POST['phone_number'];
  $user_date_of_birth =$_POST['dob'];
  $user_address =$_POST['address'];
  $user_pass =$_POST['upass'];
  $user_id = $_GET['id'];


  $update_sql = "update passenger set passenger_name='$username',email = '$user_email',phone_number='$user_phone_number',date_of_birth ='$user_date_of_birth',address ='$user_address', password ='$user_pass' where passenger_id='$user_id'";

  if(mysqli_query($connect, $update_sql)){
    header('Location:' . './user_profile.php');
  }else{
    echo "try again";
  }
?>
