<?php

include("connect_database.php");
if (isset($_POST['Admin_login'])) {

  $admin_name =  $_POST['admin_name'];
  $admin_pass  = $_POST['pass'];

  if ($admin_name  == '') {
    echo "<script>alert('Please enter the username')</script>";
    echo "<script>window.open('./admin_login.php','_self')</script>";
    exit();
  }
  if ($admin_pass == '') {
    echo "<script>alert('Please enter the password')</script>";
    echo "<script>window.open('./admin_login.php','_self')</script>";
    exit();
  }

  $check_admin = "select * from admin_login where admin_name ='$admin_name'   AND admin_password='$admin_pass'";
  $ex_query = mysqli_query($connect,$check_admin);
  if(mysqli_num_rows($ex_query)){
    session_start();
    $_SESSION['admin_name'] = $admin_name;

    echo "<script>window.open('./admin_home.php','_self')</script>";

  }else{
    echo "<script>alert('Username or password is incorrect!')</script>";
    echo "<script>window.open('./admin_login.php','_self')</script>";
  }

}else {
  echo "<script>window.open('./admin_login.php','_self')</script>";
}



?>
