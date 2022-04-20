<?php
session_start();
if(!isset($_SESSION['admin_name'])){
  header("Location: ./admin_login.php");
}

include("./connect_database.php");
  $trainname = $_POST['trname'];
  $startplace = $_POST['startplace'];
  $endplace =$_POST['endplace'];
  $total_seat =$_POST['totalseat'];
  $av_seat =$_POST['availableseat'];
  $dp_time =$_POST['time'];
  $ar_time =$_POST['arvtime'];
  $tr_price =$_POST['pri'];
  $tr_id = $_GET['id'];


  $train_up_sql = "update train_information set train_name='$trainname',start_location='$startplace',end_location='$endplace',total_seats ='$total_seat',total_available_seats ='$av_seat', departure_time='$dp_time' , arrival_time='$ar_time',price= '$tr_price' where train_id='$tr_id'";

  if(mysqli_query($connect, $train_up_sql)){
    header('Location:' . 'train_list.php');
  }else{
    echo 'try again';
  }
?>
