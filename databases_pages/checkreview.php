<?php
include("connect_database.php");
if (isset($_POST['submit'])){

$username=$_POST['name'];
$userreview=$_POST['review'];


if ($username == ''){
    echo "<script>alert('Please enter the name')</script>";
    echo "<script>window.open('./contactus.php','_self')</script>";
    exit ();
  }
  
  if ($userreview == ''){
    echo "<script>alert('Please give some review')</script>";
    echo "<script>window.open('./contactus.php','_self')</script>";
    exit ();
  }

$check_user_review = "insert into user_review (user_name,Review) values('$username','$userreview')";
$review_query = mysqli_query($connect, $check_user_review);
if($review_query){
  echo "<script>window.open('./welcome.php','_self')</script>";
  exit ();

}
else{
  echo "<script>window.open('./contactus.php','_self')</script>";
}

}
else{
  echo "<script>window.open('./contactus.php','_self')</script>";
}

?>
