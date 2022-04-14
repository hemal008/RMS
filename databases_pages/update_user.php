<?php
session_start();
if(!isset($_SESSION['admin_name'])){
  header("Location: ./admin_login.php");
}

include("./connect_database.php");
  $username = $_POST['uname'];
  $email = $_POST['uemail'];
  $user_phone_number =$_POST['phone_number'];
  $user_date_of_birth =$_POST['dob'];
  $user_address =$_POST['address'];
  $user_pass =$_POST['upass'];
  $User_id = $_GET['id'];


  $up_sql = "update passenger set passenger_name='$username',email='$email',phone_number='$user_phone_number',date_of_birth ='$user_date_of_birth',address ='$user_address', password ='$user_pass' where passenger_id='$User_id'";

  if(mysqli_query($connect, $up_sql)){
    header('Location:' . 'view_user_list.php');
  }else{
    echo 'try again';
  }
?>
