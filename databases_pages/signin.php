<?php
include("connect_database.php");
if (isset($_POST['login'])){

$username=$_POST['name'];
$useremail=$_POST['email'];
$userpass=$_POST['password'];

if ($useremail == ''){
  echo "<script>alert('Please enter the email')</script>";
  echo "<script>window.open('./login.php','_self')</script>";
  exit ();
}

if ($userpass == ''){
  echo "<script>alert('Please enter the password')</script>";
  echo "<script>window.open('./login.php','_self')</script>";
  exit ();
}

$check_user_email = "select * from passenger where email = '$useremail' AND password ='$userpass'";
$query = mysqli_query($connect, $check_user_email);
if(mysqli_num_rows($query)){
  session_start();
  $_SESSION['email'] = $useremail;
  echo "<script>window.open('./welcome.php','_self')</script>";
  exit ();

}
else{
  echo "<script>alert('Email Or Password is incorrect!')</script>";
  echo "<script>window.open('./login.php','_self')</script>";
}

}
else{
  echo "<script>window.open('./login.php','_self')</script>";
}

 ?>
