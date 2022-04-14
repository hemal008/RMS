<?php
session_start();
if(!isset($_SESSION['admin_name'])){
  header("Location: ./admin_login.php");
}

include("./connect_database.php");
  $user_id = $_GET['id'];
  $dlt_sql = "delete from passenger where passenger_id='$user_id'";
  $delete = mysqli_query($connect, $dlt_sql);
  if ($delete) {
    echo "<script>window.open('./view_user_list.php?del=user has been deleted','_self')</script>";
  }

 ?>
