<?php
include("./connect_database.php");
if (isset($_POST['book'])){


  
 $passengername=$_POST['name'];
 $startlocation=$_POST['startlocation'];
 $endlocation= $_POST['endlocation'];
 $journeydate=$_POST['jdate'];
 $numberofpassenger=$_POST['numberofpassenger'];


if ($passengername == ''){
  echo "<script>alert('Please enter the Name')</script>";
  echo "<script>window.open('./book_ticket.php','_self')</script>";
  exit ();
}


if ($startlocation == ''){
  echo "<script>alert('Please enter the Start Location')</script>";
  echo "<script>window.open('./book_ticket.php','_self')</script>";
  exit ();
}

if ($endlocation == ''){
  echo "<script>alert('Please enter the End Location')</script>";
  echo "<script>window.open('./book_ticket.php','_self')</script>";
  exit ();
}

if ($journeydate == ''){
  echo "<script>alert('Please enter the Date')</script>";
  echo "<script>window.open('./book_ticket.php','_self')</script>";
  exit ();
}


$insert_ticket_info = "insert into Tickets select * from (select train_id,train_name,start_location,end_location,price from train_Information where start_location = '$startlocation' AND end_location = '$endlocation' union select passenger_name from passenger where passenger_name = '$passengername')";

 if(mysqli_query($connect, $insert_ticket_info)){
   echo "<script>window.open('./payment.php','_self')</script>";
 }
}
else{
  echo "<script>window.open('./book_ticket.php','_self')</script>";
}

 ?>
