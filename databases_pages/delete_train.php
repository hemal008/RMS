<?php
session_start();
if(!isset($_SESSION['admin_name'])){
  header("Location: ./admin_login.php");
}

include("./connect_database.php");
  $tr_id = $_GET['id'];
  $train_dlt_sql = "delete from train_information where train_id='$tr_id'";
  $train_delete = mysqli_query($connect, $train_dlt_sql);
  if ($train_delete) {
    echo "<script>window.open('./train_list.php?del=user has been deleted','_self')</script>";
  }

 ?>
