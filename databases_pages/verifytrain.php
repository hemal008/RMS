<?php
include("./connect_database.php");
if (isset($_POST['add'])){


  
 $trainid=$_POST['trainid'];
 $trainname=$_POST['trainname'];
 $startlocation=$_POST['startplace'];
 $endlocation= $_POST['endplace'];
 $totalseat=$_POST['totalseat'];
 $availableseat=$_POST['availableseat'];
 $departuretime=$_POST['departuretime'];
 $arrivaltime=$_POST['arrivaltime'];
 $price=$_POST['price'];



if ($trainid == ''){
  echo "<script>alert('Please enter the Train Id')</script>";
  echo "<script>window.open('./add_train.php','_self')</script>";
  exit ();
}

if ($trainname == ''){
  echo "<script>alert('Please enter the Train Name')</script>";
  echo "<script>window.open('./add_train.php','_self')</script>";
  exit ();
}

if ($startlocation == ''){
  echo "<script>alert('Please enter the Start Location')</script>";
  echo "<script>window.open('./add_train.php','_self')</script>";
  exit ();
}

if ($endlocation == ''){
  echo "<script>alert('Please enter the End Location')</script>";
  echo "<script>window.open('./add_train.php','_self')</script>";
  exit ();
}

if ($totalseat == ''){
  echo "<script>alert('Please enter the Total Seats ')</script>";
  echo "<script>window.open('./add_train.php','_self')</script>";
  exit ();
}

if ($availableseat == ''){
  echo "<script>alert('Please enter the Available Seats'</script>";
  echo "<script>window.open('./add_train.php','_self')</script>";
  exit ();
}

if ($departuretime == ''){
  echo "<script>alert('Please enter the Departure Time')</script>";
  echo "<script>window.open('./add_train.php','_self')</script>";
  exit ();
}

if ($arrivaltime == ''){
  echo "<script>alert('Please enter the Arrival Time')</script>";
  echo "<script>window.open('./add_train.php','_self')</script>";
  exit ();
}

if ($price == ''){
  echo "<script>alert('Please enter the Price')</script>";
  echo "<script>window.open('./add_train.php','_self')</script>";
  exit ();
}


$check_trainid_query = "select * from train_Information where train_id = '$trainid'";
$add_query = mysqli_query($connect, $check_trainid_query);
if(mysqli_num_rows($add_query) > 0){
  echo "<script>alert('TrainID $trainid already exist.Please enter another Train ID')</script>";
  echo "<script>window.open('./add_train.php','_self')</script>";
  exit ();

}

$insert_train_info = "insert into train_Information (train_id,train_name,start_location,end_location,total_seats,total_available_seats,departure_time,arrival_time,price)
value ('$trainid', '$trainname', '$startlocation', '$endlocation', '$totalseat', '$availableseat', '$departuretime','$arrivaltime','$price')";

 if(mysqli_query($connect, $insert_train_info)){
   echo "<script>window.open('./train_list.php','_self')</script>";
 }
}
else{
  echo "<script>window.open('./add_train.php','_self')</script>";
}

 ?>
